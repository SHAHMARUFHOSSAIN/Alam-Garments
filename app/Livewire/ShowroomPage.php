<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Showroom; // <- Model

class ShowroomPage extends Component
{ public $showrooms;

    public function mount()
    {
        $this->showrooms = Showroom::latest()->get();

        foreach ($this->showrooms as $showroom) {
            // Remove duplicate images
            if ($showroom->images) {
                $showroom->images = array_unique($showroom->images);
            }

            // Convert YouTube URL to embed format
            if ($showroom->video_url) {
                $showroom->video_url = $this->convertYoutubeToEmbed($showroom->video_url);
            }
        }
    }

    private function convertYoutubeToEmbed($url)
    {
        if (preg_match('/youtu\.be\/([^\?&]+)/', $url, $matches)) {
            return 'https://www.youtube.com/embed/' . $matches[1];
        }

        if (preg_match('/youtube\.com\/watch\?v=([^\?&]+)/', $url, $matches)) {
            return 'https://www.youtube.com/embed/' . $matches[1];
        }

        return $url;
    }

    public function render()
    {
        return view('livewire.showroom-page');
    }
}

