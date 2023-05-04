<?php
/*
$corpo = "
	Curso Selecionado: ".$_POST['selecaocursos']."
	Nome Completo: " .$_POST['first_name']."
	Sobrenome: ".$_POST['last_name']."
	Data de Nascimento: ".$_POST['date']."
	Local de Nascimento: ".$_POST['local']."
	E-mail: ".$_POST['email_form']."
	Telefone: ".$_POST['telefone']."
	Endereço: ".$_POST['endereco_form']."
	CEP: ".$_POST['cep']."
	Cidade: ".$_POST['cidade']."
	Estado: ".$_POST['estado']."
	RG: ".$_POST['identidade']."
	CPF: ".$_POST['cpf']."
	Curso(s) já feito(s): ".$_POST['cursos_feitos']."
	Outro(s): ".$_POST['outros_form']."
	Como tomou conhecimento do curso: ".$_POST['conhecimento']."
	Mensagem: ".$_POST['mensagem']."
";

$headers = "Content-Type: text/plain;charset=utf-8\r\n";
$headers .= "From: $email_form\r\n";
$headers .= "Reply-To: $email_form\r\n";

$email_to = 'rainbowmarzo@outlook.com.br'; //11/09/2021

// Enviando email
$status = mail($email_to, mb_encode_mimeheader("Formulário de Inscrição", "utf-8"), $corpo, $headers);

		if ($status):
			 // Enviada com sucesso
			header('location:index.php?status=sucesso');
			else:
			 // Se der erro
			header('location:index.php?status=erro');
		endif;
*/

    $selecaocursos = $_POST['selecaocursos'];
	$first_name = $_POST['first_name'];
	$last_name = $_POST['last_name'];
	$date = $_POST['date'];
	$local = $_POST['local'];
	$email_form = $_POST['email_form'];
	$telefone = $_POST['telefone'];
	$endereco_form = $_POST['endereco_form'];
	$cep = $_POST['cep'];
	$cidade = $_POST['cidade'];
	$estado = $_POST['estado'];
	$identidade = $_POST['identidade'];
	$cpf = $_POST['cpf'];
	$cursos_feitos = $_POST['cursos_feitos'];
	$outros_form = $_POST['outros_form'];
	$conhecimento = $_POST['conhecimento'];
	$mensagem = $_POST['mensagem'];

$myEmail = "postmaster@merkabahdourado.com.br";//é necessário informar um e-mail do próprio domínio
$headers = "From: $myEmail\r\n";
$headers .= "Reply-To: $email\r\n";

/*abaixo contém os dados que serão enviados para o email
cadastrado para receber o formulário*/

$corpo = "Curso Selecionado: " . $selecaocursos . "\n";
$corpo .= "Nome: " .	$first_name . "\n";
$corpo .= "Sobrenome: " .	$last_name . "\n";
$corpo .= "Data nascimento: " .	$date . "\n";
$corpo .= "Local de nascimento: " .	$local . "\n";
$corpo .= "E-mail: " .	$email_form . "\n";
$corpo .= "Telefone: " .	$telefone . "\n";
$corpo .= "Endereço: " .	$endereco_form . "\n";
$corpo .= "CEP: " .	$cep . "\n";
$corpo .= "Cidade: " .	$cidade . "\n";
$corpo .= "Estado: " .	$estado . "\n";
$corpo .= "RG: " .	$identidade . "\n";
$corpo .= "CPF: " .	$cpf . "\n";
$corpo .= "Cursos já feitos: " .	$cursos_feitos . "\n";
$corpo .= "Outros: " .	$outros_form . "\n";
$corpo .= "Conhecimento: " .	$conhecimento . "\n";
$corpo .= "Mensagem: " .	$mensagem . "\n";

$email_to = 'canalli.val8618@gmail.com';//'rainbowmarzo@outlook.com.br';
//não esqueça de substituir este email pelo seu.

$status = mail($email_to, "Formulário de Inscrição", $corpo, $headers);
//enviando o email.

if ($status) {
  //echo "<script> alert('Formulário enviado com sucesso!'); </script>";
  header('location:index.php?status=sucesso');
  
//mensagem de form enviado com sucesso.

} else {
  header('location:index.php?status=erro'); //echo "<script> alert('Falha ao enviar o Formulário.'); </script>";
  
  /*if ($status):
			 // Enviada com sucesso
			header('location:index.php?status=sucesso');
			else:
			 // Se der erro
			header('location:index.php?status=erro');
		endif;*/
  
//mensagem de erro no envio. 

}
?>