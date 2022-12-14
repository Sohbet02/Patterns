<?php

namespace Upgrader\Patterns\Test;

use PHPUnit\Framework\TestCase;
use \Upgrader\Patterns\Registry;

class PatternsTest extends TestCase 
{
    public function testPatternRegistry(): void
    {
        Registry::set('name', 'First product');  
        $this->assertSame('first product', Registry::get('name'));

        Registry::removeRegistry('name');

        $this->assertSame('sss', Registry::get('name'));
        
    }
}