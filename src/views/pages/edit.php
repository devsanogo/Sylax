<?php $_title = "Modification ".$test->getLibelle(); ?> 

<div class="row">
	<div class="col-sm-6">
	<h1>Modification du texte <span style="color:#F00"><?php echo $test->getLibelle(); ?></span></h1>

	<form method="POST" action="<?php Helper::path('update', array($test->getId())) ?>">
		<div class="form-group">
			<label for="texte">Text : </label>
			<input id="text" type="text" name="text" value="<?php echo $test->getLibelle(); ?>" required class="form-control">
		</div>
		<button class="form-control btn btn-primary">Mettre à jour</button>
	</form>	
	</div>
</div>

<br>
<a class="btn btn-primary" href="<?php Helper::path('index') ?>">Retour</a>

   