window.onload = function ()
{
	f = document.getElementById("f");
	f.onsubmit = function()
	{
		alert("cheguei");

		if (f.nome_pessoa.value.length == 0 )
		  {
		  	alert("O nome não pode estar vazio!");
		  	return false;
		  }

		if (!isNaN(f.nome_pessoa.value))
		 {
		 	alert("Permitido somente letras no nome");
		 	f.nome_pessoa.focus();
		 	return false;
		 }

		 
		 if (f.cpf_pessoa.value[3] !='.') 
		 {
		 	alert("Seu CPF não esta no formato correto!");
		 	return false;
		 }

		 if (f.cpf_pessoa.value[7] !='.') 
		 {
		 	alert("Seu CPF não esta no formato correto!");
		 	return false;
		 }

		 if (f.cpf_pessoa.value[11] !='-') 
		 {
		 	alert("Seu CPF não esta no formato correto!");
		 	return false;
		 }

		 if (f.telefone_pessoa.value.length == 0) 
		 {
		 	alert("O numero de telefone não pode estar vazio");
		 	return false;
		 }

		
		 if (f.rua_pessoa.value.length == 0) 
		 {
		 	alert("O nome da rua não pode estar vazio");
		 	return false;
		 }

		 if (!isNaN(f.rua_pessoa.value))
		 {
		 	alert("Permitido somente letras ");
		 	f.rua_pessoa.focus();
		 	return false;
		 }

		 if (f.numero_pessoa.value.length == 0) 
		 {
		 	alert("O numero da rua não pode estar vazio");
		 	return false;
		 }

		 if (f.telefone_pessoa.value[0] !='(') 
		 {
		 	alert("Seu numero de telefone não esta no formato correto!");
		 	return false;
		 }

		 if (f.telefone_pessoa.value[3] !=')') 
		 {
		 	alert("Seu numero de telefone não esta no formato correto!");
		 	return false;
		 }
		  if (f.telefone_pessoa.value[9] !='-') 
		 {

		 if (isNaN(f.numero_pessoa.value))
		 {
		 	alert("Permitido somente Numeros ");
		 	f.numero_pessoa.focus();
		 	return false;
		 }

		 if (f.bairro_pessoa.value.length == 0) 
		 {
		 	alert("O Bairro  não pode estar vazio");
		 	return false;
		 }

		 if ( !isNaN(f.bairro_pessoa.value)) 
		 {
		 	alert("Não e permitido numeros no nome do bairro");
		 	return false;
		 }
		 

		 if (f.cidade_pessoa.value.length == 0) 
		 {
		 	alert("a Cidade não pode estar vazio");
		 	return false;
		 }

		 if ( !isNaN(f.cidade_pessoa.value)) 
		 {
		 	alert("Não e permitido numeros no nome da Cidade");
		 	return false;
		 }

	}
}



