<?php

namespace Arza\Doctrine\EntityKit\Traits;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

trait ActiveTrait
{
    #[ORM\Column(name: 'is_active', type: Types::BOOLEAN, nullable: false, options: ['default' => 1])]
    protected bool $isActive = true;

    public function isActive(): bool
    {
        return $this->isActive;
    }

    public function setIsActive(bool $isActive): void
    {
        $this->isActive = $isActive;
    }
}
