<html>
<head>

<title>corruption free india</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout.css" rel="stylesheet" type="text/css" media="all">
<style>
.abc{
	display:flex;
	 width: 400px;
    height: 250px;
    background-color: lightgrey;
}
.a{
height:100px;
width:100px;
background-color: blue;
}
.b{height:100px;
width:100px;
background-color: black;}
.c{height:100px;
width:100px;
background-color: pink;}
.q{
   text-transform: capitalize;
   color:red;
//font-weight:red;
   font-family: serif;
   font-size: 22px;
position:absolute;
right:400px;
}
.log{

height:30px;
width:60px;
background-color: black;
color:white;
text-decoration: none;
position: absolute;
left:1200px;
text-align: center;
padding-top: 10px;




}
  .b{height:30px;
    width:80px;
    font-size: 16px;
    font-family: arial;
    color:black;
    border-color: black;
    background-color: white;
    text-align: center;
    border-width: 0.8px;
padding-top:5px;


   }
   .b:hover{
color:white;
    border-color: black;
    background-color:black;
    text-align: center;
    border-width: 0.8px;
   
    -webkit-transition: all ease 0.8s;
    -moz-transition: all ease 0.8s;
    transition:all ease 0.8s;
box-shadow:inset 100px 0 0 0 #000;
color:#d2d2d2;

   }
</style> 
    
</head>

<body id="top">
    
    
    
    <div class="bgded overlay" style="background-image:url('m.jpg');"> 
  <!-- ################################################################################################ -->
<div class="wrapper row1">
    <header id="header" class="hoc clear"> 
      <!-- ################################################################################################ -->
      <div id="logo" class="fl_left">
        <h1><a href="../index.html">Problem Registration Portal</a></h1>
      </div>
      <nav id="mainav" class="fl_right">
        <ul class="clear">

            <?php
	
include 'functionr.php';
$i=getfield2($conn);
echo '<span class="q">'.'welcome '.$i.'</span>';

	?>
         
            
          <li><button class="b"><a href="logoutr.php"  >logout</a></button></li>
        </ul>
      </nav>
      <!-- ################################################################################################ -->
    </header>
  </div>
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  
</div>

    
    
    
    
    
    <div class="wrapper row3">
  <section id="latest" class="hoc container clear"> 
    <!-- ################################################################################################ -->
    <div class="center btmspace-50">
      <h2 class="heading">Fields</h2>
    ########################################################################################
    </div>
    <ul class="nospace group">
      <li class="one_third first">
        <article>
          <figure><img src="11.jpg" alt="">
            <figcaption><a class="btn medium" href="hcf.php">ENTER</a></figcaption>
          </figure>
          <div class="excerpt">
           
            <h6 class="heading">You can register your problem here</h6>
        
          </div>
        </article>
      </li>
      <li class="one_third">
        <article>
          <figure><img src="12.jpg" alt="">
            <figcaption><a class="btn medium" href="hbr.php">ENTER</a></figcaption>
          </figure>
          <div class="excerpt">
          
            <h6 class="heading">You can complaint here</h6>
          </div>
        </article>
      </li>
      <li class="one_third">
        <article>
          <figure><img src="13.jpg" alt="">
            <figcaption><a class="btn medium" href="hdr.php">ENTER</a></figcaption>
          </figure>
          <div class="excerpt">
            
            <h6 class="heading">share your solution here</h6>
        
          </div>
        </article>
      </li>
    </ul>
    <!-- ################################################################################################ -->
  </section>
</div>
    
    
    
    
    
    


<div class="wrapper row4">
  <footer id="footer" class="hoc clear"> 
   
  </footer>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row5">
  <div id="copyright" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <p class="fl_left">Copyright &copy; 2017 - All Rights Reserved - <a href="#">Name</a></p>
    <p class="fl_right">Made by <a target="_blank" href="http://www.os-templates.com/" title="Free Website Templates">Name</a></p>
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="jquery.min.js"></script>
<script src="jquery.backtotop.js"></script>
<script src="jquery.mobilemenu.js"></script>
</body>
</html>