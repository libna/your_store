<?php 
require_once('../index.php');

?>
<div class="container" style="background-color:#f1f1f1">
    <a href="/php/cadastro.php"><button type="button" class="cancelbtn">Cadastrar Produtos</button></a>

</div>

<form method="POST" action="/php/cadprod/exitPdo.php">
	<div class="imgcontainer">
	</div>
	<div class="container">
		<label for="uname"><b>Digite o código do Produto</b></label>
		<input type="text" placeholder="Inserir codigo" name="code" required>


		<button type="submit">vender</button>
		<label>

		</div>

	</form>
</body>
</html>