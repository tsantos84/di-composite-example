<?php

namespace App\Controller;

use App\Foo\FooInterface;

class DefaultController
{
    private FooInterface $foo;

    public function __construct(FooInterface $foo)
    {
        $this->foo = $foo;
    }
}
