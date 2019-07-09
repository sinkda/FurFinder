<?php


namespace Tests\Unit\App;


use Tests\TestCase;

class DirectiveTest extends TestCase
{

    private $blade;

    protected function setUp() : void
    {
        parent::setUp();

        $this->blade = resolve('blade.compiler');
    }


    /** @test */
    public function blade_directive_twitter_with_slashes()
    {
        $expression = "@twitter('/dog/1', 'Fido')";

        $expected = 'https://www.twitter.com/share?url='. getenv('APP_URL'). '/dog/1&amp;text=Look at this adorable dog Fido!';

        $compiledString = $this->blade->compileString($expression);
        $this->assertEquals($expected, $compiledString);
    }


}