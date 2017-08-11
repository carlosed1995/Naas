<!DOCTYPE html>
<html>
<head>
<title>NDT (Non Destructive Test) | Naas Panama</title>
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
        <li><a href="index.php">Home</a></li><li><a>Capabilities</a></li><li><a>NDT</a></li>
      </ul>
    </div>
  </div>
</div>

<div class="wrapper row3">
  <div class="spacer">
    <main class="container clear"> 
   
      <div class="sidebar one_quarter first"> 
      	<?php include_once 'includes/sidebar_ndt.php'; ?>
      </div>
      
      <div class="content three_quarter"> 
        <h1 style="text-transform:uppercase;">NDT</h1>
        <img class="borderedbox inspace-5" src="images/cndt.jpg" alt="calibration ndt">
        <br/><br/>
		<h2>Naas Panama have a level 2 expert in NDT test:</h2>
        <ul>
        	<li>Visual</li>
            <li>Eddy current</li>	
            <li>Penetrating inks</li>
            <li>Ultra sound</li>
            <li>Magnetical particules</li>
        </ul>
        <br/>
		<h2>NDT testing:</h2>
        <div class="scrollable">
          <table>
            <thead>
              <tr>
                <th>NTD Method</th>
                <th>Standards</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Eddy Current Inspection</td>
                <td>MIL-HDBK-782/2</td>
              </tr>
              <tr>
                <td>Liquid Penetrant Inspection</td>
                <td>ASTM-E-1417</td>
              </tr>
              <tr>
                <td>Magnetic Particle Inspection</td>
                <td>ASTM-E-1444</td>
              </tr>
              <tr>
                <td>Ultrasonic Inspection</td>
                <td>ASTM E2375-08</td>
              </tr>
              <tr>
                <td>Visual Inspection</td>
                <td>T904-AS-GIB-010/271 AC43-204</td>
              </tr>
              <tr>
                <td>Personnel Qualification and Cetification</td>
                <td>NAS 410 (EN4179 Equivalent)</td>
              </tr>
			</tbody>
           </table>
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