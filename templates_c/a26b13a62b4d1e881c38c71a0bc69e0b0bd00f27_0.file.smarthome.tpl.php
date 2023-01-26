<?php
/* Smarty version 4.3.0, created on 2023-01-26 22:40:46
  from 'C:\xampp\htdocs\paskaitos\SQL\38p\movies\src\Views\smarthome.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63d2f35e429157_91630211',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a26b13a62b4d1e881c38c71a0bc69e0b0bd00f27' => 
    array (
      0 => 'C:\\xampp\\htdocs\\paskaitos\\SQL\\38p\\movies\\src\\Views\\smarthome.tpl',
      1 => 1674768792,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63d2f35e429157_91630211 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Smart Search View</title>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css"
              integrity="sha512-NhSC1YmyruXifcj/KFRWoC561YpHpc5Jtzgvbuzx5VozKpWvQ+4nXhPdFgmx8xqexRcpAglTj9sIBWINXa8x5w=="
              crossorigin="anonymous" referrerpolicy="no-referrer"/>
        <link rel="stylesheet" type="text/css" href="./src/Public/Assets/CSS/home.css" media="all"/>

        <?php echo '<script'; ?>
 src="./src/Public/Assets/js/smarthome.js" type="module"><?php echo '</script'; ?>
>


</head>
<body>
<header>
    <div class="search-bar">
        <form onSubmit="return false;">
            <input class="search-input" placeholder="Type here to search..." name="search_text" size="50" id="searchInput" required>
        </form>
    </div>
        <h2 id="title">Actors List</h2>
        <nav>
            <a class="button" href="/paskaitos/sql/38p/movies/">
                <span>Home</span>
            </a>
        </nav>
</header>
<main>
        <div class='actors-table'>
            <ul id="actors-list"></ul>
        </div>
        <div class="not-found"></div>
</main>
<footer>
    2023 &COPY Ignas
</footer>
</body>
</html>
<?php }
}
