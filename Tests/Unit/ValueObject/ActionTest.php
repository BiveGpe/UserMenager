<?php

declare(strict_types=1);

namespace Tests\Unit\ValueObject;

use Infrastructure\Common\ValueObject\Action;
use InvalidArgumentException;
use PHPUnit\Framework\TestCase;

class ActionTest extends TestCase
{
    /**
     * @dataProvider successDataProvider
     */
    public function testSuccess(string $testData): void
    {
        $action = new Action($testData);
        self::assertSame($testData, $action->getValue());
    }

    static public function successDataProvider(): array
    {
        return [
            ["GetUserById"],
        ];
    }

    /**
     * @dataProvider invalidArgumentExceptionDataProvider
     */
    public function testInvalidArgumentException(string $testData): void
    {
        self::expectException(InvalidArgumentException::class);
        $action = new Action($testData);
    }

    static public function  invalidArgumentExceptionDataProvider(): array
    {
        return [
            ["testData"],
        ];
    }
}
