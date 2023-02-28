<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> {{ env('APP_NAME')}} </title>

    @vite('resources/js/app.js')

</head>
<body>

    @include('includes.header')

    @include('includes.jumbotron')

    {{-- Qui metto il main con tutti i fumetti  --}}
    <main>
        <div class="card-container">
            {{-- Qui ciclo in tutte le card  --}}
            @foreach ($cards as $card)
                <div class="card">
                    <div class="comic-card">
                        <a href="{{route('comics.show', $card->id)}}">
                            <img src="{{ $card['thumb'] }}" :alt="card.series">
                        </a>
                        <h4>{{ $card['series'] }} </h4>
                    </div>
                </div>
            @endforeach 
            
            <button class="btn-blue">Load more</button>
        </div>
    </main>


    {{-- Qui metto la sezione dedicata allo shop  --}}
    
    @include('includes.shop')

    {{-- Footer  --}}
    @include('includes.footer')
</body>
</html>