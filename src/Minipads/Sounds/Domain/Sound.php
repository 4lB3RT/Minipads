<?php
namespace Testing\MiniPads\Sounds\Domain;

use Testing\MiniPads\Sounds\Domain\SoundId;
use Testing\MiniPads\Sounds\Domain\SoundName;

final class Sound
{
    private $id;
    private $name;
    private $url;
    private $artist;

    public function __construct(SoundId $id, SoundName $name, string $url) 
    {
        $this->id   = $id;
        $this->name = $name;
        $this->url  = $url;
    }

    public function id(): SoundId
    {
        return $this->id;
    }

    public function name(): SoundName
    {
        return $this->name;
    }

    public function url(): string
    {
        return $this->url;
    }
}

