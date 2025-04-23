<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trabalho Marcos</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f6f9;
            padding: 40px;
        }

        h1 {
            color: #333;
        }

        .btn {
            display: inline-block;
            padding: 8px 16px;
            font-size: 14px;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            cursor: pointer;
            transition: background-color 0.2s ease;
            margin: 5px 3px 5px 0;
        }

        .btn-create {
            background-color: #007bff;
            color: white;
        }

        .btn-create:hover {
            background-color: #0069d9;
        }

        .btn-edit {
            background-color: #ffc107;
            color: #212529;
        }

        .btn-edit:hover {
            background-color: #e0a800;
        }

        .btn-delete {
            background-color: #dc3545;
            color: white;
        }

        .btn-delete:hover {
            background-color: #c82333;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            background-color: #fff;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.05);
        }

        th, td {
            padding: 12px 15px;
            text-align: left;
            border-bottom: 1px solid #eee;
        }

        th {
            background-color: #f0f0f0;
        }

        td.actions {
            display: flex;
            gap: 10px;
        }

        .icon {
            margin-right: 5px;
        }
    </style>
</head>
<body>
    <h1>Lista de Videogames</h1>
    
    <a href="{{ route('videogames.create') }}" class="btn btn-create">
        ➕ Criar Novo Videogame
    </a>

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
                        <a href="{{ route('videogames.edit', $videogame->id) }}" class="btn btn-edit">
                            ✏️ Editar
                        </a>

                        <form action="{{ route('videogames.destroy', $videogame->id) }}" method="POST" onsubmit="return confirm('Tem certeza que deseja remover este videogame?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-delete">
                                🗑️ Remover
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
