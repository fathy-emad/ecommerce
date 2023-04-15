<?php

namespace App\Constants;

use IteratorAggregate;
use ArrayIterator;
use Traversable;

class Constants implements IteratorAggregate
{
    protected string $constant;

    protected array $genders = [
        0 => 'male',
        1 => 'female'
    ];

    public function __construct($constant)
    {
        $this->constant = $constant;
    }

    public function getValue($key): string
    {
        return $this->genders[$key];
    }

    public function getIterator(): Traversable
    {
        return new ArrayIterator($this->{$this->constant});
    }
}
