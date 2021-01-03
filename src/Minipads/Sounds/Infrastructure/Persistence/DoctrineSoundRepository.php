<?php
namespace Testing\MiniPads\Sounds\Infrastructure\Persistence;

use Testing\MiniPads\Sounds\Domain\SoundRepository;

class DoctrineSoundRepository implements SoundRepository
{
    public function save() 
    {
        echo 'repo';
    }
}

