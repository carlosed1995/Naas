<?php
session_start();

class Conectar
{
    public function con()
    {
        #$con=mysql_connect("localhost","root","12345");
        $con=mysql_connect("localhost","naas_user","_G&tc2sHNh%q");
        mysql_query("SET NAMES 'utf8'");
        mysql_select_db("naas_db");
        return $con;
    }
    
    public static function ruta()
    {
        #return "http://localhost/naaspanama.com/";
        return "http://www.naaspanama.com/";
    }

    public function comillas_inteligentes($valor)
	{
		// Retirar las barras
		if (get_magic_quotes_gpc()) {
			$favfalor = stripslashes($valor);
		}
	
		// Colocar comillas si no es entero
		if (!is_numeric($valor)) {
			$valor = "'" . mysql_real_escape_string($valor) . "'";
		}
		return $valor;
	}

 public static function voltear_fecha($fecha)
{
    $dia = $fecha[8]."".$fecha[9];
    $mes = $fecha[5]."".$fecha[6];
    $anio = $fecha[0]."".$fecha[1]."".$fecha[2]."".$fecha[3];
    $fecha_nueva = $dia."-".$mes."-".$anio;
                
    return $fecha_nueva;
}

public static function voltear_fecha2($fecha)
{
    $dia = $fecha[3]."".$fecha[4];
    $mes = $fecha[0]."".$fecha[1];
    $anio = $fecha[6]."".$fecha[7]."".$fecha[8]."".$fecha[9];
    $fecha_nueva = $anio."-".$mes."-".$dia;
                
    return $fecha_nueva;
}

public static function send_mail($destino, $mensaje, $asunto)
{
	$asusnto = $_POST['asusnto'];
    //Titulo
    $titulo = $asunto;
    //cabecera
    $headers = "MIME-Version: 1.0\r\n"; 
    $headers .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
    //dirección del remitente 
    $headers .= "Naas Panama <info@naaspanama.com>\r\n";
    $headers .= "Reply-To: info@naaspanama.com" . "\r\n";
    //Enviamos el mensaje a tu_dirección_email 
    $bool = mail($destino,$titulo,$mensaje,$headers);
    
    if($bool){
        echo "<div style='height:8px; width:15px; position:relative; float:left; font-size:0.6em; background-color:#cafff3; border-bottom:1px #999 dashed; float:left;'>ok</div>";
    }else{
        echo "<div style='height:8px; width:100%; font-size:0.8em; background-color:#ff6363; border-bottom:1px #999 dashed; color:#FFF; float:left;'>not sent = $destino</div>";
    
    return 0;
    }
}


}
?>
