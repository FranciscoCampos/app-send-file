window.onload = function(){
	
  addcarpate();
  verMenu();
  
}


function onGif(){
    var i = document.getElementById('gif');
         i.style.display ='block';
  }



function addcarpate(){
  document.getElementById('btn_add').addEventListener('click',function(){
       var divc = document.getElementById('cajaDiv');
       var divo = document.getElementById('cajaBotonCentrado');
       var btnhome = document.getElementById('home');
       var mjs = document.getElementById('mjs');
           if (divc.style.display == 'block') {
               
               divc.style.display = 'none';
               divo.style.display = 'block';
               btnhome.style.display = 'none';
           }else{
               
               divc.style.display = 'block';
               divo.style.display = 'none';
               btnhome.style.display = 'block';
               mjs.innerHTML= " Add New File";
           }
           
  });
}

function verMenu(){
  document.getElementById('icon_menu').addEventListener('click',function(){
       var divlista = document.getElementById('lista');
       var mjsPlaceholder = document.getElementById('ncUsuario');
       var ncRaizValue= document.getElementById('ncRaiz');
       var botonOpc = {
             lc:document.getElementById('lc').value,
             js:document.getElementById('js').value,
             php:document.getElementById('php').value,
             bd:document.getElementById('bd').value,
             css:document.getElementById('css').value
       };


           if (divlista.style.display == 'block') {
               
               divlista.style.display = 'none';
               
           }else{
               
               divlista.style.display = 'block';
               if (document.getElementById('lc').addEventListener('click',function(){
                   
                    divlista.style.display = 'none';
                    ncRaizValue.value = botonOpc.lc;
                    mjsPlaceholder.placeholder = 'LenguajeC/';
               
               })); 
               if (document.getElementById('js').addEventListener('click',function(){
                   
                   divlista.style.display = 'none';
                    ncRaizValue.value = botonOpc.js;
                    mjsPlaceholder.placeholder = 'Javascript/';
               

               }));
                if (document.getElementById('php').addEventListener('click',function(){
                   
                    divlista.style.display = 'none';
                    ncRaizValue.value = botonOpc.php;
                    mjsPlaceholder.placeholder = 'Php/';
               
               })); 
               if (document.getElementById('bd').addEventListener('click',function(){
                   
                   divlista.style.display = 'none';
                    ncRaizValue.value = botonOpc.bd;
                    mjsPlaceholder.placeholder = 'BaseDatos/';
               

               }));
                if (document.getElementById('css').addEventListener('click',function(){
                  
                   divlista.style.display = 'none';
                    ncRaizValue.value = botonOpc.css;
                    mjsPlaceholder.placeholder = 'Css/';
               

               }));
           }
           
  });
}

