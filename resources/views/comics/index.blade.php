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
        <div class="card-container py-5">
            {{-- Qui ciclo in tutte le card  --}}
            <div class="row g-3 pt-4">
                @foreach ($cards as $card)
                    @if ($card->thumb)
                    <div class="col-2">
                        <div class="card">
                            <img src="{{$card->thumb}}" class="card-img-top img-fluid" alt="...">
                            <div class="card-body">
                                    <a href="{{route('comics.show', $card->id)}}">
                                        <h5 class="card-title text-white text-center">{{$card->title}}</h5>
                                    </a>
                                </div>
                        </div>
                    </div>
                    @endif
                @endforeach 
            </div>
            
            <div class="d-flex justify-content-center">
                <a class="btn-primary btn">Load more</a>
                <a class="btn-success btn ms-3" href="{{route('comics.create')}}">Create a new comic</a>
            </div>
        </div>
    </main>


    {{-- Qui metto la sezione dedicata allo shop  --}}
    
    @include('includes.shop')

    {{-- Footer  --}}
    @include('includes.footer')
</body>
</html>