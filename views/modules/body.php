<div class="main">
	<div class="container">
		
	<form class="mb-4">
		  <div class="form-group mb-4">
		    <label for="nro_dados">Nro. de dados</label>
		    <input type="number" class="form-control" id="nro_dados">
		    <label class="errLabel" for="nro_dados" id="errNroDados"></label>
		  </div>

		  <div class="form-group mb-4">
		    <select class="form-control" id="nro_caras">
		    	<option default selected value="default">Nro. de caras</option>
		    	<option value="4">4 caras</option>
		    	<option value="6">6 caras</option>
		    	<option value="8">8 caras</option>
		    	<option value="10">10 caras</option>
		    	<option value="12">12 caras</option>
		    	<option value="20">20 caras</option>
		    </select>
		    <label class="errLabel" for="nro_caras" id="errNroCaras"></label>
		  </div>

		  <div class="text-center d-grid gap-2">
		  	<button class="btn boton" id="arrojar_dados">Arrojar!!</button>
		  </div>
	</form>

	<div class="mb-4" id="resultados"></div>
	<div class="mb-4" id="dados"></div>

	</div>
</div>