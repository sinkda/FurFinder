<?php


namespace Tests\Unit\Models;


use App\Dog;
use Tests\TestCase;

class DogTest extends TestCase
{
    protected $dog;

    protected function setUp(): void
    {
        parent::setUp();

        $this->dog = new Dog();
    }

    /** @test */
    public function readable_dog_breed_no_sub()
    {
        $this->dog->breed = 'chow';

        $this->assertEquals('Chow', $this->dog->readableBreed());
    }

    /** @test */
    public function readable_dog_breed_with_subbreed()
    {
        $this->dog->breed = 'bulldog-boston';

        $this->assertEquals('Boston Bulldog', $this->dog->readableBreed());
    }


}