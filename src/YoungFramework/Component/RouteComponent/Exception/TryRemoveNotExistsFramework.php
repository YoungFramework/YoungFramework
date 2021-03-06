<?php

/**
 * This file is part of YoungFramework framework
 * 
 * (c) YoungFramework 2018
 * 
 * If you want to see LICENSE file, you can visit https://github.com/YoungFramework/YoungFramework/LICENSE 
 * 
 * @author Mariusz08 < https://github.com/Mariusz08 >
 * @year 2018
 */

namespace YoungFramework\Component\RouteComponent\Exception;

/**
 * This exception is thrown when user try remove route which do not exists.
 *
 * @author Mariusz08 < https://github.com/Mariusz08 >
 */
class TryRemoveNotExistsFramework extends \Exception
{
    public function __construct(string $message = 'You try remove route, which do not exists! You can see more information in docs. Number 214')
    {
        parent::__construct($message);
    }
}
