<?php

namespace App\Livewire\Administrator\News;

use App\Models\News;
use Livewire\Component;

class Detail extends Component
{
    public $news;


    public function mount($id)
    {
        $this->news = News::find($id);
    }

    public function render()
    {
        return view('livewire.administrator.news.detail');   
    }
}
