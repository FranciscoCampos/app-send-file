<?php 

sleep(1);

if (isset($_POST)) {

     $cantArchivo = $_POST['cantArchivo'];
     $nomCapAlu = $_POST['nombreCarpeta'];
     $carpetaCurso = $_POST['carpetaRaiz'];

    switch ($carpetaCurso) {
      
      case '1':
            if (file_exists('archivos/lenguajeC/'.$nomCapAlu)) {
                       $file = $_FILES["file"];
                       $nomImg = $file["name"];
                       $temp=$file["tmp_name"];
                       $tamano=$file["size"];
                       $tipo=$file["type"];

                        $archivo_file = $nomImg;
                        $archivo_file = str_replace(" ","_",$archivo_file);
                        $archivo_file = $archivo_file;
                        //$nomCapAlu = $superR .'/'. $archivo_file ;
                        if(move_uploaded_file($temp,"archivos/lenguajeC/$nomCapAlu /$archivo_file")){
                               include 'include/header.php';
                               $cantArchivo = $cantArchivo + 1;
                               include 'include/addCarpeta.php';
                                addCarpeta($nomCapAlu,$cantArchivo, 1);
                               include 'include/footer.php';
                        }else{
                            include 'include/header.php';
                              echo "<br> <a href='index.php' class='btn btn-warning'>HOME</a>";
                              include 'include/mensajeError.php';
                              include 'include/footer.php';
                        }

            }else{
               if (mkdir('archivos/lenguajeC/'.$nomCapAlu, 0777)){
                      
                       $file = $_FILES["file"];
                       $nomImg = $file["name"];
                       $temp=$file["tmp_name"];
                       $tamano=$file["size"];
                       $tipo=$file["type"];

                        $archivo_file = $nomImg;
                        $archivo_file = str_replace(" ","_",$archivo_file);
                        $archivo_file = $archivo_file;
                        //$nomCapAlu = $superR .'/' . $archivo_file;
                        if(move_uploaded_file($temp,"archivos/lenguajeC/$nomCapAlu /$archivo_file")){
                            
                                 include 'include/header.php';
                                 $cantArchivo = $cantArchivo + 1;
                                 include 'include/addCarpeta.php';
                                  addCarpeta($nomCapAlu,$cantArchivo,1);
                                 include 'include/footer.php';
                         }else{
                             include 'include/header.php';
                              echo "<br> <a href='index.php' class='btn btn-warning'>HOME</a>";
                              include 'include/mensajeError.php';
                              include 'include/footer.php';
                         }
     
                 }else{
                      include 'include/header.php';
                      echo "<br> <a href='index.php' class='btn btn-warning'>HOME</a>";
                      include 'include/mensajeError.php';
                      include 'include/footer.php';
                 }
            }
        break;

        case '2':
           if (file_exists('archivos/javascript/'.$nomCapAlu)) {
                       $file = $_FILES["file"];
                       $nomImg = $file["name"];
                       $temp=$file["tmp_name"];
                       $tamano=$file["size"];
                       $tipo=$file["type"];

                        $archivo_file = $nomImg;
                        $archivo_file = str_replace(" ","_",$archivo_file);
                        $archivo_file = $archivo_file;
                        //$nomCapAlu = $superR .'/'. $archivo_file ;
                        if(move_uploaded_file($temp,"archivos/javascript/$nomCapAlu /$archivo_file")){
                               include 'include/header.php';
                               $cantArchivo = $cantArchivo + 1;
                               include 'include/addCarpeta.php';
                                addCarpeta($nomCapAlu,$cantArchivo,2);
                               include 'include/footer.php';
                        }else{
                            include 'include/header.php';
                              echo "<br> <a href='index.php' class='btn btn-warning'>HOME</a>";
                              include 'include/mensajeError.php';
                              include 'include/footer.php';
                        }

            }else{
               if (mkdir('archivos/javascript/'.$nomCapAlu, 0777)){
                      
                       $file = $_FILES["file"];
                       $nomImg = $file["name"];
                       $temp=$file["tmp_name"];
                       $tamano=$file["size"];
                       $tipo=$file["type"];

                        $archivo_file = $nomImg;
                        $archivo_file = str_replace(" ","_",$archivo_file);
                        $archivo_file = $archivo_file;
                        //$nomCapAlu = $superR .'/' . $archivo_file;
                        if(move_uploaded_file($temp,"archivos/javascript/$nomCapAlu /$archivo_file")){
                            
                                 include 'include/header.php';
                                 $cantArchivo = $cantArchivo + 1;
                                 include 'include/addCarpeta.php';
                                  addCarpeta($nomCapAlu,$cantArchivo,2);
                                 include 'include/footer.php';
                         }else{
                             include 'include/header.php';
                              echo "<br> <a href='index.php' class='btn btn-warning'>HOME</a>";
                              include 'include/mensajeError.php';
                              include 'include/footer.php';
                         }
     
                 }else{
                      include 'include/header.php';
                      echo "<br> <a href='index.php' class='btn btn-warning'>HOME</a>";
                      include 'include/mensajeError.php';
                      include 'include/footer.php';
                 }
            }
        break;

        case '3':
            if (file_exists('archivos/php/'.$nomCapAlu)) {
                       $file = $_FILES["file"];
                       $nomImg = $file["name"];
                       $temp=$file["tmp_name"];
                       $tamano=$file["size"];
                       $tipo=$file["type"];

                        $archivo_file = $nomImg;
                        $archivo_file = str_replace(" ","_",$archivo_file);
                        $archivo_file = $archivo_file;
                        //$nomCapAlu = $superR .'/'. $archivo_file ;
                        if(move_uploaded_file($temp,"archivos/php/$nomCapAlu /$archivo_file")){
                               include 'include/header.php';
                               $cantArchivo = $cantArchivo + 1;
                               include 'include/addCarpeta.php';
                                addCarpeta($nomCapAlu,$cantArchivo,3);
                               include 'include/footer.php';
                        }else{
                            include 'include/header.php';
                              echo "<br> <a href='index.php' class='btn btn-warning'>HOME</a>";
                              include 'include/mensajeError.php';
                              include 'include/footer.php';
                        }

            }else{
               if (mkdir('archivos/php/'.$nomCapAlu, 0777)){
                      
                       $file = $_FILES["file"];
                       $nomImg = $file["name"];
                       $temp=$file["tmp_name"];
                       $tamano=$file["size"];
                       $tipo=$file["type"];

                        $archivo_file = $nomImg;
                        $archivo_file = str_replace(" ","_",$archivo_file);
                        $archivo_file = $archivo_file;
                        //$nomCapAlu = $superR .'/' . $archivo_file;
                        if(move_uploaded_file($temp,"archivos/php/$nomCapAlu /$archivo_file")){
                            
                                 include 'include/header.php';
                                 $cantArchivo = $cantArchivo + 1;
                                 include 'include/addCarpeta.php';
                                  addCarpeta($nomCapAlu,$cantArchivo,3);
                                 include 'include/footer.php';
                         }else{
                             include 'include/header.php';
                              echo "<br> <a href='index.php' class='btn btn-warning'>HOME</a>";
                              include 'include/mensajeError.php';
                              include 'include/footer.php';
                         }
     
                 }else{
                      include 'include/header.php';
                      echo "<br> <a href='index.php' class='btn btn-warning'>HOME</a>";
                      include 'include/mensajeError.php';
                      include 'include/footer.php';
                 }
            }
        break;

        case '4':
            if (file_exists('archivos/baseDatos/'.$nomCapAlu)) {
                       $file = $_FILES["file"];
                       $nomImg = $file["name"];
                       $temp=$file["tmp_name"];
                       $tamano=$file["size"];
                       $tipo=$file["type"];

                        $archivo_file = $nomImg;
                        $archivo_file = str_replace(" ","_",$archivo_file);
                        $archivo_file = $archivo_file;
                        //$nomCapAlu = $superR .'/'. $archivo_file ;
                        if(move_uploaded_file($temp,"archivos/baseDatos/$nomCapAlu /$archivo_file")){
                               include 'include/header.php';
                               $cantArchivo = $cantArchivo + 1;
                               include 'include/addCarpeta.php';
                                addCarpeta($nomCapAlu,$cantArchivo,4);
                               include 'include/footer.php';
                        }else{
                            include 'include/header.php';
                              echo "<br> <a href='index.php' class='btn btn-warning'>HOME</a>";
                              include 'include/mensajeError.php';
                              include 'include/footer.php';
                        }

            }else{
               if (mkdir('archivos/baseDatos/'.$nomCapAlu, 0777)){
                      
                       $file = $_FILES["file"];
                       $nomImg = $file["name"];
                       $temp=$file["tmp_name"];
                       $tamano=$file["size"];
                       $tipo=$file["type"];

                        $archivo_file = $nomImg;
                        $archivo_file = str_replace(" ","_",$archivo_file);
                        $archivo_file = $archivo_file;
                        //$nomCapAlu = $superR .'/' . $archivo_file;
                        if(move_uploaded_file($temp,"archivos/baseDatos/$nomCapAlu /$archivo_file")){
                            
                                 include 'include/header.php';
                                 $cantArchivo = $cantArchivo + 1;
                                 include 'include/addCarpeta.php';
                                  addCarpeta($nomCapAlu,$cantArchivo,4);
                                 include 'include/footer.php';
                         }else{
                             include 'include/header.php';
                              echo "<br> <a href='index.php' class='btn btn-warning'>HOME</a>";
                              include 'include/mensajeError.php';
                              include 'include/footer.php';
                         }
     
                 }else{
                      include 'include/header.php';
                      echo "<br> <a href='index.php' class='btn btn-warning'>HOME</a>";
                      include 'include/mensajeError.php';
                      include 'include/footer.php';
                 }
            }
        break;

        case '5':
           if (file_exists('archivos/css/'.$nomCapAlu)) {
                       $file = $_FILES["file"];
                       $nomImg = $file["name"];
                       $temp=$file["tmp_name"];
                       $tamano=$file["size"];
                       $tipo=$file["type"];

                        $archivo_file = $nomImg;
                        $archivo_file = str_replace(" ","_",$archivo_file);
                        $archivo_file = $archivo_file;
                        // $rutagArchi = $superR .'/'. $archivo_file ;
                        if(move_uploaded_file($temp,"archivos/css/$nomCapAlu /$archivo_file")){
                               include 'include/header.php';
                               $cantArchivo = $cantArchivo + 1;
                               include 'include/addCarpeta.php';
                                addCarpeta($nomCapAlu,$cantArchivo,5);
                               include 'include/footer.php';
                        }else{
                            include 'include/header.php';
                              echo "<br> <a href='index.php' class='btn btn-warning'>HOME</a>";
                              include 'include/mensajeError.php';
                              include 'include/footer.php';
                        }

            }else{
               if (mkdir('archivos/css/'.$nomCapAlu, 0777)){
                      
                       $file = $_FILES["file"];
                       $nomImg = $file["name"];
                       $temp=$file["tmp_name"];
                       $tamano=$file["size"];
                       $tipo=$file["type"];

                        $archivo_file = $nomImg;
                        $archivo_file = str_replace(" ","_",$archivo_file);
                        $archivo_file = $archivo_file;
                        // $nomCapAlu = $superR .'/' . $archivo_file;
                        if(move_uploaded_file($temp,"archivos/css/$nomCapAlu /$archivo_file")){
                            
                                 include 'include/header.php';
                                 $cantArchivo = $cantArchivo + 1;
                                 include 'include/addCarpeta.php';
                                  addCarpeta($nomCapAlu,$cantArchivo,5);
                                 include 'include/footer.php';
                         }else{
                             include 'include/header.php';
                              echo "<br> <a href='index.php' class='btn btn-warning'>HOME</a>";
                              include 'include/mensajeError.php';
                              include 'include/footer.php';
                         }
     
                 }else{
                      include 'include/header.php';
                      echo "<br> <a href='index.php' class='btn btn-warning'>HOME</a>";
                      include 'include/mensajeError.php';
                      include 'include/footer.php';
                 }
            }
        break;
      
    }

        

} //llave de cierre del if del post

