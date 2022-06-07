<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta name="viewport" content="width=320, initial-scale=1.0, maximum-scale=1.0"/>
        <title>ZingPlay</title>
        <meta name="keywords" content="">
        <meta name="description" lang="en" content="">
        <meta name="appleid-signin-client-id" content="pay.zingplay.com">
        <meta name="appleid-signin-scope" content="name email">
        <meta name="appleid-signin-redirect-uri" content="https://zpslogin.herokuapp.com/login.php">
        <meta name="appleid-signin-state" content="origin:web">
            
        <script type="text/javascript" src="https://appleid.cdn-apple.com/appleauth/static/jsapi/appleid/1/en_US/appleid.auth.js"></script>

        <script>
            function initWeb() {
                console.log("Welcome ZingPlay !");

                AppleID.auth.init({
                    clientId : 'pay.zingplay.com',
                    scope : 'name email',
                    redirectURI: 'https://zpslogin.herokuapp.com/login.php',
                    state : 'origin:web'
                });
            }
            
            function singInApple () {
                AppleID.auth.signIn();
            };
        </script>
    </head>
    <body onload="initWeb()">
		<h1>Zing Play</h1>	
        
        <div id="appleid-signin" class="signin-button" onclick="singInApple()">Sign In Apple</div>
    </body>
</html>