

<!DOCTYPE html>
<html lang="en">
<head>
  <title>ELEARNING</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

	
  <style>
		input[type=text], select {
		    width: 15%;
		    padding: 12px 20px;
		    margin: 8px 0;
		    display: inline-block;
		    border: 1px solid #ccc;
		    border-radius: 4px;
		    box-sizing: border-box;
		    font-size: 15px;

		}

   
    </style>
</head>
<body>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">ELEARNING</a>
    </div>
    <ul class="nav navbar-nav navbar-right">
      <li class="active"><a href="index.php">HOME</a></li>
      <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="index.php"><strong>DATA STRUCTURES</strong>
              <span class="caret"></span></a>
              <ul class="dropdown-menu">
               
              <li><a href="insertion.php">INSERTION SORT</a></li>
              <li><a href="selection.php">SELECTION SORT</a></li>
              <li><a href="bubble.php">BUBBLE SORT</a></li>
			 <li><a href="radix.php">RADIX SORT</a></li>
				<li><a href="shell.php">SHELL SORT</a></li>
			  <li><a href="">BUBBLE SORT</a></li>
              </ul>
              </li> 
      <li><a href="about_us.php">ABOUT</a></li>
      <li><a href="contact.php">CONTACT US</a></li>
    </ul>
  </div>
</nav>
  <form id="form1" method="post" action="">
   
    <div class="container">
    
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-24">
            <center>
                
                <h2>Bubble Sort Algorithm</h2>
               

                    <input   color: #000;" style="background-color: transparent;" name="element_1" placeholder="First Element"   type="text">

                    <input    color: #000;" style="background-color: transparent;" name="element_2" placeholder="Second Element"   type="text">

                    <input    color: #000;" style="background-color: transparent;" name="element_3" placeholder="Third Element"   type="text">

                    <input    color: #000;" style="background-color: transparent;" name="element_4" placeholder="Fourth Element"  type="text">

                    <input    color: #000;" style="background-color: transparent;" name="element_5" placeholder="Fifth Element"  type="text">

                  


                        <div class="form-group">
                          <label class="col-md-4 control-label"></label>
                          <div class="col-md-4"><br>
                           <button type="submit" name="submit" class="btn btn-warning" >Bubble sort </button>
                        </div>
                </div>


                    <?php

                    if(isset($_POST['submit']))
                    {
             function bubble_Sort($my_array)
            {
               for($i=0; $i<count($my_array); $i++)
                            {

                                for($j=0; $j<count($my_array)-1; $j++)
                                {
                                    if($my_array[$j]> $my_array[$j+1])
                                    {

                                        $temp = $my_array[$j];
                                        $my_array[$j] = $my_array[$j+1];
                                        $my_array[$j+1] = $temp;


                                    }
                                }
                
                echo "<br><h2>ITERATION ".$i."</h2><br>";
                   echo '<input  color: #000;" style="background-color: transparent;" name="element_10" placeholder="First Element"   type="text" value=" ' . $my_array[0] .'"> ';

                    echo ' <input  color: #000;" style="background-color: transparent;" name="element_20" placeholder="Second Element"   type="text" value="' .$my_array[1]. '"> ';

                  echo   ' <input  color: #000;" style="background-color: transparent;" name="element_30" placeholder="Third Element"   type="text" value="' .$my_array[2]. '"> ';

                  echo   ' <input  color: #000;" style="background-color: transparent;" name="element_40" placeholder="Fourth Element"  type="text" value="' .$my_array[3].'"> ';

                  echo   ' <input  color: #000;" style="background-color: transparent;" name="element_50" placeholder="Fifth Element"  type="text" value="' .$my_array[4]. '"> ';

              }
              
            
            }
            $test_array[0] = $_POST['element_1'];
                            $test_array[1] = $_POST['element_2'];
                            $test_array[2] = $_POST['element_3'];
                            $test_array[3] = $_POST['element_4'];
                            $test_array[4] = $_POST['element_5'];
            
            
            bubble_Sort($test_array);
            
                      
              
          }
                    ?>

                    
                    </center>



 </div>
    </div>
    <script src="js/jquery.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <script src="js/jquery.backstretch.js" type="text/javascript"></script>
    <script type="text/javascript">
     
    </script>
    </form>

	</body>
	</html>
    




