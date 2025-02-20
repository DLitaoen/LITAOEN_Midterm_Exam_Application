<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Available Anime</title>
</head>
<body>
    <h1>Anime List</h1>

    <div class="anime-container">  @foreach($ongoingAnime as $anime)
            <div class="anime-card">  <img src="{{ $anime['image_url'] }}" alt="{{ $anime['english_title'] }}" width="200">
                <h2>{{ $anime['english_title'] }}</h2>
                <p><strong>Genre:</strong> {{ $anime['genre'] }}</p>
                <p><strong>Episodes:</strong> {{ $anime['episodes'] }}</p>
                <p><strong>Studio:</strong> {{ $anime['studio'] }}</p>
                <p><strong>Status:</strong> {{ $anime['status'] }}</p>
                <p>{{ $anime['synopsis'] }}</p>
            </div>
        @endforeach
    </div>

    <style>
        .anime-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
        }

        .anime-card {
            border: 1px solid #ccc;
            margin: 10px;
            padding: 10px;
            width: 300px;
            box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.1);
        }

        .anime-card img {
            max-width: 100%;
            height: auto;
        }
    </style>
</body>
</html>