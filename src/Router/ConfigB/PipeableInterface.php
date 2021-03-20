<?php

declare(strict_types=1);

namespace roxblnfk\Contract\Router\ConfigB;

use Psr\Http\Server\MiddlewareInterface;

interface PipeableInterface
{
    public function addMiddleware(MiddlewareInterface|callable|array|string $middleware): static;

    public function disableMiddleware(string $middleware): static;
}
