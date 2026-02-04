<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Seu Voto, Seu Perfil</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, Helvetica, sans-serif;
        }

        body {
            background-color: #0f172a;
            color: #e5e7eb;
            min-height: 100vh;
        }

        header {
            padding: 10px 20px;
            border-bottom: 1px solid #38bdf8;
        }

        header h1 {
            font-size: 1.5rem;
            color: #38bdf8;
        }

        main {
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 60px 20px;
        }

        .container {
            max-width: 600px;
            text-align: center;
            background-color: #020617;
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 20px 40px rgba(0,0,0,0.4);
        }

        .container h2 {
            font-size: 2rem;
            margin-bottom: 15px;
        }

        .container p {
            font-size: 1.05rem;
            line-height: 1.6;
            color: #cbd5f5;
            margin-bottom: 30px;
        }

        .alert {
            font-size: 0.9rem;
            background-color: #020617;
            border: 1px solid #1e293b;
            padding: 12px;
            border-radius: 8px;
            margin-bottom: 25px;
            color: #94a3b8;
        }

        button {
            padding: 14px 30px;
            font-size: 1rem;
            border: none;
            border-radius: 8px;
            background-color: #38bdf8;
            color: #020617;
            cursor: pointer;
            transition: 0.3s;
        }

        button:hover {
            background-color: #0ea5e9;
            transform: scale(1.05);
        }

        footer {
            text-align: center;
            padding: 20px;
            font-size: 0.85rem;
            color: #64748b;
        }
    </style>
</head>

<body>

<header>
    <img src="{{ asset('images/logo.png') }}" width="80" height="80" alt="Logo">
    <nav>
        <a href="{{ route('home') }}">Home</a>
        <a href="{{ route('contact') }}">Contact</a>
        <a href="{{ route('about') }}">About</a>

    </nav>
</header>

<main>
    <div class="container">
        <h2>Descubra quem mais representa você</h2>

        <p>
            Responda algumas perguntas sobre seus valores, ideias e prioridades.
            Com base nas suas respostas, mostramos qual político mais se aproxima
            do seu perfil para a próxima eleição.
        </p>

        <div class="alert">
            ⚠️ Este site não indica em quem você deve votar.  
            O objetivo é apenas informar e comparar posições políticas.
        </div>

        <button>Iniciar questionário</button>
    </div>
</main>

<footer>
    Projeto educacional • Informação acima de polarização
</footer>

</body>
</html>
