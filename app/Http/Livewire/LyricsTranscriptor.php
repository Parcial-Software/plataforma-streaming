<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Http;
use Livewire\Component;

class LyricsTranscriptor extends Component
{
    public $currentTime;
    public $currentSongId;
    public $transcriptions;

    protected $listeners = ['current-song' => 'handleCurrentSong'];

    public function handleCurrentSong($currentTime, $currentSongId)
    {
        $this->currentTime = $currentTime;

        if ($this->currentSongId != $currentSongId) {
            $this->currentSongId = $currentSongId;

            $aiUrl = config('aiUrl');
            $response = Http::get($aiUrl . '/' . $this->currentSongId);

            if ($response->status() === 200) {
                $responseData = $response->json();
                $this->transcriptions = json_decode($responseData['data']['S'], true)['sentences'];
            } else {
                $this->transcriptions = [];
            }
        }
    }

    public function render()
    {
        return view('livewire.lyrics-transcriptor');
    }
}
