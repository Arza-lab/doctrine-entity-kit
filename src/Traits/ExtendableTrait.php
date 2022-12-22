<?php

namespace Arza\Doctrine\EntityKit\Traits;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

trait ExtendableTrait
{
    #[ORM\Column(name: 'extension', type: Types::JSON, nullable: true)]
    protected ?array $extension = null;

    public function getExtension(): ?array
    {
        return $this->extension;
    }

    public function setExtension(?array $extension): self
    {
        $this->extension = $extension;

        return $this;
    }
}
