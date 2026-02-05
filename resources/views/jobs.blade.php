<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <h1>Vagas abertas</h1>

    @if (empty($jobs))
        <p>Nenhuma vaga em aberto</p>
    @else
        <ul>
            @foreach ($jobs as $job)
                <li>
                    <h3>{{ $job['tittle'] }}</h3>
                    <p>{{$job['salary']}}</p>

                    <a href="/jobs/{{ $job['id'] }}">Ver detalhes</a>
                </li>
            @endforeach
        </ul>    
    @endif
</body>
</html>