<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário :: Teste de Rotas</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container my-5">
        <form action="{{ url('/postData')}}" autocomplete="off" method="POST">

           @csrf
           
            <div class="form-group">
                <label for="first_name">Primeiro Nome</label>
                <input type="text" name="first_name" id="first_name" class="form-control" value="Gustavo">
            </div>

            <div class="form-group">
                <label for="last_name">Sobrenome</label>
                <input type="text" name="first_name" id="last_name" class="form-control" value="Web">
            </div>

            <div class="form-group">
                <label for="email">E-mail</label>
                <input type="email" name="email" id="email" class="form-control" value="cursos@upinside.com.br">
            </div>

            <button class="btn btn-primary">Enviar</button>
        </form>
    </div>
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>