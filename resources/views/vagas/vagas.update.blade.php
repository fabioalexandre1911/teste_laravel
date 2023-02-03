<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>CRUD</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        @if (!empty($row))
                    <table class="table-responsive table-hover" >
                        <thead>

                            <tr>
                                <th width="5%">ID</th>
                                <th >Nome da vaga</th>
                                <th >Tipo</th>
                                <th >Descrição</th>
                                <th width="10%">Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($row as $row)
                                <tr>
                                    <td>{{ $row->id }}1</td>
                                    <td>{{ $row->tipo }}2</td>
                                    <td>{{ $row->nome }}3</td>
                                    <td>{{ $row->descricao }}4</td>
                                    
                                    <td><a href="/vagas/edit/{{ $row->id }}">Editar</a></td>
                                    <td><form action="/vagas/{{ $row->id }}" method="POST">
                                        <input type="hidden" name="_method" value="DELETE">
                                        @method("DELETE")
                                        @csrf
                                        <button type="submit" class="btn btn-primary">Excluir</button></form></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <br>
                    <div>
                    
                    
                    @else
                    <p>Nenhum registro encontrado.</p>
        @endif
                    </div>
                    <div class="p-3">
                        <a class="btn btn-success" href="/vagas/create">Cadastrar vagas</a>
                    </div>
    </div>
</body>

</html>

