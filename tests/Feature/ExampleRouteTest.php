<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use League\OpenAPIValidation\PSR7\Exception\ValidationFailed;
use Osteel\OpenApi\Testing\ResponseValidatorBuilder;
use Tests\TestCase;

class ExampleRouteTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     * @throws ValidationFailed
     */
    public function testBasicTest()
    {
        $response = $this->get('/api/test');

        $validator = ResponseValidatorBuilder::fromYaml(storage_path('api-docs/api-docs.yaml'))->getValidator();

        $result = $validator->validate('/test', 'get', $response->baseResponse);

        $this->assertTrue($result);
    }
}
