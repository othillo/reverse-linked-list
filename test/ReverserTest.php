<?php

namespace othillo\LinkedList;

abstract class ReverserTest extends \PHPUnit_Framework_TestCase
{
    private $reverser;
    private $printer;

    public function setUp()
    {
        $this->reverser = $this->createReverser();
        $this->printer  = new RecursivePrinter();
    }

    /**
     * @test
     */
    public function it_reverses_a_linked_list()
    {
        $linkedList = new Node('H', new Node('e', new Node('l', new Node('l', new Node('o', new Node('!'))))));

        $reversedLinkedList = $this->reverser->reverse($linkedList);

        $this->expectOutputString('!olleH');
        $this->printer->print($reversedLinkedList);
    }

    abstract protected function createReverser();
}
