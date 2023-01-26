<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Movie Database</title>
    {block name="css"}
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css"
              integrity="sha512-NhSC1YmyruXifcj/KFRWoC561YpHpc5Jtzgvbuzx5VozKpWvQ+4nXhPdFgmx8xqexRcpAglTj9sIBWINXa8x5w=="
              crossorigin="anonymous" referrerpolicy="no-referrer"/>
        <link rel="stylesheet" type="text/css" href="./src/Public/Assets/CSS/home.css" media="all"/>
    {/block}

</head>
<body>
<header>
    <div class="search-bar">
        <form action="/paskaitos/sql/38p/movies/search" method="post">
            <input class="search-input" placeholder="Search..." name="search_text" size="50" required>
            <button type="submit">Search</button>
        </form>
    </div>

    {if isset($searchText) && (!empty($actors)) }
        <h2>Found some actors..</h2>
        <nav>
            <a class="button" href="/paskaitos/sql/38p/movies/">
                <span>Home</span>
            </a>
        </nav>
    {else}
        <h2>Actors List</h2>
    {/if}
</header>
<main>
    {if (!empty($actors))}
        <div class='actors-table'>
            <ul>
                {foreach $actors as $actor}
                    <li><a href="/paskaitos/sql/38p/movies/actor/{$actor.id}">
                            {ucfirst(strtolower($actor.first_name))}
                            {ucfirst(strtolower($actor.last_name))}</a>
                    </li>
                {/foreach}
            </ul>
        </div>
    {else}
        <div class="not-found">
            Nothing found.
        </div>
    {/if}
</main>
<footer>
    2023 &COPY Ignas
</footer>
</body>
</html>
