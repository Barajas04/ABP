<?php 
	class monitorvista{

		function crear($form,$idioma){ 

			include '../plantilla/cabecera.php';
			
			$cabecera=new cabecera();
			$cabecera->crear($idioma);

       		$clase=new comprobacion();
    		$idiom=$clase->comprobaridioma($idioma);
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
			<form name="formularioalta"  class="form-horizontal" action="..\Controlador\ControladorMonitor.php" method="post" >
			<fieldset>

			<input type="image" id="alta" name="Alta" alt="Submit" value="Alta" onclick="enviaralta();" src="..\Archivos\añadir.png" width="20" height="20">
			</fieldset>
			</form>

<?php 	

		for ($numar =0;$numar<count($form);$numar++){

			echo "<div class=\"container well\">";
 			echo "<div class=\"row\">"; 
			echo "<div class=\"col-xs-12\">";
			echo "<form class=\"form-horizontal\" method=\"post\" action=\"..\Controlador\ControladorMonitor.php\">";
			echo "<fieldset><legend>".$idiom['Datosmonitor']."</legend>";
			echo "<input type=image id=\"modificar\" name=\"Modificar\"  value=\"Modificar\" onclick=\"enviarmodificar();\" alt =\"Submit\" src=\"..\Archivos\lapiz.png\" width=\"30\"  height=\"30\" >";
			echo "<input type=hidden id=dni name=dni value=".$form[$numar]["dni"].">";
			echo "<input type=image id=\"eliminar\" name=\"Eliminar\" value=\"Eliminar\" onclick=\"return confirm('¿Está seguro?');\" alt =\"Submit\" src=\"..\Archivos\\eliminar.png\" width=\"30\"  height=\"30\" >";
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

		 
?>
	</div></div></div>
		
	</div>
<?php 
include '../plantilla/pie.php';
}
}
?>