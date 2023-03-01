<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crea un fumetto</title>

    @vite('resources/js/app.js')

</head>
<body class="bg-dark">
    <h1 class="text-danger text-center py-4">
        Add a Comic
    </h1>
    <div class="container p-5">
        <form method="POST" action="{{route('comics.store')}}" class="w-100 row text-center">
            @csrf

            <div class="mb-4 col-12">
              <label for="title" class="form-label">Title</label>
              <input type="text" class="form-control text-center" id="title" placeholder="Add a title" name="title">
            </div>

            <div class="mb-3 col-12">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" id="description" rows="3" placeholder="Description" name="description"></textarea>
            </div>

            <div class="mb-3 col-6">
                <label for="thumb" class="form-label">Thumb</label>
                <input type="url" class="form-control text-center" id="thumb" placeholder="Add thumbnail's url image" name="thumb">
            </div>

            <div class="mb-3 col-6">
                <label for="price" class="form-label">Price</label>
                <input type="text" min="0" class="form-control text-center" id="price" placeholder="Comic's price" name="price">
            </div>

            <div class="mb-3 col-4">
                <label for="series" class="form-label">Series</label>
                <input type="text" class="form-control text-center" id="series" placeholder="Comic's Series" name="series">
            </div>

            <div class="mb-3 col-4">
                <label for="sale_date" class="form-label">Sale Date</label>
                <input type="text" class="form-control text-center" id="sale_date" placeholder="Sale Date" name="sale_date">
            </div>

            <div class="mb-3 col-4">
                <label for="type" class="form-label">Type</label>
                <input type="text" class="form-control text-center" id="type" placeholder="Comic's Type" name="type">
            </div>

            <div class="mb-3 col-6">
                <label for="artists" class="form-label">Artists</label>
                <textarea class="form-control text-center" id="artists" rows="3" placeholder="Artists" name="artists"></textarea>
            </div>

            <div class="mb-3 col-6">
                <label for="writers" class="form-label">Writers</label>
                <textarea class="form-control text-center" id="writers" rows="3" placeholder="Writers" name="writers"></textarea>
            </div>


            <div class="mb-3 form-check">
            </div>

            <div class="col-12 d-flex justify-content-between">
                <button type="submit" class="btn btn-primary col-3">Salva</button>
                <a type="submit" class="btn btn-secondary col-3" href="{{route('comics.index')}}"> Go back </a>
            </div>

            <div class="col-6">
            </div>

          </form>
    </div>
</body>
</html>