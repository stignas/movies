<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>{ucwords(strtolower($movie[0].title))}</title>
    {block name="css"}
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css"
              integrity="sha512-NhSC1YmyruXifcj/KFRWoC561YpHpc5Jtzgvbuzx5VozKpWvQ+4nXhPdFgmx8xqexRcpAglTj9sIBWINXa8x5w=="
              crossorigin="anonymous" referrerpolicy="no-referrer"/>
        <link rel="stylesheet" type="text/css" href="./../src/Public/Assets/CSS/movie.css" media="all"/>
    {/block}
</head>
<body>
<header>
    <h2>{ucwords(strtolower($movie[0].title))}</h2>
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
    <section class="wrapper">
        <section class="movie-info">
            <h2>{ucwords(strtolower($movie[0].title))}</h2>
            <div class="params">
                <li>{$movie[0].release_year}</li>
                <li>{$movie[0].rating} </li>
                <li>{floor($movie[0].length / 60)}h {$movie[0].length % 60}min.</li>
                <li>{$movie[0].category} </li>
                <li>{$movie[0].language}</li>
            </div>
            <hr>
            <div class="featuring-actors">
                {foreach $actors as $i => $actor}
                    {if ($i < count($actors) -1 )}
                    <a href="/paskaitos/sql/38p/movies/actor/{$actor.id}">{ucfirst(strtolower($actor.first_name))} {ucfirst(strtolower($actor.last_name))}</a>,
                    {else}
                        <a href="/paskaitos/sql/38p/movies/actor/{$actor.id}">{ucfirst(strtolower($actor.first_name))} {ucfirst(strtolower($actor.last_name))}</a>.
                    {/if}
                {/foreach}
            </div>
            <div class="description">
                {$movie[0].description}
            </div>
            <div class="special-features">{str_replace(',', ', ', $movie[0].special_features)}</div>
        </section>
        <section class="get-at">
            {if (empty($stores))}
                <div class="stores">
                    <li class="not-available">Sorry, currently not available.</li>
                </div>
            {else}
                {foreach $stores as $store}
                    <hr>
                    <div class="stores">
                        <li>Available: {$store.stock}pcs</li>
                        <li>Price: {$movie[0].rental_rate}€</li>
                        <div class="separator"></div>
                        <li>{$store.address}, {$store.district}</li>
                        <li>{$store.city}, {$store.country}</li>
                    </div>
                {/foreach}
                <hr>
            {/if}
        </section>
    </section>
</main>
<footer>
    2023 &COPY Ignas
</footer>

</body>
</html>