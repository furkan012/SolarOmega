<?php
/**
 * Tests for SolarOmega
 */

use PHPUnit\Framework\TestCase;
use Solaromega\Solaromega;

class SolaromegaTest extends TestCase {
    private Solaromega $instance;

    protected function setUp(): void {
        $this->instance = new Solaromega(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Solaromega::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
