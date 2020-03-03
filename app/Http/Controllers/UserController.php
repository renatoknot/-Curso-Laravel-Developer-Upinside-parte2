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

    public function testePut(Request $request) {
        echo "<h1>Usuário da edição de código 1</h1>";
        var_dump($request);
        return "Disparou ação de PUT";
    }

    public function testePatch(Request $request) {
        echo "<h1>Usuário da edição de código 1</h1>";
        var_dump($request);
        return "Disparou ação de PATCH";
    }

    public function testeMatch(Request $request) {
        echo "Disparou ação de PUT/PATCH";
        var_dump($request);
    }

    public function destroy() {
        return "<h1>Delete para o registro 1</h1>";
    }

    public function any() {
        return "<h1>Qualquer verbalização aceita</h1>";
    }

    public function userComments($id, $comment = null) {
        echo "Controller: User - Método: usercomments";
        var_dump($id, $comment);
    }
}
