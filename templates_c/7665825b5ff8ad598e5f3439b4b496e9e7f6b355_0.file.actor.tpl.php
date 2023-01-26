<?php
/* Smarty version 4.3.0, created on 2023-01-25 19:53:45
  from 'C:\xampp\htdocs\paskaitos\SQL\38p\movies\src\Views\actor.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63d17ab9394da7_37862715',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7665825b5ff8ad598e5f3439b4b496e9e7f6b355' => 
    array (
      0 => 'C:\\xampp\\htdocs\\paskaitos\\SQL\\38p\\movies\\src\\Views\\actor.tpl',
      1 => 1674672777,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63d17ab9394da7_37862715 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title><?php echo ucfirst(strtolower($_smarty_tpl->tpl_vars['actor']->value[0]['first_name']));?>
 <?php echo ucfirst(strtolower($_smarty_tpl->tpl_vars['actor']->value[0]['last_name']));?>
</title>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_54796521363d17ab9389d57_03989611', "css");
?>


</head>
<body>

<header>
    <h2><?php echo ucfirst(strtolower($_smarty_tpl->tpl_vars['actor']->value[0]['first_name']));?>
 <?php echo ucfirst(strtolower($_smarty_tpl->tpl_vars['actor']->value[0]['last_name']));?>
</h2>
    <nav>
        <a class="button" href="<?php echo $_smarty_tpl->tpl_vars['previous']->value;?>
">
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
            <h1 class="actor-name"><?php echo ucfirst(strtolower($_smarty_tpl->tpl_vars['actor']->value[0]['first_name']));?>
</h1>
            <h1 class="actor-name"><?php echo ucfirst(strtolower($_smarty_tpl->tpl_vars['actor']->value[0]['last_name']));?>
</h1>
        </div>
    </aside>
    <section class="actor-film-list">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['movieList']->value, 'movie');
$_smarty_tpl->tpl_vars['movie']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['movie']->value) {
$_smarty_tpl->tpl_vars['movie']->do_else = false;
?>
            <a href="/paskaitos/sql/38p/movies/movie/<?php echo $_smarty_tpl->tpl_vars['movie']->value['id'];?>
"><h2 class="movie-title"><?php echo $_smarty_tpl->tpl_vars['movie']->value['title'];?>
</h2></a>
            <h4 class="release-year"><?php echo $_smarty_tpl->tpl_vars['movie']->value['release_year'];?>
</h4>
            <p class="description"><?php echo $_smarty_tpl->tpl_vars['movie']->value['description'];?>
</p>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </section>

</main>
<footer>
    2023 &COPY Ignas
</footer>

</body>
</html><?php }
/* {block "css"} */
class Block_54796521363d17ab9389d57_03989611 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'css' => 
  array (
    0 => 'Block_54796521363d17ab9389d57_03989611',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css"
              integrity="sha512-NhSC1YmyruXifcj/KFRWoC561YpHpc5Jtzgvbuzx5VozKpWvQ+4nXhPdFgmx8xqexRcpAglTj9sIBWINXa8x5w=="
              crossorigin="anonymous" referrerpolicy="no-referrer"/>
        <link rel="stylesheet" type="text/css" href="./../src/Public/Assets/CSS/actor.css" media="all"/>
    <?php
}
}
/* {/block "css"} */
}
