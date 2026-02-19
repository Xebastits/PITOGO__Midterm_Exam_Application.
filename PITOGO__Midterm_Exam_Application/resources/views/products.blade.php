<!DOCTYPE html>
<html>
<head>
    <title>Anime Collection</title>
    <style>
        body { font-family: sans-serif; background-color: #f4f4f9; padding: 20px; }
        .container { max-width: 600px; margin: 0 auto; background: white; padding: 20px; border-radius: 8px; box-shadow: 0 2px 4px rgba(0,0,0,0.1); }
        .anime-card { border-bottom: 1px solid #eee; padding: 15px 0; }
        .anime-card:last-child { border-bottom: none; }
        .title { font-size: 1.2em; color: #333; font-weight: bold; }
        .details { color: #666; font-size: 0.9em; margin-top: 5px; }
    </style>
</head>
<body>
    <div class="container">
        <h1>Top Anime Picks</h1>

        @foreach ($products as $anime)
            <div class="anime-card">
                <div class="title">{{ $anime['title'] }}</div>
                <div class="details">
                    Genre: {{ $anime['genre'] }} | Episodes: {{ $anime['episodes'] }}
                </div>
            </div>
        @endforeach
    </div>
</body>
</html>