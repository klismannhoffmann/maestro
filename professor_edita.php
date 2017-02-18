
<?php
// receber as variaveis
// trim é usado para eliminar espaços antes e depois da string
//Os filter fazem a segurança das
$id= FILTER_INPUT(INPUT_POST ,'id', FILTER_VALIDATE_INT);
$nome= FILTER_INPUT(INPUT_POST,'nome', FILTER_SANITIZE_STRING);
$email= FILTER_INPUT(INPUT_POST,'email', FILTER_SANITIZE_STRING);
if(!$id){
	$mensagem = 'Informe o id';
	header ( "location:/maestro/aluno_lista.php?msg=$mensagem&menu=professor&formulario=0" );
}elseif(!$nome){
	$mensagem = 'informe o nome';
	header ( "location:/maestro/aluno_lista.php?msg=$mensagem&menu=professor&formulario=0" );
}elseif (!$email){
	$mensagem = 'Informe o email';
	header ( "location:/maestro/aluno_lista.php?msg=$mensagem&menu=professor&formulario=0" );
}else{
	// abrir o arquivo
	$ponteiroArquivo = fopen ( 'arquivo_professor.txt', 'r' );
	$buffer = array ();
	while ( ! feof ( $ponteiroArquivo ) ) {
		$linha = fgets ( $ponteiroArquivo, 1024 );
		$linhaAtual = explode ( ';', $linha );
		if ($linhaAtual[0] != $id) {
			$buffer[] = $linha;
		}else{
			$buffer[] = "$id;$nome;$email";
		}
	}
	fclose ( $ponteiroArquivo ); // fecha o arquivo
	$ponteiroArquivo1 = fopen ('arquivo_professor.txt','w');
	foreach ( $buffer as $linha1 ) {
		fwrite ( $ponteiroArquivo1, $linha1);
	}
	fclose ( $ponteiroArquivo1 );//fecha o arquivo

	$mensagem='Alterado com Sucesso';
	header ( "location:/maestro/aluno_lista.php?msg=$mensagem&menu=professor&formulario=0" );



}
?>