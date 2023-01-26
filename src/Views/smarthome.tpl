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
    {block name="js"}
        <script src="./src/Public/Assets/js/smarthome.js" type="module"></script>
    {/block}

</head>
<body>
<header>
    <div class="search-bar">
        <form onSubmit="return false;">
            <input class="search-input" placeholder="Type here to search..." name="search_text" size="50" id="searchInput" required>
        </form>
    </div>
        <h2>Found some actors..</h2>
        <nav>
            <a class="button" href="/paskaitos/sql/38p/movies/">
                <span>Home</span>
            </a>
        </nav>
        <h2>Actor List</h2>

</header>
<main>
        <div class='actors-table'>
            <ul id="actors-list">
            </ul>
        </div>

        <div class="not-found">
            Nothing found.
        </div>
</main>
<footer>
    2023 &COPY Ignas
</footer>
</body>
</html>
