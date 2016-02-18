<?php

namespace othillo\LinkedList;

class TailRecursiveReverser
{
    /**
     * @param Node      $currentNode
     * @param Node|null $previousNode
     *
     * @return Node
     */
    public function reverse(Node $currentNode, Node $previousNode = null)
    {
        $nextNode = $currentNode->getLinkedNode();
        $currentNode->setLinkedNode($previousNode);

        if ($nextNode) {
            return $this->reverse($nextNode, $currentNode);
        }

        return $currentNode;
    }
}
