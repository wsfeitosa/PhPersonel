$(document).ready(function(){
	
	$("#send").click(function(){
		
		var erro = false;
		var msg = "";
		
		if( $("#usuario").val() == "" )
		{
			erro = true;
			msg += "Informe o login\n";
		}
		
		if( $("#senha").val() == "" )
		{
			erro = true;
			msg += "Informe a senha";
		}
		
		if( erro == true )
		{
			alert(msg);
			return false;
		}
		else
		{
			$("#form_login").submit();
		}	
		
	});
	
});