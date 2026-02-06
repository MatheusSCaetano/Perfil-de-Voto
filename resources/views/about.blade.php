<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Sobre | Perfil de Voto</title>

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
            justify-content: center;
            padding: 60px 20px;
        }

        .container {
            max-width: 700px;
            background-color: #020617;
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 20px 40px rgba(0,0,0,0.4);
        }

        h2 {
            margin-bottom: 20px;
            font-size: 2rem;
        }

        p {
            line-height: 1.7;
            margin-bottom: 15px;
            color: #cbd5f5;
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

    </style>
</head>
<body>

    <header>
        <img src="{{ asset('images/logo.png') }}" width="80" height="80" alt="Logo">
        <nav>
            <a href="{{ route('home') }}" class="nav-link">Home</a>
            <a href="{{ route('contact') }}" class="nav-link">Contact</a>
            <a href="{{ route('about') }}"class="nav-link active" >About</a>

        </nav>
    </header>
    <main>
        <div class="container">
            <h2>Sobre o projeto</h2>

            <p>
                O Perfil de Voto nasceu com o objetivo de ajudar pessoas a entenderem
                melhor suas próprias ideias políticas, de forma simples e acessível.
            </p>

            <p>
                Através de um questionário, o sistema compara as respostas do usuário
                com posições públicas de políticos, mostrando quais perfis mais se
                aproximam de seus valores e prioridades.
            </p>

            <p>
                Este projeto não tem o objetivo de influenciar votos, mas sim
                incentivar a reflexão, a informação e a consciência política.
            </p>
        </div>
    </main>

    <footer>
        Projeto educacional • Informação acima de polarização
    </footer>

</body>
</html>
