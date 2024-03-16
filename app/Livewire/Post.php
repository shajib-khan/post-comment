<?php

namespace App\Livewire;
use App\Models\Post as PostModel;
use Livewire\Component;

class Post extends Component
{
    public function render()
    {
        return view('livewire.post', [
        'posts'=>PostModel::SimplePaginate(10),
    ]);
    }
}
