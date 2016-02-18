<?php

namespace othillo\LinkedList;

class IterativeReverserTest extends ReverserTest
{
    /**
     * @return IterativeReverser
     */
    protected function createReverser()
    {
        return new IterativeReverser();
    }
}
