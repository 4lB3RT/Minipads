<?php
namespace MiniPads\Sounds\Domain;

use MiniPads\Sounds\Domain\SoundId;
use MiniPads\Sounds\Domain\SoundName;

final class Sound
{
    private $id;
    private $name;
    private $url;
    private $artist;

    public function __construct(SoundId $id, SoundName $name, string $url) 
    {

    }

}

