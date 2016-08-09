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
        <li class="active"><a href="php/changepassword.php"><span class="glyphicon glyphicon-edit"></span> Change Password</a></li>
        <li><a href="php/logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
      </ul>
    </div>
  </div>
</nav>

   
    
  <div class="container-custom z-depth-4">
     <h3 class="whitetext">Change Password</h3>
    <form action ="php/passwordchanger.php" method ="post">
      <div class="row">
        <div class="input-field col s12">
          <input id="password" name="password" type="password" class="validate">
          <label for="email">New Password</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="password" name="passwordconfirm" type="password" class="validate">
          <label for="password">Confirm Password</label>
        </div>
      </div>
          <div class="row">
            <button class="btn waves-effect waves-light button-custom z-depth-2" type="submit" name="action">Submit</button>
         </div>
    </form>
  </div>

   

      <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
      <script src="js/jquery.min.js"></script>
      
      <!-- Include all compiled plugins (below), or include individual files as needed -->
      <script src = "js/bootstrap.min.js"></script>
      <script src = "js/materialize.min.js"></script>
      
   </body>
</html>