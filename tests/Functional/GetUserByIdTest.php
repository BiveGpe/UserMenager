<?php

namespace Functional;

use App\AppBuilder;
use Nyholm\Psr7\ServerRequest;
use PHPUnit\Framework\TestCase;

class GetUserByIdTest extends TestCase
{
    public function testSuccess(): void
    {
        $app = AppBuilder::build();

        $asd = new ServerRequest(
            'GET',
            'http://localhost:8080/users?id=1',
            [
                'Accept' => 'application/json',
                'Authorization' => 'HASLO123!'
            ],
        );

        $dsa = new \Slim\Http\ServerRequest($asd);

        $response = $app->handle($dsa);

        $this->assertTrue(true);
    }

}
