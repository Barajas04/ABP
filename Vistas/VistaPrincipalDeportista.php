<?php 
	class deportistavista{

		function crear($form,$idioma){ 

		include("../Funciones/cargadodedatos.php");
    		?>
    		<header>

		<script type="text/javascript">

            function enviaralta()
            {
            	
                document.getElementById("alta").submit();
                
            }
            function enviarmodificar()
            {
            		
            	document.getElementById("modificar").submit();
            }
            function enviareliminar()
          	  {	

            	document.getElementById("eliminar").submit();
           	  }
   </script>
   </header>
			<form name="formularioalta"  class="form-horizontal" action="../Controlador/ControladorDeportistas.php?Alta" method="post" >
			<fieldset>

			<input type="image" id="alta" name="Alta" alt="Submit" value="Alta" onclick="enviaralta();" src="../Archivos/agregar.png" width="20" height="20">
			</fieldset>
			</form>

<?php 	

		for ($numar =0;$numar<count($form);$numar++){
			//Añado esta condicion para que no muestre el deportista por defecto, necesario cuando se crea una actividad por primera vez
			if($form[$numar]["dni"]!='default'){
			echo "<div class=\"container well\">";
 			echo "<div class=\"row\">"; 
			echo "<div class=\"col-xs-12\">";
			echo "<form class=\"form-horizontal\" method=\"post\" action=\"../Controlador/ControladorDeportistas.php\">";
			echo "<fieldset><legend>".$idiom['Datosdeportista']."</legend>";
				
			echo "<input  type=\"submit\" id=\"eliminar\" name=\"Modificar\" value=\"".$idiom['Modificar']."\" onclick=\"enviarmodificar()\" alt =\"Submit\" src=\"../Archivos/cancelar.png\" width=\"20\"  height=\"20\" >";	
			//echo "<input type=image id=\"modificar\" name=\"Modificar\"  value=\"Modificar\" onclick=\"enviarmodificar();\" alt =\"Submit\" src=\"../Archivos/lapiz.png\" width=\"30\"  height=\"30\" >";

			echo "<input type=hidden  name=dni value=".$form[$numar]["dni"].">";
			echo "<input type=hidden  name=nombre value=".$form[$numar]["nombre"].">";
			echo "<input type=hidden  name=apellido value=".$form[$numar]["apellido2"].">";
			echo "<input type=hidden  name=telefono value=".$form[$numar]["telefono"].">";
			echo "<input type=hidden  name=email value=".$form[$numar]["email"].">";
			echo "<input type=hidden  name=usuario value=".$form[$numar]["usuario"].">";

			echo "<input type=hidden  name=fecha value=".$form[$numar]["fecha"].">";
			
			echo "<input  type=\"submit\" id=\"eliminar\" name=\"Eliminar\" value=\"".$idiom['Eliminar']."\" onclick=\"eliminar()\" alt =\"Submit\" src=\"../Archivos/cancelar.png\" width=\"20\"  height=\"20\" >";	
			echo "<br>";
			echo $idiom['Nombre'].":".$form[$numar]["nombre"];
			echo "<br>";
			echo $idiom['Apellidos'].":".$form[$numar]["apellido2"];
			echo "<br>";
			echo $idiom['Telefono'].":"." ".$form[$numar]["telefono"];
			echo "<br>";
			echo $idiom['email'].":"." ".$form[$numar]["email"];
			echo "<br>";
			echo $idiom['DNI'].":"." ".$form[$numar]["dni"];
			echo "<br>";
			echo $idiom['Usuario'].":"." ".$form[$numar]["usuario"];
			echo "<br>";
			echo $idiom['TIPO'].":"." ".$form[$numar]["tipo"];
			echo "<br>";
			
			echo"</fieldset>";
			echo"</form>";
 			echo "</div>";
			echo "</div>";

			echo "</div>";
			
			}
		 	}

		 
?>
	</div></div></div>
		
	</div>
<?php 
include '../plantilla/pie.php';
}
}
?>