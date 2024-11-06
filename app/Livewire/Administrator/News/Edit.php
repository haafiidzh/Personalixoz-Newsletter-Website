<?php

namespace App\Livewire\Administrator\News;

use App\Models\News;
use App\Models\NewsCategory;
use Livewire\Component;
use Illuminate\Support\Str;

class Edit extends Component
{
    public $id;
    public $title;
    public $slug;
    public $image;
    public $content;
    public $category;
    public $author_id;
    public $is_published;

    protected $listeners = ['updateContent'];

    public function mount($id)
    {
        $news = News::find($this->id = $id);

        $this->title = $news->title;
        $this->slug = $news->slug;
        $this->content = $news->content;
        $this->image = $news->image;
        $this->category = $news->category_id;
        $this->author_id = $news->author->name;
        $this->is_published = $news->is_published;
    }

    public function updatedTitle($value)
    {
        $this->slug = Str::slug($value);
    }

    // public function updatedContent($data)
    // {
    //     $this->content = $data; // Update property 'content'
    // }
    // public function updatedContent($data)
    // {
    //     $this->dispatch('contentUpdated', ['newContent' => $data]);
    // }

    function update()
    {
        // Validasi input
        $this->validate([
            'title' => 'required',
            'slug' => 'required|unique:news,slug,' . $this->id,
            // 'content' => 'required',
            // 'image' => 'required|image|max:10024', 
            'category' => 'required',
        ]);

        $news = News::find($this->id);
        
        $news->update([
            'title' => $this->title,
            'slug' => $this->slug,
            'content' => $this->content,
            'category_id' => $this->category,
        ]);

        session()->flash('flash_message', [
            'type' => 'updated',
            'message' => 'Berita berhasil diperbarui.',
        ]);

        return redirect()->route('administrator.news');
    }

    public function render()
    {
        $categories = NewsCategory::all();
        $news = News::find($this->id);
        return view('livewire.administrator.news.edit',
        [
            'categories' => $categories,
            'news' => $news
        ]);
    }
}
