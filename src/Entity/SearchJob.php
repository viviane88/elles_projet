<?php

namespace App\Entity;

class SearchJob {

     /**
     * @var string|null
     */
    private $title;

    /**
     * @var string|null
     */
    private $location;
    
    public function gettitle(): ?string
    {
        return $this->title;
    }

    public function settitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getLocation(): ?string
    {
        return $this->location;
    }

    public function setLocation(string $location): self
    {
        $this->location = $location;

        return $this;
    }
}
