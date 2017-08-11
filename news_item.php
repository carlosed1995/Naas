<?php 
  include('includes/config.php');
  include('includes/Blog.php');
	 
	$bi = new allarticles;
	$blogit = $bi->get_blogs_by_id($_GET['id']);
	print_r($blogit);
	exit(); 
?>
<!DOCTYPE html>
<html>
<head>
<title><?php echo $blogit[0]['article_title']; ?>| Naas Panama</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="css/layout.css" rel="stylesheet" type="text/css" media="all">
<meta name="Robots" content="index,follow" />
<meta name="description" content="<?php echo $blogit[0]['article_title']; ?>, <?php echo $blogit[0]['id_user']; ?>.">
</head>
<body id="top" class="bgded fixed">
<?php include_once 'includes/top.php'; ?>

<?php include_once 'includes/mainheader.php'; ?>

<?php include_once 'includes/menu.php'; ?>
<div class="wrapper row4">
  <div class="spacer">
    <div id="breadcrumb" class="clear"> 
      <ul>
        <li><a href="index.php">Home</a></li><li><a>News</a></li>
      </ul>
    </div>
  </div>
</div>

<div class="wrapper row3">
  <div class="spacer">
    <main class="container clear"> 
      	<div class="clear" style="height:30px;"></div>
        <h2 class="btventas align_center"><a href="news.php">Volver a Blog</a></h2>
        <div class="clear" style="height:20px;"></div>
        <h1 style="text-transform:uppercase;">News</h1>
        
        <div class="align_center">
        	<div itemprop="image" itemscope itemtype="https://schema.org/ImageObject">
                <img src="images/blog/<?php echo $blogit[0]['article_picture']; ?>.jpg" alt="<?php echo $blogit[0]['article_title']; ?>" title="<?php echo $blogit[0]['article_title']; ?>"/>
                <meta itemprop="url" content="http://www.naaspanama.com/blog/<?php echo $blogit[0]['article_picture']; ?>.jpg">
                <meta itemprop="width" content="1000">
                <meta itemprop="height" content="300">
            </div>
		</div>
        
        <div class="clear" style="height:20px;"></div>
                
        <div class="blqdetails">
          <h1 itemprop="headline"><?php echo $blogit[0]['article_title']; ?></h1>
          <p itemprop="author" itemscope itemtype="https://schema.org/Person"> By <span itemprop="name"><?php echo $blogit[0]['article_date']; ?></span></p>
          <meta itemprop="datePublished" content="<?php echo $blogit[0]['article_date']; ?>"/>
          <meta itemprop="dateModified" content="<?php echo $blogit[0]['article_date']; ?>"/>
          <p><?php echo $blogit[0]['article_description']; ?></p>
          <p><span itemprop="description"><?php echo $blogit[0]['article_description']; ?></span></p>
          <div itemprop="publisher" itemscope itemtype="https://schema.org/Organization">
            <div itemprop="logo" itemscope itemtype="https://schema.org/ImageObject">
              <img src="http://www.naaspanama.com/images/logo.png" width="90"/>
              <meta itemprop="url" content="http://www.naaspanama.com/images/logo_be.png">
              <meta itemprop="width" content="220">
              <meta itemprop="height" content="73">
            </div>
            <meta itemprop="name" content="busqueda efectiva">
          </div>
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