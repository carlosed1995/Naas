<!DOCTYPE html>
<html>
<head>
<title>Contact, Offices | Naas Panama</title>
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
        <li><a href="index.php">Home</a></li><li><a>Contact</a></li>
      </ul>
    </div>
  </div>
</div>

<div class="wrapper row3">
  <div class="spacer">
    <main class="container clear"> 
      <div class="sidebar one_quarter first"> 
        
        <div class="sdb_holder">
          <h3>Contact info:</h3>
          <address>
            <ul class="nospace">
            	<li>Panama Pacifico Office:</li>
                <li class="btmspace-10"><span class="fa fa-phone"></span> +507 316-0174 / 0175</li>
                <li>Panama Pacifico Office cellphone:</li>
                <li class="btmspace-10">+507 6205-7175</li>
                <li>Email:</li>
                <li><span class="fa fa-envelope-o"></span> info@naaspanama.com</li>
            </ul>
          </address>
        </div>
      </div>
      
      <div class="content three_quarter"> 
        <h1 style="text-transform:uppercase;">Contact</h1>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d26516.0059843026!2d-79.60839587957317!3d8.914144174282963!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8faca5a8c244fe55%3A0xcca324cdedfea8d0!2sHoward+AFB!5e0!3m2!1sen!2spa!4v1479339144235" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
        <br/><br/>
		<p>We understand that response time is crucial during aircraft transit, which is why we our committed to efficiently carrying out all required aircraft line services.</p>
        
        <p>We offer daily, transit and overnight services, with capacity to meet the needs of commercial, regional, corporate, cargo, and turboprop aviation. We conduct routine and non-routine inspections.</p>
        <hr/><br/>
        
        <div class="">
        <h3>we will back to you as soon as possible</h3>
        <?php 
                if (isset($_POST['enviar'])){
                            $nombre = $_POST["nombre"];	
                            $email = $_POST["email"];	
                            $firma = $_POST["firma"];	
                            $telefono = $_POST["telefono"];	
                            $website = $_POST["website"];	
                            $motivo = $_POST["motivo"];	
                            $comentario = $_POST["comentario"];
                
                $destinatario="jpinto@naaspanama.com";
                $asunto="Contacto_naas :: $motivo";
                $cabeceras="From: $nombre <$email>\r\n";
                $cabeceras .="Content-Type: text/html; charset=utf-8\r\n";
                
                $texto="<a href=\"www.kolormedia.net\"><img src=\"http://www.kolormedia.net/images/kmws_logo.png\"></a><br><br><b>Consulta desde Website Naas:</b><br><br>";
                $texto = $texto . "<b>Nombre        :</b> " . $nombre . "<br>";
                $texto = $texto . "<b>Email         :</b> " . $email . "<br>";
                $texto = $texto . "<b>Empresa       :</b> " . $firma . "<br>";
                $texto = $texto . "<b>Telefono      :</b> " . $telefono . "<br>";
                $texto = $texto . "<b>Website       :</b> " . $website . "<br>";
                $texto = $texto . "<b>Motivo        :</b> " . $motivo . "<br>";
                $texto = $texto . "<b>Comentario    :</b> " . $comentario . "<br>";
                
                mail ($destinatario , $asunto , $texto , $cabeceras);
                
                echo "<div class='k12 col'> 
                    <div id='footer' class='align_center'>
                        <a href='http://www.kolormedia.net'><img src='http://www.kolormedia.net/imgs/kmws_logo.png' alt='kolormedia' title='kolormedia'/></a>
                    </div> 
                    <div id='contactline' class='align_center'>
                        <p>Ud. Ha usado nuestro sistema de comunicacion on-line.</p><br><br><br>
                    </div>	
                    <div id='contact_body' class='align_center'> 
                        <h1>Gracias por contactarnos Sr(a).<br> $nombre 
                        </h1>
                        <p><h3>Su $motivo será procesada y respondida a la mayor brevedad posible via telefonica o email.</h3></p><br><br>
                        <p><h3><a href='contacto.php'>Enviar otro correo</a></h3></p>
                    </div>        
                </div>";
                    }
                    else{
                    include 'includes/contactform.php';
                }
                ?>
            </div>
      
      <div class="clear"></div>

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