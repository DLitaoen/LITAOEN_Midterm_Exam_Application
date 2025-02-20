<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700" rel="stylesheet">

    <title>Available Anime</title>
</head>
<body>
    <h1>Anime List</h1>

    <div class="anime-container">  @foreach($ongoingAnime as $anime)
        <div class="anime-card">
            <img src="{{ $anime['image_url'] }}" alt="{{ $anime['english_title'] }}">
            <div class="anime-card-content">
                <h2>{{ $anime['english_title'] }}</h2>

                <div class="anime-info">
                    <span class="anime-info-label">Genre:</span>
                    <span>{{ $anime['genre'] }}</span>
                </div>

                <div class="anime-info">
                    <span class="anime-info-label">Episodes:</span>
                    <span>{{ $anime['episodes'] }}</span>
                </div>

                <div class="anime-info">
                    <span class="anime-info-label">Studio:</span>
                    <span>{{ $anime['studio'] }}</span>
                </div>

                <div class="anime-info">
                    <span class="anime-info-label">Status:</span>
                    <span>{{ $anime['studio'] }}</span>
                </div>

                <div class="anime-description">
                    {{ $anime['synopsis'] }}
                </div>

            </div>
        </div>
        @endforeach
    </div>

    <style>
        * {
            font-family: 'Poppins', sans-serif;
        }

        h1, h2, h3, h4, h5, h6 {
            font-weight: 700;
        }

        .anime-container {
            display: flex;
            flex-direction: column;
            gap: 10px;
            /* flex-wrap: wrap;
            justify-content: space-around; */
            max-width: 1200px;
            margin: 0 auto;
        }

        .anime-card {
            display: flex;
            align-items: flex-start;
            border: 1px solid #ccc;
            margin: 10px;
            padding: 10px;
            width: 95%;
            box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.1);
        }

        .anime-card img {
            max-width: 100%;
            height: auto;
            margin-right: 15px;
        }

        .anime-card-content {
            flex-grow: 1;
        }

        .anime-card h2 {
            margin-top: 0;
        }

        .anime-info {
            display: flex;
            flex-direction: column;
            margin-bottom: 5px;
        }

        .anime-info-label {
            font-weight: bold;
            margin-right: 5px;
        }

        .anime-description {
            margin-top: 10px;
        }
    </style>
</body>
</html>