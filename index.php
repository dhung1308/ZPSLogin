<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta name="viewport" content="width=320, initial-scale=1.0, maximum-scale=1.0"/>
        <title>ZingPlay</title>
        <meta name="keywords" content="">
            <meta name="description" lang="en" content="">
                <style type="text/css">
                    a, img {
                        border:none;
                    }
                
                body,td,th {
                    font-family: Monospace;
                    font-size: 18px;
                    line-height: 30px;
                    color: #4b4b4b;
                    text-align: center;
                }
				
				h2 {
                    color: #ffffff;
                    font-family: Monospace;
                    font-size: 25px;
                    line-height: 35px;
                    text-align: left;
					align:left;
					vertical-align:middle;
					margin-bottom:0px;
					margin-left : 20px;
				}
                
                body {
                    background-color: #ffffff;
                    margin-top: 0;
                    margin-bottom: 0;
                    margin-left: 0;
                    margin-right: 0;
                }
                
                a:active {  color: #17a554; text-decoration: none}
                a:link {  color: #17a554; text-decoration: none}
                a:visited {  color: #4b4b4b; text-decoration: none}
                a:hover {  color: #17a554}
                
                p {
                    text-align: justify;
                }
                
                td
                {
                    margin-top: 0;
                }
                
                iframe {
                    width: 100%;
                    height: 50px;
                    border: 0;
                }
				
				h1 
				{
					margin-top : 10px;
					color:#0091ea
				}
				
				h5 
				{
					color:#00c853
				}
				
				h6 
				{
					font-size:20px;
					color:#ffffff;
					
                    line-height: 15px;
                    text-align: center;
					align:center;
					vertical-align:bottom;
					margin-top:15px;
				}
				
				.trTAB {
					padding-top : 25px;
					background:#32a852;
				}
				
				.trTab:hover {
					cursor: pointer;
					background:#607d8b;
				}
				
				.btnDiv {
					padding : 5px;
					background:#32a852;
				}
				
				.btnDiv:hover {
					cursor: pointer;
					background:#607d8b;
				}
				
				.title {
					font-size : 16px;
				}
				
				.jscolor {
				  font-size : 14px;
				  width: 95%;
				  padding : 10px;
				  margin : 5px;
				  box-sizing: border-box;
				}
				
				input[type=text] {
				  font-size : 14px;
				  width: 95%;
				  padding : 10px;
				  margin : 5px;
				  box-sizing: border-box;
				}
								
				input[type=number] {
				  font-size : 14px;
				  width: 95%;
				  padding : 10px;
				  margin : 5px;
				  box-sizing: border-box;
				}
								
				input[type=checkbox] {
					font-size : 14px;
					width: 95%;
					padding : 10px;
					margin : 5px;
					box-sizing: border-box;
				}
				
				select {
				  font-size : 20px;
				  width: 100%;
				  padding: 16px 20px;
				  border: none;
				  border-radius: 4px;
				  background-color: #fff900;
				}
				
				.styleSelect {
				  font-size : 14px;
				  width: 95%;
				  padding : 10px;
				  margin : 5px;
				  box-sizing: border-box;
				  background-color: #ffffff;
				}
				
				option {
				  width: 100%;
				  padding: 16px 20px;
				  border: none;
				  border-radius: 4px;
				  background-color: #f1f1f1;
				}
				
				.button {
					  background-color: #4CAF50;
					  border: none;
					  color: white;
					  padding: 15px 32px;
					  text-align: center;
					  text-decoration: none;
					  display: inline-block;
					  font-size: 16px;
					  margin: 4px 2px;
					  cursor: pointer;
					}

					/* The container */
				.container {
				display: block;
				position: relative;
				padding-left: 35px;
				margin-bottom: 12px;
				cursor: pointer;
				font-size: 22px;
				-webkit-user-select: none;
				-moz-user-select: none;
				-ms-user-select: none;
				user-select: none;
				}

				/* Hide the browser's default checkbox */
				.container input {
				position: absolute;
				opacity: 0;
				cursor: pointer;
				height: 0;
				width: 0;
				}

				/* Create a custom checkbox */
				.checkmark {
				position: absolute;
				top: 0;
				left: 0;
				height: 25px;
				width: 25px;
				background-color: #eee;
				}

				/* On mouse-over, add a grey background color */
				.container:hover input ~ .checkmark {
				background-color: #ccc;
				}

				/* When the checkbox is checked, add a blue background */
				.container input:checked ~ .checkmark {
				background-color: #2196F3;
				}

				/* Create the checkmark/indicator (hidden when not checked) */
				.checkmark:after {
				content: "";
				position: absolute;
				display: none;
				}

				/* Show the checkmark when checked */
				.container input:checked ~ .checkmark:after {
				display: block;
				}

				/* Style the checkmark/indicator */
				.container .checkmark:after {
				left: 9px;
				top: 5px;
				width: 5px;
				height: 10px;
				border: solid white;
				border-width: 0 3px 3px 0;
				-webkit-transform: rotate(45deg);
				-ms-transform: rotate(45deg);
				transform: rotate(45deg);
				}
            </style>
			
			<script>
				function init() {
                    console.log("Welcome ZingPlay !");
                }			
			</script>
    </head>
    <body onload="init()">
		<h1>Zing Play</h1>		
    </body>
</html>