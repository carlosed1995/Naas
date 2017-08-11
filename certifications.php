<!DOCTYPE html>
<html>
<head>
<title>Certificatiions | Naas Panama</title>
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
        <li><a href="index.php">Home &rarr;</a></li><li><a>Certifications</a></li>
      </ul>
    </div>
  </div>
</div>

<div class="wrapper row3">
  <div class="spacer">
    <main class="container clear"> 
   
      <div class="sidebar one_quarter first"> 
      	<?php include_once 'includes/sidebar_capa.php'; ?>
      </div>
      
      <div class="content three_quarter"> 
        <h1 style="text-transform:uppercase;">Certifications</h1>
        
        <a class="boton forbot" href="pdf/naas_capabilities.pdf" title="certifications">NAAS Capabilities (spanish doc)</a>
        
        <a class="boton forbot" href="pdf/workshop_AAC_TAN.pdf" title="certifications">See workshop certifications</a>
        
        <div class="scrollable">
          <table>
            <thead>
              <tr>
                <th>Fabricante</th>
                <th>Serie</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Airbus</td>
                <td>A319, A320, A321</td>
              </tr>
              <tr>
                <td>Boeing</td>
                <td>737 -100,200, 300, 400, 500, 600, 700, 800</td>
              </tr>
              <tr>
                <td>Boeing</td>
                <td>757-100,200</td>
              </tr>
              <tr>
                <td>Boeing</td>
                <td>767 series</td>
              </tr>
              <tr>
                <td>Boeing</td>
                <td>727-100,240</td>
              </tr>
              <tr>
                <td>Embraer</td>
                <td>170,190</td>
              </tr>         
              <tr>
                <td>Casa </td>
                <td>212-200,300,400</td>
              </tr>
              <tr>
                <td>Cessna</td>
                <td>
150, 152, 172, 182, 1 86, 206, 208, 210, 402, 421, 500, 550, 560,
560X1, 650, 750</td>
              </tr>
              <tr>
                <td>DeHaviland </td>
                <td>DHC-6, DHC-7, DHC-B</td>
              </tr>
              <tr>
                <td>Learjet </td>
                <td>23, 24, 25, 28, 29, 31, 35, 36, 45, 55 y 60</td>
              </tr>
              <tr>
                <td>Piper </td>
                <td>PA24,PA23, PA31, PA34, PA2B</td>
              </tr>
              <tr>
                <td>Britten Norman </td>
                <td>BN2</td>
              </tr>
              <tr>
                <td>SAAB </td>
                <td>360</td>
              </tr>
              <tr>
                <td>Twin Commander </td>
                <td>690</td>
              </tr>
              <tr>
                <td>Lockheed</td>
                <td> L100 (282 y 382), C-130</td>
              </tr>
              <tr>
                <td>Raytheon </td>
                <td>c90</td>
              </tr>
              <tr>
                <td>Fokker </td>
                <td>F27,F28, F50, F100 </td>
              </tr>
              <tr>
                <td>Hawker Beechcraft</td>
                <td>125 1A, 3A,400, 600, 700, 800, B00XP, Hawker 1000 Horizon, 390 </td>
              </tr>
              <tr>
                <td>Premier  </td>
                <td>1, 1900</td>
              </tr>
            </tbody>
          </table>
        </div>
        
        <div class="wrapper" style="clear::both;">
        	<h2>Other Certifications:</h2>
            <div class="one_third_special col">
            	<img style="max-width:300px;" src="images/iso.jpg" alt="certification" title="certification"/>
            </div>
        	<div class="one_third_special col">
            	<a href="pdf/certification1.jpg"><img style="max-width:300px;" src="pdf/certification1.jpg" alt="certification" title="certification"/></a>
            </div>
            <div class="one_third_special col">
            	<a href="pdf/certification2.jpg"><img style="max-width:300px;" src="pdf/certification2.jpg" alt="certification" title="certification"/></a>
            </div>
            <div class="one_third_special col">
            	<a href="pdf/certification3.jpg"><img style="max-width:300px;" src="pdf/certification3.jpg" alt="certification" title="certification"/></a>
            </div>
        </div>

        <hr/>
      
      <div class="clear"></div>
      </div>
      
    </main>
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