<?php
/**
 * Tests for DeFiZephyr
 */

use PHPUnit\Framework\TestCase;
use Defizephyr\Defizephyr;

class DefizephyrTest extends TestCase {
    private Defizephyr $instance;

    protected function setUp(): void {
        $this->instance = new Defizephyr(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Defizephyr::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
