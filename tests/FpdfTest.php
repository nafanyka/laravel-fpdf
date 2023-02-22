<?php

declare(strict_types=1);

namespace Nafanyka\Fpdf\Test;

use Nafanyka\Fpdf\Fpdf\Fpdf;

class FpdfTest extends TestCase
{
    protected $fpdf;

    public function setUp(): void
    {
        parent::setUp();

        $this->fpdf = new Fpdf();
    }

    /** @test */
    public function it_can_instantiate()
    {
        $this->assertInstanceOf(Fpdf::class, $this->fpdf);
    }
}
