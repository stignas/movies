<?php
/* Smarty version 4.3.0, created on 2023-01-25 20:50:35
  from 'C:\xampp\htdocs\paskaitos\SQL\38p\movies\src\Views\movie.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63d1880bbe8826_51218021',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '215170c574d478a5fd88322199ea30a74b53d571' => 
    array (
      0 => 'C:\\xampp\\htdocs\\paskaitos\\SQL\\38p\\movies\\src\\Views\\movie.tpl',
      1 => 1674676232,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63d1880bbe8826_51218021 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title><?php echo ucwords(strtolower($_smarty_tpl->tpl_vars['movie']->value[0]['title']));?>
</title>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_168749729263d1880bbd1bf6_49374460', "css");
?>

</head>
<body>
<header>
    <h2><?php echo ucwords(strtolower($_smarty_tpl->tpl_vars['movie']->value[0]['title']));?>
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
    <section class="wrapper">
        <section class="movie-info">
            <h2><?php echo ucwords(strtolower($_smarty_tpl->tpl_vars['movie']->value[0]['title']));?>
</h2>
            <div class="params">
                <li><?php echo $_smarty_tpl->tpl_vars['movie']->value[0]['release_year'];?>
</li>
                <li><?php echo $_smarty_tpl->tpl_vars['movie']->value[0]['rating'];?>
 </li>
                <li><?php echo floor($_smarty_tpl->tpl_vars['movie']->value[0]['length']/60);?>
h <?php echo $_smarty_tpl->tpl_vars['movie']->value[0]['length']%60;?>
min.</li>
                <li><?php echo $_smarty_tpl->tpl_vars['movie']->value[0]['category'];?>
 </li>
                <li><?php echo $_smarty_tpl->tpl_vars['movie']->value[0]['language'];?>
</li>
            </div>
            <hr>
            <div class="featuring-actors">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['actors']->value, 'actor', false, 'i');
$_smarty_tpl->tpl_vars['actor']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['i']->value => $_smarty_tpl->tpl_vars['actor']->value) {
$_smarty_tpl->tpl_vars['actor']->do_else = false;
?>
                    <?php if (($_smarty_tpl->tpl_vars['i']->value < count($_smarty_tpl->tpl_vars['actors']->value)-1)) {?>
                    <a href="/paskaitos/sql/38p/movies/actor/<?php echo $_smarty_tpl->tpl_vars['actor']->value['id'];?>
"><?php echo ucfirst(strtolower($_smarty_tpl->tpl_vars['actor']->value['first_name']));?>
 <?php echo ucfirst(strtolower($_smarty_tpl->tpl_vars['actor']->value['last_name']));?>
</a>,
                    <?php } else { ?>
                        <a href="/paskaitos/sql/38p/movies/actor/<?php echo $_smarty_tpl->tpl_vars['actor']->value['id'];?>
"><?php echo ucfirst(strtolower($_smarty_tpl->tpl_vars['actor']->value['first_name']));?>
 <?php echo ucfirst(strtolower($_smarty_tpl->tpl_vars['actor']->value['last_name']));?>
</a>.
                    <?php }?>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>
            <div class="description">
                <?php echo $_smarty_tpl->tpl_vars['movie']->value[0]['description'];?>

            </div>
            <div class="special-features"><?php echo str_replace(',',', ',$_smarty_tpl->tpl_vars['movie']->value[0]['special_features']);?>
</div>
        </section>
        <section class="get-at">
            <?php if ((empty($_smarty_tpl->tpl_vars['stores']->value))) {?>
                <div class="stores">
                    <li class="not-available">Sorry, currently not available.</li>
                </div>
            <?php } else { ?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['stores']->value, 'store');
$_smarty_tpl->tpl_vars['store']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['store']->value) {
$_smarty_tpl->tpl_vars['store']->do_else = false;
?>
                    <hr>
                    <div class="stores">
                        <li>Available: <?php echo $_smarty_tpl->tpl_vars['store']->value['stock'];?>
pcs</li>
                        <li>Price: <?php echo $_smarty_tpl->tpl_vars['movie']->value[0]['rental_rate'];?>
€</li>
                        <div class="separator"></div>
                        <li><?php echo $_smarty_tpl->tpl_vars['store']->value['address'];?>
, <?php echo $_smarty_tpl->tpl_vars['store']->value['district'];?>
</li>
                        <li><?php echo $_smarty_tpl->tpl_vars['store']->value['city'];?>
, <?php echo $_smarty_tpl->tpl_vars['store']->value['country'];?>
</li>
                    </div>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                <hr>
            <?php }?>
        </section>
    </section>
</main>
<footer>
    2023 &COPY Ignas
</footer>

</body>
</html><?php }
/* {block "css"} */
class Block_168749729263d1880bbd1bf6_49374460 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'css' => 
  array (
    0 => 'Block_168749729263d1880bbd1bf6_49374460',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css"
              integrity="sha512-NhSC1YmyruXifcj/KFRWoC561YpHpc5Jtzgvbuzx5VozKpWvQ+4nXhPdFgmx8xqexRcpAglTj9sIBWINXa8x5w=="
              crossorigin="anonymous" referrerpolicy="no-referrer"/>
        <link rel="stylesheet" type="text/css" href="./../src/Public/Assets/CSS/movie.css" media="all"/>
    <?php
}
}
/* {/block "css"} */
}
