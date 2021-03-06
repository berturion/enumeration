<?php

/*
 * This file is part of the Enumeration package.
 *
 * Copyright © 2015 Erin Millard
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Eloquent\Enumeration\Test\Fixture;

class ValidValueMultiton extends TestValueMultiton
{
    public static function resetCalls()
    {
        static::$calls = array();
    }

    public static function calls()
    {
        return static::$calls;
    }

    protected static function initializeMembers()
    {
        parent::initializeMembers();

        new static('BAZ', 'zab');
    }

    protected static $calls = array();
}
