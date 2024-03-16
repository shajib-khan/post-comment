<?php

namespace App\Livewire;
use App\Models\Comment;
use App\Models\Post;
use Livewire\Component;

class SinglePost extends Component
{
    public $post;

    public $comment;

    public function mount($id)
    {
        $this->post = Post::find($id);
    }

    public function addComment()
    {
        Comment::create([
            'comment' => $this->comment,
            'post_id' => $this->post->id,
        ]);

        $this->comment = '';

        $this->mount($this->post->id);
        return redirect()->back()->with('message',"Comment updated");
    }

    public function render()
    {
        return view('livewire.single-post');
    }
}
