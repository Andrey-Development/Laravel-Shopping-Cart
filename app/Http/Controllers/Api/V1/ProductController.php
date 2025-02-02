<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): Response
    {
        // variáveis de configuração da requisição e paginação
        $perPage = $request->query('perPage', 5);
        $page = $request->query('page', 1);
        $sortBy = $request->query('sortBy', 'id');
        $sortDirection = $request->query('sortDirection', 'desc');

        // busca todos os produtos com os valores
        $products = Product::
                        orderBy(
                            $sortBy,
                            $sortDirection
                        )->paginate(
                            $perPage,
                            ["*"],
                            $page
                        );

        return response(
            'Api v1 success!',
            200,
        )->setContent( $products->toJson() );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
