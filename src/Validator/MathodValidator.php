<?php
namespace Slince\Router\Validator;

use Slince\Router\Validator\ValidatorInterface;
use Slince\Router\RouteInterface;
use Slince\Router\RequestContext;

class MathodValidator implements ValidatorInterface
{
    
    static $id = 'path';
    
    function validate(RouteInterface $route, RequestContext $requestContext)
    {
        return in_array($requestContext->getMethod(), $route->getMethods());
    }
}