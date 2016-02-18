<?php

namespace othillo\LinkedList;

class Node
{
    /**
     * @var string
     */
    private $value;

    /**
     * @var Node|null
     */
    private $linkedNode;

    /**
     * @param string    $value
     * @param Node|null $linkedNode
     */
    public function __construct($value, Node $linkedNode = null)
    {
        $this->value      = $value;
        $this->linkedNode = $linkedNode;
    }

    /**
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @return Node|null
     */
    public function getLinkedNode()
    {
        return $this->linkedNode;
    }

    /**
     * @param Node|null $linkedNode
     */
    public function setLinkedNode(Node $linkedNode = null)
    {
        $this->linkedNode = $linkedNode;
    }

    /**
     * @return bool
     */
    public function hasLinkedNode()
    {
        return null !== $this->linkedNode;
    }
}
