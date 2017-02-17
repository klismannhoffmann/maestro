<?php
$id = filter_input ( INPUT_GET, 'id', FILTER_VALIDATE_INT );
IF ($id) {
	// abrir o arquivo
	$ponteiroArquivo = fopen ( 'arquivo_aluno.txt', 'r' );
	$buffer = array ();
	while ( ! feof ( $ponteiroArquivo ) ) {
		$linha = fgets ( $ponteiroArquivo, 1024 );
		$linhaAtual = explode ( ';', $linha );
		if ($linhaAtual[0] != $id) {
			$buffer[] = $linha;
		}
	}
	fclose ( $ponteiroArquivo ); // fecha o arquivo
		
	$ponteiroArquivo1 = fopen ('arquivo_aluno.txt','w');
	foreach ( $buffer as $linha1 ) {
		fwrite ( $ponteiroArquivo1, $linha1);
	}
	fclose ( $ponteiroArquivo1 );//fecha o arquivo
	$mensagem='Exclusão Realizado com Sucesso';
	header ( "location:/maestro/aluno_lista.php?msg=$mensagem&menu=aluno&formulario=0" );
	
}else {
	$mensagem='Informe um id para deletar';
	header ( "location:/maestro/aluno_lista.php?msg=$mensagem&menu=aluno&formulario=0" );
}

?>