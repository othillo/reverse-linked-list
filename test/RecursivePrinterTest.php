<?php

namespace othillo\LinkedList;

class RecursivePrinterTest extends \PHPUnit_Framework_TestCase
{
    private $printer;

    public function setUp()
    {
        $this->printer = new RecursivePrinter();
    }

    /**
     * @test
     */
    public function it_prints_the_values_of_a_linked_list()
    {
        $linkedList = new Node('H', new Node('e', new Node('l', new Node('l', new Node('o', new Node('!'))))));

        $this->expectOutputString('Hello!');
        $this->printer->print($linkedList);
    }
}
