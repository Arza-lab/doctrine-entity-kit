<?php

namespace Arza\Doctrine\EntityKit\Traits;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

trait MetaTrait
{
    #[ORM\Column(name: 'meta_title', type: Types::STRING, length: 255, nullable: true)]
    protected ?string $metaTitle = null;

    #[ORM\Column(name: 'meta_description', type: Types::TEXT, nullable: true)]
    protected ?string $metaDescription = null;

    #[ORM\Column(name: 'meta_keywords', type: Types::JSON, nullable: true)]
    protected ?array $metaKeywords = null;

    public function getMetaTitle(): ?string
    {
        return $this->metaTitle;
    }

    public function setMetaTitle(?string $metaTitle): void
    {
        $this->metaTitle = $metaTitle;
    }

    public function getMetaDescription(): ?string
    {
        return $this->metaDescription;
    }

    public function setMetaDescription(?string $metaDescription): void
    {
        $this->metaDescription = $metaDescription;
    }

    public function getMetaKeywords(): ?array
    {
        return $this->metaKeywords;
    }

    public function setMetaKeywords(?array $metaKeywords): void
    {
        $this->metaKeywords = $metaKeywords;
    }
}
