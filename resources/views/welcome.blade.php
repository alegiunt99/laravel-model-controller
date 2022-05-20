<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/app.css">
        <title>Movies Laravel</title>

    </head>
    <body>
        <h1>
            LARAVEL MOVIES
        </h1>

        <div class="container">

            @foreach ($movies as $movie)
                <!-- Creo la card di ogni film -->
                <div class="card-movie">

                                    <!-- Titolo -->
                        <h2>
                            {{$movie["title"]}}
                        </h2>

                        <!-- Titolo originale -->
                        <h3>
                            {{$movie["original_title"]}}
                        </h3>

                        <!-- Nazione -->
                        <p>
                            {{$movie["nationality"]}}
                        </p>

                        <!-- Voto medio -->
                        <p>
                            {{$movie["vote"]}}
                        </p>

                        <!-- Data di uscita -->
                        <p>
                            {{$movie["date"]}}
                        </p>
    
                </div>
            @endforeach

        </div>
       
    </body>
</html>
