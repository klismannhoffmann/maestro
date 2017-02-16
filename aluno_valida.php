<?php
// receber as variaveis
// trim é usado para eliminar espaços antes e depois da string
//Os filter fazem a segurança das 
$id= FILTER_INPUT(INPUT_POST ,'id', FILTER_VALIDATE_INT); 
$nome= FILTER_INPUT(INPUT_POST,'nome', FILTER_SANITIZE_STRING);
$email= FILTER_INPUT(INPUT_POST,'email', FILTER_SANITIZE_STRING);

if(!$id){
	$mensagem = 'Informe o id';
	header ( "location:/maestro/aluno_lista.php?msg=$mensagem&menu=aluno&formulario=1" );
}elseif(!$nome){
	$mensagem = 'informe o nome';
	header ( "location:/maestro/aluno_lista.php?msg=$mensagem&menu=aluno&formulario=1" );
	
}elseif (!$email){
	$mensagem = 'Informe o email';
	header ( "location:/maestro/aluno_lista.php?msg=$mensagem&menu=aluno&formulario=1" );
	
}else{

	var_dump($id);
	var_dump($nome);
	var_dump($email);
	$arquivo= array();
	$fd=fopen("arquivo_aluno","a");
	fwrite($fd, "$id;$nome;$email\n");
	fclose($fd);
	
}

/*SINTAXE ALTERNATIVA
 
 if(isset($_POST['id´])){
  $id = $_POST ['id'];
} else {
	$id = null;
}
if (isset ( $_POST ['nome'] )) {
	$nome = $_POST ['nome'];
} else {
	$nome = null;
}
if (isset ( $_POST ['email'] )) {
	$email = $_POST ['email'];
} else {
	$email = null;
}

if ($id != null && $nome != null && $email != null) {
	if (trim ( $id ) == '' or ! is_int ( $id )) {
		$mensagem = 'Informe o id';
		header ( "location:/maestro/aluno_lista.php?msg=$mensagem&menu=aluno&formulario=1" );
	} elseif (trim ( $nome ) == '' or ! is_string ( $nome )) {
		$mensagem = 'informe o nome';
		header ( "location:/maestro/aluno_lista.php?msg=$mensagem&menu=aluno&formulario=1" );
	} elseif (trim ( $email ) == '' or ! is_string ( $email )) {
		$mensagem = 'Informe o email';
		header ( "location:/maestro/aluno_lista.php?msg=$mensagem&menu=aluno&formulario=1" );
	} else {
		// aramazendo os dados em um arquivo
	}
} else {
	$mensagem = 'Informe os dados';
	header ( "location:/maestro/aluno_lista.php?msg=$mensagem&menu=aluno&formulario=1" );
}
*/
?>