<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>404 Error</title>
{*    {block name="css"}*}
{*        <link rel="stylesheet" href="./../assets/css/404.css" media="all"/>*}
{*    {/block}*}
</head>
<style>
    :root {
        font-family: "Segoe UI", Tahoma, Verdana, sans-serif;
        --height: 100vh;
        --font-size: 3rem;
        --padding: 2rem;
    }

    body {
        height: var(--height);
        margin: 0;
        padding: 0;
    }

    div {
        margin: 0;
        text-align: center;
        padding-top: calc(var(--height) / 2 - var(--font-size) - var(--padding) / 2);
    }

    p {
        text-shadow: #1e425d 2px 2px 10px,
        darkslateblue 4px 4px 5px,
        pink 6px 6px 10px;
        margin: 0;
        padding: 2rem;
        display: inline-block;
        font-size: var(--font-size);
        border: 2px dashed forestgreen;
    }
</style>
<body>
<div>
    <p>404: Page not found</p>
</div>
</body>
</html>