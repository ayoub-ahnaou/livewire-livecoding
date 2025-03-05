<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layout.app')]
class DashboardPage extends Component
{
    public $posts;

    public function mount()
    {
        // Fetch all posts from the database
        $this->posts = Post::latest()->get();
    }

    public function delete($postId)
    {
        $post = Post::find($postId);
        if ($post) {
            $post->delete();
            session()->flash('message', 'Post deleted successfully!');
        }

        // Refresh the posts list
        $this->posts = Post::latest()->get();
    }

    public function render()
    {
        return view('livewire.dashboard-page');
    }
}
