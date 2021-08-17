
<?php
include("head.php");
?>


<?php
include("marco-right.php");
?>
   
 <div style="float:left; width:60%; margin:60px auto; padding:1vw">
   <div  style="width: 100%;">     
    <div style="width: 100%; height:100%; margin: auto ; display:inline-block;" >
       <div style=" width:100%; height: 100%; top:0; font-size:20px; text-align:center; float:left;">
        	<h1>¿Quién es Damaris Miranda?</h1>
       		 <hr>
             
          <div id="posteo" style="text-align: left; font-size:0.5vw;">
                Posteado por:  Damaris Miranda<br>
                Fecha: 2021-08-16 <br>
          </div>
        </div>
    </div>
  </div>
  <div style="width: 100%; height:100%;" >
           <div  style="text-align:justify; font-size: 20px;">
                   <p class="eys-parrafo">Soy Damaris Miranda, tengo x años.. </p>

   <div id="blog-seccion2"  style="height: 50px;"></div>

    <h2 style="border-bottom: 1px solid green;"> Mis estudios</h2> 
    


                   <p class="eys-parrafo">Mis estudios secundarios los realiza en .....</p>

   <div id="blog-seccion3"  style="height: 50px;"></div>

    <h2 style="border-bottom: 1px solid green;"> Mi perfil informático</h2> 
    


                   <p  class="eys-parrafo">Durante mi carrera universitaria he logrado manera herramientas como ....</p>

   <div id="blog-seccion4"  style="height: 50px;"></div>

    <h2 style="border-bottom: 1px solid green;"> Mis Hooby</h2> 
    

                   <p   class="eys-parrafo">En mis ratos libres me gusta practicar ....</p>
       

                   

               <hr>
               <div style=" bottom: 0; margin-bottom: 0;   width:100%; display: inline-block;" >
                  <div style="width: 40%;  float: left;">
                   <a href="#">&#171;   Previo</a>
                  </div>

                  <div style="width: 40%; float: right; text-align: right;">
                   <a href="apendiendo-cpp">Programa para aprender C++ &#187;</a>
                  </div>

                </div>
           </div>
  </div> 

  </div>




<?php
include("marco-left.php")
?>
 
<script >  

 document.title="Softskill"; 
document.getElementById("foto").src="./images/damaris.jpg";

 document.getElementById("blog-indice").innerHTML="<p><b>Contenido</b></p><hr> <p><a href='#'>inicio</a></p><p><a href='#blog-seccion2'>Estudios</a></p><p><a href='#blog-seccion3'>Conocimiento informático</a></p><p><a href='#blog-seccion4'>Hooby</a></p>";

 document.getElementById("blog-relacionados").innerHTML="<p><b>Temas relacionados:</b></p><hr> <p><a href='#'>Tópico #1</a></p> <p><a href='eys-capacitacion.php'>Tópico #2</a></p> ";
document.getElementById("elnombre").innerHTML="Damaris Miranda";
 </script>
 
<?php
include("foot.php")
?>
