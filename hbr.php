<html>
    <head>

<title>corruption free india</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout.css" rel="stylesheet" type="text/css" media="all">
<style>


.a{
    font-size: 20px;
  text-shadow: 1px 0px black;
    text-transform: capitalize;
	color:red;
}
.b{     position:absolute;
        top:570px;
         left:300px;
	font-size: 20px;
  text-shadow: 1px 0px black;
    text-transform: capitalize;
	color:red;
}
.c{position: relative;
font-size: 30px;
  text-shadow: 1px 1px #555;
    text-transform: capitalize;
	color:#111;
	left:30px;
	top:20px;
}
.d{
	position: relative;
    font-family: cursive;
    color:black;
	height:100px;
	width:300px;
	left:30px;
	top:60px;
	border-style:solid;
	border-color:#555; 
}
  .b{height:30px;
    width:90px;
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
.e{position: relative;
	left:30px;
	height:29px;
	width:120px;
	border-style:solid;
	border-color:black; 
	background-color: black;
	color:white;
	top:100px;
}
.e:hover{
	background-color: purple;
	color:white;
	border-color:purple;
	
}

}





</style>
    </head>
<?php
include "connect.inc.php";
if(isset($_POST['submit'])&&isset($_POST['data']))
{   
	$problem=mysqli_real_escape_string($conn,$_POST['data']);

if(!empty($problem))
{      
         $query=mysqli_query($conn,"INSERT INTO problems ( problem)
VALUES ('$problem')")or die(mysqli_error($conn));
          if($query)
          {
            echo '<span class="b">'."problem Registered succesfully!".'</span>';
              
          }
          else
          {
            echo "try again";                
          }
}
else
	echo '<span class="b">'."please enter the complete details".'</span>'.'<br>';
}

?>


<style>
.log{

height:25px;
width:60px;
background-color: black;
color:white;
top:20px;
text-decoration: none;
position: absolute;
left:1200px;
text-align: center;
padding-top: 5px;
border-color: black;
border-width: 0.8px;
}
.log:hover{
  background-color: white;
  color:black;
  border-color: black;
  border-width: 0.8px;
}
</style>
<body id="top">
    
    
    
    
        <div class="bgded overlay" style="background-image:url('01.png');"> 
  <!-- ################################################################################################ -->
<div class="wrapper row1">
    <header id="header" class="hoc clear"> 
      <!-- ################################################################################################ -->
      <div id="logo" class="fl_left">
        <h1><a href="../index.html">Complain Here!</a></h1>
      </div>
      <nav id="mainav" class="fl_right">
        <ul class="clear">

            <?php
	
include 'functionr.php';
$i=getfield2($conn);
echo '<span class="q">'.'welcome '.$i.'</span>';

	?>
            
          <li><a href="logoutr.php" >logout</a></li>
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

      
      <form action="hbr.php" method="post">
	<br>
<span class="c">please give us details related to the problem:</span><br><br>
<textarea name="data" class="d"></textarea><br>
<input type="submit" name="submit" class="e">
<br><br>
<br><br>
</form>
    
      
      
    <!-- ################################################################################################ -->
  </section>
</div>
    

    
    
    
<style type="text/css">
.q{
  position: absolute;
  top:50px;
  left:980px;
  text-transform: capitalize;
   color:red;
   font-family: arial;
   font-size: 19px;
}</style>
    
    
    
    <div class="wrapper row4">
  <footer id="footer" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <div class="one_quarter first">
      <h6 class="title">Eget neque mattis</h6>
      <p>Lacinia curabitur vulputate purus nibh in dapibus diam tempus quis proin lobortis metus vel consequat varius tincidunt mauris at.</p>
      <p>Finibus lorem ligula interdum ipsum vel venenatis magna quam at libero nullam mattis scelerisque convallis.</p>
    </div>
    <div class="one_quarter ">
      <h6 class="title">Aliquam sed velit</h6>
      <ul class="nospace linklist contact">
        <li><i class="fa fa-map-marker"></i>
          <address>
          Street Name &amp; Number, Town, Postcode/Zip
          </address>
        </li>
        <li><i class="fa fa-phone"></i> +00 (123) 456 7890<br>
          +00 (123) 456 7890</li>
        <li><i class="fa fa-fax"></i> +00 (123) 456 7890</li>
        <li><i class="fa fa-envelope-o"></i> info@domain.com</li>
      </ul>
    </div>
    <div class="one_quarter">
      <h6 class="title">Sagittis vitae eros</h6>
      <ul class="nospace linklist">
        <li><a href="#">Eu augue semper non elit</a></li>
        <li><a href="#">Amet enim molestie mattis</a></li>
        <li><a href="#">Euismod nisi nunc interdum</a></li>
        <li><a href="#">Felis hendrerit non efficitur</a></li>
        <li><a href="#">Augue placerat integer ligula</a></li>
      </ul>
    </div>
    <div class="one_quarter">
      <h6 class="title">Nec consectetur</h6>
      <ul class="nospace linklist">
        <li>
          <article>
            <h2 class="nospace font-x1"><a href="#">Quam fusce cursus</a></h2>
            <time class="font-xs block btmspace-10" datetime="2045-04-06">Friday, 6<sup>th</sup> April 2045</time>
            <p class="nospace">Blandit eleifend maximus class aptent taciti sociosqu litora&hellip;</p>
          </article>
        </li>
        <li>
          <article>
            <h2 class="nospace font-x1"><a href="#">Massa amet aliquam</a></h2>
            <time class="font-xs block btmspace-10" datetime="2045-04-05">Thursday, 5<sup>th</sup> April 2045</time>
            <p class="nospace">Per conubia nostra inceptos himenaeos etiam quis lacus&hellip;</p>
          </article>
        </li>
      </ul>
    </div>
    <!-- ################################################################################################ -->
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