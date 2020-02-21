<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() {
        return "<h1>Listagem do Usuário com o código 1</h1>";
    }
    public function getData() {
        return "Disparou ação de GET";
    }

    public function postData(Request $request) {
        var_dump($request); 
    }
}