<?PHP
require_once("../include/membersite_config.php");

if(isset($_POST['submitted']))
{
   if($fgmembersite->Login())
   {
        $fgmembersite->RedirectToURL("../login-home.php");
   }
}

?>
<head>
<title>Login</title>
<!-- Custom Theme files -->
<link href="../css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (Bootstrap's JavaScript plugins) -->
<script src="../js/jquery.min.js"></script>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<link href="../css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- Custom Theme files -->
<!-- Custom Theme files -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<meta name="keywords" content="Static Login Form Responsive, Login form web template, Sign up Web Templates, Flat Web Templates, Login signup Responsive web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--webfont-->
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Raleway:400,800,300,100,500,700,600,900' rel='stylesheet' type='text/css'>
<!--animated-css-->
<link href="../css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="../js/wow.min.js"></script>
<script>
 new WOW().init();
</script>
<!--/animated-css-->
<!--script-->
<script type="text/javascript" src="../js/move-top.js"></script>
<script type="text/javascript" src="../js/easing.js"></script>
<!--/script-->
<!--script-->
<script src="js/jquery.min.js"></script>
<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
        <script type="text/javascript">
          $(document).ready(function () {
              $('#horizontalTab').easyResponsiveTabs({
                  type: 'default', //Types: default, vertical, accordion           
                  width: 'auto', //auto or any width like 600px
                  fit: true   // 100% fit in a container
              });
          });
        
</script> 
<script type='text/javascript' src='../scripts/gen_validatorv31.js'></script>
<!--script-->

</head>
<body>

<!-- Form Code Start -->
<div id='fg_membersite'>
  <div class="banner-bg">
    <video autoplay="autoplay" muted="muted" poster="" width="100%" loop="">
      <source src="../srix.mp4" type="video/mp4">
    </video>
    <div class="banner">
     <div class="header">  
       <div class="logo wow fadeInLeft" data-wow-delay="0.5s">
        <a href="../index.html"><img src="../images/logo2.png" alt=""/></a>
       </div> 
       <div class="top-menu">
        <span class="menu"></span> 
        <ul class="cl-effect-1">
           <li><a class="scroll" href="../index.html">HOME</a></li>
           <li><a class="scroll" href="#">BRIEF</a></li>
           <li><a class="scroll" href="#">FEATURES</a></li>
           <li><a class="scroll" href="#">TOURS</a></li>
           <li><a class="scroll" href="#">TESTIMONIAL</a></li>
           <li><a class="scroll" href="#">CONTACT</a></li>
           <li><a href="signin/index.html">SIGN IN</a></li>
           <li><a href="../register.php">SIGN UP</a></li> 
        </ul>
      </div>
      <div class="clearfix"></div>
      <!-- script-for-menu -->
      <script>
        $( "span.menu" ).click(function() {
        $( "ul.cl-effect-1" ).slideToggle( 300, function() {
        // Animation complete.
        });
        });
      </script>
      <!-- script-for-menu -->
    </div>  
    <div class="login">
      <div class="sap_tabs">
        <div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
          <ul class="resp-tabs-list">
            <li class="resp-tab-item" aria-controls="tab_item-0" role="tab"><span>Login</span></li>
            <div class="clearfix"></div>
          </ul>
          <div class="resp-tabs-container">
            <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
              <div class="login-top">
                <form id='login' action='<?php echo $fgmembersite->GetSelfScript(); ?>' method='post' accept-charset='UTF-8'>
                    <input type='hidden' name='submitted' id='submitted' value='1'/>
                    <!-- <div class='short_explanation'>* required fields</div> -->
                    <div><span class='error'><?php echo $fgmembersite->GetErrorMessage(); ?></span></div>
                    
                    <input type='text' name='username' id='username' placeholder="Username" value='<?php echo $fgmembersite->SafeDisplay('username') ?>' maxlength="50" /><br/>
                    <span id='login_username_errorloc' class='error'></span>
                    <input type='password' name='password' id='password' placeholder="Password" maxlength="50" /><br/>
                    <span id='login_password_errorloc' class='error'></span>
                    <div class="login-bottom login-bottom1">
                      <div class="submit">
                        <input type="submit" value="LOGIN"/>
                      </div>
                      <div class="clear"></div>
                    </div>
                    <div class='short_explanation'><a href='../reset-pwd-req.php'>Forgot Password?</a></div>
                    <div class='short_explanation'><a href='../register.php'>New User?</a></div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- client-side Form Validations:
    Uses the excellent form validation script from JavaScript-coder.com-->
    <script type='text/javascript'>
    // <![CDATA[
    var frmvalidator  = new Validator("login");
    frmvalidator.EnableOnPageErrorDisplay();
    frmvalidator.EnableMsgsTogether();

    frmvalidator.addValidation("username","req","Please provide your username");
    
    frmvalidator.addValidation("password","req","Please provide the password");
    // ]]>
    </script>
  </div>
</div>
<!--
Form Code End (see html-form-guide.com for more info.)
-->

</body>
