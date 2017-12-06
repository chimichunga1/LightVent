<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>SLAMBOOK</title>
  
   
<link rel="apple-touch-icon" sizes="57x57" href="asset/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="asset/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="asset/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="asset/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="asset/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="asset/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="asset/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="asset/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="asset/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="asset/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="asset/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="asset/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="asset/favicon-16x16.png">
<link rel="manifest" href="asset/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="asset/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">
    
      <link rel="stylesheet" href="css/mystyle2.css">
      <link rel="stylesheet" type="text/css" href="sm/dist/sweetalert.css">
<script src="sm/dist/sweetalert.min.js"></script>

</head>




  

<body>


  <div class="background-wrap">
  <div class="background"></div>
</div>

<form id="accesspanel" action="admin_submit.php" method="post">
  <h1 id="litheader">SLAMBOOK</h1>
  <div class="inset">
    <p>
      <input type="text" name="b"  placeholder="Username" required>
    </p>
    <p>
      <input type="password" name="c"  placeholder="Password" required>
    </p>
 
    <p>
      <input type="password" name="d"  placeholder="Confirm Password" required>
    </p>


  <p class="p-container">
    <input type="submit" name="signup" id="go" value="Sign up">
  </p>

</form>




  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>







    <script> 



<script type="text/javascript">

  $(document).ready(function() {
 
    $('#accesspanel').on('submit', function() {
            document.getElementById("litheader").className = "poweron";
            document.getElementById("go").className = "";
            document.getElementById("go").value = "Creating...";
    });

});
</script>






</body>
</html>
