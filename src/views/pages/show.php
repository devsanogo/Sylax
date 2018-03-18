<?php $_title = "Details ".$test->getLibelle(); ?> 

<div class="row">
	<div class="col-sm-6">
	<h1>Detail pour <span style="color:#F00"><?php echo $test->getLibelle(); ?></span></h1>

		<dl>
			<dt>Texte</dt>
			<dd><?php echo $test->getLibelle(); ?></dd>
			<dt>Date de creation</dt>
			<dd><?php echo $test->getCreated()->format('d-m-Y'); ?></dd>
		</dl>

	</div>
</div>

<a class="btn btn-primary" href="<?php echo APP_URL_RAW ?>/index">Retour</a>
