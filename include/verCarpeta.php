<?php 


function verCarpeta(){
   $listar = null;
   $directorio = opendir('archivos/');
     echo "<ul >";
       while ($elemento = readdir($directorio)) {
            if ($elemento != '.' && $elemento != '..') {
              if (is_dir('archivos/'.$elemento)) {
                 echo $listar ="<li class='ulCarpeta'><a href='archivos/$elemento' target='_blank'>
                 <span class='glyphicon glyphicon-folder-open'></span> $elemento </a></li>";
              }else{

                echo $listar ="<li><a href='archivos/$elemento' target='_blank'> $elemento</a></li>";
              }
            }
       }
    echo "</ul>";
}


 ?>