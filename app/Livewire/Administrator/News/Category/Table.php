<?php

namespace App\Livewire\Administrator\News\Category;

use App\Models\NewsCategory;
use Livewire\Component;

class Table extends Component
{
    public function render()
    {
        $categorys = NewsCategory::all();
        return view(
            'livewire.administrator.news.category.table',
            ['categorys' => $categorys]
        );
    }

    public function delete($id)
    {
        $category = NewsCategory::find($id);
        if ($category) {
            $category->delete();
            session()->flash('flash_message', [
                'type' => 'deleted',
                'message' => 'Berhasil menghapus kategori.',
            ]);
            return redirect()->route('administrator.news.category');
        } else {
            session()->flash('flash_message', [
                'type' => 'error',
                'message' => 'User  tidak ditemukan.',
            ]);
            return redirect()->route('administrator.news.category');
        }  
    }
}
