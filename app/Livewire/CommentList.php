<?php

namespace App\Livewire;


use Livewire\Component;
use App\Models\Comment;

class CommentList extends Component
{
    public $comments;

    protected $listeners = ['commentAdded' => 'refreshComments'];

    public function mount()
    {
        $this->refreshComments();
    }

    public function refreshComments()
    {
        $this->comments = Comment::latest()->get();
    }

    public function render()
    {
        return view('livewire.comment-list');
    }
}
