<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Triad Weyrs</title>

        <meta name="author" content="Triad Weyrs">
        <meta name="description" 
            content="A post-AIVAS Tenth Pass Pern&copy; play-by-email club, with three
                    Weyrs, six Holds, and twelve Halls to play dragonriders, holders, or crafters.">
        <meta name="keywords" 
            content="pern pbem, Dragonriders of Pern, Pern, Anne McCaffrey, McCaffrey, dragon,
                    dragons, RPG, role play, game, PBEM, sci-fi, science-fiction, fantasy, role-play,
                    dragonsfall, weyr, weyrs, fanfic, fanfiction, roleplaying game, Dragonsdawn, Moreta,
                    Nerilka, Dragonquest, Dragonflight, Dragonseye, Red Star Rising, fan-fic, dragonrider,
                    Hatchings, Healercraft, Harpercraft, Tannercraft, Smithcraft, AIVAS">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="icon" href="/favicon.ico">
        <link href="/css/app.css" rel="stylesheet">
    </head>

    <body>
        <div id="page-ctr" class="container-fluid">

            <div class="row">
            @include('layouts/header')
            </div>

            <div class="row">
            @include('layouts/nav')
            </div>

            <div class="row">
            @yield('content')
            </div>

            <div class="row">
            @include('layouts/footer')
            </div>
        </div>

        <script src="/js/app.js"></script>
    </body>
</html>