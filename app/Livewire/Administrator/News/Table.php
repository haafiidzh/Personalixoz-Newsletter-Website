<?php

namespace App\Livewire\Administrator\News;

use App\Models\News;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithPagination;

class Table extends Component
{
    use WithPagination;

    public $search;

    public function mount()
    {
        $this->search = '';
    }

    public function updatedSearch()
    {
        $this->resetPage();
    }

    public function archive($id, $timezone = 'UTC') // Arsip
    {
        $news = News::find($id);
        if ($news) {
            $news->is_published = false;
            
            $localTime = Carbon::now($timezone); 
            $news->deleted_at = $localTime;
            // Dipakai untuk set zona waktu setara pada device yang dipakai.
            // Jika tidak pakai maka akan mengatur zona waktu default pada UTC+0 / UTC+1
            $news->save();
            session()->flash('flash_message', [
                'type' => 'deleted',
                'message' => 'Berita  berhasil diarsipkan.',
            ]);
            return redirect()->route('administrator.news');
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

    public function togglePublished($id)
    {
        $newsItem = News::find($id);

        if ($newsItem) {
            $newsItem->is_published = !$newsItem->is_published;
            $newsItem->save();

            session()->flash('flash_message', [
                'type' => 'updated',
                'message' => 'Status publish berhasil diubah.',
            ]);

            return redirect()->route('administrator.news');
        }
    }

    public function render()
    {
        $news = News::when($this->search, function ($query) {
            $query->where('title', 'like', '%' . $this->search . '%')
                ->orWhere('slug', 'like', '%' . $this->search . '%')
                ->orWhereHas('category', function ($categoryQuery) {
                    $categoryQuery->where('name', 'like', '%' . $this->search . '%');
                });
        })->paginate(5);
        return view(
            'livewire.administrator.news.table',
            [
                'news' => $news,
            ]
        );
    }
}
