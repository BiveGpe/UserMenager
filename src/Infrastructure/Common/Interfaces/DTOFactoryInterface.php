<?php

namespace Infrastructure\Common\Interfaces;

use Infrastructure\Common\Abstracts\AbstractDTO;

interface DTOFactoryInterface
{
    public function create(... $args): AbstractDTO;
}
