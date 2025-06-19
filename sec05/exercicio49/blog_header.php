<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu Blog de Programação</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            background-color: #f4f7f6;
            color: #333;
        }
        .wrapper {
            max-width: 1100px;
            margin: 0 auto;
            background-color: #ffffff;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        header {
            background-color: #2c3e50;
            color: white;
            padding: 20px 40px;
            text-align: center;
        }
        header h1 {
            margin: 0;
        }
        nav {
            background-color: #34495e;
            padding: 15px;
            text-align: center;
        }
        nav a {
            color: white;
            text-decoration: none;
            margin: 0 15px;
            font-weight: bold;
        }
        .container {
            display: flex;
        }
        main {
            flex: 3;
            padding: 20px;
        }
        aside {
            flex: 1;
            padding: 20px;
            background-color: #ecf0f1;
        }
    </style>
</head>
<body>
<div class="wrapper">
    <header>
        <h1>Blog do Programador</h1>
    </header>
    <nav>
        <a href="#">Início</a>
        <a href="#">Tutoriais</a>
        <a href="#">Sobre</a>
        <a href="#">Contato</a>
    </nav>
    <div class="container">