<?php

namespace othillo\LinkedList;

class RecursivePrinter
{
    /**
     * @param Node $node
     */
    public function print(Node $node)
    {
        echo $node->getValue();

        if ($node->hasLinkedNode()) {
            $this->print($node->getLinkedNode());
        }
    }
}
