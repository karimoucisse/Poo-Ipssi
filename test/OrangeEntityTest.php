<?php

namespace Test;

use App\Entity\Orange;
use PHPUnit\Framework\TestCase;

class ChasseurEntityTest extends TestCase
{
    public function testNom()
    {
        $orange = new Orange();
        $this->assertEquals('Orange', $orange->getNom());
    }
    
    public function testQuantite()
    {
        $orange = new Orange();
        $this->assertEquals(14, $orange->getNom());
    }

}