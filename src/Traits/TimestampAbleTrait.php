<?php

namespace Arza\Doctrine\EntityKit\Traits;

use Doctrine\ORM\Mapping as ORM;

trait TimestampAbleTrait
{
    #[ORM\Column(name: 'created_at', type: 'datetime')]
    protected ?\DateTime $createdAt = null;

    #[ORM\Column(name: 'updated_at', type: 'datetime', nullable: true)]
    protected ?\DateTime $updatedAt;

    public function getCreatedAt(): ?\DateTime
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTime $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getUpdatedAt(): ?\DateTime
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(\DateTime $updatedAt): self
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    #[ORM\PrePersist]
    #[ORM\PreUpdate]
    public function updatedTimestamps(): void
    {
        if (null === $this->getCreatedAt()) {
            $this->setCreatedAt(new \DateTime('now'));
        } else {
            $this->setUpdatedAt(new \DateTime('now'));
        }
    }
}
