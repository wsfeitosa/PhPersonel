	<?php echo load_js("despesas/listView.js");?>
	<?php echo form_open("/usuarios/login",Array('id' => 'form_login'));?>
	<div id="content">
		
		<table align="center" >
		 
			<tr>
				<th><label>Número</label></th>
	            <th><label>Descrição</label></th>
	            <th><label>Valor</label></th>
	            <th><label>Custo Fixo</label></th>
	            <th><label>Ações</label></th>	            
			</tr>			
		 
		<?php foreach($despesas as $despesa):?>
			
			<tr>				
				<td><label><?php echo $despesa->getCostNumber();?></label></td>
				<td><label><?php echo $despesa->getCostDescription();?></label></td>
				<td><label><?php echo $despesa->getCostValue();?></label></td>
				<td><label><?php echo $despesa->getFixedCost() == "S" ? "SIM" : "NÃO"; ?></label></td>
				<td>
					<label>
					<?php echo anchor("#","Vizualizar");?> |
					<?php echo anchor("#","Alterar");?> |
					<?php echo anchor("#","Excluir");?>
					</label>
				</td>				
			</tr>
		<?php endforeach;?>	
		
		</table>
		
	</div>
	<?php echo form_close();?>