<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Videogame</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 40px;
            background-color: #f9f9f9;
        }

        h1 {
            margin-bottom: 30px;
        }

        form {
            background-color: #fff;
            padding: 25px;
            border-radius: 8px;
            max-width: 400px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-top: 15px;
            font-weight: bold;
        }

        input {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button {
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #007BFF;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #0069d9;
        }

        a {
            display: inline-block;
            margin-top: 20px;
            text-decoration: none;
            color: #333;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <h1>Editar Videogame</h1>

    <form action="{{ route('videogames.update', $videogame->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="name">Nome:</label>
        <input type="text" name="name" id="name" value="{{ $videogame->name }}" required>

        <label for="brand">Marca:</label>
        <input type="text" name="brand" id="brand" value="{{ $videogame->brand }}" required>

        <label for="release_year">Ano de Lançamento:</label>
        <input type="number" name="release_year" id="release_year" value="{{ $videogame->release_year }}" required>

        <button type="submit">Atualizar</button>
    </form>

    <a
