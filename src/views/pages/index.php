<?php $_title = "Accueil" ?> 

<div class="row">
	<div class="col-sm-4">
	<h3>Remplissez le formulaire</h3>

	<form method="POST" action="<?php Helper::path('nouveau') ?>">
		<div class="form-group">
			<input id="text" type="text" name="text" required placeholder="entrer un mot ici ..." class="form-control">
		</div>
		<button class="form-control btn btn-primary">Envoyer</button>
	</form>	
	</div>

	<div class="col-sm-8">

		<table class="table table-bordered table-striped table-condensed">
			<caption>
				<h4>Liste des mots ajoutés</h4>
			</caption>
			<thead>
				<tr>
					<th>Texte</th>
					<th>Date ajout</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($allTest as $test) : ?>
					<tr>
						<td><?php echo $test->getLibelle(); ?></td>
						<td><?php echo $test->getCreated()->format('d-m-Y'); ?></td>
						<td>
							<a href="<?php Helper::path('detail', array($test->getId())) ?>" class="btn btn-default btn-xs">Voir</a>
							<a href="<?php Helper::path('modifier', array($test->getId())) ?>" class="btn btn-primary btn-xs">Modifier</a>
							<a href="<?php Helper::path('suppression', array($test->getId())) ?>" class="btn btn-danger btn-xs">Supprimer</a>
						</td>
					</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
	</div>
</div>

   