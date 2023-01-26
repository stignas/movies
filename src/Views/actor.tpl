<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>{ucfirst(strtolower($actor[0].first_name))} {ucfirst(strtolower($actor[0].last_name))}</title>
    {block name="css"}
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css"
              integrity="sha512-NhSC1YmyruXifcj/KFRWoC561YpHpc5Jtzgvbuzx5VozKpWvQ+4nXhPdFgmx8xqexRcpAglTj9sIBWINXa8x5w=="
              crossorigin="anonymous" referrerpolicy="no-referrer"/>
        <link rel="stylesheet" type="text/css" href="./../src/Public/Assets/CSS/actor.css" media="all"/>
    {/block}

</head>
<body>

<header>
    <h2>{ucfirst(strtolower($actor[0].first_name))} {ucfirst(strtolower($actor[0].last_name))}</h2>
    <nav>
        <a class="button" href="{$previous}">
            <span>Back</span>
        </a>
        <a class="button" href="/paskaitos/sql/38p/movies/">
            <span>Home</span>
        </a>
    </nav>
</header>
<main>
    <aside class="actor-info">
        <div class="actor-img-block">
            <img src="./../src/Public/Assets/Pictures/default_actor_img.png" class="actor-img">
        </div>
        <div class="actor-info-block">
            <h1 class="actor-name">{ucfirst(strtolower($actor[0].first_name))}</h1>
            <h1 class="actor-name">{ucfirst(strtolower($actor[0].last_name))}</h1>
        </div>
    </aside>
    <section class="actor-film-list">
        {foreach $movieList as $movie}
            <a href="/paskaitos/sql/38p/movies/movie/{$movie.id}"><h2 class="movie-title">{$movie.title}</h2></a>
            <h4 class="release-year">{$movie.release_year}</h4>
            <p class="description">{$movie.description}</p>
        {/foreach}
    </section>

</main>
<footer>
    2023 &COPY Ignas
</footer>

</body>
</html>