<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>NAFTC University</title>
  </head>
  <body class="text-center uk-height-1-1 uk-flex-middle uk-flex-center bg-lightorange-gradient">
    <div>
      @include('includes.header')
    </div>
    <div class="h-100 container center-me">
            <!-- Placing the Form Container in the Center -->
            <div class="my-auto" >
    <div id="content">
        <div class="login-photo">
            <div class="form-container">
                <div class="image-holder"></div>
                <form method="post" id="fm1">
                <div class="text-center" p>
                <img alt="NAFTC Logo"  src="http://naftc.wvu.edu/wp-content/uploads/2017/05/naftcLogo2.png" style="padding-top: 15px;">
                <div class="form-group">
                
                    <div>
                    <h2>Please Sign In</h2>
                    <label class="form" style="padding-right: 720px" text-align="left" for="username">Your Username</label>
                        <input class="required form-control" id="username" name="username" size="25" aria-label="Enter username" type="text" tabindex="1" placeholder="e.g. gordon.gee" autocomplete="off" accesskey="u" value="">
                        </div>
                </div>
                <div class="form-group">
                    <div>
                    <label class="form" style="padding-right: 720px" text-align="left" for="username">Your Password</label>
                        <input class="required form-control" type="password" id="password" name="password" tabindex="2" size="25" aria-label="Enter Password" accesskey="p" autocomplete="off" placeholder="e.g. LetsGoMountaineers123" value=""><span id="capslock-on" style="display:none;">
                            <p>
                                <i class="fa fa-exclamation-circle"></i>
                                <span>CAPSLOCK key is turned on!</span>
                            </p>
                        </span>
                    </div>
                </div>
                <div class="form-group">
                  <input class="btn btn-primary" name="submit" accesskey="l" value="LOGIN" tabindex="6" type="submit" enabled="enabled"></div>
                <div>            
                    <p><a href="https://login.wvu.edu/self-service/" target="_blank" rel="noopener noreferrer" class="already">Need help? Manage your Login account.</a></p>
                </div>
            </form>
            <script type="text/javascript">
                /*<![CDATA[*/
                var i = "NAFTC gathering information..."
                    /*]]>*/
                    $(document).ready(function () {
                        $("#fm1").submit(function () {
                            $(":submit").attr("disabled", true);
                            $(":submit").attr("value", i);
                            return true;
                        });
                    });
            </script>
            </div>
            <div class="copyright">
            <p>West Virginia University is an Equal Opportunity/Affirmative Action institution.</p>
            <img alt="West Virginia University seal.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/1/1b/West_Virginia_University_seal.svg/150px-West_Virginia_University_seal.svg.png" decoding="async" width="60" height="60" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/1/1b/West_Virginia_University_seal.svg/225px-West_Virginia_University_seal.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/1/1b/West_Virginia_University_seal.svg/300px-West_Virginia_University_seal.svg.png 2x" data-file-width="94" data-file-height="94">
            <p>Copyright <span>2021</span> West Virginia University - <a href="http://it.wvu.edu/governance/standards-and-procedures/all-standards/information-privacy-policy" rel="noopener noreferrer" target="_blank">Privacy Policy</a></p>
            <div>
                </div>
          </div>
        </div>
        
    </div>
  </body>
</html>
