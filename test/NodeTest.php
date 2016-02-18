<?php

namespace othillo\LinkedList;

class NodeTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function it_exposes_its_properties()
    {
        $linkedList = new Node('H');

        $this->assertEquals('H', $linkedList->getValue());
        $this->assertEquals(null, $linkedList->getLinkedNode());

        $linkedList = new Node('H', new Node('i'));

        $this->assertEquals('H', $linkedList->getValue());
        $this->assertEquals(new Node('i'), $linkedList->getLinkedNode());
    }
}
