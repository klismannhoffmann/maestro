<html>
<head>
<title>Maestro</title>
<link rel="stylesheet" href='./css/bootstrap.css' />
<link rel="stylesheet" href='./css/estilo.css' />
<script src="https://code.jquery.com/jquery-3.1.1.js"></script>
<script src="./js/bootstrap.js"></script>

</head>
<body>
	<header>
		<div class="container">
			<div class="row">
				<div class="col-lg-4">
					<img src="./img/maestro.png" alt=" Logo do Sistema" id="logo" />
				</div>
				<div class=" col-lg-8" id="menu">
					<ul class="nav nav-pills pull-right ">
						<li role="presentation"
							class="<?=( isset($_GET['menu']) && $_GET['menu']=='dashboard')?'active':'';?>"><a
							href="aluno_lista.php?menu=dashboard">Dashboard</a></li>
						<li role="presentation"
							class="<?=( isset($_GET['menu']) && $_GET['menu']=='aluno')?'active':'';?>"><a
							href="aluno_lista.php?menu=aluno">Alunos</a></li>
						<li role="presentation"
							class="<?=( isset($_GET['menu']) && $_GET['menu']=='professor')?'active':'';?>"><a
							href="aluno_lista.php?menu=professor">Professores</a></li>
						<li role="presentation"
							class="<?=( isset($_GET['menu']) && $_GET['menu']=='coordenador')?'active':'';?>"><a
							href="aluno_lista.php?menu=coordenador">Coordenadores</a></li>
						<li role="presentation"
							class="<?=( isset($_GET['menu']) && $_GET['menu']=='sair')?'active':'';?>"><a
							href="aluno_lista.php?menu=sair">Sair</a></li>
					</ul>
				</div>
			</div>

		</div>

	</header>

	<div id="content">
		<div class="container">
			<?php
			if (isset ( $_GET ['menu'] ) && $_GET ['menu'] == 'aluno') 
			{
				?>
				<div class="row">
					<h1>Dashboard</h1>
					<ol class="breadcrumb">
						<li><a href="#">Maestro</a></li>
						<li>Aluno</li>
					</ol>
				</div>
				
				<?php if(isset($_GET['formulario']) && $_GET['formulario'] =="0"){?>
					<div class="row">
						<a href="aluno_lista.php?menu=aluno&formulario=1" class=" btn btn-success"> Adicionar</a>
						<table class="table table-striped table-bordered table-hover">
							<tr>
								<td>ID</td>
								<td>Usuario</td>
								<td>Ações</td>
							</tr>
							<tr>
								<td>1</td>
								<td>klismann</td>
								<td><a href="#" class="btn btn-info">Editar</a> 
								<a href="#"	class="btn btn-danger">Deletar</a></td>
							</tr>
						</table>
					</div>
				<?php } else {?>
			<form action="" method="post">
			<label for="nome">Nome </label>			
			<input type="text" name="nome" id="nome"/>
			<br/>
			<br/>
			
			<label for="sobrenome">Sobrenome </label>			
			<input type="text" name="sobrenome" id="sobrenome"/>
			<br/>
			<br/>

			<label for="data_de_nascimento">Nascimento </label>			
			<input type="text" name="data_de_nascimento" id="data_de_nascimento"/>
		        <br/>
			<br/>
	
			<label for="sexo">Sexo </label>			
			<input type="text" name="sexo" id="sexo"/>
			</br>
			</br>	
			
			<input type="checkbox" id="c1" name="check" value="masculino"/>	
			<label for="c1"> M </label>
			<input type="checkbox" id="c1" name="check" value="feminino"/>	
			<label for="c1"> F </label>

			<input type="radio" id="c1" name="radio2" value="masculino"/>	
			<label for="c1"> M </label>
			<input type="radio" id="c1" name="radio2" value="feminino"/>	
			<label for="c1"> F </label>
			</br>
			</br>

			<textarea name="t1" placeholder="Digite"/>


			</textarea>					
			
			</br>
			</br>
			<input type="submit"/>
 	
		</form>    		 	       

				
					
				<?php } ?>
				<?php
			}
			
			
			if (isset ( $_GET ['menu'] ) && $_GET ['menu'] == 'dashboard') 
			{
				?>
					<div class="row">
					<h1>Dashboard</h1>
					<ol class="breadcrumb">
						<li><a href="#">Maestro</a></li>
						<li>Dashboard</li>
					</ol>
					</div>
					
				<?php 
			}
			
			
			if (isset ( $_GET ['menu'] ) && $_GET ['menu'] == 'coordenador') 
			{
				?> 
			<div class="row">
					<h1>Dashboard</h1>
					<ol class="breadcrumb">
						<li><a href="#">Maestro</a></li>
						<li>Coordenador</li>
					</ol>
				</div>
				<?php if(isset($_GET['formulario']) && $_GET['formulario'] =="0"){?>
				<div class="row">
					<a href="aluno_lista.php?menu=coordenador&formulario=1" class=" btn btn-success"> Adicionar</a>
					<table class="table table-striped table-bordered table-hover">
						<tr>
							<td>ID</td>
							<td>Usuario</td>
							<td>Ações</td>
						</tr>
						<tr>
							<td>1</td>
							<td>klismann</td>
							<td><a href="#" class="btn btn-info">Editar</a> 
							<a href="#"	class="btn btn-danger">Deletar</a></td>
						</tr>
					</table>
				</div>
			<?php
			} else {?>
			<form action="" method="post">
			<label for="nome">Nome </label>			
			<input type="text" name="nome" id="nome"/>
			<br/>
			<br/>
			
			<label for="sobrenome">Sobrenome </label>			
			<input type="text" name="sobrenome" id="sobrenome"/>
			<br/>
			<br/>

			<label for="data_de_nascimento">Nascimento </label>			
			<input type="text" name="data_de_nascimento" id="data_de_nascimento"/>
		        <br/>
			<br/>
	
			<label for="sexo">Sexo </label>			
			<input type="text" name="sexo" id="sexo"/>
			</br>
			</br>	
			
			<input type="checkbox" id="c1" name="check" value="masculino"/>	
			<label for="c1"> M </label>
			<input type="checkbox" id="c1" name="check" value="feminino"/>	
			<label for="c1"> F </label>

			<input type="radio" id="c1" name="radio2" value="masculino"/>	
			<label for="c1"> M </label>
			<input type="radio" id="c1" name="radio2" value="feminino"/>	
			<label for="c1"> F </label>
			</br>
			</br>

			<textarea name="t1" placeholder="Digite"/>


			</textarea>					
			
			</br>
			</br>
			<input type="submit"/>
 	
		</form>    		 	       
			
			if (isset ( $_GET ['menu'] ) && $_GET ['menu'] == 'professor') 
			{
				?>
				<div class="row">
					<h1>Dashboard</h1>
					<ol class="breadcrumb">
						<li><a href="#">Maestro</a></li>
						<li>Professor</li>
					</ol>
				</div>
				<div class="row">
					<a href="#" class=" btn btn-success"> Adicionar</a>

					<table class="table table-striped table-bordered table-hover">
						<tr>
							<td>ID</td>
							<td>Usuario</td>
							<td>Ações</td>
						</tr>
						<tr>
							<td>1</td>
							<td>klismann</td>
							<td><a href="#" class="btn btn-info">Editar</a>
							<a href="#"	class="btn btn-danger">Deletar</a></td>
						</tr>
					</table>
				</div>
				<?php 			}
			
			if (isset ( $_GET ['menu'] ) && $_GET ['menu'] == 'sair') 
			{
			?> <div class="row">
					<h1>Dashboard</h1>
					<ol class="breadcrumb">
						<li><a href="#">Maestro</a></li>
						<li>Sair</li>
					</ol>
					</div>
					<form>
						<h1> Você deseja realmente sair?</h1>
						<input type="submit" value= "Sim"/>
					</form>
			<?php 
			}
			?>
		</div>
	</div>

	<footer>
		<div class="container">
			<div class="row">
				<div class="col-lg-12 text-center">
					<p>Sistema Maestro. Versão 1.0.0.1</p>
				</div>
			</div>
		</div>

	</footer>
</body>
</html>