<?php

namespace App\Livewire\Home;

use App\Models\Post;
use Livewire\Component;

class LastPosts extends Component
{
    public function render()
    {
        $lastPost = Post::latest()->first();
        $featuredPosts = Post::take(3)->get();
        return view('livewire.home.last-posts', compact('lastPost', 'featuredPosts'));
    }
}
