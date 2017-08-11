<?php session_start();?>
<?php
switch ($_SESSION['count']) {
case "es":
	$xml = simplexml_load_file("lang/es.xml");
	break;
case "en":
	$xml = simplexml_load_file("lang/en.xml");
	break;
default:
$xml = simplexml_load_file("lang/en.xml");
}

?>
<!DOCTYPE html>
<html>
<head>
<title>Naas Panama | Aircraft supply</title>
<!--
		+ + + + + + + + + + + + + + + + + + + + + + +   KOLORMEDIA.NET   + + + + + + + + + + + + + + + + + + + +
		            
		                                                                                 
          sooooo:   
       ``-999999s  
        `.999999o`
        `.999999o   
         .999999o 
         .999999o` 
         .999999o
         .999999o
         .9999o 
         .9999o  
         .9999o
         `4999o 
         `d449o
                             
		
		+ + + + + + + + + + + + + + + + + + + + + + + +   KOLORMEDIA.NET   + + + + + + + + + + + + + + + + + + + + + +
		-->
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
        <li><a href="#">Home</a></li>
        <li><a href="#">Lorem</a></li>
        <li><a href="#">Ipsum</a></li>
        <li><a href="#">Dolor</a></li>
      </ul>
    </div>
  </div>
</div>

<div class="wrapper row3">
  <div class="spacer">
    <main class="container clear"> 
      <div class="sidebar one_quarter first"> 
      
        <h6>Nuestros Servicios</h6>
        <nav class="sdb_holder">
          <ul>
            <li><a href="#">Providing Specilized Manpower</a></li>
            <li><a href="#">Fuel Systems</a>
              <ul>
                <li><a href="#">Navigation - Level 2</a></li>
                <li><a href="#">Navigation - Level 2</a></li>
              </ul>
            </li>
            <li><a href="#">Repair And Overhaul Of Fuel Cells (Bladders)</a>
            <li><a href="#">Base And Line Maintenance</a></li>
            <li><a href="#">Tool Calibration Lab</a></li>
            <li><a href="#">Upcoming Services</a></li>
          </ul>
        </nav>
        
        <div class="sdb_holder">
          <h6>Do you have an Emergency?</h6>
          <address>
            <ul class="nospace">
                <li class="btmspace-10"><span class="fa fa-phone"></span> +507 316-0174 / 0175<br/> 6205-7175</li>
                <li><span class="fa fa-envelope-o"></span> info@naaspanama.com</li>
            </ul>
          </address>
        </div>
        
        <div class="sdb_holder">
          <article>
            <h6>Lorem ipsum dolor</h6>
            <p>Nuncsed sed conseque a at quismodo tris mauristibus sed habiturpiscinia sed.</p>
            <ul>
              <li><a href="#">Lorem ipsum dolor sit</a></li>
              <li>Etiam vel sapien et</li>
              <li><a href="#">Etiam vel sapien et</a></li>
            </ul>
            <p>Nuncsed sed conseque a at quismodo tris mauristibus sed habiturpiscinia sed. Condimentumsantincidunt dui mattis magna intesque purus orci augue lor nibh.</p>
            <p class="more"><a href="#">Continue Reading &raquo;</a></p>
          </article>
        </div>
      </div>
      
      <div class="content three_quarter"> 
        <h1>All Our Services</h1>
        <img class="imgr borderedbox inspace-5" src="../images/demo/imgr.gif" alt="">
        <p>You will find in this section all our services listed below to a better view including a very detail explanation of our SLEp Service.</p>
        
        <div>
        <ul id="toggle-view" class="listfaqs">
            <li>
                <h3>Providing Specilized Manpower</h3>
                <span>+</span>
                <p><img class="" src="images/serv1.jpg" alt="" title=""/>Our staff is highly trained with extensive specialized experience in areas such as metal structures, composites, avionics, engines, interiors, painting, and systems.</p>
                <p>Thanks to the benefits of the Panama Pacific Special Economic Area, we can provide foreign labor at the most competitive man-hour rates on the market.</p>
            </li>
            <li>
                <h3>Fuel Systems</h3>
                <span>+</span>
                <p><img class="" src="images/serv1.jpg" alt="" title=""/>We are leaders in the maintenance and repair of aircraft integral fuel tanks and bladder-type fuel tanks.</p>
                <p class="slist">
                    - Detection and repair of fuel tank leakage.<br/>
                    - Removal and installation of bladders.<br/>
                    - Sealing of integral tanks.<br/>
                    - Compliance with SB and AD.<br/>
                    - SFAR88 Compliance.<br/>
                    - Troubleshooting of faulty fuel metering systems.<br/>
                    - Testing of tank negative and positive pressures.
                </p>
            </li>
            <li>
                <h3>Repair And Overhaul Of Fuel Cells (Bladders)</h3>
                <span>+</span>
                <p><img class="" src="images/serv1.jpg" alt="" title=""/>Our technicians have professional training and experience in the repair and overhaul of fuel cells for:</p>
                <p class="slist">
                    - General Aviation.<br/>
                    - Helicopters.<br/>
                    - Commercial Aviation.<br/>
                    - Cargo & Military Aviation.
                </p>
            </li>
            <li>
                <h3>Base and Line Maintenance</h3>
                <span>+</span>
                <p><img class="" src="images/serv1.jpg" alt="" title=""/>We understand that response time is crucial during aircraft transit, which is why we our committed to efficiently carrying out all required aircraft line services.</p>
                <p>We offer daily, transit and overnight services, with capacity to meet the needs of commercial, regional, corporate, cargo, and turboprop aviation. We conduct routine and non-routine inspections.</p>
            </li>
            <li>
                <h3>Tool Calibration Lab</h3>
                <span>+</span>
                <p><img class="" src="images/serv1.jpg" alt="" title=""/>We have the capacity to calibrate dimensional, torque, pressure, and crimping tools. </p>
                <p>
                    - Standards traceable to NIST.<br/>
                    - Fast tool turnaround time.<br/>
                    - Repair and replacement of tool parts.<br/>
                    - We are able to respond to emergency requests as required by our clients.
                </p>
                <p class="slisttit">We are currently in the process of obtaining  ISO 17025 accreditation.</p>
            </li>
            <li>
                <h3>Upcoming Services</h3>
                <span>+</span>
                <p><img class="" src="images/serv1.jpg" alt="" title=""/></p>
                <p>
                    - Non Destructive Testing (NDT).<br/>
                    - Line and Base Maintenance for Helicopters.<br/>
                    - Repair and overhaul for engines JT8D series, PT6 and PT6T series.<br/>
                    - Avionics and Instrument Workshop.<br/>
                    - Structure and Composite Workshop.
                </p>
                <p class="slisttit">We are currently in the process of obtaining  ISO 17025 accreditation.</p>
            </li>
		</ul>
        </div>
        
        <p>Portortornec condimenterdum eget consectetuer condis consequam pretium pellus sed mauris enim. Puruselit mauris nulla hendimentesque elit semper nam a sapien urna sempus.</p>
        <h1>Table(s)</h1>
        <div class="scrollable">
          <table>
            <thead>
              <tr>
                <th>Header 1</th>
                <th>Header 2</th>
                <th>Header 3</th>
                <th>Header 4</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><a href="#">Value 1</a></td>
                <td>Value 2</td>
                <td>Value 3</td>
                <td>Value 4</td>
              </tr>
              <tr>
                <td>Value 5</td>
                <td>Value 6</td>
                <td>Value 7</td>
                <td><a href="#">Value 8</a></td>
              </tr>
              <tr>
                <td>Value 9</td>
                <td>Value 10</td>
                <td>Value 11</td>
                <td>Value 12</td>
              </tr>
              <tr>
                <td>Value 13</td>
                <td><a href="#">Value 14</a></td>
                <td>Value 15</td>
                <td>Value 16</td>
              </tr>
            </tbody>
          </table>
        </div>
        
        <div id="comments">
          <h2>Comments</h2>
          <ul>
            <li>
              <article>
                <header>
                  <figure class="avatar"><img src="../images/demo/avatar.png" alt=""></figure>
                  <address>
                  By <a href="#">A Name</a>
                  </address>
                  <time datetime="2045-04-06T08:15+00:00">Friday, 6<sup>th</sup> April 2045 @08:15:00</time>
                </header>
                <div class="comcont">
                  <p>This is an example of a comment made on a post. You can either edit the comment, delete the comment or reply to the comment. Use this as a place to respond to the post or to share what you are thinking.</p>
                </div>
              </article>
            </li>
            <li>
              <article>
                <header>
                  <figure class="avatar"><img src="../images/demo/avatar.png" alt=""></figure>
                  <address>
                  By <a href="#">A Name</a>
                  </address>
                  <time datetime="2045-04-06T08:15+00:00">Friday, 6<sup>th</sup> April 2045 @08:15:00</time>
                </header>
                <div class="comcont">
                  <p>This is an example of a comment made on a post. You can either edit the comment, delete the comment or reply to the comment. Use this as a place to respond to the post or to share what you are thinking.</p>
                </div>
              </article>
            </li>
            <li>
              <article>
                <header>
                  <figure class="avatar"><img src="../images/demo/avatar.png" alt=""></figure>
                  <address>
                  By <a href="#">A Name</a>
                  </address>
                  <time datetime="2045-04-06T08:15+00:00">Friday, 6<sup>th</sup> April 2045 @08:15:00</time>
                </header>
                <div class="comcont">
                  <p>This is an example of a comment made on a post. You can either edit the comment, delete the comment or reply to the comment. Use this as a place to respond to the post or to share what you are thinking.</p>
                </div>
              </article>
            </li>
          </ul>
          <h2>Write A Comment</h2>
          <form action="#" method="post">
            <div class="one_third first">
              <label for="name">Name <span>*</span></label>
              <input type="text" name="name" id="name" value="" size="22">
            </div>
            <div class="one_third">
              <label for="email">Mail <span>*</span></label>
              <input type="text" name="email" id="email" value="" size="22">
            </div>
            <div class="one_third">
              <label for="url">Website</label>
              <input type="text" name="url" id="url" value="" size="22">
            </div>
            <div class="block clear">
              <label for="comment">Your Comment</label>
              <textarea name="comment" id="comment" cols="25" rows="10"></textarea>
            </div>
            <div>
              <input name="submit" type="submit" value="Submit Form">
              &nbsp;
              <input name="reset" type="reset" value="Reset Form">
            </div>
          </form>
        </div>
      </div>
      
      <div class="clear"></div>
      
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