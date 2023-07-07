<?php

namespace Devgabrielmaia\PhpDataStructure;

use Devgabrielmaia\PhpDataStructure\Examples\Stack\StackClientCode;

class App
{
    public function run(string $dataStructureTarget): void
    {
        switch ($dataStructureTarget) {
            case 'stack':
                StackClientCode::handle();
                break;
            
            default:
                throw new \Exception("Invalid data structure");
                break;
        }
    }
}