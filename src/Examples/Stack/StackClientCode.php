<?php

namespace Devgabrielmaia\PhpDataStructure\Examples\Stack;

class StackClientCode
{
    public static function handle()
    {
        $editorControl = new EditorControl();
        $editorControl->change('Hello');
        $editorControl->change('World');
        $editorControl->change('PHP');
        $editorControl->change('Stack');
        $editorControl->undo();
        $editorControl->undo();
        $editorControl->redo();
        echo $editorControl->toString()."\n";
    }
}