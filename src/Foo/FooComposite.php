<?php

namespace App\Foo;

class FooComposite implements FooInterface
{
    private iterable $foos;

    public function __construct(iterable $foos)
    {
        $this->foos = $foos;
    }
}
