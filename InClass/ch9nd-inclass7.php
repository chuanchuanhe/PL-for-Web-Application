<!DOCTYPE html>
<html><head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
  
  <title>PHP form handling</title>    
    <style>
      a:hover { background-color:white; }
      label { padding: 4px 10px 0px 4px; }       
      .msg { margin-left:40px; font-style: italic; color: red; font-size:0.8em;}
    </style>
 
    <script type="text/javascript">
      function setFocus()
      {
    	  document.forms[0].elements[0].focus();
      }
    </script>
</head>

<body onload="setFocus()">
  <center>
  <h2>Form handling with PHP</h2>
  <h2><font color="green">Enter your name</font></h2> 

  <br>
  
    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
      
      <label for="prj1">Project 1:</label> 
             <input type="text" name="prj1" size="10px" style="text-align:right">
             <label for="prj1_total">out of 100</label>              
             <br>              
             <!--  <input type="text" name="prj1_total" size="10px" value="100" disabled style="text-align:right" /> <span style="color:red">*</span> <br /> --> <!-- set default total possible score = 100 -->
             
      
      <label for="prj2">Project 2:</label>  
             <input type="text" name="prj2" size="10px" style="text-align:right">
             <label for="prj2_total">out of 100</label>              
             <br>              
             <!--  <input type="text" name="prj2_total" size="10px" value="100" disabled style="text-align:right" /> <span style="color:red">*</span> <br /> --> <!-- set default total possible score = 100 -->
      
      
      <label for="prj3">Project 3:</label>  
             <input type="text" name="prj3" size="10px" style="text-align:right">
             <label for="prj3_total">out of 100</label>              
             <br>              
             <!--  <input type="text" name="prj3_total" size="10px" value="100" disabled style="text-align:right" /> <span style="color:red">*</span> <br /> --> <!-- set default total possible score = 100 -->
      
      
      <label for="prj4">Project 4:</label>   
             <input type="text" name="prj4" size="10px" style="text-align:right">
             <label for="prj4_total">out of 100</label>             
             <br>              
             <!--  <input type="text" name="prj4_total" size="10px" value="100" disabled style="text-align:right" /> <span style="color:red">*</span> <br /> --> <!-- set default total possible score = 100 -->
      
      
      <label for="prj5">Project 5:</label>  
             <input type="text" name="prj5" size="10px" style="text-align:right">
             <label for="prj5_total">out of 100</label>               
             <br>                           
             <!--  <input type="text" name="prj5_total" size="10px" value="100" disabled style="text-align:right" /> <span style="color:red">*</span> <br /> --> <!-- set default total possible score = 100 -->
      
      
      <label for="prj6">Project 6:</label>  
             <input type="text" name="prj6" size="10px" style="text-align:right">
             <label for="prj6_total">out of 100</label>                
             <br>              
             <!--  <input type="text" name="prj6_total" size="10px" value="100" disabled style="text-align:right" /> <span style="color:red">*</span> <br /> --> <!-- set default total possible score = 100 -->
      <br>
      <label for="drop_option">Drop the lowest score? </label>  
      <input type="radio" name="drop_option" value="true" checked="">Yes
      <input type="radio" name="drop_option" value="false">No
      <br><br>      
      Average scores (percentage): <span style="color:red"> </span> 
      <br><br>
      <input type="submit" value="Compute Grade"> &nbsp;&nbsp;

    </form>  
    
<?php

function computeAvg($score1, $score2, $score3, $score4, $score5, $score6, $drop) {
    if (!is_numeric($score1) || !is_numeric($score2) || !is_numeric($score3) || !is_numeric($score4) || !is_numeric($score5) || !is_numeric($score6)) {

    }
    else{$score1_change = $score1;
    $score5_change = $score5;
    if ($drop == false) {
        $answer = ($score1_change + $score2 + $score3 + $score4 + $score5_change + $score6)/6; 
        echo "The average score is $answer";
    }
    else 
        $lowest = $score1_change; 
        if ($lowest > $score2) {
            $lowest = $score2;
        }
        if ($lowest > $score3) {
            $lowest = $score3;
        }
        if ($lowest > $score4) {
            $lowest = $score4;
        }
        if ($lowest > $score5_change) {
            $lowest = $score5;
        }
        if ($lowest > $score6) {
            $lowest = $score6;
        }
        $answer = ($score1_change + $score2 + $score3 + $score4 + $score5_change + $score6 - $lowest)/5; 
        echo "The average score is $answer"; 
    }
}

$prj1 = $prj2 = $prj3 = $prj4 = $prj5 = $prj6 = NULL; 


$drop = NULL; 

if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
       if (!empty($_POST['prj1'])) 
       {
              $prj1 = $_POST['prj1']; 
              if (!is_numeric($prj1))
              {
                     echo "Please put a number in score 1. Score must be numeric <br />";
              }
       }
       else {
              echo "Please enter project 1 score <br />";
       }   
       if (!empty($_POST['prj2'])) 
       {
              $prj2 = $_POST['prj1']; 
              if (!is_numeric($prj2))
              {
                     echo "Please put a number in score 2. Score must be numeric <br />";
              }
       }
       else {
              echo "Please enter project 2 score <br />";
       }   
       if (!empty($_POST['prj3'])) 
       {
              $prj3 = $_POST['prj3']; 
              if (!is_numeric($prj3))
              {
                     echo "Please put a number in score 3. Score must be numeric <br />";
              }
       }
       else {
              echo "Please enter project 3 score <br />";
       }   
       if (!empty($_POST['prj4'])) 
       {
              $prj4 = $_POST['prj4']; 
              if (!is_numeric($prj4))
              {
                     echo "Please put a number in score 4. Score must be numeric <br />";
              }
       }
       else {
              echo "Please enter project 4 score <br />";
       }   
       if (!empty($_POST['prj5'])) 
       {
              $prj5 = $_POST['prj5']; 
              if (!is_numeric($prj5))
              {
                     echo "Please put a number in score 5. Score must be numeric <br />";
              }
       }
       else {
              echo "Please enter project 5 score <br />";
       }   
       if (!empty($_POST['prj6'])) 
       {
              $prj6 = $_POST['prj6']; 
              if (!is_numeric($prj6))
              {
                     echo "Please put a number in score 6. Score must be numeric <br />";
              }
       }
       else {
              echo "Please enter project 6 score <br />";
       } 
       if (!empty($_POST['drop_option'])) 
       {
              $drop = $_POST['drop_option']; 
       }
       
       computeAvg($prj1, $prj2, $prj3, $prj4, $prj5, $prj6, $drop); 
}
?>
</center>

</body>
</html>