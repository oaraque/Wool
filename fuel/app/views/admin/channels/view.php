<?php foreach($graph as $detailType => $detail): 
	if($detail['@type'] != null): 
	if($detail['@type'] == 'ewe:Channel'): ?>

<div class=" titleText"><strong><?php echo $detail['dcterms:title']; ?></strong></div>

<br>

<p>
	<strong>Title:</strong>
	<?php echo $detail['dcterms:title']; ?></p>
<p>
	<strong>Summary:</strong>
	<?php echo $detail['dcterms:description']; ?></p>
<p>
	<img class="droppable imageBox" src=<?php echo $detail['foaf:logo'];?> ></img></p>
	<?php endif;
	endif; ?>

<?php endforeach; ?>

<?php foreach($graph as $detailType => $detail): 
	if($detail['@type'] != null): 
	if($detail['@type'] == 'ewe:Action'): ?>
	<h2><strong>Action</strong></h2>
	<p>
		<strong>Title:</strong>
		<?php echo $detail['dcterms:title']; ?>
	</p>
	<p>
		<strong>Description:</strong>
		<?php echo $detail['dcterms:description']; ?>
	</p>
	<br>
	<?php endif;
	endif; ?>
<?php endforeach; ?>

<?php foreach($graph as $detailType => $detail): 
	if($detail['@type'] != null): 
	if($detail['@type'] == 'ewe:Event'): ?>
	<h2><strong>Trigger</strong></h2>
	<p>
		<strong>Title:</strong>
		<?php echo $detail['dcterms:title']; ?>
	</p>
	<p>
		<strong>Description:</strong>
		<?php echo $detail['dcterms:description']; ?>
	</p>
	<br>
	<?php endif;
	endif; ?>
<?php endforeach; ?>

<?php echo Html::anchor('admin/channels', 'Back'); ?>