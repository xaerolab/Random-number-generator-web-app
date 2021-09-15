$(document).ready(function(){
	console.log('ready function ok!!');

});


$('#arrojar_dados').click(function(e){
	e.preventDefault();
	ejecutarDados();
});


function ejecutarDados(){
	//capturamos los datos
	nro_dados = $('#nro_dados').val();
	nro_caras = $('#nro_caras').val();

	//variable para control de errores
	errores = '';

	
	//validamos nro de dados
	if(!nro_dados){
		errNroDados = ':( Selecciona la cantidad de dados';
		$('#errNroDados').html(errNroDados);
	}else if(nro_dados == 0){
		errNroDados = ':( La cantidad de dados debe ser superior a cero';
		$('#errNroDados').html(errNroDados);
	}else if(nro_dados < 0){
		errNroDados = ':( No debe ser numeros negativos';
		$('#errNroDados').html(errNroDados);
	}else if(nro_dados > 50){
		errNroDados = ':( Maximo numero de dados 50';
		$('#errNroDados').html(errNroDados);
	}else{
		errNroDados = '';
		$('#errNroDados').html(errNroDados);
		nro_dados = $('#nro_dados').val();
	}

	//validamos nro de caras
	if(nro_caras == 'default'){
		errNroCaras = ':( Selecciona la cantidad de caras de los dados';
		$('#errNroCaras').html(errNroCaras);
	}else{
		errNroCaras = '';
		$('#errNroCaras').html(errNroCaras);
		nro_caras = $('#nro_caras').val();
	}

	//concatenamos los errores
	errores = errNroDados+errNroCaras;

	if(!errores){
		//hacemos un llamado ajax para ejecutar nuestro PHP
		$.ajax({
			url: 'php/dice_calcs.php',
			type: 'POST',
			data: 'nroDados='+nro_dados+'&nroCaras='+nro_caras,
			success: function(r){
				resultados = '<p>'+'el # de dados fue: '+nro_dados+' y se utilizaron dados de: '+nro_caras+' caras.'+'</p>';
				$('#resultados').html(resultados);
				$('#dados').load('php/results.php',{r});
			}
		});
	}
}

