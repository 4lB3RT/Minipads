<?php
namespace Testing\MiniPads\Sounds\Application\Upload;

use Testing\MiniPads\Sounds\Domain\Sound;
use Testing\MiniPads\Sounds\Domain\SoundId;
use Testing\MiniPads\Sounds\Domain\SoundName;
use Testing\MiniPads\Sounds\Domain\SoundRepository;

class UploadSound
{
    private $repository;

    public function __construct(SoundRepository $soundRepository)
    {
        $this->repository = $soundRepository;
    }

    public function uploadSound(String $soundNameParameter, String $soundUrl)
    {
        $soundId    = new SoundId();
        $soundName  = new SoundName($soundNameParameter);
        $sound      = new Sound($soundId, $soundName, $soundUrl);

        $this->repository;


    }
}

