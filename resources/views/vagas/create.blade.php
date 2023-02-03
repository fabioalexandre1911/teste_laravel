<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>CRUD Teste Laravel</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <header class="text-center mt-2">
            <h3>Cadastro de vagas</h3>
        </header>

        <div class="col-12 mt-3">
            <div class="p-3">
                <a class="btn btn-success" href="/vagas">Lista de vagas</a>
            </div>
            
            <form method="POST" action="/vagas/store" name="form">
                @csrf

                <div class="form-group">
                    <label>Vaga:</label>
                    <input type="text" class="form-control" name="nome" required>
                </div>

                

                <div class="form-group">
                    <label>Tipo:</label> 
                    <select class="form-control" name="tipo">
                        <option value="CLT" selected>CLT</option>
                        <option value="PJ">Pessoa Juridica</option>
                        <option value="Frelancer">Freelancer</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Descrição:</label>
                    <input type="text" class="form-control" name="descricao" required>
                </div>

                <div class="form-group">
                    <button class="btn btn-primary" type="submit">
                        Cadastrar
                    </button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
