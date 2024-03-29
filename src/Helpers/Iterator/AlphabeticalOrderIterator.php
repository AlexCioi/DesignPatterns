<?php

namespace App\Helpers\Iterator;

use Iterator;
use App\Helpers\Iterator\WordsCollection;

class AlphabeticalOrderIterator implements \Iterator
{
    private $collection;

    private $position = 0;

    private $reverse = false;

    public function __construct($collection, $reverse = false)
    {
        $this->collection = $collection;
        $this->reverse = $reverse;
    }

    public function current(): mixed
    {
        return $this->collection->getItems()[$this->position];
    }

    public function next(): void
    {
        $this->position = $this->position + ($this->reverse ? -1 : 1);
    }

    public function key(): mixed
    {
        return $this->position;
    }

    public function valid(): bool
    {
        return isset($this->collection->getItems()[$this->position]);
    }

    public function rewind(): void
    {
        $this->position = $this->reverse ?
            count($this->collection->getItems()) - 1 : 0;
    }
}