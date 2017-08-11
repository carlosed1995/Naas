<!DOCTYPE html>
<html>
<head>
<title>Line Maintenance | Naas Panama</title>
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
        <li><a href="index.php">Home</a></li><li><a href="maintenance.php">Maintenance</a></li><li><a>Line Maintenance</a></li>
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
        <h1 style="text-transform:uppercase;">Line Maintenance</h1>
        <img class="borderedbox inspace-5" src="images/maintenance2.jpg" alt="line maintenance">
        <br/><br/>
		<p>We understand that response time is crucial during aircraft transit, which is why we our committed to efficiently carrying out all required aircraft line services.</p>
        
        <p>We offer daily, transit and overnight services, with capacity to meet the needs of commercial, regional, corporate, cargo, and turboprop aviation. We conduct routine and non-routine inspections.</p>
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