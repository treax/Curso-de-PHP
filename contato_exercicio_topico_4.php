<!-- Exercício do tópico 4 do curso de php na Iparos! -->

<!-- ************************************************ -->


<?php
$sucesso = false;

	if(isset($_POST['nome'])){
		$aviso = '';

		$nome = $_POST['nome'];
		$email = $_POST['email'];
		$achou = $_POST['achou'];
		$setor = $_POST['setor'];
		$mensagem = $_POST['mensagem'];

		if(empty($nome)){
			$aviso .= 'Favor preencher o nome<br>';
		}
		if(empty($email)){
			$aviso .= 'Favor preencher o email<br>';
		}
		if(empty($achou)){
			$aviso .= 'Favor selecionar uma opção<br>';
		}
		if(empty($setor)){
			$aviso .= 'Favor selecionar um setor<br>';
		}
		if(empty($mensagem)){
			$aviso .= 'Favor digitar uma mensagem<br>';
		}

		if(empty($aviso)){
			$aviso .= 'Recebemos seu contato. Em breve retornaremos<br>';
			$aviso .= 'Nome: ' . $nome . '<br>';
			$aviso .= 'Email: ' . $email . '<br>';
			$aviso .= 'Nos achou: ' . $achou . '<br>';
			$aviso .= 'Setor: ' . $setor . '<br>';
			$aviso .= 'Mensagem: ' . $mensagem . '<br>';

			$aviso .= '<br><br><a href="contato.php">Voltar</a>';

			$sucesso = true;
		}
	
	}

?>



<!DOCTYPE html>
	<html lang="pt-BR">
		<head>
			<meta charset="utf-8" />
			<title>Formulário de Contato</title>
		</head>
		<body>

			<?php if(!empty($aviso)): ?>
				<h2><?php print $aviso; ?></h2>
			<?php endif; ?>

			<?php if(!$sucesso): ?>
			<form method="post" action="contato.php">
				<fieldset style="width: 300px;">
					<legend><h2><i>Formulário de Contato</i></h2></legend>
					<label for="nome">Nome:</label>
					<input type="text" name="nome" id="nome" value="<?php if(isset($nome)){ echo $nome; } ?>"><br><br>
					<label for="email">Email:</label>
					<input type="text" name="email" id="email" value="<?php if(isset($email)){ echo $email; } ?>"><br><br>
					<b><i>Onde nos nos achou?</i><b><br>
					<select name="achou">
						<option selected="selected" value="selecione uma opção">Selecione uma opção</option>
						<option value="google">Google</option>
						<option value="televisao">Televisão</option>
						<option value="jornal">Jornal</option>
						<option value="outra">Outro</option>
					</select><br><br>
					<b><i>Area de contato:</i><b><br>
					<select name="setor">
						<option selected="selected" value="selecione um setor">Selecione um setor</option>
						<option value="vendas">Vendas</option>
						<option value="compras">Compras</option>
						<option value="financeiro">Financeiro</option>
						<option value="administrativo">Administrativo</option>
					</select><br><br>
					<label for="mensagem">Mensagem:</label>
					<textarea name="mensagem" id="mensagem" cols="40" rows="5"><?php if(isset($mensagem)){ echo $mensagem; } ?></textarea><br><br>
					<input type="submit" name="enviar" value="Enviar">
				</fieldset>
			</form>

		<?php endif; ?>

		</body>
</html>