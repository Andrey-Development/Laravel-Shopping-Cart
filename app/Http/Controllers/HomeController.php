<?php

namespace App\Http\Controllers;

use App\Models\Product;

class HomeController extends Controller
{

    public function index() {
        // variáveis de configuração da requisição e paginação
        $perPage = 6;
        $page = 1;
        $sortBy = 'id';
        $sortDirection = 'desc';

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

        return view("partials.home", [
            "products"=> $products,
        ]);
    }
}
