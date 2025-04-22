<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trabalho Marcos</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            padding: 10px;
            border: 1px solid #ccc;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        .btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            margin-bottom: 15px;
        }
        .btn:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <h1>Lista de Videogames</h1>
    <a href="{{ route('videogames.create') }}" class="btn">Criar Novo Videogame</a>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nome</th>
                <th>Marca</th>
                <th>Ano de Lançamento</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($videogames as $videogame)
                <tr>
                    <td>{{ $videogame->id }}</td>
                    <td>{{ $videogame->name }}</td>
                    <td>{{ $videogame->brand }}</td>
                    <td>{{ $videogame->release_year }}</td>
                    <td class="actions">
                        <a href="{{ route('videogames.update', $videogame->id) }}" class="btn">Editar</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
