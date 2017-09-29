<html>
<head>

<title>corruption free india</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout.css" rel="stylesheet" type="text/css" media="all">

</head>
<?php
//require 'functionr.php';
include 'connect.inc.php';
  if(isset($_POST['text'])&&isset($_POST['g'])&&isset($_POST['date'])&&isset($_POST['Submit1']))
  {  

    $problem=$_POST['text'];
    $date=$_POST['date'];
        $r=$_POST['g'];
        
            $corr= 'unchecked';
    $woman = 'unchecked';
    $theft='unchecked';
    $govtcons= 'unchecked';
    $land= 'unchecked';
    $dprop='unchecked';
    $sprop= 'unchecked';
    $drugc = 'unchecked';
    $drugp='unchecked';
    $rape= 'unchecked';
    $murder = 'unchecked';
    $prostitution='unchecked';
    $weapons= 'unchecked';
    $mcrrop = 'unchecked';
    $child='unchecked';
    $goff= 'unchecked';
    $poff = 'unchecked';
    $cc='unchecked';
     $if= 'unchecked';
    $summgule = 'unchecked';
    $kiddnaping='unchecked';
$medical='unchecked';
    if(!empty($problem)&&!empty($date)&&!empty($r))
    {
            
         $selected_radio = $_POST['g'];

         if ($selected_radio == 'corr') {
                
                $a='corruption';
                $p='C';
          }else if ($selected_radio == 'woman') {
              
                $a='woman';
                $p='W';
          }
          else if ($selected_radio == 'theft') {
                
                $a='theft';
                $p='T';
          }
           else if ($selected_radio == 'govtcons') {
                
                $a='theft';
                $p='gc';
          }
           else if ($selected_radio == 'land') {
                
                $a='theft';
                $p='l';
          } else if ($selected_radio == 'dprop') {
                
                $a='damagingproperty';
                $p='dp';
          } else if ($selected_radio == 'sprop') {
                
                $a='stolenproperty';
                $p='sp';
          } else if ($selected_radio == 'drugc') {
                
                $a='drugcultivation';
                $p='dc';
          } else if ($selected_radio == 'drugp') {
                
                $a='drugpossesion';
                $p='dp';


          } else if ($selected_radio == 'rape') {
                
                $a='rape';
                $p='r';
          } else if ($selected_radio == 'murder') {
                
                $a='murder';
                $p='m';
          } else if ($selected_radio == 'prostitution') {
                
                $a='prostitution';
                $p='pr';
          } else if ($selected_radio == 'weapons') {
                
                $a='weapons';
                $p='wp';
          } else if ($selected_radio == 'mcrrop') {
                
                $a='medical';
                $p='m';
          } else if ($selected_radio == 'child') {
                
                $a='chillabour';
                $p='cl';
          } else if ($selected_radio == 'goff') {
                
                $a='govtbribery';
                $p='gl';
          } else if ($selected_radio == 'poff') {
                
                $a='privatebribery';
                $p='pb';
          } else if ($selected_radio == 'cc') {
                
                $a='cybercrime';
                $p='cc';
          } else if ($selected_radio == 'if') {
                
                $a='insurance';
                $p='if';
          } else if ($selected_radio == 'summgule') {
                
                $a='summguling';
                $p='s';
          } else if ($selected_radio == 'kiddnaping') {
                
                $a='kiddnaping';
                $p='k';
          } else if ($selected_radio == 'medical') {
                
                $a='medical';
                $p='med';
          } 
    
      $query=mysqli_query($conn,"INSERT INTO $a ( problem,date)
VALUES ('$problem','$date')")or die(mysqli_error($conn));
          if($query)
          {
            echo '<span class="de">'."problem Registered succesfull!".'</span>';
                    $sql="SELECT id FROM $a wHERE problem='$problem'"; 
                     
                       $result=$conn->query($sql);  
                       $count=$result->num_rows;
                       if ($count>0)
                        {
    while($row = $result->fetch_assoc())
     {
         $s=$row["id"];
        $o=$p.$s;
  }        
  session_start();   
  $rt=$_SESSION['userid'];
$query=mysqli_query($conn,"UPDATE $a SET userid='$o' WHERE id='$s'")or die(mysqli_error($conn));
$query=mysqli_query($conn,"UPDATE $a SET keyy='$rt' WHERE id='$s'")or die(mysqli_error($conn));


   }
                 echo '<span class="de1">'."your case id is:".$o.'</span>';
  



          }
          else
          {
            echo '<span class="a">'."Try again".'</span>';                
          }
}
else
   echo '<span class="a">'.'enter complete details'.'</span>';   

}
    

?>

<body id="top">
    
    
    
    
        <div class="bgded overlay" style="background-image:url('m.jpg');"> 
  <!-- ################################################################################################ -->
<div class="wrapper row1">
    <header id="header" class="hoc clear"> 
      <!-- ################################################################################################ -->
      <div id="logo" class="fl_left">
        <h1><a href="../indexl.html">Problem Registration Portal</a></h1>
      </div>
      <nav id="mainav" class="fl_right">
        <ul class="clear">

            <?php
	
include 'functionr.php';
$i=getfield2($conn);
echo '<span class="q">'.'welcome '.$i.'</span>';

	?>
          
            
          <li><button class="b"><a href="logoutr.php" ><span>logout</a></button></li>
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
  <main class="hoc container clear"> 
    <!-- main body -->
    <!-- ################################################################################################ -->
       
      <section id="latest" class="hoc container clear">
    <div class="wrapper row2" >
      <article >
          
          
          
          
  <FORM name ="form1" method ="post" action ="hcf.php">

   
   
          
          
          
          
        <div class="one_half first">    

            <p class="c">select category</p>
<div class="cd">
          <ul class="jab">  
   <li><input type = 'Radio' Name ='g' value= 'corr'><span class="f">corruption</span><br></li>
       
   
   <li><input type = 'Radio' Name ='g' value= 'woman'>
       <span class="f">woman harrashment</span><br></li>
   
   <li><input type = 'Radio' Name ='g' value= 'theft'>
       <span class="f">theft</span><br></li>

   <li><input type = 'Radio' Name ='g' value= 'govtcons'>
       <span class="f">govt. construction</span><br></li>
              
   <li><input type = 'Radio' Name ='g' value= 'land' >
       <span class="f">land issuses</span><br></li>
              
   <li><input type = 'Radio' Name ='g' value= 'dprop'>
       <span class="f">damaging property</span><br></li>
              
   <li><input type = 'Radio' Name ='g' value= 'sprop'>
       <span class="f">stolen property</span><br></li>
 <li><input type = 'Radio' Name ='g' value= 'kiddnaping' >
       <span class="f">kiddnaping</span><br></li>
              </div>
<div class="cd1">
   <li>
      
       <ul class="jab">
            <li><input type = 'Radio' Name ='g' value= 'drugc'>
                <span class="f">drug cultivation</span><br></li>
                
            <li><input type = 'Radio' Name ='g' value= 'drugp'>
                <span class="f">drug possesion</span><br></li>       
   <li><input type = 'Radio' Name ='g' value= 'rape' >
       <span class="f">rape</span><br></li>
              
   <li><input type = 'Radio' Name ='g' value= 'murder' >
       <span class="f">murder</span><br></li>
              
   <li><input type = 'Radio' Name ='g' value= 'prostitution' >
       <span class="f">prostitution</span><br></li>
              
    <li><input type = 'Radio' Name ='g' value= 'weapons' ></li>
   <span class="f">illegal weapons</span><br>
                 
   <li><input type = 'Radio' Name ='g' value= 'scams'>
       <span class="f">scams</span><br></li>
<li><input type = 'Radio' Name ='g' value= 'medical' >
        <span class="f">medical</span><br></li>
                   </div>
<div class="cd2">
   <li>
      
       <ul class="jab">
   <li><input type = 'Radio' Name ='g' value= 'mcrrop'>
       <span class="f">medical corruption </span><br></li>
    
   <li><input type = 'Radio' Name ='g' value= 'chil7d'>
       <span class="f">child labour</span><br></li>
   <li><input type = 'Radio' Name ='g' value= 'goff'>
       <span class="f">corruption govt. officials</span><br></li>
                  
   <li><input type = 'Radio' Name ='g' value= 'poff' >
       <span class="f">corruption private officals</span><br></li>
    <li><input type = 'Radio' Name ='g' value= 'cc'>
       <span class="f">cyber crime</span><br></li>
                  
   <li><input type = 'Radio' Name ='g' value= 'if'>
       <span class="f">insurance frouds</span><br></li>
   <li><input type = 'Radio' Name ='g' value= 'summgule'>
       <span class="f">smugulling</span><br></li>

                  </div>
  
                  
    
            
            
       </ul>
          
        </div>
          
          
        <div class="one_half">
              
              
              
    
<div class="cd3">
   <p class="c1">Full Details Of Problem:</p>
    <textarea name="text" class="d"></textarea ><br><br>
   <p class="f0">Date:</p><input type="date" name="date" class="g"><br><br>
   <input type = "Submit" Name = "Submit1" VALUE = "Submit" class="sub">
           </div>
          
        </div>
       
       
</FORM>
    
        </article>
      </div>
      </section>
    </main>
<br><br><br><br><br><br><br><br><br>
</div>
    
    
    
  
        
<style type="text/css">
.f0{
 text-transform:capitalize;
color:white;
font-famlily:serif;
font-size:19px;
}

.m{
position:absolute;
top:10px;}

.c1{
 text-transform:capitalize;
color:white;
font-famlily:serif;
font-size:19px;

}

.cd{
 position:absolute;
top:240px;
left:30px;

color:white;
}
.cd1{
 position:absolute;
top:240px;
left:300px;

color:white;

}
.cd2{
position:absolute;
top:240px;
left:530px;
color:white;

}
.cd3{
position:absolute;
top:240px;
left:1030px;
background-color:black;
padding-left:50px;
padding-right:50px;
padding-bottom:50px;

}
.g{

color:black;
background-color:grey;

}

.a{
    font-size: 20px;
  text-shadow: 1px 0px black;
    text-transform: capitalize;
  color:red;
}

.c{
    position:absolute;
    font-size: 30px;
    text-shadow: 1px 1px #333;
    text-transform: capitalize;
  color:#222;
  left:25px;
top:150px;
}
.d{
  position: relative;
    font-family: cursive;
    color:black;
  height:100px;
  width:300px;
 left:0px;
  border-style:solid;
  border-color:#333; 
}
.e{position: relative;
  left:30px;
  height:29px;
  width:80px;
  border-style:solid;
  border-color:black; 
  background-color: black;
  color:white;
}
.qwerty{
  position: relative;
  left:1600px;
  top:20px;
  height:29px;
  width:80px;
  background-color: black;
  color:white;
}
.e:hover{
  background-color: purple;
  color:white;
  border-color:purple;
  
}
.f{
  font-size: 20px;
  text-transform: capitalize;
color:purple;

 
}
.p{
  color:purple;
  font-size: 30px;
  text-transform: capitalize;
}
    .jab{
        list-style-type: none;
    }

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
padding-top: 5px;




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
 .sub{height:30px;
    width:80px;
    font-size: 16px;
    font-family: arial;
    color:black;
    border-color: black;
    background-color: gery;
    text-align: center;
    border-width: 0.8px;
padding-top:5px;


   }
   .sub:hover{
color:white;
    border-color: black;
    background-color:black;
    text-align: center;
    border-width: 0.8px;
   
    -webkit-transition: all ease 0.8s;
    -moz-transition: all ease 0.8s;
    transition:all ease 0.8s;
box-shadow:inset 100px 0 0 0 #000;
color:red;

   }
.log:hover{
  background-color: pink;
  color:red;
}
.de{
position:absolute;
top:200px;
right:100px;
font-size:24px;
font-family:arial;
text-transform:capitalize;
color:green;
}
.de1{
position:absolute;
top:150px;
right:130px;
font-size:24px;
font-family:arial;
text-transform:capitalize;
color:red;
}
</style>

        


<!-- JAVASCRIPTS -->
<script src="jquery.min.js"></script>
<script src="jquery.backtotop.js"></script>
<script src="jquery.mobilemenu.js"></script>
</body>
</html>