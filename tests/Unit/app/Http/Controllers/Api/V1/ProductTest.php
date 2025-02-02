<?php

namespace Tests\Unit\app\Http\Controllers\Api\V1;

use App\Http\Controllers\Api\V1\ProductController;
use Illuminate\Http\Request;
use Tests\TestCase;

class ProductTest extends TestCase
{
    /**
     * A basic unit test example.
     */
    public function test_index(): void
    {
        // cria o header da request para products
        $request = Request::create('/api/v1/products', 'GET', []);

        // faz a request passando o header criado
        $productController = new ProductController();
        $response = $productController->index($request);

        // verifica se o status do response esta OK
        $this->assertEquals(200, $response->status());

        // separa o content (onde está os dados da request)
        $data = json_decode($response->getContent(), true);

        // verifica se a quantidade de itens retornados está correta
        $this->assertEquals(5, $data['per_page']);
    }
}
