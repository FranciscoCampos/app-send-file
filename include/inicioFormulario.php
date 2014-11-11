<?php include 'verCarpeta.php';function VerFormulario($ip =''){?>
			     
<form name="formArchivo" method="POST" onsubmit="onGif() " enctype="multipart/form-data" action="prosesar.php">
		   
	<div class="input-group">
	  <span class="input-group-addon"><span class="glyphicon glyphicon-folder-open"></span></span>
	  <input class="form-control" type="text" name="nombreCarpeta"  id="ncUsuario" required placeholder="Your name for the folder">
	</div><br>
			   
	<div class="cajaInputFile">
	   <p id="add">Add File  <span class="glyphicon glyphicon-file"></span></p>
	   <input class="form-control" type="file"  name="file" id="file" multiple="multiple" required>
	</div>

	<input type="hidden" name="carpetaRaiz" value="0" id="ncRaiz"><br>
	<input type="hidden" name="cantArchivo" value="0" >
	<input class="btn btn-primary btn-sm" type="submit" value="Send File" id="btn_enviar">
	<button  type="button" id="btn_add" style="display:none"></button>
     <img src="img/ajax-load.gif" id="gif" >
</form>
<?php if ($ip == true) {echo "<br><hr>";echo verCarpeta();}?>
 <br>
<hr>
<center><h6>copyright | FRANCISCO CAMPOS | v 0.1</h6></center>
<?php }?>
