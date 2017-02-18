<div class="row">
<h1>Professor</h1>
<ol class="breadcrumb">
<li><a href="#">Maestro</a></li>
<li class="active">Professor</li>
</ol>
</div>
<?php if (isset ( $_GET ['formulario']) && $_GET['formulario'] == 0) { ?>
					<div class="row">
						<a href="professor_lista.php?menu=professor&formulario=1" class="btn btn-success">Adicionar</a>
					<?php 
						//Exibir as mensagem de retorno
						$msg=filter_input(INPUT_GET,'msg', FILTER_SANITIZE_STRING);
						if($msg){
							echo $msg;
							}
					$ponteiroArquivo= fopen('arquivo_professor.txt','r');
					?>	
						<table class="table table-striped table-bordered table-hover">
							<tr>
								<td>ID</td>
								<td>Nome</td>
								<td>Email</td>
	                            <td>Disciplina</td>
	                          	<td>Unidade</td>
								<td>Ações</td>
							</tr>
						<?php 
						//percorer o arquivo
							while(!feof($ponteiroArquivo)){
							$linha= fgets($ponteiroArquivo,1024);
							$dados= explode(';',$linha);
						?>
							<tr>
								<td><?=$dados[0];?></td>
								<td><?=$dados[1];?></td>
								<td><?=$dados[2];?></td>
								<td><?=$dados[3];?></td>
								<td><?=$dados[4];?></td>
								
								<td><a href="professor_lista.php?menu=professor&formulario=1&id=<?=$dados[0];?>" class="btn btn-info">Editar</a>
								 <a href="professor_deleta.php?id=<?=$dados[0];?>"class="btn btn-danger">Deletar</a></td>
							</tr>
							
						<?php
							}
						?>
						</table>
					</div>
					
				
				<?php } else { ?>
				<?php 
			 (isset($_GET['msg']))?$_GET['msg']:'';
				$id=filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
				$registro=array();
				IF($id){
					$ponteiroArquivo= fopen('arquivo_professor.txt', 'r');
					while(!feof($ponteiroArquivo)){
						$linha=fgets($ponteiroArquivo, 1024);
						$dados=explode(';', $linha);
						if($dados[0]==$id){
							$registro=$dados;
						}
					}
				}
			
			?>
					
					<form>
						<label for="id" class="labelform"> ID </label>
						<input type="text" name="id" id="id" class="inputform" value="<?=isset($registro[0])?$registro[0]:'';?>"/> 
						
						<label for="nome" class="labelform"> Nome </label>
						<input type="text" name="nome" id="nome" class="inputform" value="<?=isset($registro[1])?$registro[1]:'';?>"/> 
						
						<label for="sexo" class="labelform"> Email </label>
						<input type="text" name="sexo" id="sexo" class="inputform" value="<?=isset($registro[2])?$registro[2]:'';?>"/> 
						
						<label for="disciplina" class="labelform"> Disciplina </label>
						<input type="text" name="disciplina" id="disciplina" class="inputform" value="<?=isset($registro[3])?$registro[3]:'';?>"/> 
						
						<label for="unidade" class="labelform"> Unidade </label>
						<input type="text" name="unidade" id="unidade" class="inputform" value="<?=isset($registro[4])?$registro[4]:'';?>"/> 
						
						<input type="submit" value="Salvar"/>
					</form>
				<?php 
							} 
				?>	
			
		 	
		