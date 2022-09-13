INDEX.PHP
<html>
				<head>
								<meta	charset="UTF-8">
								<title></title>
				</head>
				<body>
								<h3>Cadastro	de	Animais</h3>
								<form	action="recebe.php.php"	method="get">
												Dono	do	animal:<input	type="text"	name="dono"	placeholder="Informe	o	
nome"><br><br>
												Telefone	para	contato:<input	type="text"	name="telefone"><br><br>
												Nome	do	animal:<input	type="text"	name="animal"	placeholder="Informe	o	
nome	do	animal"><br><br>
													Espécie	do	animal:
												<select	name="especialidade">
																<option	value="">Selecione</option>
																<option	value="FELINO">FELINO</option>
																<option	value="CACHORRO">CACHORRO</option>
																</select>
												Data	da	consulta:<input	type="date"	name="data"><br><br>
												Tipo	de	procedimento:
												<select	name="procedimento">
																<option	value="">Selecione</option>
																<option	value="BANHO">BANHO</option>
																<option	value="TOSA">TOSA</option>
																<option	value="VACINAÇÃO">VACINAÇÃO</option>
																<option	value="VERMIFUGAÇÃO">VERMIFUGAÇÃO</option>
												</select><br>
												
												Tamanho	do	animal:<br>
												<input	type="radio"	name="tam"	value="Pequeno"	>Pequeno<br>
												<input	type="radio"	name="tam"	value="Medio"	>Médio<br>
												<input	type="radio"	name="tam"	value="Grande"	>Grande<br>
												
												<br>
												
												<input	type="submit"	name="submit"	value="Enviar">
												<input	type="reset"	name="cancelar"	value="Cancelar">
												
								</form>
				</body>
</html>
RECEBE.PHP.PHP
<?php
			$dono=$_GET["dono"];
			$telefone=$_GET["telefone"];
			$nome_animal=$_GET["animal"];
			$especie=$_GET["especialidade"];
			$data_da_consulta=$_GET["especialidade"];
			$procedimento=$_GET["procedimento"];
			$valida=	isset($_GET["tam"]);
			
			if(empty($valida)){
							echo'Não	foi	preenchido	o	tamanho	do	animal';
			}
			else{
							$tam=($_GET["tam"]);
							
			echo'Nome	do	dono:'.$dono.'<br>';
			echo'Telefone:'.$telefone.'<br>';
			echo'Nome	do	animal:'.$nome_animal.'<br>';
			echo'Especialidade:'.$especie.'<br>';
			echo'Data:'.$data_da_consulta.'<br>';
			echo'Procedimento:'.$procedimento.'<br>';
			echo'Tamanho	do	animal:'.$tam.'<br>';
			}
