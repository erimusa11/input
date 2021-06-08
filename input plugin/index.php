<?php
   /*
   Plugin Name: Button With input
   Plugin URI:  dilavermusa.com
   description: >-
   my plugin
   Version: 1.2
   Author: Mr. Eri musa
   Author URI: dilavermusa.com
   License: GPL2
   */
  session_start();
  $letter="";
  if( $_SESSION['textinm']==null  ){
    $_SESSION['textinm']=null;
  }  
 
  if(!isset($_POST['textinm'])){

    $_POST['textinm']="";
    
 
  } else{
 
    if($_SESSION['textinm'] != null ){ 

    $array1 = str_split($_POST['textinm']);
    $array = str_split($_SESSION['textinm']);

    foreach ($array as $char) {

      foreach ($array1 as $char1) {
        
        if($char1===$char){
          
            $array[] = "<b> ".$char1."</b>";
        } 
       }
       
     }
    $letter = implode("", $array);

    }
    $_SESSION['textinm']=$_POST['textinm'];

  }
  ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

<body class="container  d-flex justify-content-center ">


    <form action="" method="POST" class="mt-5 col-5 ">
        <label for="" class="text-center col-12">The text Display:
            <?php echo $letter; ?></label>
        <input value="<?php echo $_POST['textinm'];?>" name="textinm" class="form-control " type="text ">
        <center>
            <button type="submit" name="submit" class="btn-info  btn btn-md mt-1">Submit</button>
        </center>
    </form>
</body>

</html>
