<?php

namespace Arza\Doctrine\EntityKit\Entity;

use Arza\Doctrine\EntityKit\Traits\ExtendableTrait;
use Arza\Doctrine\EntityKit\Traits\TimestampAbleTrait;
use Arza\Doctrine\EntityKit\Traits\UuidTrait;
use Doctrine\ORM\Mapping as ORM;

#[ORM\HasLifecycleCallbacks]
class AbstractUuidEntity
{
    use UuidTrait;

    use TimestampAbleTrait;

    use ExtendableTrait;
}
