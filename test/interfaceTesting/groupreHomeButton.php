<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">

  <title>Groupre</title>
  <meta name="description" content="GroupreHome">
  <meta name="author" content="Team Groupre">

  <link rel="stylesheet" href=groupre.css style type="text/css">

</head>

<body>
  <script src="js/scripts.js"></script>

  <p class="one" style="color:#000000;font-size:64px;font-weight:bold;">Cheers! Welcome to Groupre. Click the button to run the program.</p>

<h2>The Groupre Grouper</h2>
 <p> <img src="Groupre Icon.jpg" alt="Fish" style="width:20%"></p> 

 <script type="text/javascript">

function goToURL(val){
location.href = val;
}

</script>

<html>
<!-- <head>
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <script language="javascript">
        function groupre() {
          
            $.ajax({
                type: "GET",
                url: "https://rawgit.com/jeyerena/ClassTeamBuilder/tree/master/test/interfaceTesting/pywrap.php" ,
                data: { h: "Cody" },
                success : function()
	    });
        } -->
<!-- </script>
</head>
 <body>
     <a id="goForthAndDO" href="#" onclick="groupre()">BUTTON!!!!!!!!!!!!!!!!</a>
 </body>
 </html>
 
<BUTTON ONCLICK="javascript:goToURL('https://github.com/jeyerena/ClassTeamBuilder/tree/master/test/interfaceTesting/pywrap.php')" style="height:300px;width:1600px">BUTTON!!!!!</BUTTON>

<script type="text/javascript" src="jquery.min.js"></script>
<script type="text/javascript">
 function groupre() {
     $.get("pywrap.php");
     return false;
}
</script> -->

	
  <head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script type = "text/javascript">
function myAjax () {
$.ajax( { type : 'POST',
          data : { },
          url  : 'pywrap.php',              
          success: function ( data ) {
            alert( data );              
		  //echo $output;
          },
          error: function ( xhr ) {
            alert( "error" );
          }
        });
}
    </script>
  </head>
  <body>
    <button onclick="myAjax()" style="height:300px;width:1600px">BUTTON!!!!!!!!!!!!!!!!!!!!!!!!!!</button>
<?php
	  
// <a href="#" onclick="groupre();">Button!!!!!!!!</a>

// $command = escapeshellcmd('https://rawgit.com/jeyerena/ClassTeamBuilder/tree/master/test/interfaceTesting/groupre.py');
// $output = shell_exec($command);
// echo $output;
// echo 'Thank you for using Groupre! <br />';
// //https://cdn.rawgit.com/jeyerena/ClassTeamBuilder/tree/master/test/interfaceTesting/
// ?>




<!--  <div class="container ">	        
			<header class="row">
				<div class="col-xs-12">	
					<h1>Output</h1>	
                </div>
            </header>  
             	
			<section class="row">
				<div class="col-xs-12">						
					<h2 id="introHeader">Upload your CSV File</h2>
					
					<fieldset>
						<input type="file" name="File Upload" id="txtFileUpload" accept=".csv" />
					</fieldset>

				</div>
			</section>
                
            <footer class="row">
                <div class="col-xs-12">	
                	
                </div>
            </footer>
		</div>		 -->
		
<!--   <form action="upload.php" method="post" enctype="multipart/form-data">
<input type="file" name="fileToUpload" id="fileToUpload">
<input type="submit" value="Upload Form" name="submit">
</form>
 -->

  </body>
</html>
