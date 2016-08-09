<!DOCTYPE html>
<html>
   
   <head>
      <title>SchoolManagementSystem</title>
      <meta name = "viewport" content = "width = device-width, initial-scale = 1.0">
      
      <!-- Bootstrap -->
      <link href = "css/bootstrap.min.css" rel = "stylesheet">
      <link href = "css/materialize.min.css" rel = "stylesheet">

      
      <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
      <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
      
      <!--[if lt IE 9]>
      <script src = "https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src = "https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
      <![endif]-->
     <link rel="stylesheet" type="text/css" href="style.css">
      
   </head>
   
   <body>
    

<nav class="navbar navbar-custom navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand navbar-brandc" href="index.html"><span class="glyphicon glyphicon-book"></span> XYZ School</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="changepassword.php"><span class="glyphicon glyphicon-edit"></span> Change Password</a></li>
        <li><a href="php/logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container-custom1">
  <?php
  include 'php/db_connection.php';
  session_start();
  $sid = $_SESSION['login_sid'];
  $sql = "SELECT * FROM info WHERE sid = ".$sid;
  $result = mysqli_query($conn, $sql);
  $count = mysqli_num_rows($result);
  $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
  if($count == 1) {
    echo $row["name"];
    echo "</br>";
    echo $row["grade"];
    $class = $row["grade"];
    echo "</br>";
    echo $row["gender"];
    echo "</br>";
    
    }else {
         echo "Wrong StudentID";
    }
  


  $sql = "SELECT * FROM marks WHERE sid = ".$sid;
  $result = mysqli_query($conn, $sql);
  $count = mysqli_num_rows($result);
  $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
  if($count == 1) {
    echo $row["firter"];
    
    }else {
         echo "Wrong StudentID";
    }



?>

  
</div>


   
    
  
   

      <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
      <script src="js/jquery.min.js"></script>
      
      <!-- Include all compiled plugins (below), or include individual files as needed -->
      <script src = "js/bootstrap.min.js"></script>
      <script src = "js/materialize.min.js"></script>
      
   </body>
</html>