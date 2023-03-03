<?php

declare(strict_types=1);

namespace Infrastructure\Common\Interfaces;

use Infrastructure\Common\Abstracts\AbstractQuery;
use Slim\Http\ServerRequest;

interface CQFactoryInterface
{
    public function create(ServerRequest $request): AbstractQuery;
}
