<!DOCTYPE html>
<html>
<head>
<title>Calibration Tools | Naas Panama</title>
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
        <li><a href="index.php">Home</a></li><li><a>Capabilities</a></li><li><a>Calibration Tools</a></li>
      </ul>
    </div>
  </div>
</div>

<div class="wrapper row3">
  <div class="spacer">
    <main class="container clear"> 
   
      <div class="sidebar one_quarter first"> 
      	<?php include_once 'includes/sidebar_ct.php'; ?>
      </div>
      
      <div class="content three_quarter"> 
        <h1 style="text-transform:uppercase;">Tools Calibration</h1>
        <img class="borderedbox inspace-5" src="images/c_tools.jpg" alt="calibration ndt">
        <br/><br/>
		<h2>Dimensional</h2>
        <div class="scrollable">
          <table>
            <thead>
              <tr>
                <th>MEASURED INSTRUMENT, QUANTITY OR GAUGE</th>
                <th>RANGE OR NOMINAL DEVICE SIZE AS APPROPRIATE</th>
                <th>CALIBRATION AND  MEASUREMENT CAPABILITY EXPRESSED AS AN UNCERTAINTY (±)</th>
                <th>CALIBRATION EQUIPMENT AND REFERENCE STANDARDS USED</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Indicator FO</td>
                <td>0.01 to 305 mm - 0.0001 to 12 in</td>
                <td>(17 + 0.6L) µm - (670 + 2.5L) µin</td>
                <td>Gage Block Set – Grade 2</td>
              </tr>
              <tr>
                <td>Caliper FO</td>
                <td>0.01 to 1 040 mm</td>
                <td>(17 + 0.6L) µm</td>
                <td>Gage Block Set – Grade 2</td>
              </tr>
              <tr>
                <td>Micrometer FO</td>
                <td>0.0001 to 41 in</td>
                <td>(580 + 2.5L) µin</td>
                <td>Gage Block Set – Grade 2</td>
              </tr>
              <tr>
                <td>Crimping Tools - Crimping Chamber FO</td>
                <td>0.279 4 mm  to 15.875 mm - 0.011 in to 0.625 in</td>
                <td>6 µm - 240 µin</td>
                <td>Pin Gage Sets - Class ZZ</td>
              </tr>
			</tbody>
           </table>
           <h2>Mechanical</h2>
			<table>
            <thead>
              <tr>
                <th>RANGE OR NOMINAL DEVICE SIZE AS APPROPRIATE</th>
                <th>RANGE OR NOMINAL DEVICE SIZE AS APPROPRIATE</th>
                <th>CALIBRATION AND  MEASUREMENT CAPABILITY EXPRESSED AS AN UNCERTAINTY (±)</th>
                <th>CALIBRATION EQUIPMENT AND REFERENCE STANDARDS USED</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Torque Wrench FO</td>
                <td>0.33 to 1 000 lbf• ft</td>
                <td>4  % of reading</td>
                <td>CDI Multitest 2000</td>
              </tr>
              <tr>
                <td>Caliper FO</td>
                <td>0.01 to 1 040 mm</td>
                <td>4 to 12 000 lbf• in</td>
                <td>CDI Multitest 2000</td>
              </tr>
              <tr>
                <td>Force - Tensiometer  FO</td>
                <td>5 to 500 lbs</td>
                <td>2 % of reading</td>
                <td>CDI Multitest 2000</td>
              </tr>
              <tr>
                <td>Pressure Gage FO</td>
                <td>100 to 10 000 psi</td>
                <td>1 % of reading</td>
                <td>Additel ADT681/GP10K</td>
              </tr>
			</tbody>
           </table>

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