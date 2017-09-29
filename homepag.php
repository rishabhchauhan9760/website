<?php
include "connect.inc.php";



if(isset($_POST['rname'])&&isset($_POST['rpass2'])&&isset($_POST['rpass1'])&&isset($_POST['remail'])&&isset($_POST['rphone']))
{
   $rname=$_POST['rname'];
   $rpass1=$_POST['rpass1'];
   $rpass2=$_POST['rpass2'];
   $rphone=$_POST['rphone'];
   $remail=$_POST['remail'];
   if(!empty("$rname")&&!empty("$rpass2")&&!empty("$rpass1")&&!empty("$rphone")&&!empty("$remail"))
   {
if($rpass1!=$rpass2)
   {   
         echo '<span class="w">'."password donot match".'</span>';
   }
   else
   {       $rpass2=md5($rpass2);
         $query=mysqli_query($conn,"INSERT INTO registration (username, password,email,phone)
VALUES ('$rname','$rpass2','$remail','$rphone')")or die(mysqli_error($conn));
          if($query)
          {
            echo '<span class="w">'."Registered Succesfully !!!!!!".'</span>';
               
          }
          else
          {
            echo "tryb ";                
          }
       }

}
else
{
  echo '<span class="w">'."Please Enter Complete Details !".'</span>';
}

} 


if(isset($_POST['usrname']))
{
$usrname="asdasd";
  $usrname=$_POST['usrname'];

if(isset($_POST['psw']))
{
$psw="a";
  $psw=md5($_POST['psw']);}
  $sql="SELECT id FROM registration WHERE username='$usrname' AND password='$psw'"; 
                     
                       $result=$conn->query($sql);  
                       $count=$result->num_rows;
                       if ($count>0)
                        {
                         
    while($row = $result->fetch_assoc())
     {   header('location:midr.php');
session_start();
        $_SESSION['userid']=$row["id"]; 
     }            
                     } 
                     else {   
                     echo '<script>';
                     echo 'alert("Incorrect user name or password")';
                     echo '</script>';

                   
}
}
?>
<html>
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<head>
<title>corruption free india</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout.css" rel="stylesheet" type="text/css" media="all">
<style>
.c{
   color:red;
   height:20px;
}
.d{
height:500px;
width:400px;
background-color: pink;
border-color: black;
position: absolute;
top:160px;
padding: 40px;

}
#aa{
  display:none;
}

.w{
text-transformation:capitalize;
position:absolute;
top:150px;
left:300px;
  color:red;
font-family:arial;
font-size:19px;
}
.reg{
list-style-type: none;        
}
    .extra{
        color:black;
    }
.reg1{
color:black;}
</style>
</head>
<body id="top">

    

<div class="bgded overlay" style="background-image:url('m.jpg');"> 
  <!-- ################################################################################################ -->
<div class="wrapper row1">
    <header id="header" class="hoc clear"> 
      <!-- ################################################################################################ -->
      <div id="logo" class="fl_left">
        <h1><a href="index.html">Nonuxor</a></h1>
      </div>
      <nav id="mainav" class="fl_right">
        <ul class="clear">
          <li><a href="index.html">Home</a></li>
          <li class="active"><a href="homepag.php">Register/Login</a></li>
        </ul>
      </nav>
      <!-- ################################################################################################ -->
    </header>
  </div>
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  
</div>

    
    
    
<div class="group center">
  <main class="hoc container clear"> 
    <!-- main body -->
    <!-- ################################################################################################ -->
    <div class="wrapper row2" >
      <article >
          
          
          
      <div class="one_half first">    
        <h1 > Register</h1>
        
        <form action="homepag.php" method="post">
            <ul class="reg">
                <li>USERNAME: <input type="text" name="rname" class="reg1"><br></li>
                <li>PASSWORD:<input type="password" name="rpass1" class="reg1"><br></li>
                <li>CONFIRM PASSWORD:<input type="password" name="rpass2" class="reg1"><br></li>
                <li>GMAIL:<input type="email" name="remail" class="reg1"><br></li>
                <li>PHONE NO.:<input type="tel" name="rphone" maxlength="10" minlength="10" class="reg1"><br></li>
            <input type="submit" name="submit" class="reg1"><br><br>
            </ul>
        </form>
          </div>
          
          
          <div class="one_half">
          <h1>Already registered?</h1> 
        <button onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-green w3-large">Login</button>
              
          </div>
    

    
    <div id="id01" class="w3-modal">
        <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">
            <div class="w3-center"><br>
                <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-xlarge w3-transparent w3-display-topright" title="Close Modal">×</span>
            <img src="m.jpg" alt="Avatar" style="width:30%" class="w3-circle w3-margin-top">
            </div>

        <form class="w3-container" action="homepag.php" method="post">
            <div class="w3-section">
            <div class="extra">
            <label><b>Username</b></label>
            <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Enter Username" name="usrname" required>
            <label><b>Password</b></label>
            <input class="w3-input w3-border" type="password" placeholder="Enter Password" name="psw" required>
            <button class="w3-button w3-block w3-green w3-section w3-padding" type="submit">Login</button>
            <div id="aa">Inorrect user name  or password</div>
            </div>
            </div>
        </form>

        <div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
            <button onclick="document.getElementById('id01').style.display='none'" type="button" class="w3-button w3-red">Cancel</button>
            <span class="w3-right w3-padding w3-hide-small">Forgot <button onclick="document.getElementById('id02').style.display='block'">password?</button></span>
        </div>

        </div>
    </div>
        <div id="id02" class="w3-modal">
    <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:500px">
  
      <div class="w3-center"><br>
        <span onclick="document.getElementById('id02').style.display='none'" class="w3-button w3-xlarge w3-transparent w3-display-topright" title="Close Modal">×</span>
      </div>

      <form class="w3-container" action="homepag.php" method="post">
        <div class="w3-section">
          <h1>ENTER EMAIL</h1>
          <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Enter email" name="forget" required>
          <button class="w3-button w3-block w3-green w3-section w3-padding" type="submit">send</button>
          
        </div>
      </form>
      
      <div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
        <button onclick="document.getElementById('id02').style.display='none'" type="button" class="w3-button w3-red">Cancel</button>
      
      </div>

    </div>
  </div>


      
</article>
      
    </div>
    <!-- ################################################################################################ -->
    <!-- / main body -->
    <div class="clear"></div>
  </main>
</div>
    <style>

</style>
    
    <div class="wrapper row4">
</div>
<div class="wrapper row5">
  <div id="copyright" class="hoc-clear"> 
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