<?php

namespace Arza\Doctrine\EntityKit\Traits;

use Doctrine\ORM\Mapping as ORM;

trait IdentifierTrait
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    protected ?int $id = null;

    public function getId(): ?int
    {
        return $this->id;
    }
}