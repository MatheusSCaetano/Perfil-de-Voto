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
        .nav {
            display: flex;
            gap: 20px;
        }

        .nav-link {
            text-decoration: none;
            color: #e5e7eb;
            padding: 8px 16px;
            border-radius: 8px;
            transition: 0.3s;
        }

        .nav-link:hover {
            background-color: #1e293b;
        }

        .nav-link.active {
            background-color: #38bdf8;
            color: #020617;
            font-weight: bold;
        }
        .register-button{
            text-decoration: none;
            color: #020617;
        }

    </style>
</head>

<body>

<header>
    <img src="{{ asset('images/logo.png') }}" width="80" height="80" alt="Logo">
    <nav>
        <a href="{{ route('home') }}" class="nav-link active">Home</a>
        <a href="{{ route('contact') }}" class="nav-link ">Contact</a>
        <a href="{{ route('about') }}" class="nav-link ">About</a>
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

        <!-- 🔵 FORMULÁRIO DE LOGIN ADICIONADO -->
        <div style="margin-top:35px;border-top:1px solid #1e293b;padding-top:25px;text-align:left;">
            <h3 style="margin-bottom:15px;text-align:center;">Login</h3>

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <input type="email" name="email" placeholder="Seu e-mail" required
                    style="width:100%;padding:12px;margin-bottom:10px;border-radius:8px;border:1px solid #1e293b;background:#020617;color:#e5e7eb;">

                <input type="password" name="password" placeholder="Senha" required
                    style="width:100%;padding:12px;margin-bottom:15px;border-radius:8px;border:1px solid #1e293b;background:#020617;color:#e5e7eb;">

                <button type="submit" style="width:100%;margin-bottom:10px;">
                    Entrar
            </form>
            </button>
                <button type="submit" style="width:100%;">
                <a href="{{ route('register') }}" class="register-button">Registre-se</a>
            </button>
        </div>
        <!-- 🔵 FIM LOGIN -->

    </div>
</main>

<footer>
    Projeto educacional • Informação acima de polarização
</footer>

</body>
</html>
