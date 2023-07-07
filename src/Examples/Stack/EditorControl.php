<?php

namespace Devgabrielmaia\PhpDataStructure\Examples\Stack;

use Devgabrielmaia\PhpDataStructure\DataStructures\Stack\Stack;
use Devgabrielmaia\PhpDataStructure\Examples\Stack\UndoHistoric;

class EditorControl extends Stack
{
    private $undoHistoric;

    public function __construct()
    {
        $this->undoHistoric = new UndoHistoric();
    }

    public function undo(): void
    {
        $item = parent::pop();
        $item && $this->undoHistoric->push($item);
    }

    public function redo(): void
    {
        $item = $this->undoHistoric->pop();
        $item && parent::push($item);
    }

    public function change(string $item): void
    {
        parent::push($item);
    }
}