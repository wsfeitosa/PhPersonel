	<?php echo load_js("despesas/listView.js");?>
	<?php echo form_open("/usuarios/login",Array('id' => 'form_login'));?>
	<div id="content">
		
		<table align="center" id="rounded-corner" summary="Listagens de Custos Gerais">
		 <thead>
			<tr>
				<th scope="col" class="rounded-company">Número</th>
	            <th scope="col" class="rounded-q1">Descrição</th>
	            <th scope="col" class="rounded-q2">Valor</th>
	            <th scope="col" class="rounded-q3">Custo Fixo</th>
	            <th scope="col" class="rounded-q4">Ações</th>	            
			</tr>			
		 </thead>
		 <tfoot>
	    	<tr>
	        	<td colspan="4" class="rounded-foot-left"><em><?php echo $this->pagination->create_links(); ?></em></td>
	        	<td class="rounded-foot-right">&nbsp;</td>
	        </tr>
         </tfoot>
         <tbody>
		<?php foreach($despesas as $despesa):?>
			
			<tr>				
				<td><?php echo $despesa->getCostNumber();?></td>
				<td><?php echo $despesa->getCostDescription();?></td>
				<td><?php echo $despesa->getCostValue();?></td>
				<td><?php echo $despesa->getFixedCost() == "S" ? "SIM" : "NÃO"; ?></td>
				<td>
					<?php echo anchor("#","Vizualizar");?> |
					<?php echo anchor("#","Alterar");?> |
					<?php echo anchor("#","Excluir");?>
				</td>				
			</tr>
		<?php endforeach;?>	
		</tbody>
		</table>
		
	</div>
	<?php echo form_close();?>