<!DOCTYPE html>

<html lang="pt-br">

<head>

<meta charset="UTF-8">
	
<title>Incluir Cliente</title>

<script>

function FormValido(vNome, vEndereco, vPostalCode, vPais, vCpf, vPassaporte, vEmail, vDataNascimento) 
{
	//exigir dados 
	if (vNome == "") 
	{
		msg += "Nome não pode ser vazio. <br>";
	}
	
	if (vEndereco == "") 
	{
		msg += "Endereço não pode ser vazio. <br>";
	}
	
	if (vPostalCode == "") 
	{
		msg += "Código Postal não pode ser vazio. <br>";
	}
	
	if (vPais == "") 
	{
		msg += "País não pode ser vazio. <br>";
	}
	
	if (vCpf == "") 
	{
		msg += "País não pode ser vazio. <br>";
	}
	
	if (vPassaporte == "") 
	{
		msg += "País não pode ser vazio. <br>";
	}
	
	if (vEmail == "") 
	{
		msg += "País não pode ser vazio. <br>";
	}
	
	if (vDataNascimento == "") 
	{
		msg += "País não pode ser vazio. <br>";
	}
	return msg;
}

function ValidarForm() 
{
	let objForm = document.getElementById("formCliente");
	console.log("objForm: " + objForm.innerHTML);
	
	
	let strNome = document.getElementById("nome").value;
	let strEndereco = document.getElementById("endereco").value;
	let strPostalCode = document.getElementById("postalCode").value;
	let strPais = document.getElementById("pais").value;
	let strCpf = document.getElementById("cpf").value;
	let strPasssaporte = document.getElementById("passsaporte").value;
	let strEmail = document.getElementById("email").value;
	let strDataNascimento = document.getElementById("dataNascimento").value;
	
	console.log("Nome: " + strNome + " Endereco: " + strEndereco + " Código Postal: " + strPostalCode
					+ " País: " + strPais + " CPF: " + strCpf + " Passaporte: " + strPassaporte + " Email: " +
					strEmail + " Data de Nascimento: " + strDataNascimento);
	
	
	let mensagem = FormValido(strNome, strEndereco, strPostalCode, strPais, strCpf, strPasssaporte, strEmail,
								strPassaporte, strEmail, strDataNascimento);
	
	let objJSON = JSON.stringify(objForm);
	
	console.log("JSON: " + objJSON);

	if (mensagem == "") 
	{
		console.log("Passou na validação");
		EnviarForm(strNome, strEndereco, strPostalCode, strPais, strCpf, strPasssaporte, strEmail,
					strPassaporte, strEmail, strDataNascimento);
	} 
	else 
	{
		document.getElementById("msg").innerHTML = mensagem;
	}
}

function EnviarForm(eNome, eEndereco, ePostalCode, ePais, eCpf, ePassaporte, eEmail, eDataNascimento) 
{
		let xmlHttp = new XMLHttpRequest();
		
		xmlHttp.onreadystatechange = function() 
		{
			if (this.readyState == 4 && this.status == 200) 
			{
				console.log("Chegou resposta: " + this.responseText);
				
				document.getElementById("msg").innerHTML = this.responseText;
				
				let objReturnJSON = JSON.parse(this.responseText);
				
				document.getElementById("retNome").innerHTML = objReturnJSON[0].nome;
				
				document.getElementById("retEndereco").innerHTML = objReturnJSON.endereco;
				
				document.getElementById("retPostalCode").innerHTML = objReturnJSON.postalCode;
				
				document.getElementById("retPais").innerHTML = objReturnJSON.pais;
				
				document.getElementById("retCpf").innerHTML = objReturnJSON.cpf;
				
				document.getElementById("retPassaporte").innerHTML = objReturnJSON.passaporte;
				
				document.getElementById("retEmail").innerHTML = objReturnJSON.email;
				
				document.getElementById("retDataNascimento").innerHTML = objReturnJSON.dataNascimento;
			}
		}
		
		xmlHttp.open("GET", "http://localhost/av2/av2_incluir.php?nome="	+ eNome + eEndereco + ePostalCode + ePais +
						eCpf + ePassaporte + eEmail + eDataNascimento);		  
		xmlHttp.send();
		console.log("Enviei requisição");
	}

</script>
	
</head>

<body>

<h1>Incluir Cliente</h1>

<br>

	<a href="index.html">Home</a><br>
	<a href="av2_incluir.html">Incluir Clientes</a><br>
	<a href="av2_alterar.html">Alterar Clientes</a><br>
	<a href="av2_listar.html">Listar Clientes</a><br>

<br>

<form action="" method=GET id="formCliente">

    Nome: <input type=text name="nome" id="nome"> <br>
    Endereço: <input type=text name="endereco" id="endereco"> <br>
    Código Postal: <input type=text name="postalCode" id="postalCode"> <br>
	Pais: <input type=text name="pais" id="pais"> <br>
    CPF: <input type=text name="cpf" id="cpf"> <br>
    Passaporte: <input type=text name="passaporte" id="passaporte"> <br>
	Email: <input type=text name="email" id="email"> <br>
    Data de Nascimento: <input type=text name="dataNascimento" id="dataNascimento"> <br>

<br><br>

<input type="button" value="Inserir" onclick="ValidarForm()">
	
</form>

<br>

	<p id="msg"></p>
	<p id="retNome"></p>
	<p id="retEndereco"></p>
	<p id="retPostalCode"></p>
	<p id="retPais"></p>
	<p id="retCpf"></p>
	<p id="retPassaporte"></p>
	<p id="retEmail"></p>
	<p id="retDataNascimento"></p>

</body>
</html>
