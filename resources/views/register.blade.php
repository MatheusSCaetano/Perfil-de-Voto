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
        .register{
            text-decoration: none;
            color: #020617;
        }
       .auth-container {
    min-height: calc(100vh - 100px);
    display: flex;
    align-items: center;
    justify-content: center;
}

    .auth-card {
        width: 100%;
        max-width: 600px;
        background-color: #020617;
        padding: 35px;
        border-radius: 14px;
        box-shadow: 0 20px 40px rgba(0,0,0,0.5);
    }

    .auth-card h3 {
        text-align: center;
        margin-bottom: 25px;
        font-size: 1.6rem;
        color: #38bdf8;
    }

    .auth-card input {
        width: 100%;
        padding: 12px;
        margin-bottom: 12px;
        border-radius: 8px;
        border: 1px solid #1e293b;
        background: #020617;
        color: #e5e7eb;
    }

    .auth-card button {
        width: 100%;
        padding: 14px;
        margin-top: 10px;
        border-radius: 8px;
        background-color: #38bdf8;
        color: #020617;
        font-size: 1rem;
        cursor: pointer;
        transition: 0.3s;
    }

    .auth-card button:hover {
        background-color: #0ea5e9;
        transform: scale(1.03);
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
        <main class="auth-container">
            <div class="auth-card">
                <h3>Registrar</h3>

                <form method="POST" action="{{ route('register.store') }}">
                    @if ($errors->any())
                        <div style="background:#7f1d1d;padding:10px;border-radius:8px;margin-bottom:15px;">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    
                    @csrf
                    <input type="text" name="first_name" placeholder="Nome" required>
                    <input type="text" name="last_name" placeholder="Sobrenome" required>
                    <input type="email" name="email" placeholder="Seu e-mail" required>
                    <input type="email" name="email_confirmation" placeholder="Confirme seu e-mail" required>
                    <input type="password" name="password" placeholder="Senha" required>

                    <button type="submit">Registrar</button>
                </form>
            </div>
    </main>
</body>
