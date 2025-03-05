<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layout.app')]
class HomePage extends Component
{
    public $title;
    public $content;

    protected $rules = [
        'title' => 'required|min:3',
        'content' => 'required|min:10',
    ];

    public function submit()
    {
    $this->validate();

        Post::create([
            'title' => $this->title,
            'content' => $this->content,
        ]);

        session()->flash('message', 'Post created successfully!');

        // Clear the form fields
        $this->reset(['title', 'content']);
    }

    public function render()
    {
        return view('livewire.home-page');
    }
}
