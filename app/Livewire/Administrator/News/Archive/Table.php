<?php

namespace App\Livewire\Administrator\News\Archive;

use App\Models\News;
use Livewire\Component;
use Livewire\WithPagination;

class Table extends Component
{
    use WithPagination;

    public $search;
    public function mount()
    {
        $this->search= '';
    }

    public function updatedSearch()
    {
        $this->resetPage();
    }

    public function restore($id) // Arsip
    {
        $news = News::withTrashed()->find($id);
        if ($news) {
            $news->restore();
            session()->flash('flash_message', [
                'type' => 'created',
                'message' => 'Berita  berhasil dipulihkan.',
            ]);
            return redirect()->route('administrator.news.archive');
        } else {
            return session()->flash('flash_message', [
                'type' => 'error',
                'message' => 'User  tidak ditemukan.',
            ]);
        }
    }
    
    public function delete($id) // Hapus permanen
    {
        $news = News::withTrashed()->find($id);
        if ($news) {
            $news->forceDelete();
            session()->flash('flash_message', [
                'type' => 'deleted',
                'message' => 'Berita  berhasil dihapus permanen.',
            ]);
            return redirect()->route('administrator.news');
        } else {
            return session()->flash('flash_message', [
                'type' => 'error',
                'message' => 'User  tidak ditemukan.',
            ]);
        }
    }

    public function render()
    {
        $news = News::onlyTrashed()->when($this->search, function ($query) {
            $query->where('deleted_at', '!=', null)
            ->where(function($q) {
                $q->where('title', 'like', '%' . $this->search . '%')
                  ->orWhere('slug', 'like', '%' . $this->search . '%')
                  ->orWhereHas('category', function($categoryQuery) {
                      $categoryQuery->where('name', 'like', '%' . $this->search . '%');
                  });
            });
        })->paginate(5);
        
        return view('livewire.administrator.news.archive.table',[
            'news' => $news
        ]);
    }
}
