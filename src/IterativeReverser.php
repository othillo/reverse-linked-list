<?php

namespace othillo\LinkedList;

class IterativeReverser
{
    /**
     * @param Node $node
     *
     * @return null|Node
     */
    public function reverse(Node $node)
    {
        $previousNode = null;
        $nextNode     = null;

        while ($node !== null) {
            $nextNode = $node->getLinkedNode();
            $node->setLinkedNode($previousNode);
            $previousNode = $node;
            $node         = $nextNode;
        }

        return $previousNode;
    }
}
