<?php

namespace App\Livewire\Administrator\News;

use App\Models\News;
use App\Models\NewsCategory;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Str;

class Create extends Component
{
    use WithFileUploads;

    public $title;
    public $slug;
    public $content;
    public $image;
    public $category_id;
    public $author_id;
    public $is_published = false;

    // Fungsi untuk generate slug otomatis dari title
    public function updatedTitle($value)
    {
        $this->slug = Str::slug($value);
    }

    public function store() 
    {
        // Validasi input
        $this->validate([
            'title' => 'required',
            'slug' => 'required|unique:news,slug',
            'content' => 'required',
            'image' => 'required|image|max:10024', 
            'category_id' => 'required',
        ]);

        // Upload image
        // $imagePath = $this->image->store('images', 'public');
        $imageName = $this->slug . '.' . $this->image->extension();
        $imagePath = $this->image->storeAs('images', $imageName, 'public');

        News::create([
            'title' => $this->title,
            'slug' => $this->slug,
            'content' => $this->content,
            'image' => $imagePath,
            'category_id' => $this->category_id,
            'author_id' => Auth::user()->id,
            'is_published' => $this->is_published
        ]);


        session()->flash('flash_message', [
            'type' => 'created',
            'message' => 'Berhasil membuat Berita baru.',
        ]);

        return redirect()->route('administrator.news');
    }

    public function render()
    {
        $categories = NewsCategory::all();

        return view(
            'livewire.administrator.news.create',
            ['categories' => $categories]
        );
    }
}
