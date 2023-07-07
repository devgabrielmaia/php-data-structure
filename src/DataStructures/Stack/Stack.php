<?php

namespace Devgabrielmaia\PhpDataStructure\DataStructures\Stack;

class Stack
{
    private int $count = 0;
    private array $items = [];

    public function push(mixed $item): void
    {
        $this->items[$this->count] = $item;
        $this->count++;
    }

    public function pop(): mixed
    {
        if ($this->isEmpty()) 
            return null;
        $this->count--;
        $result = $this->items[$this->count];
        unset($this->items[$this->count]);
        return $result;
    }

    public function peek(): mixed
    {
        if ($this->isEmpty()) 
            return null;
        return $this->items[$this->count -1];
    }

    public function clear(): void
    {
        $this->count = 0;
        $this->items = [];
    }

    public function isEmpty(): bool
    {
        return $this->count <= 0;
    }

    public function size(): int
    {
        return $this->count;
    }

    public function toString(): ?string
    {
        if ($this->isEmpty()) 
            return null;
        $objStr = $this->items[0];
        for ($i = 1; $i < $this->count; $i++) {
            $objStr = "{$objStr},{$this->items[$i]}";
        }
        return $objStr;
    }
}