	
	<?php echo load_js("usuarios/login.js");?>
	<?php echo form_open("/usuarios/login",Array('id' => 'form_login'));?>
	<div id="content">
		
		
		<label for="user">Usu�rio:</label>
		<?php echo form_input("usuario","","id='usuario'"); ?><p />
		
		<label for="user">Senha:</label>
		<?php echo form_password("senha","","id='senha'"); ?><p />
		
		<?php echo form_button("send","Enviar","id='send'"); ?>
	
	</div>
	<?php echo form_close();?>