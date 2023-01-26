<?php
/* Smarty version 4.3.0, created on 2023-01-26 16:59:23
  from 'C:\xampp\htdocs\paskaitos\SQL\38p\movies\src\Views\smarthome.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63d2a35bf3a8c6_20306049',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a26b13a62b4d1e881c38c71a0bc69e0b0bd00f27' => 
    array (
      0 => 'C:\\xampp\\htdocs\\paskaitos\\SQL\\38p\\movies\\src\\Views\\smarthome.tpl',
      1 => 1674748087,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63d2a35bf3a8c6_20306049 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Movie Database</title>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_164497744063d2a35bd518a0_83288366', "css");
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_83879230563d2a35bd92711_17666641', "js");
?>


</head>
<body>
<header>
    <div class="search-bar">
        <form>
            <input class="search-input" placeholder="Search..." name="search_text" size="50" required>
            <button type="submit">Search</button>
        </form>
    </div>

    <?php if ((isset($_smarty_tpl->tpl_vars['searchText']->value)) && (!empty($_smarty_tpl->tpl_vars['actors']->value))) {?>
        <h2>Found some actors..</h2>
        <nav>
            <a class="button" href="/paskaitos/sql/38p/movies/">
                <span>Home</span>
            </a>
        </nav>
    <?php } else { ?>
        <h2>Actor List</h2>
    <?php }?>
</header>
<main>
    <?php if ((!empty($_smarty_tpl->tpl_vars['actors']->value))) {?>
        <div class='actors-table'>
            <ul>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['actors']->value, 'actor');
$_smarty_tpl->tpl_vars['actor']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['actor']->value) {
$_smarty_tpl->tpl_vars['actor']->do_else = false;
?>
                    <li><a href="/paskaitos/sql/38p/movies/actor/<?php echo $_smarty_tpl->tpl_vars['actor']->value['id'];?>
">
                            <?php echo ucfirst(strtolower($_smarty_tpl->tpl_vars['actor']->value['first_name']));?>

                            <?php echo ucfirst(strtolower($_smarty_tpl->tpl_vars['actor']->value['last_name']));?>
</a>
                    </li>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </ul>
        </div>
    <?php } else { ?>
        <div class="not-found">
            Nothing found.
        </div>
    <?php }?>
</main>
<footer>
    2023 &COPY Ignas
</footer>
</body>
</html>
<?php }
/* {block "css"} */
class Block_164497744063d2a35bd518a0_83288366 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'css' => 
  array (
    0 => 'Block_164497744063d2a35bd518a0_83288366',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css"
              integrity="sha512-NhSC1YmyruXifcj/KFRWoC561YpHpc5Jtzgvbuzx5VozKpWvQ+4nXhPdFgmx8xqexRcpAglTj9sIBWINXa8x5w=="
              crossorigin="anonymous" referrerpolicy="no-referrer"/>
        <link rel="stylesheet" type="text/css" href="./src/Public/Assets/CSS/home.css" media="all"/>
    <?php
}
}
/* {/block "css"} */
/* {block "js"} */
class Block_83879230563d2a35bd92711_17666641 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'js' => 
  array (
    0 => 'Block_83879230563d2a35bd92711_17666641',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php echo '<script'; ?>
 src="./src/Public/Assets/js/smarthome.js"><?php echo '</script'; ?>
>
    <?php
}
}
/* {/block "js"} */
}
