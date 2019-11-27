<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="header">
	<h2>Home Page</h2>
</div>
<div class="content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>
    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
    	<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
        <?php if($_SESSION['disability'] == 'Hearing Impairment') { ?>
    <strong> Suggested products for "Hearing Impairment"</strong><br      />
    <br      />
   <div id="sell"><img src="hearingaid.jpg" alt="Image" height="200" width="200">
    <img src="jern.jpg" alt="Image" height="200" width="200"><br/>	
       <a href="https://www.amazon.in/S-S-AxonTM-Batteries-Enhancement-Amplifier-139/dp/B071DF91V8?tag=googinhydr18418-21&tag=googinkenshoo-21&ascsubtag=dd76d94c-5e24-486b-9de3-34ae3cb79b76">Click here to buy this product</a>
    <a href="https://www.amazon.in/Jern-Rechargeable-Digital-Hearing-Adjustable/dp/B01BAL04XA?tag=googinhydr18418-21&tag=googinkenshoo-21&ascsubtag=dd76d94c-5e24-486b-9de3-34ae3cb79b76">Click here to buy this product</a>
    </div><br      /><br      /><br      />

    <?php } ?>
	 <?php if($_SESSION['disability'] == 'Visual Impairment') { ?>
    <strong>Suggest products for Visual Impairment</strong><br      />
    <div id="sell"><img src="orcam.jpg" alt="Image" height="200" width="200">
        <img src="dotwatch.jpg" alt="Image" height="200" width="200"><br/>
        <a href="https://www.orcam.com/en/myeye2/">Click here to buy this product</a>
        <a href="https://www.amazon.in/DOT-Watch-Smartwatch-Visually-Impaired/dp/B07C9RP6RB/ref=sr_1_8?ie=UTF8&qid=1535239415&sr=8-8&keywords=visually+impaired">Click here to buy this product</a>
    </div>
<?php } ?>
       <p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
    <?php endif ?>
</div>
</body>
</html>
