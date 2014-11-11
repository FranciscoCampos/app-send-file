<?php function addCarpeta($ruta , $cnt = '', $capR = ''){ $miRuta = $ruta;?>
 
<center><h3 id="mjs" style="display:block">Uploaded File!!!</h3></center>
<div class="cajaDiv" id="cajaDiv" style="display:none">
	<form name="formArchivo" method="POST" onsubmit="onGif()" enctype="multipart/form-data" action="prosesar.php">
	<div class="cajaInputFile">
		<p id="add">Add New File<span class="glyphicon glyphicon-file"></span></p>
		<input class="form-control" type="file"  name="file" id="file" multiple="multiple" required>
	</div>
		<input type="hidden" name="carpetaRaiz" value="<?php echo $capR;?>" id="ncRaiz"><br>
		<input type="hidden" name="nombreCarpeta" value="<?echo $miRuta;?>">
		<input type="hidden" name="cantArchivo" value="<?echo $cnt;?>">
		<a href="index.php"><button class="btn btn-primary" type="button" title="salir" id="home"><span class="glyphicon glyphicon-home"></span> Home</button></a>
		<img src="img/ajax-load.gif" class="gif" id="gif" style="display:none">
		<input class="btn btn-primary btn-sm" type="submit" value="Send File" id="btn_enviar">
		 
	</form>
</div>

<div class="cajaBotonCentrado" id="cajaBotonCentrado" style="display:block">
	<button class="btn btn-primary btn-sm" type="button" title="Agregar nuevo archivo a la carpeta creada" id="btn_add">
	<span class="glyphicon glyphicon-folder-open"></span> &nbsp;&nbsp;<span class="badge"><?php echo $cnt ?></span></button>
	<a href="index.php"><button class="btn btn-primary btn-sm" type="button" title="salir"><span class="glyphicon glyphicon-home"></span> Home</button></a>
</div>
							              
<?php } ?>