<?php

namespace App\Tests;

use App\Person;
use PHPUnit\Framework\TestCase;

final class PersonTest extends TestCase
{
    public function testNameProperty(): void
    {
        $personName = 'Juan';
        $person = new Person($personName);

        self::assertEquals($personName, $person->getName());
    }

    public function testGreeting(): void
    {
        $personName = 'Juan';
        $hello = new Person($personName);

        self::assertEquals("Hello!, I'm " . $personName, $hello->greet());
    }
}
