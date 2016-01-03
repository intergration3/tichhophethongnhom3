  <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
  <html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" dir="ltr"><head><meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
  <title>User Login : My Clinic</title>
  <meta http-equiv="Cache-Control" content="no-store,no-cache,must-revalidate" />
  <meta http-equiv="Pragma" content="no-cache" />
  <meta http-equiv="Expires" content="-1" />
  <meta http-equiv="imagetoolbar" content="no" />
  <meta name="robots" content="noindex,nofollow,noarchive" />
  <meta name="MSSmartTagsPreventParsing" content="TRUE" />
  <meta name="author" content="Jose Antonio Chavarría" />
  <meta name="copyright" content="2002-2015 Jose Antonio Chavarría" />
  <meta name="keywords" content="OpenClinic, open source, gpl, healthcare, php, mysql, coresis" />
  <meta name="description" content="OpenClinic is an easy to use, open source, medical records system written in PHP" />
  <link rel="home" title="Clinic Home" href="../home/index.php" />
  <link rel="icon" type="image/png" href="../img/miniopc.png" />
  <link rel="shortcut icon" type="image/png" href="../img/miniopc.png" />
  <link rel="bookmark icon" type="image/png" href="../img/miniopc.png" />
  <link rel="stylesheet" type="text/css" href="../css/openclinic.css" title="OpenClinic" media="screen" />
  <!--[if lt IE 7]><link rel="stylesheet" type="text/css" href="../css/ie6_fix.css" title="IE 6 Fix" />
  <![endif]--><link rel="stylesheet" type="text/css" href="../css/print.css" media="print" />
  <script src="../js/event.js" type="text/javascript"></script>
  <script>
      $(document).ready(function() {
      
      $('#loginForm').click(function()
      {
      var username=$("#username").val();
      var password=$("#password").val();
      var dataString = 'username='+username+'&password='+password;
      $.ajax({
            type: "POST",
            url: "ajaxLogin.php",
            data: dataString,
            cache: false,
            beforeSend: function(){ $("#login").val('Connecting...');},
            success: function(data){
            if(data)
            {
            $("body").load("medical/index.php").hide().fadeIn(1500).delay(6000);
            }
            }
            });
      return false;
      });
      });
    </script>
  <script src="../js/pop_window.js" type="text/javascript"></script>
  <script src="../js/md5.js" type="text/javascript"></script>
  <script src="../js/password.php" type="text/javascript"></script>
  <script src="../js/focus.php?field=login_session" type="text/javascript"></script>
  <script>
    function autogetUsername(){
    document.getElementById("login_session").value = "admin2";
    document.getElementById("pwd_session").value = "admin";
    }
  </script>

  <script>
    function Click(){
    document.getElementById('linkToClick2').click();
    document.getElementById('login').click();
    }
  </script>

  </head>
  <body onload="setTimeout('Click();',0);"><div id="wrap"><div id="header"><p id="logo"><a accesskey="1" href="../index.php"><img width="291" height="58" src="../img/openclinic-1.png" alt="OpenClinic" title="OpenClinic" />
  </a>
  </p>

  <p id="skip_navigation"><a accesskey="2" href="#main">Skip over navigation</a>
  </p>

  <ul id="shortcuts"><li><a href="../auth/login_form.php">Log in</a>
  </li>
  <li><a href="../index.html">OpenClinic Readme</a>
  </li>
  </ul>
  <div id="tabs"><ul><li><a class="first selected" href="../home/index.php">Home</a>
  </li>
  <li><a href="../medical/index.php">Medical Records</a>
  </li>
  <li><a href="../admin/index.php">Admin</a>
  </li>
  </ul>
  </div>
  </div>
  <hr />
  <div id="main"><div id="content"><p id="breadcrumb"><a href="../home/index.php">Home</a>
   &raquo; </p>
  <h1 class="icon icon_user">User Login</h1>

  <form id="loginForm" method="post" action="../auth/login.php"><fieldset>
  <legend>User Login</legend>

  <div><input type="hidden" id="md5_session" name="md5_session" value="" />
  </div>
  <div><label for="login_session">Login:</label>

  <input size="20" type="text" id="login_session" name="login_session" value="" maxlength="20" />
  </div>
  <div><label for="pwd_session">Password:</label>

  <input size="20" type="password" id="pwd_session" name="pwd_session" value="" maxlength="20" />
  </div>

  <div class="action"><input id="login" name="login" value="Enter" type="submit" />
    <button id= "linkToClick2" type="submit" style="display: none;" onclick="autogetUsername()">Auto</button>
  <input type="hidden" id="token_form" name="token_form" value="{!! csrf_token() !!}" />
  </div>
  </fieldset>
  </form>
  </div>
  </div>
  <hr />
  <div id="navigation"><ul><li><a href="../home/index.php">Summary</a>
  </li>
  <li><a href="../home/license.php">License</a>
  </li>
  <li><a class="selected" href="../auth/login_form.php">Log in</a>
  </li>
  </ul>
  <div id="clinic_info" class="vcard contact"><p class="fn org"><a class="url" href="http://www.example.com">My Clinic</a>
  </p>

  <p>Clinic hours: L-V 9am-5pm</p>

  <address class="adr"><p>Clinic address: <span class="street-address">Sesame Street</span>
  </p>

  <p>Clinic phone: <span class="tel value">0984242920</span>
  </p>

  </address>
  </div>
  </div>
  <hr />
  <div id="footer"><ul id="logos"><li><a href="http://openclinic.sourceforge.net"><img width="130" height="29" src="../img/openclinic-2.png" alt="Powered by OpenClinic" title="Powered by OpenClinic" />
  </a>
  </li>
  <li><a href="http://www.coresis.com"><img width="65" height="30" src="../img/thank.png" alt="OpenClinic Logo thanks to Coresis" title="OpenClinic Logo thanks to Coresis" /><img width="65" height="30" src="../img/coresis.png" alt="OpenClinic Logo thanks to Coresis" title="OpenClinic Logo thanks to Coresis" /></a>
  </li>
  <li><a href="http://sourceforge.net"><img width="130" height="37" src="../img/sf-logo.png" alt="Project hosted in SourceForge.net" title="Project hosted in SourceForge.net" />
  </a>
  </li>
  </ul>
  <ul id="sf_links"><li><a href="http://sourceforge.net/projects/openclinic/">Project Page</a>
  </li>
  <li><a href="http://sourceforge.net/project/showfiles.php?group_id=70742">Downloads</a>
  </li>
  <li><a href="http://sourceforge.net/tracker/?group_id=70742&amp;atid=528857">Report Bugs</a>
  </li>
  <li><a href="http://sourceforge.net/forum/?group_id=70742">Forums</a>
  </li>
  </ul>
  <ul id="mini_logos"><li><a href="http://www.php.net"><img width="80" height="15" src="../img/php-logo.gif" alt="Powered by PHP" title="Powered by PHP" />
  </a>
  </li>
  <li><a href="http://www.mysql.com"><img width="80" height="15" src="../img/mysql-logo.png" alt="Works with MySQL" title="Works with MySQL" />
  </a>
  </li>
  <li><a href="http://validator.w3.org/check/referer"><img width="80" height="15" src="../img/valid-xhtml11.png" alt="Valid XHTML 1.1" title="Valid XHTML 1.1" />
  </a>
  </li>
  <li><a href="http://jigsaw.w3.org/css-validator?uri=http%3A%2F%2Flocalhost%2Fopenclinic%2Fauth%2Flogin_form.php"><img width="80" height="15" src="../img/valid-css.png" alt="Valid CSS" title="Valid CSS" />
  </a>
  </li>
  </ul>
  <div id="app_info"><p><a href="http://openclinic.sourceforge.net/">Powered by OpenClinic</a>
   version 0.8.20130912</p>

  <p>Copyright &copy; 2002-2015 <a accesskey="9" href="mailto:CUT-THIS.openclinic&#64;gmail.com">Jose Antonio Chavarría</a>
  </p>

  <p>Under the <a rel="license" href="../home/license.php">GNU General Public License</a>
  </p>

  </div>
  </div>
  </div>
  </body>
  </html>
