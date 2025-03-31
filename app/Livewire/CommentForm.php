<?php
namespace App\Livewire;

use Livewire\Component;
use App\Models\Comment;

class CommentForm extends Component
{
    public $nama;
    public $ulasan;

    protected $rules = [
        'nama' => 'required',
        'ulasan' => 'required|min:3',
    ];

    public function submit()
    {
        $this->validate();

        Comment::create([
            'nama' => $this->nama,
            'ulasan' => $this->ulasan
        ]);

        $this->reset();
        $this->dispatch('commentAdded'); // Perbaikan di sini
    }

    public function render()
    {
        return view('livewire.comment-form');
    }
}
