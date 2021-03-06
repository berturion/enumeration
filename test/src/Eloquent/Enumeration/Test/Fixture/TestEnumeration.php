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

use Eloquent\Enumeration\AbstractEnumeration;

abstract class TestEnumeration extends AbstractEnumeration
{
    const FOO = 'oof';
    const BAR = 'rab';
}
