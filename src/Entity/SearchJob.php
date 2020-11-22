<?php

namespace App\Entity;

class SearchJob {

     /**
     * @var string|null
     */
    private $company;

    /**
     * @var string|null
     */
    private $location;
    
    public function getcompany(): ?string
    {
        return $this->company;
    }

    public function setcompany(string $company): self
    {
        $this->company = $company;

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
