<?php $photopassword = 'codecomplete'; 


###############################################################
# Page Password Protect 2.13
###############################################################
# Visit http://www.zubrag.com/scripts/ for updates
############################################################### 
#
# Usage:
# Set usernames / passwords below between SETTINGS START and SETTINGS END.
# Open it in browser with "help" parameter to get the code
# to add to all files being protected. 
#    Example: password_protect.php?help
# Include protection string which it gave you into every file that needs to be protected
#
# Add following HTML code to your page where you want to have logout link
# <a href="http://www.example.com/path/to/protected/page.php?logout=1">Logout</a>
#
###############################################################

/*
-------------------------------------------------------------------
SAMPLE if you only want to request login and password on login form.
Each row represents different user.

$LOGIN_INFORMATION = array(
  'zubrag' => 'root',
  'test' => 'testpass',
  'admin' => 'passwd'
);

--------------------------------------------------------------------
SAMPLE if you only want to request only password on login form.
Note: only passwords are listed

$LOGIN_INFORMATION = array(
  'root',
  'testpass',
  'passwd'
);

--------------------------------------------------------------------
*/

##################################################################
#  SETTINGS START
##################################################################

// Add login/password pairs below, like described above
// NOTE: all rows except last must have comma "," at the end of line


$LOGIN_INFORMATION = array(
  'zubrag' => 'leviathan',
  'admin' => $photopassword
);

// request login? true - show login and password boxes, false - password box only
define('USE_USERNAME', false);

// User will be redirected to this page after logout
define('LOGOUT_URL', 'http://delmarsenties.com');

// time out after NN minutes of inactivity. Set to 0 to not timeout
define('TIMEOUT_MINUTES', 0);

// This parameter is only useful when TIMEOUT_MINUTES is not zero
// true - timeout time from last activity, false - timeout time from login
define('TIMEOUT_CHECK_ACTIVITY', true);

##################################################################
#  SETTINGS END
##################################################################


///////////////////////////////////////////////////////
// do not change code below
///////////////////////////////////////////////////////

// show usage example
if(isset($_GET['help'])) {
  die('Include following code into every page you would like to protect, at the very beginning (first line):<br>&lt;?php include("' . str_replace('\\','\\\\',__FILE__) . '"); ?&gt;');
}

// timeout in seconds
$timeout = (TIMEOUT_MINUTES == 0 ? 0 : time() + TIMEOUT_MINUTES * 60);

// logout?
if(isset($_GET['logout'])) {
  setcookie("verify", '', $timeout, '/'); // clear password;
  header('Location: ' . LOGOUT_URL);
  exit();
}

if(!function_exists('showLoginPasswordProtect')) {

// show login form
function showLoginPasswordProtect($error_msg) {
?>
<html>
<head>
  <title>Resilient Coders</title>
  <META HTTP-EQUIV="CACHE-CONTROL" CONTENT="NO-CACHE">
  <META HTTP-EQUIV="PRAGMA" CONTENT="NO-CACHE">
</head>
<body>
	<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
		<script>
	$(document).ready(function(){
		    $("input.password").keypress(function (e) {
		        if(e.which == 13) {							// if user hits "enter"
		            $(".chatbox").val($(this).val());		// transfer value from textarea to hidden "chatbox"
		            $(this).val("");
		            e.preventDefault();
					formsubmit();
		        }
		    });
			$("input.submit").click(function(){						// if user actually hits sumit btn
				$(".chatbox").val($("input.password").val());		// transfer value from textarea to hidden "chatbox"
				formsubmit();
			});
			function formsubmit(){
			$("#login").submit();	
			}
	});	
	</script>
	
	
	 <style>
	* {margin:0; padding:0;}

	body {
			text-align:center;
			margin: 0 auto;
			font: 100 1em Helvetica ;
		  background-image: url(https://delmarsenties.s3.amazonaws.com/resilient/codingcamp/leanstartup_codingcamp.png);			background-repeat: no-repeat;
			background-attachment: fixed;
			-webkit-background-size: cover;
			-moz-background-size: cover;
			-o-background-size: cover;
			background-size: cover;
		}
		
	.clr { clear:both; }
	
	.password_container {
		width:430px;
		text-align:center;
		margin:350px auto 0 auto;
	}
	
	.password_error {
		color: red;
	}

	.password_container input.password {
	float: left;
	width: 280px;
	height: 42px;
	margin: 12px;
	padding: 4px 0 0 8px;
	line-height: 1em;
	-webkit-appearance: textfield;
	-moz-appearance: textfield;
	background-color: white;
	border:none;
	border-radius: 4px; 
	-moz-border-radius: 4px; 
	-webkit-border-radius: 4px;
	-webkit-rtl-ordering: logical;
	-webkit-user-select: text;
	-moz-rtl-ordering: logical;
	-moz-user-select: text;
	cursor: auto;
	box-shadow: inset 1px 1px 1px 0px #ccc;
	color:#ccc;
	font: 100 1em Helvetica ;
	overflow: auto;				/* This gets rid of the scrollbar in IE */
	}

	.password_container input.password:focus {
		border:none;
		background-color:#edf5f9;
		box-shadow: inset 3px 3px 9px 0px #bad5e5;
		outline: 0;
	}

	.password_container input.password {
		-webkit-text-security: disc !important;
		-moz-text-security: disc !important;
	}

	.password_container input.submit {
		float: left;
		height:42px;
		width:96px;
		margin: 12px;
		padding: 0 0 0 16px;
		cursor:pointer;
		color:#666;
		box-shadow: 2px 2px 3px 3px rgba(0, 0, 0, .2);
		-webkit-appearance: none;
		-moz-appearance: none;
		background-color: #f6f4f4;
		background-image: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#fff), to(#efefef));
		background-image: -moz-linear-gradient(0% 100% 90deg, #efefef, #fff);
		background-image: -o-linear-gradient(90deg, #fff, #efefef);
		border:none;
		border-radius: 4px; 
		-moz-border-radius: 4px; 
		-webkit-border-radius: 4px;
		font: 100 1em Helvetica ;
	}
	input.chatbox {
	        border: 0 none;
	        height: 0;
	        width: 0;
			line-height:0;
	        padding: 0;
	        margin: 0;
	        overflow: hidden;
	}
	
	.nda {
		font-size: .65em;
	}
	
	.nda a {
		font-weight: bold;
		color: #222;
	}
	  </style>
	
<!--[if ie]>
<style>.password_container input.submit {margin-top:15px;}</style>
<![endif]-->
  <div class="password_container">
  <form method="post" id="login">
    
	
	
	
    <p class="password_error"><?php echo $error_msg; ?></p>


<?php if (USE_USERNAME) echo 'Login:<br /><input type="input" name="access_login" /><br />Password:<br />'; ?>
    <!-- <input type="password" name="access_password" /><p></p><input type="submit" name="Submit" value="Submit" /> -->
	<input type="password" class="password" onfocus="this.value=''; this.onfocus=null;" />
	<input class="chatbox"  type="password" name="access_password" />
	<input class="submit" name="Submit" value="Submit" />
	
  </form>
<div class="clr"></div>
  </div>
</body>
</html>

<?php
  // stop at this point
  die();
}
}

// user provided password
if (isset($_POST['access_password'])) {

  $login = isset($_POST['access_login']) ? $_POST['access_login'] : '';
  $pass = $_POST['access_password'];
  if (!USE_USERNAME && !in_array($pass, $LOGIN_INFORMATION)
  || (USE_USERNAME && ( !array_key_exists($login, $LOGIN_INFORMATION) || $LOGIN_INFORMATION[$login] != $pass ) ) 
  ) {
    showLoginPasswordProtect("Nope. Give it another shot.");
  }
  else {
    // set cookie if password was validated
    setcookie("verify", md5($login.'%'.$pass), $timeout, '/');
    
    // Some programs (like Form1 Bilder) check $_POST array to see if parameters passed
    // So need to clear password protector variables
    unset($_POST['access_login']);
    unset($_POST['access_password']);
    unset($_POST['Submit']);
  }

}

else {

  // check if password cookie is set
  if (!isset($_COOKIE['verify'])) {
    showLoginPasswordProtect("");
  }

  // check if cookie is good
  $found = false;
  foreach($LOGIN_INFORMATION as $key=>$val) {
    $lp = (USE_USERNAME ? $key : '') .'%'.$val;
    if ($_COOKIE['verify'] == md5($lp)) {
      $found = true;
      // prolong timeout
      if (TIMEOUT_CHECK_ACTIVITY) {
        setcookie("verify", md5($lp), $timeout, '/');
      }
      break;
    }
  }
  if (!$found) {
    showLoginPasswordProtect("");
  }

}

?>
