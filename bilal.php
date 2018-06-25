
<!DOCTYPE html>

<html lang="en">
<head>


<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<title>KMU</title>
<!-- Bootstrap Css -->
<link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<!-- Normalize Css -->
<link href="assets/Normalize/normalize.css" rel="stylesheet">
<!--Font Awesome Css-->
<link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet">
<!--Linear icon Css-->
<link href="assets/linearicons/css/icon-font.min.css" rel="stylesheet">
<!--Animate Css-->
<link href="assets/animate/animate.css" rel="stylesheet">
<!--Animate slider css-->
<link href="assets/cd-intro/headline.css" rel="stylesheet">
<!--Portfolio Css-->
<link href="assets/css/ionicons.min.css" rel="stylesheet">
<link href="assets/css/magnific-popup.css" rel="stylesheet">
<!--Custum Css-->
<link href="css/style.css" rel="stylesheet">

<!--Modernizr Js-->
<!-- <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> -->
<script src="assets/sweetalert-dev.js"></script>
<script src="js/vendor/modernizr-3.5.0.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

</head>
<body>
<!-- Pre Loader -->
<div id="loader"></div>
<!--Header-->
<header id="home" class="welcome-hero-area">
  <div class="header-top-area">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <!-- START LOGO -->
          <div class="logo"> <a href="index.php">logo</a> </div>
          <!-- END LOGO -->
        </div>
        <div class="col-md-9">
          <!-- START MAIN MENU -->
          <nav class="navbar navbar-default">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
              <!-- Logo -->
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav">
                <li><a class="smoth-scroll" href="#portfolio">Home</a></li>
                <li><a class="smoth-scroll" href="aboutus.php">About Us</a></li>
              
                <li><a class="smoth-scroll" href="test.php">Give Test</a></li> 
                
                <!-- <li><a class="smoth-scroll" href="#services">Portfolio</a></li> -->
                <li><a class="smoth-scroll" href="contactus.php">Contact Us</a></li>
               
              
              
            
       
                </ul>
            </div>
            <!-- /.navbar-collapse -->
          </nav>
          <!-- END MAIN MENU -->
        </div>
      </div>
    </div>
  </div>
  
  <!-- //Drop down Menue Script -->
<script>
$('ul.nav li.dropdown').hover(function() {
  $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
}, function() {
  $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
});
function submit(){
  $('#myModal').modal('show');
}
function JSalert(){
    swal("Previous Password Not Matched!", "", "warning");
}
function JSalert2(){
    swal("Successfully Changed!", "", "success");
}
</script>
  

  <!-- Start Slider Area -->
  <div class="home-slider-area" >

 
  <style type="text/css">
.slideshow {
  list-style: none;
  z-index: 1;
}
.slideshow li span {
  width: 100%;
  height: 100%;
  position: absolute;
  top: 0px;
  left: 0px;
  color: transparent;
  background-size: cover;
  background-position: 50% 50%;
  background-repeat: none;
  opacity: 0;
  z-index: 0;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  -webkit-animation: imageAnimation 20s linear infinite 0s;
  
 
}
.slideshow li h3 {
  position: absolute;
  text-align: center;
  z-index: 2;
  bottom: 150px;
  left: 0;
  right: 0;
  opacity: 0;
  font-size: 4.0625em;
  font-family: 'Josefin Sans', sans-serif;
  text-transform: uppercase;
  color: #fff;
  -webkit-animation: titleAnimation 20s linear 1 0s;
  
  
}
@media only screen and (min-width: 768px) {
  .slideshow li h3 {
    bottom: 30px;
    font-size: 8.125em;
  }
}
@media only screen and (min-width: 1024px) {
  .slideshow li h3 {
    font-size: 10.9375em;
  }
}

.slideshow li span {
  background-image: url('img1.jpg');
}

}

@-webkit-keyframes imageAnimation {
  0% {
    opacity: 0;
    
  }
 
  25% {
    opacity: 1;
  }
  37.5% {
    opacity: 0;
  }
  100% {
    opacity: 0;
  }
}

@keyframes imageAnimation {
  0% {
    opacity: 0;
    
    
    
  }
  
  25% {
    opacity: 1;
  }
  37.5% {
    opacity: 0;
  }
  100% {
    opacity: 0;
  }
}


.no-cssanimations .slideshow li span {
 
}
</style>

<div><ul class='slideshow'>
  <li>
    
    <!-- By Keven Law from Los Angeles, USA (Long Hot Summer......) [CC-BY-SA-2.0 (http://creativecommons.org/licenses/by-sa/2.0)], via Wikimedia Commons, http://commons.wikimedia.org/wiki/File%3AFlickr_-_law_keven_-_Long_Hot_Summer.......jpg -->
    <span>Summer</span>
  </li>
  <li>
    <!-- By http://www.ForestWander.com [CC-BY-SA-3.0-us (http://creativecommons.org/licenses/by-sa/3.0/us/deed.en)], via Wikimedia Commons, http://commons.wikimedia.org/wiki/File%3ARed-fall-tree-lake_-_West_Virginia_-_ForestWander.png -->
    <span>Fall</span>
  </li>
  <li>
    <!-- By Valerii Tkachenko [CC-BY-2.0 (http://creativecommons.org/licenses/by/2.0)], via Wikimedia Commons, http://commons.wikimedia.org/wiki/File%3AWinter_wonderland_Austria_mountain_landscape_(8290712092).jpg -->
    <span>Winter</span>
  </li>
  <li>
    <!-- By Arman7 (Own work) [CC-BY-SA-3.0 (http://creativecommons.org/licenses/by-sa/3.0) or GFDL (http://www.gnu.org/copyleft/fdl.html)], via Wikimedia Commons, http://commons.wikimedia.org/wiki/File%3ABoroujerd_spring.jpg -->
    <span>Spring</span>
  </li>
</ul>

  <div class="slider-sec-text" >
    <div class="cd-intro" >
    <h1 class="cd-headline clip is-full-width" >
      
      <span class="cd-words-wrapper" style="color: white;">
        <b class="is-visible">Portfolio Plateform
        Create professionally</b>
        <b>Share your Recent Projects</b>
        <b>Stay Upto Date</b>
      </span>
            
    </h1>
  </div>
   
 
  </div>
  </div>
  </div>
  <!-- End Slider Area -->
</header>
<style type="text/css">
  .welcome-hero-area, .home-slider-area, .home-slider-area div {
  height: 100%
}
</style> 



<!--Service start-->
<style type="text/css">
  
.fa-star{
  color: white;
}
.checked {
    color: orange;
}

</style>
<section id="services" class="services">
  <div class="container">
    <div class="row">
      <div class="section-title">
        <h2>Our Services</h2>
      </div>
    </div>
     <div class="row">
      <?php $category="SELECT * FROM `category`";
      $run_cat=mysqli_query($con, $category);
      while($row=mysqli_fetch_array($run_cat)){
        $id=$row['id'];
        $name=$row['name'];
        $img=$row['img'];
      ?>
      <div class="service-callouts">
        <div class="col-sm-6 col-md-4">
          <a href='professional.php?id=<?php echo $id; ?>&name=<?php echo $name ?>'><div class="single-service"> <span class="service-bar"></span>
            <div class="service-icon"><i class="<?php echo $img; ?>"></i> </div>
            <h4><a href="#"><?php echo $name; ?></a></h4>
          </div></a>
        </div>
      </div>
      <?php } ?>
    </div>
  </div>
</section>
<!--Service end-->
<!--Portfolio start-->
<section id="portfolio" class="portfolio">
  <div class="container">
    <div class="row">
      <div class="section-title">
        <h2>Available Professional</h2>
      </div>
    </div>
  </div>
  <!-- Portfolio Filters -->
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <ul class="portfolio-filter">
          <?php 
          
          $select_cat_first_id="SELECT * FROM `category` ORDER BY `id` ASC";
          $run_cat1=mysqli_query($con, $select_cat_first_id);
          $row_cat1=mysqli_fetch_array($run_cat1);
          $first_id=$row_cat1['id'];

          $select_cat="SELECT * FROM `category`";
          $run_cat=mysqli_query($con, $select_cat);
          while ($row_cat=mysqli_fetch_array($run_cat)) { 
            $id=$row_cat['id'];
            $cat_name=$row_cat['name'];
            if($id==$first_id){
              echo '<li class="filter active" data-filter=".'.$id.'">'.$cat_name.'</li>';
            } else { ?>
          <li class="filter" onclick="show(<?php echo $id; ?>)" data-filter=".<?php echo $id; ?>"><?php echo $cat_name; ?></li>

        <?php
        }
          }
           ?>
           <script type="text/javascript">
             function show(id){
              $('.'+id).css('display','block');
             }
           </script>
         
        </ul>
        <!-- /Portfolio Filters -->
        <!-- Portfolio Wrap -->
        <div class="row portfolio-container">
         <?php
          $select_js_cat="SELECT DISTINCT `cat_id` FROM `job_seeker`";
          $run_js_cat=mysqli_query($con, $select_js_cat);
          $check=mysqli_num_rows($run_js_cat);
          ;
          while ($row_js_cat=mysqli_fetch_array($run_js_cat)) {
            # code...
            $cat_id=$row_js_cat['cat_id'];
            $select_js_id="SELECT * FROM `job_seeker` WHERE `cat_id`='$cat_id' ORDER BY RAND() LIMIT 8";
            $run_js_id=mysqli_query($con, $select_js_id);
            while($row_js_id=mysqli_fetch_array($run_js_id)){
            $js_id=$row_js_id['id'];
            $name=$row_js_id['name'];
              /*Showing Star Ranking of Job Seeker*/
      $select_result="SELECT (SUM(obt_marks)/SUM(total_marks))*100 as result FROM `test_result` WHERE `js_id`='$js_id'";
        $run_result=mysqli_query($con, $select_result);
        $check=mysqli_num_rows($run_result); 
      if($check>0){
        $row_result=mysqli_fetch_array($run_result);
        $result=$row_result["result"];
        if($result==0) {
               $list='<span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>';
            }
        if($result>0 && $result<25){
               $list='<span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>';
              }
        if($result>25 && $result<45){
               $list='<span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>';
              }
        if($result>45 && $result<65){
               $list='<span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>';
              }
        if($result>65 && $result<85){
               $list='<span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>';
              }
         if($result>85 && $result<=100){
               $list='<span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>';
              } 
            
            }
            $select_js="SELECT * FROM `job_seeker` WHERE `id`='$js_id'";
            $run_js=mysqli_query($con, $select_js);
            $row_js=mysqli_fetch_array($run_js);
            $js_name=$row_js['name'];
            $js_img=$row_js['img'];
            $js_description=$row_js['description'];

            $select_category="SELECT  * FROM `category` WHERE `id`='$cat_id'";
            $run_category=mysqli_query($con, $select_category);
            $row_category=mysqli_fetch_array($run_category);
            $cat_id2=$row_category['id'];
            $category_name=$row_category['name'];
            if($cat_id2==$first_id){
             ?>

            <a href="cv.php?id=<?php echo $js_id; ?>&prof=<?php echo $category_name; ?>"><div class="col-md-3 col-sm-4 col-xs-12 work <?php echo $cat_id2; ?>">
            <?php }else {
              ?>
              <a href="cv.php?id=<?php echo $js_id; ?>&prof=<?php echo $category_name; ?>"><div class="col-md-3 col-sm-4 col-xs-12 work <?php echo $cat_id2; ?>" style="display: none;" >
            <?php } ?>
         
          <div class="team-item">
            <div class="team-item-image"> <img src="images/<?php echo $js_img; ?>" alt="" width="290px" height="200px">
              <div class="team-item-detail">
                <h4>Hello &amp; Welcome!</h4>
                <p><?php echo $js_description; ?></p>
                
              </div>
            </div>
            <div class="team-item-descr font-alt">
              <div class="team-item-name"><?php echo $name; ?></div>
              <div class="team-item-role"><?php echo $category_name; ?></div>
              <?php echo $list; ?>
            </div>
          </div>
        </div></a>
        <?php } } ?>
        
  </div>
  <!-- /Portfolio Wrap -->
</section>
<!--Portfolio end-->
<!--feature-Section start-->
<section class="feature-sec">
  <div class="container">
    <div class=" row">
      <div class="col-md-12">
        <div class="ln-sp">
          <h2 class="margin-bottom-1 text-color">Attractive Portfolios</h2>
          <h3 class="margin-bottom-2">Hire One Of The Best</h3>
          <h6 class="margin-bottom-2">All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks 
            as necessary, making this the first true generator on dictionary 
            of the Internet.</h6>
          <a class="btn" href="#">Get More Detail</a> </div>
      </div>
    </div>
  </div>
  </section>
<!--feature-Section end-->

<div class="clearfix"></div>

<!--Blog end-->
<!--Client start--><div class="section-title" style="padding-top: 30px;">
        <h2>Feature Companies</h2>
      </div>



<div class="photobanner" style="background-color: #f1f1f1;">

      <img class="first" src="images/c5.png" alt="" />
     <?php $compny="SELECT * FROM company LIMIT 7";
     $qrrry=mysqli_query($con,$compny);
     while ($rowimg=mysqli_fetch_array($qrrry)) {
   ?> <img src="images/<?php echo $rowimg['logo']; ?>" alt="" height="140px" width="170px">
     <?php }?>
     <!-- <img  src="images/c5.png" alt="" />
     <img  src="images/c5.png" alt="" />
     <img src="images/c5.png" alt="" />
     <img src="images/c5.png" alt="" />
     <img src="images/c5.png" alt="" /> -->
</div>

<!--Client end-->
<footer>
  <div class="container">
    <p>&copy; Copyright <script type="text/javascript">
var d=new Date();
document.write(d.getFullYear());
</script> Xoro | All Rights Reserved.</p>
  </div>
</footer>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="assets/jquery/jquery-3.2.1.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/easing/jquery.easing.min.js"></script>
<script src="assets/isotope/jquery.isotope.js"></script>
<script src="assets/jquery/imagesloaded.pkgd.min.js"></script>
<script src="assets/cd-intro/main.js"></script>
<script src="assets/jquery/jquery.magnific-popup.min.js"></script>
<script src="assets/number-animation/jquery.animateNumber.min.js"></script>
<script src="assets/jquery/plugins.js"></script>
<script src="js/custom.js"></script>
</body>
</html>
