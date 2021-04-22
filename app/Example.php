<?php

namespace App;

class Example 
{
    // public function go()
    // {
    //     dump('it works!');
    // }

    // protected $foo;

    // public function __construct($foo)
    // {
    //    $this->foo = $foo;
    // }

    protected $collaborator;
    protected $foo;

    public function __construct(Collaborator $collaborator, $foo) {
        $this->collaborator =  $collaborator;
        $this->foo =  $foo;
    }
}
