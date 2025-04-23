<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar Videogame</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f6f9;
            padding: 40px;
        }

        h1 {
            color: #333;
            margin-bottom: 30px;
        }

        form {
            background-color: #fff;
            padding: 25px;
            border-radius: 10px;
            max-width: 450px;
            margin: 0 auto;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
        }

        label {
            display: block;
            margin-top: 15px;
            font-weight: 600;
            color: #333;
        }

        input {
            width: 100%;
            padding: 10px;
            margin-top: 6px;
            border: 1px solid #ccc;
            border-radius: 6px;
            font-size: 15px;
        }

        button {
            margin-top: 25px;
            padding: 12px 20px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 6px;
            font-size: 15px;
            cursor: pointer;
            transition: background-color 0.2s ease;
        }

        button:hover {
            background-color: #0069d9;
        }

        a {
            display: block;
            margin-top: 20px;
            text-align: center;
            text-decoration: none;
            color: #555;
            font-size: 14px;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <h1>Criar Novo Videogame</h1>

    <form action="{{ route('videogames.store') }}" method="POST">
        @csrf

        <label for="name">Nome:</label>
        <input type="text" name="name" id="name" required>

        <label for="brand">Marca:</label>
        <input type="text" name="brand" id="brand" required>

        <label for="release_year">Ano de Lançamento:</label>
        <input type="number" name="release_year" id="release_year" required>

        <button type="submit">Salvar Videogame</button>
    </form>

    <a href="{{ route('videogames.index') }}">← Voltar à lista de videogames</a>
</body>
</html>
