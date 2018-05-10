<?php
namespace SOLID\OCP;

class FlyingInTheSky implements IMove
{
    public function move() : string
    {
        return 'I am flying in the sky';
    }
}