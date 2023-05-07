<?php

namespace Infrastructure\Common\RoutingStrategy;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Slim\Interfaces\InvocationStrategyInterface;

class RequestWithArgsAsQueryResponse implements InvocationStrategyInterface
{
    /**
     * @inheritDoc
     */
    public function __invoke(
        callable $callable,
        ServerRequestInterface $request,
        ResponseInterface $response,
        array $routeArguments
    ): ResponseInterface {
        $args = $request->getQueryParams();

        foreach ($routeArguments as $key => $value) {
            $args[Consts::URL_PARAMS][$key] = $value;
        }

        $request = $request->withQueryParams($args);

        return $callable($request, $response);
    }
}
