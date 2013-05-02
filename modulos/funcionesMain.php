<?php
	if($_GET['action']=="verificaMantto"){
		verificaMantto();
	}
	
	function verificaMantto(){
		include("../includes/conectarbase.php");
		$sqlSitio="SELECT valor,descripcion FROM configuracionglobal WHERE nombreConf='sitio_desactivado'";
		$resSitio=mysql_db_query($db,$sqlSitio);
		$filaSitio=mysql_fetch_array($resSitio);
		$sitioActivo[0]=$filaSitio['valor'];
		$sitioActivo[1]=$filaSitio['descripcion'];
		if($sitioActivo[0]=="Si"){
?>
		<div id="desv">
        	<div id="msgManttoProg">            
	        <div style="margin:10px; padding:30px; font-size:14px;"><img src="../img/Alert1.png" border="0">&nbsp;<?=$sitioActivo[1];?></div>
            </div>
        </div>
<?		
		}		
	}
?>