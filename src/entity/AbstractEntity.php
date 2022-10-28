<?php

namespace Arza\Doctrine\EntityKit\Entity;

use Arza\Doctrine\EntityKit\Traits\ExtendableTrait;
use Arza\Doctrine\EntityKit\Traits\IdentifierTrait;
use Arza\Doctrine\EntityKit\Traits\TimestampAbleTrait;
use Doctrine\ORM\Mapping as ORM;

#[ORM\HasLifecycleCallbacks]
class AbstractEntity
{
    use IdentifierTrait;

    use TimestampAbleTrait;

    use ExtendableTrait;
}
