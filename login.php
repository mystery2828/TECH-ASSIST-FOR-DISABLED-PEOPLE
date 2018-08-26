<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
    <div id="page">
  <div id="toolbar" data-0="height:192px" data-128="height: 64px">
    <div id="actions">
      <div class="icon">
        <svg viewBox="0 0 24 24" x="0px" y="0px" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
          <g id="menu">
            <path d="M3,18h18v-2H3V18z M3,13h18v-2H3V13z M3,6v2h18V6H3z"></path>
          </g>
        </svg>
      </div>
      <div class="spacer"></div>
      <div class="icon">
      <svg viewBox="0 0 24 24" x="0px" y="0px" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
          <g id="search">
            <path d="M15.5,14h-0.8l-0.3-0.3c1-1.1,1.6-2.6,1.6-4.2C16,5.9,13.1,3,9.5,3C5.9,3,3,5.9,3,9.5S5.9,16,9.5,16c1.6,0,3.1-0.6,4.2-1.6l0.3,0.3v0.8l5,5l1.5-1.5L15.5,14z M9.5,14C7,14,5,12,5,9.5S7,5,9.5,5C12,5,14,7,14,9.5S12,14,9.5,14z"></path>
          </g>
        </svg>
      </div>
      <div class="icon">
      <svg viewBox="0 0 24 24" x="0px" y="0px" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
          <g id="more-vert">
            <path d="M12,8c1.1,0,2-0.9,2-2s-0.9-2-2-2c-1.1,0-2,0.9-2,2S10.9,8,12,8z M12,10c-1.1,0-2,0.9-2,2s0.9,2,2,2c1.1,0,2-0.9,2-2S13.1,10,12,10z M12,16c-1.1,0-2,0.9-2,2s0.9,2,2,2c1.1,0,2-0.9,2-2S13.1,16,12,16z"></path>
          </g>
        </svg>
      </div>
    </div>
    <div id="title" data-0="font-size: 48px; padding: 0 0 24px 12px;" data-128="font-size: 18px; padding: 0 0 21px 60px;">
      ONLINE TECH ASSIST PLATFORM FOR SPECIALLY ABLED
    </div>
    </div>
  <form method="post" action="login.php">
       <h1>SIGN IN</h1>
  	<?php include('errors.php'); ?>
  	 <input type="text" class="input1" name="username" placeholder="Name*"  required>
 <input type="password" class="input1" name="password" placeholder="Password*" required>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Login</button>
  	</div>
  	<p>
  		Not yet a member? <a href="register.php">Sign up</a>
  	</p>
  </form>
 <a class="follow" href="https://www.facebook.com/techassist.rhok.1" target="_blank"><i class="fa fa-Facebook"></i>Follow Us on Facebook</a>

<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<div id="tat">Talk To Assistant <br/>
<button><a href="tel:+91 9738707042" id="callus">Call Us</a></button>
 <button><a href="https://api.whatsapp.com/send?phone=919738707042&text=Hi, Sir" id="callus">Send a WhatsApp message</a></button> 
        </div>
<link href='https://fonts.googleapis.com/css?family=Roboto:400' rel='stylesheet' type='text/css'>
        </div>
</body>
</html>