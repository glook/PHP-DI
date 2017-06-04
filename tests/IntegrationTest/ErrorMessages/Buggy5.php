<?php

declare(strict_types=1);

namespace DI\Test\IntegrationTest\ErrorMessages;

use DI\Annotation\Inject;

class Buggy5
{
    /**
     * @Inject
     */
    public function setDependency($dependency)
    {
        $this->dependency = $dependency;
    }
}
