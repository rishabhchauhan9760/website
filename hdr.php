<?php

include 'connect.inc.php';
if(isset($_POST['text'])&&isset($_POST['sol'])&&isset($_POST['submit']))
{  $text=$_POST['text'];
$textol=$_POST['sol'];


   if(!empty($text)&&!empty($textol))
   {
       $query=mysqli_query($conn,"UPDATE rape SET details='$textol' WHERE userid='$text'")or die(mysqli_error($conn));
       
       $query=mysqli_query($conn,"UPDATE murder SET details='$textol' WHERE userid='$text'")or die(mysqli_error($conn));
        
       $query=mysqli_query($conn,"UPDATE landissues SET details='$textol' WHERE userid='$text'")or die(mysqli_error($conn));
       $query=mysqli_query($conn,"UPDATE woman SET details='$textol' WHERE userid='$text'")or die(mysqli_error($conn));
       $query=mysqli_query($conn,"UPDATE theft SET details='$textol' WHERE userid='$text'")or die(mysqli_error($conn));
       $query=mysqli_query($conn,"UPDATE corruption SET details='$textol' WHERE userid='$text'")or die(mysqli_error($conn));
       $query=mysqli_query($conn,"UPDATE chillabour SET details='$textol' WHERE userid='$text'")or die(mysqli_error($conn));
       $query=mysqli_query($conn,"UPDATE cybercrime SET details='$textol' WHERE userid='$text'")or die(mysqli_error($conn));
       $query=mysqli_query($conn,"UPDATE damagingproperty SET details='$textol' WHERE userid='$text'")or die(mysqli_error($conn));
       $query=mysqli_query($conn,"UPDATE drugcultivation SET details='$textol' WHERE userid='$text'")or die(mysqli_error($conn));
       $query=mysqli_query($conn,"UPDATE drugpossesion SET details='$textol' WHERE userid='$text'")or die(mysqli_error($conn));
       $query=mysqli_query($conn,"UPDATE govtconstructions SET details='$textol' WHERE userid='$text'")or die(mysqli_error($conn));
       $query=mysqli_query($conn,"UPDATE govtbribery SET details='$textol' WHERE userid='$text'")or die(mysqli_error($conn));
       $query=mysqli_query($conn,"UPDATE illegalweapons SET details='$textol' WHERE userid='$text'")or die(mysqli_error($conn));
       $query=mysqli_query($conn,"UPDATE insurance SET details='$textol' WHERE userid='$text'")or die(mysqli_error($conn));
       $query=mysqli_query($conn,"UPDATE kiddnaping SET details='$textol' WHERE userid='$text'")or die(mysqli_error($conn));
       $query=mysqli_query($conn,"UPDATE medical SET details='$textol' WHERE userid='$text'")or die(mysqli_error($conn));
       $query=mysqli_query($conn,"UPDATE privatebribery SET details='$textol' WHERE userid='$text'")or die(mysqli_error($conn));
       $query=mysqli_query($conn,"UPDATE scams SET details='$textol' WHERE userid='$text'")or die(mysqli_error($conn));
       $query=mysqli_query($conn,"UPDATE prostitution SET details='$textol' WHERE userid='$text'")or die(mysqli_error($conn));
       $query=mysqli_query($conn,"UPDATE stolenproperty SET details='$textol' WHERE userid='$text'")or die(mysqli_error($conn));
       $query=mysqli_query($conn,"UPDATE summguling SET details='$textol' WHERE userid='$text'")or die(mysqli_error($conn));
       //$query=mysqli_query($conn,"UPDATE $a SET details='$textol' WHERE userid='$text'")or die(mysqli_error($conn));
       //$query=mysqli_query($conn,"UPDATE $a SET details='$textol' WHERE userid='$text'")or die(mysqli_error($conn));
        echo '<span class="de">'.'details entered sucessfully!!!'.'</span>';
       // session_start();
        //sendmail($conn,d);
$sql="SELECT ifsame FROM kiddnaping where details='$textol'"; 
                     
                       $result=$conn->query($sql);  
                       $count=$result->num_rows;
                     
                       if ($count>0)
                        {
                          
    while($row = $result->fetch_assoc())
     {  
        $_SESSION['ifsame']=$row["ifsame"];
        $if=$_SESSION['ifsame'];
        
        $sql="SELECT keyy FROM kiddnaping where ifsame='$if'"; 
                     
                       $result=$conn->query($sql);  
                       $count=$result->num_rows;
                     
                       if ($count>0)
                        {
                          
    while($row = $result->fetch_assoc())
     {  
        $_SESSION['keyy']=$row["keyy"];
        $keyy=$_SESSION['keyy'];
       
        
         $sql="SELECT email FROM registration where id='$keyy'"; 
                     
                       $resul=$conn->query($sql);  
                       $coun=$resul->num_rows;
                     
                       if ($coun>0)
                        {
                          
    while($row = $resul->fetch_assoc())
     {  
        $_SESSION['email']=$row["email"];
        $email=$_SESSION['email'];
          
       $to = $email;
$subject = "My subject";
$txt = "THIS IS THE SOLUTION FOR YOUR REGISTERED PROBLEM >>>>>>>>>".$textol;
$headers = "From: webmaster@example.com" . "\r\n" .
"CC: somebodyelse@example.com";

mail($to,$subject,$txt,$headers);



   
     }  
   
     }        
   
     }  
   
     }        
}}
    $sql="SELECT ifsame FROM rape where details='$textol'"; 
                     
                       $result=$conn->query($sql);  
                       $count=$result->num_rows;
                     
                       if ($count>0)
                        {
                          
    while($row = $result->fetch_assoc())
     {  
        $_SESSION['ifsame']=$row["ifsame"];
        $if=$_SESSION['ifsame'];
        
        $sql="SELECT keyy FROM rape where ifsame='$if'"; 
                     
                       $result=$conn->query($sql);  
                       $count=$result->num_rows;
                     
                       if ($count>0)
                        {
                          
    while($row = $result->fetch_assoc())
     {  
        $_SESSION['keyy']=$row["keyy"];
        $keyy=$_SESSION['keyy'];
       
        
         $sql="SELECT email FROM registration where id='$keyy'"; 
                     
                       $resul=$conn->query($sql);  
                       $coun=$resul->num_rows;
                     
                       if ($coun>0)
                        {
                          
    while($row = $resul->fetch_assoc())
     {  
        $_SESSION['email']=$row["email"];
        $email=$_SESSION['email'];
          
       $to = $email;
$subject = "My subject";
$txt = "THIS IS THE SOLUTION FOR YOUR REGISTERED PROBLEM >>>>>>>>>".$textol;
$headers = "From: webmaster@example.com" . "\r\n" .
"CC: somebodyelse@example.com";

mail($to,$subject,$txt,$headers);



   
     }  
   
     }        
   
     }  
   
     }        
 
     }  
     
}
   
 $sql="SELECT ifsame FROM chillabour where details='$textol'"; 
                     
                       $result=$conn->query($sql);  
                       $count=$result->num_rows;
                     
                       if ($count>0)
                        {
                          
    while($row = $result->fetch_assoc())
     {  
        $_SESSION['ifsame']=$row["ifsame"];
        $if=$_SESSION['ifsame'];
        
        $sql="SELECT keyy FROM chillabour where ifsame='$if'"; 
                     
                       $result=$conn->query($sql);  
                       $count=$result->num_rows;
                     
                       if ($count>0)
                        {
                          
    while($row = $result->fetch_assoc())
     {  
        $_SESSION['keyy']=$row["keyy"];
        $keyy=$_SESSION['keyy'];
       
        
         $sql="SELECT email FROM registration where id='$keyy'"; 
                     
                       $resul=$conn->query($sql);  
                       $coun=$resul->num_rows;
                     
                       if ($coun>0)
                        {
                          
    while($row = $resul->fetch_assoc())
     {  
        $_SESSION['email']=$row["email"];
        $email=$_SESSION['email'];
          
       $to = $email;
$subject = "My subject";
$txt = "THIS IS THE SOLUTION FOR YOUR REGISTERED PROBLEM >>>>>>>>>".$textol;
$headers = "From: webmaster@example.com" . "\r\n" .
"CC: somebodyelse@example.com";

mail($to,$subject,$txt,$headers);



   
     }  
   
     }        
   
     }  
   
     }        
 
     }  
     

   } $sql="SELECT ifsame FROM corruption where details='$textol'"; 
                     
                       $result=$conn->query($sql);  
                       $count=$result->num_rows;
                     
                       if ($count>0)
                        {
                          
    while($row = $result->fetch_assoc())
     {  
        $_SESSION['ifsame']=$row["ifsame"];
        $if=$_SESSION['ifsame'];
        
        $sql="SELECT keyy FROM corruption where ifsame='$if'"; 
                     
                       $result=$conn->query($sql);  
                       $count=$result->num_rows;
                     
                       if ($count>0)
                        {
                          
    while($row = $result->fetch_assoc())
     {  
        $_SESSION['keyy']=$row["keyy"];
        $keyy=$_SESSION['keyy'];
       
        
         $sql="SELECT email FROM registration where id='$keyy'"; 
                     
                       $resul=$conn->query($sql);  
                       $coun=$resul->num_rows;
                     
                       if ($coun>0)
                        {
                          
    while($row = $resul->fetch_assoc())
     {  
        $_SESSION['email']=$row["email"];
        $email=$_SESSION['email'];
          
       $to = $email;
$subject = "My subject";
$txt = "THIS IS THE SOLUTION FOR YOUR REGISTERED PROBLEM >>>>>>>>>".$textol;
$headers = "From: webmaster@example.com" . "\r\n" .
"CC: somebodyelse@example.com";

mail($to,$subject,$txt,$headers);



   
     }  
   
     }        
   
     }  
   
     }        
 
     }  
     

   } $sql="SELECT ifsame FROM cybercrime where details='$textol'"; 
                     
                       $result=$conn->query($sql);  
                       $count=$result->num_rows;
                     
                       if ($count>0)
                        {
                          
    while($row = $result->fetch_assoc())
     {  
        $_SESSION['ifsame']=$row["ifsame"];
        $if=$_SESSION['ifsame'];
        
        $sql="SELECT keyy FROM cybercrime where ifsame='$if'"; 
                     
                       $result=$conn->query($sql);  
                       $count=$result->num_rows;
                     
                       if ($count>0)
                        {
                          
    while($row = $result->fetch_assoc())
     {  
        $_SESSION['keyy']=$row["keyy"];
        $keyy=$_SESSION['keyy'];
       
        
         $sql="SELECT email FROM registration where id='$keyy'"; 
                     
                       $resul=$conn->query($sql);  
                       $coun=$resul->num_rows;
                     
                       if ($coun>0)
                        {
                          
    while($row = $resul->fetch_assoc())
     {  
        $_SESSION['email']=$row["email"];
        $email=$_SESSION['email'];
          
       $to = $email;
$subject = "My subject";
$txt = "THIS IS THE SOLUTION FOR YOUR REGISTERED PROBLEM >>>>>>>>>".$textol;
$headers = "From: webmaster@example.com" . "\r\n" .
"CC: somebodyelse@example.com";

mail($to,$subject,$txt,$headers);



   
     }  
   
     }        
   
     }  
   
     }        
 
     }  
     

   } $sql="SELECT ifsame FROM damagingproperty where details='$textol'"; 
                     
                       $result=$conn->query($sql);  
                       $count=$result->num_rows;
                     
                       if ($count>0)
                        {
                          
    while($row = $result->fetch_assoc())
     {  
        $_SESSION['ifsame']=$row["ifsame"];
        $if=$_SESSION['ifsame'];
        
        $sql="SELECT keyy FROM damagingproperty where ifsame='$if'"; 
                     
                       $result=$conn->query($sql);  
                       $count=$result->num_rows;
                     
                       if ($count>0)
                        {
                          
    while($row = $result->fetch_assoc())
     {  
        $_SESSION['keyy']=$row["keyy"];
        $keyy=$_SESSION['keyy'];
       
        
         $sql="SELECT email FROM registration where id='$keyy'"; 
                     
                       $resul=$conn->query($sql);  
                       $coun=$resul->num_rows;
                     
                       if ($coun>0)
                        {
                          
    while($row = $resul->fetch_assoc())
     {  
        $_SESSION['email']=$row["email"];
        $email=$_SESSION['email'];
          
       $to = $email;
$subject = "My subject";
$txt = "THIS IS THE SOLUTION FOR YOUR REGISTERED PROBLEM >>>>>>>>>".$textol;
$headers = "From: webmaster@example.com" . "\r\n" .
"CC: somebodyelse@example.com";

mail($to,$subject,$txt,$headers);



   
     }  
   
     }        
   
     }  
   
     }        
 
     }  
     
}
    $sql="SELECT ifsame FROM drugcultivation where details='$textol'"; 
                     
                       $result=$conn->query($sql);  
                       $count=$result->num_rows;
                     
                       if ($count>0)
                        {
                          
    while($row = $result->fetch_assoc())
     {  
        $_SESSION['ifsame']=$row["ifsame"];
        $if=$_SESSION['ifsame'];
        
        $sql="SELECT keyy FROM drugcultivation where ifsame='$if'"; 
                     
                       $result=$conn->query($sql);  
                       $count=$result->num_rows;
                     
                       if ($count>0)
                        {
                          
    while($row = $result->fetch_assoc())
     {  
        $_SESSION['keyy']=$row["keyy"];
        $keyy=$_SESSION['keyy'];
       
        
         $sql="SELECT email FROM registration where id='$keyy'"; 
                     
                       $resul=$conn->query($sql);  
                       $coun=$resul->num_rows;
                     
                       if ($coun>0)
                        {
                          
    while($row = $resul->fetch_assoc())
     {  
        $_SESSION['email']=$row["email"];
        $email=$_SESSION['email'];
          
       $to = $email;
$subject = "My subject";
$txt = "THIS IS THE SOLUTION FOR YOUR REGISTERED PROBLEM >>>>>>>>>".$textol;
$headers = "From: webmaster@example.com" . "\r\n" .
"CC: somebodyelse@example.com";

mail($to,$subject,$txt,$headers);



   
     }  
   
     }        
   
     }  
   
     }        
 
     }  
     

   } $sql="SELECT ifsame FROM drugpossesion where details='$textol'"; 
                     
                       $result=$conn->query($sql);  
                       $count=$result->num_rows;
                     
                       if ($count>0)
                        {
                          
    while($row = $result->fetch_assoc())
     {  
        $_SESSION['ifsame']=$row["ifsame"];
        $if=$_SESSION['ifsame'];
        
        $sql="SELECT keyy FROM drugpossesion where ifsame='$if'"; 
                     
                       $result=$conn->query($sql);  
                       $count=$result->num_rows;
                     
                       if ($count>0)
                        {
                          
    while($row = $result->fetch_assoc())
     {  
        $_SESSION['keyy']=$row["keyy"];
        $keyy=$_SESSION['keyy'];
       
        
         $sql="SELECT email FROM registration where id='$keyy'"; 
                     
                       $resul=$conn->query($sql);  
                       $coun=$resul->num_rows;
                     
                       if ($coun>0)
                        {
                          
    while($row = $resul->fetch_assoc())
     {  
        $_SESSION['email']=$row["email"];
        $email=$_SESSION['email'];
          
       $to = $email;
$subject = "My subject";
$txt = "THIS IS THE SOLUTION FOR YOUR REGISTERED PROBLEM >>>>>>>>>".$textol;
$headers = "From: webmaster@example.com" . "\r\n" .
"CC: somebodyelse@example.com";

mail($to,$subject,$txt,$headers);



   
     }  
   
     }        
   
     }  
   
     }        
 
     }  
     

   } $sql="SELECT ifsame FROM govtbribery where details='$textol'"; 
                     
                       $result=$conn->query($sql);  
                       $count=$result->num_rows;
                     
                       if ($count>0)
                        {
                          
    while($row = $result->fetch_assoc())
     {  
        $_SESSION['ifsame']=$row["ifsame"];
        $if=$_SESSION['ifsame'];
        
        $sql="SELECT keyy FROM govtbribery where ifsame='$if'"; 
                     
                       $result=$conn->query($sql);  
                       $count=$result->num_rows;
                     
                       if ($count>0)
                        {
                          
    while($row = $result->fetch_assoc())
     {  
        $_SESSION['keyy']=$row["keyy"];
        $keyy=$_SESSION['keyy'];
       
        
         $sql="SELECT email FROM registration where id='$keyy'"; 
                     
                       $resul=$conn->query($sql);  
                       $coun=$resul->num_rows;
                     
                       if ($coun>0)
                        {
                          
    while($row = $resul->fetch_assoc())
     {  
        $_SESSION['email']=$row["email"];
        $email=$_SESSION['email'];
          
       $to = $email;
$subject = "My subject";
$txt = "THIS IS THE SOLUTION FOR YOUR REGISTERED PROBLEM >>>>>>>>>".$textol;
$headers = "From: webmaster@example.com" . "\r\n" .
"CC: somebodyelse@example.com";

mail($to,$subject,$txt,$headers);



   
     }  
   
     }        
   
     }  
   
     }        
 
     }  
     

   } $sql="SELECT ifsame FROM govtconstructions where details='$textol'"; 
                     
                       $result=$conn->query($sql);  
                       $count=$result->num_rows;
                     
                       if ($count>0)
                        {
                          
    while($row = $result->fetch_assoc())
     {  
        $_SESSION['ifsame']=$row["ifsame"];
        $if=$_SESSION['ifsame'];
        
        $sql="SELECT keyy FROM govtconstructions where ifsame='$if'"; 
                     
                       $result=$conn->query($sql);  
                       $count=$result->num_rows;
                     
                       if ($count>0)
                        {
                          
    while($row = $result->fetch_assoc())
     {  
        $_SESSION['keyy']=$row["keyy"];
        $keyy=$_SESSION['keyy'];
       
        
         $sql="SELECT email FROM registration where id='$keyy'"; 
                     
                       $resul=$conn->query($sql);  
                       $coun=$resul->num_rows;
                     
                       if ($coun>0)
                        {
                          
    while($row = $resul->fetch_assoc())
     {  
        $_SESSION['email']=$row["email"];
        $email=$_SESSION['email'];
          
       $to = $email;
$subject = "My subject";
$txt = "THIS IS THE SOLUTION FOR YOUR REGISTERED PROBLEM >>>>>>>>>".$textol;
$headers = "From: webmaster@example.com" . "\r\n" .
"CC: somebodyelse@example.com";

mail($to,$subject,$txt,$headers);



   
     }  
   
     }        
   
     }  
   
     }        
 
     }  
     

   } $sql="SELECT ifsame FROM illegalweapons where details='$textol'"; 
                     
                       $result=$conn->query($sql);  
                       $count=$result->num_rows;
                     
                       if ($count>0)
                        {
                          
    while($row = $result->fetch_assoc())
     {  
        $_SESSION['ifsame']=$row["ifsame"];
        $if=$_SESSION['ifsame'];
        
        $sql="SELECT keyy FROM illegalweapons where ifsame='$if'"; 
                     
                       $result=$conn->query($sql);  
                       $count=$result->num_rows;
                     
                       if ($count>0)
                        {
                          
    while($row = $result->fetch_assoc())
     {  
        $_SESSION['keyy']=$row["keyy"];
        $keyy=$_SESSION['keyy'];
       
        
         $sql="SELECT email FROM registration where id='$keyy'"; 
                     
                       $resul=$conn->query($sql);  
                       $coun=$resul->num_rows;
                     
                       if ($coun>0)
                        {
                          
    while($row = $resul->fetch_assoc())
     {  
        $_SESSION['email']=$row["email"];
        $email=$_SESSION['email'];
          
       $to = $email;
$subject = "My subject";
$txt = "THIS IS THE SOLUTION FOR YOUR REGISTERED PROBLEM >>>>>>>>>".$textol;
$headers = "From: webmaster@example.com" . "\r\n" .
"CC: somebodyelse@example.com";

mail($to,$subject,$txt,$headers);



   
     }  
   
     }        
   
     }  
   
     }        
 
      
     
}
   } $sql="SELECT ifsame FROM insurance where details='$textol'"; 
                     
                       $result=$conn->query($sql);  
                       $count=$result->num_rows;
                     
                       if ($count>0)
                        {
                          
    while($row = $result->fetch_assoc())
     {  
        $_SESSION['ifsame']=$row["ifsame"];
        $if=$_SESSION['ifsame'];
        
        $sql="SELECT keyy FROM insurance where ifsame='$if'"; 
                     
                       $result=$conn->query($sql);  
                       $count=$result->num_rows;
                     
                       if ($count>0)
                        {
                          
    while($row = $result->fetch_assoc())
     {  
        $_SESSION['keyy']=$row["keyy"];
        $keyy=$_SESSION['keyy'];
       
        
         $sql="SELECT email FROM registration where id='$keyy'"; 
                     
                       $resul=$conn->query($sql);  
                       $coun=$resul->num_rows;
                     
                       if ($coun>0)
                        {
                          
    while($row = $resul->fetch_assoc())
     {  
        $_SESSION['email']=$row["email"];
        $email=$_SESSION['email'];
          
       $to = $email;
$subject = "My subject";
$txt = "THIS IS THE SOLUTION FOR YOUR REGISTERED PROBLEM >>>>>>>>>".$textol;
$headers = "From: webmaster@example.com" . "\r\n" .
"CC: somebodyelse@example.com";

mail($to,$subject,$txt,$headers);



   
     }  
   
     }        
   
     }  
   
     }        
 
     }  
     
}
  $sql="SELECT ifsame FROM landissues where details='$textol'"; 
                     
                       $result=$conn->query($sql);  
                       $count=$result->num_rows;
                     
                       if ($count>0)
                        {
                          
    while($row = $result->fetch_assoc())
     {  
        $_SESSION['ifsame']=$row["ifsame"];
        $if=$_SESSION['ifsame'];
        
        $sql="SELECT keyy FROM landissues where ifsame='$if'"; 
                     
                       $result=$conn->query($sql);  
                       $count=$result->num_rows;
                     
                       if ($count>0)
                        {
                          
    while($row = $result->fetch_assoc())
     {  
        $_SESSION['keyy']=$row["keyy"];
        $keyy=$_SESSION['keyy'];
       
        
         $sql="SELECT email FROM registration where id='$keyy'"; 
                     
                       $resul=$conn->query($sql);  
                       $coun=$resul->num_rows;
                     
                       if ($coun>0)
                        {
                          
    while($row = $resul->fetch_assoc())
     {  
        $_SESSION['email']=$row["email"];
        $email=$_SESSION['email'];
          
       $to = $email;
$subject = "My subject";
$txt = "THIS IS THE SOLUTION FOR YOUR REGISTERED PROBLEM >>>>>>>>>".$textol;
$headers = "From: webmaster@example.com" . "\r\n" .
"CC: somebodyelse@example.com";

mail($to,$subject,$txt,$headers);



   
     }  
   
     }        
   
     }  
   
     }        
 
     }  
     
}
    $sql="SELECT ifsame FROM medical where details='$textol'"; 
                     
                       $result=$conn->query($sql);  
                       $count=$result->num_rows;
                     
                       if ($count>0)
                        {
                          
    while($row = $result->fetch_assoc())
     {  
        $_SESSION['ifsame']=$row["ifsame"];
        $if=$_SESSION['ifsame'];
        
        $sql="SELECT keyy FROM medical where ifsame='$if'"; 
                     
                       $result=$conn->query($sql);  
                       $count=$result->num_rows;
                     
                       if ($count>0)
                        {
                          
    while($row = $result->fetch_assoc())
     {  
        $_SESSION['keyy']=$row["keyy"];
        $keyy=$_SESSION['keyy'];
       
        
         $sql="SELECT email FROM registration where id='$keyy'"; 
                     
                       $resul=$conn->query($sql);  
                       $coun=$resul->num_rows;
                     
                       if ($coun>0)
                        {
                          
    while($row = $resul->fetch_assoc())
     {  
        $_SESSION['email']=$row["email"];
        $email=$_SESSION['email'];
          
       $to = $email;
$subject = "My subject";
$txt = "THIS IS THE SOLUTION FOR YOUR REGISTERED PROBLEM >>>>>>>>>".$textol;
$headers = "From: webmaster@example.com" . "\r\n" .
"CC: somebodyelse@example.com";

mail($to,$subject,$txt,$headers);



   
     }  
   
     }        
   
     }  
   
     }        
 
     }  
     
}
   $sql="SELECT ifsame FROM murder where details='$textol'"; 
                     
                       $result=$conn->query($sql);  
                       $count=$result->num_rows;
                     
                       if ($count>0)
                        {
                          
    while($row = $result->fetch_assoc())
     {  
        $_SESSION['ifsame']=$row["ifsame"];
        $if=$_SESSION['ifsame'];
        
        $sql="SELECT keyy FROM murder where ifsame='$if'"; 
                     
                       $result=$conn->query($sql);  
                       $count=$result->num_rows;
                     
                       if ($count>0)
                        {
                          
    while($row = $result->fetch_assoc())
     {  
        $_SESSION['keyy']=$row["keyy"];
        $keyy=$_SESSION['keyy'];
       
        
         $sql="SELECT email FROM registration where id='$keyy'"; 
                     
                       $resul=$conn->query($sql);  
                       $coun=$resul->num_rows;
                     
                       if ($coun>0)
                        {
                          
    while($row = $resul->fetch_assoc())
     {  
        $_SESSION['email']=$row["email"];
        $email=$_SESSION['email'];
          
       $to = $email;
$subject = "My subject";
$txt = "THIS IS THE SOLUTION FOR YOUR REGISTERED PROBLEM >>>>>>>>>".$textol;
$headers = "From: webmaster@example.com" . "\r\n" .
"CC: somebodyelse@example.com";

mail($to,$subject,$txt,$headers);



   
     }  
   
     }        
   
       
   
     }        
 
     }  
     
}
   } $sql="SELECT ifsame FROM privatebribery where details='$textol'"; 
                     
                       $result=$conn->query($sql);  
                       $count=$result->num_rows;
                     
                       if ($count>0)
                        {
                          
    while($row = $result->fetch_assoc())
     {  
        $_SESSION['ifsame']=$row["ifsame"];
        $if=$_SESSION['ifsame'];
        
        $sql="SELECT keyy FROM privatebribery where ifsame='$if'"; 
                     
                       $result=$conn->query($sql);  
                       $count=$result->num_rows;
                     
                       if ($count>0)
                        {
                          
    while($row = $result->fetch_assoc())
     {  
        $_SESSION['keyy']=$row["keyy"];
        $keyy=$_SESSION['keyy'];
       
        
         $sql="SELECT email FROM registration where id='$keyy'"; 
                     
                       $resul=$conn->query($sql);  
                       $coun=$resul->num_rows;
                     
                       if ($coun>0)
                        {
                          
    while($row = $resul->fetch_assoc())
     {  
        $_SESSION['email']=$row["email"];
        $email=$_SESSION['email'];
          
       $to = $email;
$subject = "My subject";
$txt = "THIS IS THE SOLUTION FOR YOUR REGISTERED PROBLEM >>>>>>>>>".$textol;
$headers = "From: webmaster@example.com" . "\r\n" .
"CC: somebodyelse@example.com";

mail($to,$subject,$txt,$headers);



   
     }  
   
     }        
   
     }  
   
     }        
 
     }  
     
}
    $sql="SELECT ifsame FROM prostitution where details='$textol'"; 
                     
                       $result=$conn->query($sql);  
                       $count=$result->num_rows;
                     
                       if ($count>0)
                        {
                          
    while($row = $result->fetch_assoc())
     {  
        $_SESSION['ifsame']=$row["ifsame"];
        $if=$_SESSION['ifsame'];
        
        $sql="SELECT keyy FROM prostitution where ifsame='$if'"; 
                     
                       $result=$conn->query($sql);  
                       $count=$result->num_rows;
                     
                       if ($count>0)
                        {
                          
    while($row = $result->fetch_assoc())
     {  
        $_SESSION['keyy']=$row["keyy"];
        $keyy=$_SESSION['keyy'];
       
        
         $sql="SELECT email FROM registration where id='$keyy'"; 
                     
                       $resul=$conn->query($sql);  
                       $coun=$resul->num_rows;
                     
                       if ($coun>0)
                        {
                          
    while($row = $resul->fetch_assoc())
     {  
        $_SESSION['email']=$row["email"];
        $email=$_SESSION['email'];
          
       $to = $email;
$subject = "My subject";
$txt = "THIS IS THE SOLUTION FOR YOUR REGISTERED PROBLEM >>>>>>>>>".$textol;
$headers = "From: webmaster@example.com" . "\r\n" .
"CC: somebodyelse@example.com";

mail($to,$subject,$txt,$headers);



   
     }  
   
     }        
   
     }  
   
     }        
 
     }  
     
}
$sql="SELECT ifsame FROM scams where details='$textol'"; 
                     
                       $result=$conn->query($sql);  
                       $count=$result->num_rows;
                     
                       if ($count>0)
                        {
                          
    while($row = $result->fetch_assoc())
     {  
        $_SESSION['ifsame']=$row["ifsame"];
        $if=$_SESSION['ifsame'];
        
        $sql="SELECT keyy FROM scams where ifsame='$if'"; 
                     
                       $result=$conn->query($sql);  
                       $count=$result->num_rows;
                     
                       if ($count>0)
                        {
                          
    while($row = $result->fetch_assoc())
     {  
        $_SESSION['keyy']=$row["keyy"];
        $keyy=$_SESSION['keyy'];
       
        
         $sql="SELECT email FROM registration where id='$keyy'"; 
                     
                       $resul=$conn->query($sql);  
                       $coun=$resul->num_rows;
                     
                       if ($coun>0)
                        {
                          
    while($row = $resul->fetch_assoc())
     {  
        $_SESSION['email']=$row["email"];
        $email=$_SESSION['email'];
          
       $to = $email;
$subject = "My subject";
$txt = "THIS IS THE SOLUTION FOR YOUR REGISTERED PROBLEM >>>>>>>>>".$textol;
$headers = "From: webmaster@example.com" . "\r\n" .
"CC: somebodyelse@example.com";

mail($to,$subject,$txt,$headers);



   
     }  
   
     }        
   
     }  
   
     }        
 
     }  
     
}$sql="SELECT ifsame FROM stolenproperty where details='$textol'"; 
                     
                       $result=$conn->query($sql);  
                       $count=$result->num_rows;
                     
                       if ($count>0)
                        {
                          
    while($row = $result->fetch_assoc())
     {  
        $_SESSION['ifsame']=$row["ifsame"];
        $if=$_SESSION['ifsame'];
        
        $sql="SELECT keyy FROM stolenproperty where ifsame='$if'"; 
                     
                       $result=$conn->query($sql);  
                       $count=$result->num_rows;
                     
                       if ($count>0)
                        {
                          
    while($row = $result->fetch_assoc())
     {  
        $_SESSION['keyy']=$row["keyy"];
        $keyy=$_SESSION['keyy'];
       
        
         $sql="SELECT email FROM registration where id='$keyy'"; 
                     
                       $resul=$conn->query($sql);  
                       $coun=$resul->num_rows;
                     
                       if ($coun>0)
                        {
                          
    while($row = $resul->fetch_assoc())
     {  
        $_SESSION['email']=$row["email"];
        $email=$_SESSION['email'];
          
       $to = $email;
$subject = "My subject";
$txt = "THIS IS THE SOLUTION FOR YOUR REGISTERED PROBLEM >>>>>>>>>".$textol;
$headers = "From: webmaster@example.com" . "\r\n" .
"CC: somebodyelse@example.com";

mail($to,$subject,$txt,$headers);



   
     }  
   
     }        
   
     }  
   
     }        
 
     }  
     
}$sql="SELECT ifsame FROM summguling where details='$textol'"; 
                     
                       $result=$conn->query($sql);  
                       $count=$result->num_rows;
                     
                       if ($count>0)
                        {
                          
    while($row = $result->fetch_assoc())
     {  
        $_SESSION['ifsame']=$row["ifsame"];
        $if=$_SESSION['ifsame'];
        
        $sql="SELECT keyy FROM summguling where ifsame='$if'"; 
                     
                       $result=$conn->query($sql);  
                       $count=$result->num_rows;
                     
                       if ($count>0)
                        {
                          
    while($row = $result->fetch_assoc())
     {  
        $_SESSION['keyy']=$row["keyy"];
        $keyy=$_SESSION['keyy'];
       
        
         $sql="SELECT email FROM registration where id='$keyy'"; 
                     
                       $resul=$conn->query($sql);  
                       $coun=$resul->num_rows;
                     
                       if ($coun>0)
                        {
                          
    while($row = $resul->fetch_assoc())
     {  
        $_SESSION['email']=$row["email"];
        $email=$_SESSION['email'];
          
       $to = $email;
$subject = "My subject";
$txt = "THIS IS THE SOLUTION FOR YOUR REGISTERED PROBLEM >>>>>>>>>".$textol;
$headers = "From: webmaster@example.com" . "\r\n" .
"CC: somebodyelse@example.com";

mail($to,$subject,$txt,$headers);



   
     }  
   
     }        
   
     }  
   
     }        
 
     }  
     
}$sql="SELECT ifsame FROM theft where details='$textol'"; 
                     
                       $result=$conn->query($sql);  
                       $count=$result->num_rows;
                     
                       if ($count>0)
                        {
                          
    while($row = $result->fetch_assoc())
     {  
        $_SESSION['ifsame']=$row["ifsame"];
        $if=$_SESSION['ifsame'];
        
        $sql="SELECT keyy FROM theft where ifsame='$if'"; 
                     
                       $result=$conn->query($sql);  
                       $count=$result->num_rows;
                     
                       if ($count>0)
                        {
                          
    while($row = $result->fetch_assoc())
     {  
        $_SESSION['keyy']=$row["keyy"];
        $keyy=$_SESSION['keyy'];
       
        
         $sql="SELECT email FROM registration where id='$keyy'"; 
                     
                       $resul=$conn->query($sql);  
                       $coun=$resul->num_rows;
                     
                       if ($coun>0)
                        {
                          
    while($row = $resul->fetch_assoc())
     {  
        $_SESSION['email']=$row["email"];
        $email=$_SESSION['email'];
          
       $to = $email;
$subject = "My subject";
$txt = "THIS IS THE SOLUTION FOR YOUR REGISTERED PROBLEM >>>>>>>>>".$textol;
$headers = "From: webmaster@example.com" . "\r\n" .
"CC: somebodyelse@example.com";

mail($to,$subject,$txt,$headers);



   
     }  
   
     }        
   
     }  
   
     }        
 
     }  
     
}$sql="SELECT ifsame FROM woman where details='$textol'"; 
                     
                       $result=$conn->query($sql);  
                       $count=$result->num_rows;
                     
                       if ($count>0)
                        {
                          
    while($row = $result->fetch_assoc())
     {  
        $_SESSION['ifsame']=$row["ifsame"];
        $if=$_SESSION['ifsame'];
        
        $sql="SELECT keyy FROM woman where ifsame='$if'"; 
                     
                       $result=$conn->query($sql);  
                       $count=$result->num_rows;
                     
                       if ($count>0)
                        {
                          
    while($row = $result->fetch_assoc())
     {  
        $_SESSION['keyy']=$row["keyy"];
        $keyy=$_SESSION['keyy'];
       
        
         $sql="SELECT email FROM registration where id='$keyy'"; 
                     
                       $resul=$conn->query($sql);  
                       $coun=$resul->num_rows;
                     
                       if ($coun>0)
                        {
                          
    while($row = $resul->fetch_assoc())
     {  
        $_SESSION['email']=$row["email"];
        $email=$_SESSION['email'];
          
       $to = $email;
$subject = "My subject";
$txt = "THIS IS THE SOLUTION FOR YOUR REGISTERED PROBLEM >>>>>>>>>".$textol;
$headers = "From: webmaster@example.com" . "\r\n" .
"CC: somebodyelse@example.com";

mail($to,$subject,$txt,$headers);



   
     }  
   
     }        
   
     }  
   
     }        
 
     }  
     
}$sql="SELECT ifsame FROM weapons where details='$textol'"; 
                     
                       $result=$conn->query($sql);  
                       $count=$result->num_rows;
                     
                       if ($count>0)
                        {
                          
    while($row = $result->fetch_assoc())
     {  
        $_SESSION['ifsame']=$row["ifsame"];
        $if=$_SESSION['ifsame'];
        
        $sql="SELECT keyy FROM weapons where ifsame='$if'"; 
                     
                       $result=$conn->query($sql);  
                       $count=$result->num_rows;
                     
                       if ($count>0)
                        {
                          
    while($row = $result->fetch_assoc())
     {  
        $_SESSION['keyy']=$row["keyy"];
        $keyy=$_SESSION['keyy'];
       
        
         $sql="SELECT email FROM registration where id='$keyy'"; 
                     
                       $resul=$conn->query($sql);  
                       $coun=$resul->num_rows;
                     
                       if ($coun>0)
                        {
                          
    while($row = $resul->fetch_assoc())
     {  
        $_SESSION['email']=$row["email"];
        $email=$_SESSION['email'];
          
       $to = $email;
$subject = "My subject";
$txt = "THIS IS THE SOLUTION FOR YOUR REGISTERED PROBLEM >>>>>>>>>".$textol;
$headers = "From: webmaster@example.com" . "\r\n" .
"CC: somebodyelse@example.com";

mail($to,$subject,$txt,$headers);



   
     }  
   
     }        
   
     }  
   
     }        
 
     }  
     
}
   }
     else
     	  echo '<span class="de">'."please Enter complete details ".'</span>';








}



?>

<html>
    <head>

<title>corruption free india</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout.css" rel="stylesheet" type="text/css" media="all">
        <style>
            .qwe{
    font-size: 25px;

	color:#222;
	left:30px;
	top:20px;
            }
.de{
position:absolute;
top:540px;
left:400px;
font-size:18px;
color:red;
text-transform:capitalize;
font-family:serif;
}
.d1e{
position:absolute;
top:580px;
left:500px;
font-size:88px;
color:red;
text-transform:capitalize;
font-family:serif;
}
.a{
color:black;

}
.sol{
height:120px;
width:400px;
border-color:black;
}
.q{
   text-transform: capitalize;
   color:red;
//font-weight:red;
   font-family: serif;
   font-size: 22px;
position:absolute;
right:370px;
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
 .sub{height:30px;
    width:120px;
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
color:#d2d2d2;

   }
.sol
{
color:black;
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
        <h1><a href="../indelx.html">Share Your Solution With Us</a></h1>
      </div>
      <nav id="mainav" class="fl_right">
        <ul class="clear">

            <?php
	
include 'functionr.php';
$i=getfield2($conn);
echo '<span class="q">'.'welcome '.$i.'</span>';

	?>
          
            
          <li><button class="b"><a href="logoutr.php" >logout</a></button></li>
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
                <form method="post" action="hdr.php">
                    <span class="qwe">Enter your case userid:</span><br><br>
                    <input type="text" name="text" class="a"><br><br>
                    <span class="qwe">Enter solution with full Details for pre registered problem:</span><br><br>
                    <textarea name="sol" class="sol"></textarea><br><br> 
                    <input type="submit" name="submit" class="sub">
                </form>
            </section>
        </div>
        
        
        
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