<!DOCTYPE html>
<html>
<head>
<title>Inventory Parts | Naas Panama</title>
<!--	+ + + + + + + + + + + + + + + + + + + + + + +   KOLORMEDIA.NET   + + + + + + + + + + + + + + + + + + + +	-->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="css/layout.css" rel="stylesheet" type="text/css" media="all">
</head>
<body id="top" class="bgded fixed">
<?php include_once 'includes/top.php'; ?>

<?php include_once 'includes/mainheader.php'; ?>

<?php include_once 'includes/menu.php'; ?>
<div class="wrapper row4">
  <div class="spacer">
    <div id="breadcrumb" class="clear"> 
      <ul>
        <li><a href="index.php">Home</a></li><li><a>Inventory parts</a></li>
      </ul>
    </div>
  </div>
</div>

<div class="wrapper row3">
  <div class="spacer">
    <main class="container clear"> 
      <div class="sidebar one_quarter first"> 
      	<?php include_once 'includes/sidebar_m.php'; ?>
      </div>
      
      <div class="content three_quarter"> 
      	<div id="aboutus" class="row">
        <h1>Searching Parts and supplies</h1>
        <p style="text-align:center;"></p>
		
        <?php 
			if (isset($_POST['enviar']) && $_POST['parts'] == 'si'){
						$nombre = $_POST["nombre"];	
						$email = $_POST["email"];	
						$firma = $_POST["firma"];	
						$telefono = $_POST["telefono"];	
						$website = $_POST["website"];	
						$motivo = $_POST["motivo"];	
						$comentario = $_POST["comentario"];
			
			$destinatario="jpinto@naaspanama.com";
			$asunto="Search-parts-request: $motivo";
			$cabeceras="From: $nombre <$email>\r\n";
			$cabeceras .="Content-Type: text/html; charset=utf-8\r\n";
			
			$texto="<a href=\"www.kolormedia.net\"><img src=\"http://www.kolormedia.net/images/kmws_logo.png\"></a><br><br><b>Consulta de partes desde Website</b><br><br>";
			$texto = $texto . "<b>Nombre        :</b> " . $nombre . "<br>";
			$texto = $texto . "<b>Email         :</b> " . $email . "<br>";
			$texto = $texto . "<b>Website       :</b> " . $website . "<br>";
			$texto = $texto . "<b>Motivo        :</b> " . $motivo . "<br>";
			$texto = $texto . "<b>Comentario    :</b> " . $comentario . "<br>";
			
			mail ($destinatario , $asunto , $texto , $cabeceras);
			
			echo "<div class='row' id='answerform'> 
					<div style='text-align:center;'>
						
						<div id='contact_body'> 
							<h1>Thanks, Mr(rs). $nombre </h1>
							<h3>We have succesfully searched your $telefono, $motivo and you will be contact by our sales executives as soon as possible.</h3><br><br>
							<h3><a href='parts.php'><strong>Search for other part</strong></a></h3>
							<br/><br/><br/>
							
						</div>
						
					</div>        
				</div>";
				}
				else{
				include 'includes/partsform.php';
			}
			?>
    		</div>
      </div>
</div>

<?php include_once 'includes/footer.php'; ?>

<a id="backtotop" href="#top"><img src="images/up.png" alt=""></a>
<script src="js/jquery.min.js"></script>
<script src="js/jquery.backtotop.js"></script>
<script src="js/jquery.mobilemenu.js"></script>
<script src="js/jquery.placeholder.min.js"></script>
<script type="text/javascript">$(window).load(function(){var parent = $('#toggle-view'), delay = 100; $('li', parent).click(function() { var li = $(this).closest('li'); if (!$('p', li).is(':visible')){ $('li', parent).each(function() { $('p', $(this)).slideUp(delay); $('span', $(this)).text('+'); }); $('p', li).slideDown(delay); $('span', li).text('-'); } else { $('p', li).slideUp(delay); $('span', li).text('+'); } }); });</script>
</body>
</html>