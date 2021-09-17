
window.onload = function ()
{
	f = document.getElementById("f");
	f.onsubmit = function()
	{
		alert("cheguei");

		if (f.nome.value.length == 0 )
		  {
		  	alert("O nome não pode estar vazio!");
		  	return false;
		  }

		if (!isNaN(f.nome.value))
		 {
		 	alert("Permitido somente letras no nome");
		 	f.nome_pessoa.focus();
		 	return false;
		 }

		 
		 if (f.cpf.value[3] !='.') 
		 {
		 	alert("Seu CPF não esta no formato correto!");
		 	return false;
		 }

		 if (f.cpf.value[7] !='.') 
		 {
		 	alert("Seu CPF não esta no formato correto!");
		 	return false;
		 }

		 if (f.cpf.value[11] !='-') 
		 {
		 	alert("Seu CPF não esta no formato correto!");
		 	return false;
		 }

		 if (f.telefone.value.length == 0) 
		 {
		 	alert("O numero de telefone não pode estar vazio");
		 	return false;
		 }

		if (f.telefone.value[0] !='(') 
		 {
		 	alert("Seu numero de telefone não esta no formato correto!");
		 	return false;
		 }

		 if (f.telefone.value[3] !=')') 
		 {
		 	alert("Seu numero de telefone não esta no formato correto!");
		 	return false;
		 }
		  if (f.telefone.value[9] !='-') 
		 {
		 	alert("Seu numero de telefone não esta no formato correto!");
		 	return false;
		 }

		 

		
		 if (f.rua.value.length == 0) 
		 {
		 	alert("O nome da rua não pode estar vazio");
		 	return false;
		 }

		 if (!isNaN(f.rua.value))
		 {
		 	alert("Permitido somente letras no nome da rua");
		 	f.rua_.focus();
		 	return false;
		 }

		 if (f.numero.value.length == 0) 
		 {
		 	alert("O numero da rua não pode estar vazio");
		 	return false;
		 }

		 if (isNaN(f.numero.value))
		 {
		 	alert("Permitido somente Numeros no numero da casa");
		 	f.numero.focus();
		 	return false;
		 }

		 if (f.bairro.value.length == 0) 
		 {
		 	alert("O Bairro  não pode estar vazio");
		 	return false;
		 }

		 if ( !isNaN(f.bairro.value)) 
		 {
		 	alert("Não e permitido numeros no nome do bairro");
		 	return false;
		 }
		 

		 if (f.cidade.value.length == 0) 
		 {
		 	alert("a Cidade não pode estar vazio");
		 	return false;
		 }

		 if ( !isNaN(f.cidade.value)) 
		 {
		 	alert("Não e permitido numeros no nome da Cidade");
		 	return false;
		 }

	}
}



