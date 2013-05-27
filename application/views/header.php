<?php
if( ! isset($_SESSION) )
{
	session_start();
}
?>
<?php echo load_css("theme.css");?>
<?php echo load_css("source/style.css");?>
<?php echo load_css("smoothness/jquery-ui-1.10.3.custom.css");?>
<?php echo load_css("smoothness/jquery-ui-1.10.3.custom.min.css");?>
<?php echo load_js("jquery-ui/js/jquery-1.9.1.js");?>
<?php echo load_js("jquery-ui/js/jquery-ui-1.10.3.custom.js");?>
<?php echo load_js("jquery-ui/js/jquery-ui-1.10.3.custom.min.js");?>
<div id="container">
	<div id="header">
		<h1>
			PhPersonel
		</h1>
	</div>
	<div id="navigation">
		<ul>
			<li><a href="http://<?php echo $_SERVER['HTTP_HOST'] ?>/PhPersonel/">Home</a></li>
			<li><a href="http://<?php echo $_SERVER['HTTP_HOST'] ?>/PhPersonel/index.php/despesas/listView/">Despesas</a></li>
			<li><a href="http://<?php echo $_SERVER['HTTP_HOST'] ?>/PhPersonel/index.php/receitas/listView/">Receitas</a></li>
			<li><a href="http://<?php echo $_SERVER['HTTP_HOST'] ?>/PhPersonel/index.php/pagamentos/listView/">Pagamentos</a></li>
			<li><a href="http://<?php echo $_SERVER['HTTP_HOST'] ?>/PhPersonel/index.php/home/logoff">Sair</a></li>
		</ul>
	</div>