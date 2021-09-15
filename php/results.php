<?php
$r = $_POST['r'];

$dadosArreglo = json_decode($r,true);

foreach ($dadosArreglo as $dado) {
?>

<div class="ribbon">
	<div class="dadoR">
		<?php echo $dado; ?>	
	</div>
</div>
<?php } ?>

<div class="square">
	<div class="dadoR">
		<?php echo array_sum($dadosArreglo); ?>
	</div>
</div>






