<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta name="viewport" content="width=320, initial-scale=1.0, maximum-scale=1.0"/>
        <title>ZingPlay</title>

        <?php 
            $state = "";
            $code = "";
            $token = "";
            $user = "";
            if (isset($_REQUEST['state']))
                $state = $_REQUEST['state'];
            if (isset($_REQUEST['code']))
                $code = $_REQUEST['code'];
            if (isset($_REQUEST['id_token']))
                $token = $_REQUEST['id_token'];
            if (isset($_REQUEST['user']))
                $user = $_REQUEST['user'];
        ?>
        <script>
            function callback() {
                var token = "<?php echo $token;?>";
                console.log("Token : " + token)
                document.getElementById("lbToken").innerText = token;
                window.location = "zpslogin:://token/" + token;
            }
        </script>
    </head>
    <body onload="callback()">
		<h1>Login Success !!!</h1>
        <h3>Redirecting...</h3>	    
        <p id="lbToken"></p>
    </body>
</html>