<?php

namespace othillo\LinkedList;

class TailRecursiveReverserTest extends ReverserTest
{
    /**
     * @return TailRecursiveReverser
     */
    protected function createReverser()
    {
        return new TailRecursiveReverser();
    }
}
