<?php

declare(strict_types=1);

namespace DI\Test\IntegrationTest\ErrorMessages;

class Buggy1
{
    public function __construct($foo, $bar, $default = 123)
    {
    }
}
