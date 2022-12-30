<?php

declare(strict_types=1);

namespace Boot\Foundation;

use Psr\Container\ContainerInterface;
use Slim\Interfaces\RouteResolverInterface;
use Slim\Interfaces\RouteCollectorInterface;
use Psr\Http\Message\ResponseFactoryInterface;
use Slim\Interfaces\CallableResolverInterface;
use Slim\Interfaces\MiddlewareDispatcherInterface;

class AppFactory extends \Slim\Factory\AppFactory
{
  public static function createFromContainer(ContainerInterface $container): App
  {
    $responseFactory = $container->has(ResponseFactoryInterface::class)
      && ($responseFactoryFromContainer = $container->get(ResponseFactoryInterface::class)
      ) instanceof ResponseFactoryInterface
      ? $responseFactoryFromContainer
      : self::determineResponseFactory();

    $callableResolver = $container->has(CallableResolverInterface::class)
      && ($callableResolverFromContainer = $container->get(CallableResolverInterface::class)
      ) instanceof CallableResolverInterface
      ? $callableResolverFromContainer
      : null;

    $routeCollector = $container->has(RouteCollectorInterface::class)
      && ($routeCollectorFromContainer = $container->get(RouteCollectorInterface::class)
      ) instanceof RouteCollectorInterface
      ? $routeCollectorFromContainer
      : null;

    $routeResolver = $container->has(RouteResolverInterface::class)
      && ($routeResolverFromContainer = $container->get(RouteResolverInterface::class)
      ) instanceof RouteResolverInterface
      ? $routeResolverFromContainer
      : null;

    $middlewareDispatcher = $container->has(MiddlewareDispatcherInterface::class)
      && ($middlewareDispatcherFromContainer = $container->get(MiddlewareDispatcherInterface::class)
      ) instanceof MiddlewareDispatcherInterface
      ? $middlewareDispatcherFromContainer
      : null;

    return new App(
      $responseFactory,
      $container,
      $callableResolver,
      $routeCollector,
      $routeResolver,
      $middlewareDispatcher
    );
  }
}
