
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Contato | Perfil de Voto</title>

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
            max-width: 600px;
            background-color: #020617;
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 20px 40px rgba(0,0,0,0.4);
        }

        h2 {
            margin-bottom: 20px;
            font-size: 2rem;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-size: 0.9rem;
            color: #94a3b8;
        }

        input, textarea {
            width: 100%;
            padding: 12px;
            margin-bottom: 20px;
            border-radius: 8px;
            border: 1px solid #1e293b;
            background-color: #020617;
            color: #e5e7eb;
        }

        textarea {
            resize: vertical;
            min-height: 120px;
        }

        button {
            width: 100%;
            padding: 14px;
            border: none;
            border-radius: 8px;
            background-color: #38bdf8;
            color: #020617;
            font-size: 1rem;
            cursor: pointer;
            transition: 0.3s;
        }

        button:hover {
            background-color: #0ea5e9;
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
        <a href="{{ route('contact') }}" class="nav-link active">Contact</a>
        <a href="{{ route('about') }}" class="nav-link">About</a>

    </nav>
</header>

<main>
    <div class="container">
        <h2>Contato</h2>

        <form>
            <label for="nome">Nome</label>
            <input type="text" id="nome" placeholder="Seu nome">

            <label for="email">E-mail</label>
            <input type="email" id="email" placeholder="seu@email.com">

            <label for="mensagem">Mensagem</label>
            <textarea id="mensagem" placeholder="Escreva sua mensagem"></textarea>

            <button type="submit">Enviar mensagem</button>
        </form>
    </div>
</main>

<footer>
    © 2026 Perfil de Voto
</footer>

</body>
</html>
