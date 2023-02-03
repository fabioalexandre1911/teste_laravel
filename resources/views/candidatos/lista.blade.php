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
        @if (!empty($paginacao))
                    <table class="table-responsive table-hover" >
                        <thead>

                            <tr>
                                <th width="5%">ID</th>
                                <th >Nome</th>
                                <th >Email</th>
                                <th >Curriculo_url</th>
                                <th width="10%">Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($paginacao as $row)
                                <tr>
                                    <td>{{ $row->id }}</td>
                                    <td>{{ $row->nome }}</td>
                                    <td>{{ $row->email }}</td>
                                    <td>{{ $row->curriculo_url }}</td>
                                    <td><a href="/candidatos/edit/{{ $row->id }}">Editar</a></td>
                                    <td><form action="/candidatos/{{ $row->id }}" method="POST">
                                        <input type="hidden" name="_method" value="DELETE">
                                        @method("DELETE")
                                        @csrf
                                        <button type="submit">Excluir</button></form></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <br>
                    <div>
                    {{$paginacao->links()}}
                    
                    @else
                    <p>Nenhum registro encontrado.</p>
        @endif
                    </div>
    </div>
</body>

</html>
