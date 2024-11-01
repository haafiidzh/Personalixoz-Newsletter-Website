<?php

namespace App\Livewire\Administrator\News\Category;

use App\Models\NewsCategory;
use Livewire\Component;
use Illuminate\Support\Str;

class Create extends Component
{
    public $name;
    public $slug;

    public function updatedName($value) 
    {
        // Cara ini bisa semua

        // ==<  1   >==
        // if ($value) {
        //     $this->slug = Str::slug($value);
        // } else {
        //     $this->reset('slug');
        // }

        // ==<  2   >==
        $this->slug = Str::slug($value);

        // ==<  3   >==
        // if ($value) {
        //     return $this->slug = Str::slug($value);
        // }
        // return $this->reset('slug');
        
    }

    public function store()
    {
        $this->validate([
            'name' => 'required',
            'slug' => 'required|unique:news_category,slug'
        ]);

        // Simpan kategori baru ke database
        NewsCategory::create([
            'name' => $this->name,
            'slug' => $this->slug,
        ]);

        session()->flash('flash_message', [
            'type' => 'created',
            'message' => 'Berhasil membuat Kategori baru.',
        ]);

        return redirect()->route('administrator.news.category');
    }

    public function render()
    {
        return view('livewire.administrator.news.category.create');
    }
}
