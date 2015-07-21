<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Greek Beaches</title>

    <!-- Bootstrap -->
    <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="css/bootstrap.css">
        <!--<link rel="stylesheet" href="css/normalize.css">-->
        <link rel="stylesheet" href="css/mycss.css">
        
        <!-- Optional theme -->
        <link rel="stylesheet" href="css/bootstrap-theme.css">

       
        <!-- Optional jQuery UI theme -->
        <link rel="stylesheet" href="css/jquery-ui.min.css">
  
        <script src="js/jquery-1.11.3.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
  
        <!-- Minified jQuery  minified libs-->
        <script src="js/jquery-ui.min.js"></script>  

	<link rel="stylesheet" href="css/mycss.css">
        

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

<!--
    <script type="text/javascript">
 
	$(document).ready(function(){
	 $("#msgid").html("This is Hello World by JQuery");
	});
	 
    </script> -->
    
    
<script type="text/javascript">

var lan="GR";
  function submitSearchForm() {
 
	alert('Button clicked2.');

/**/
alert('Button clicked3.');
 
  }

jQuery(document).ready(function(){
	$("#LangSelector").click(function() {
	//alert("Language: " + $("#myInput").val());
	//$("#myInput span").text("My NEW Text");

	var lan= $("#LangSelector").html();
	//alert("lan:"+lan);
	/**/
	
	if (lan=="GR"){
		//alert('Switching language to english');
		lan="EN";
		//set to html element
		//$("#myInput").val(lan);
		$("#LangSelector").html(lan);

		$("#text1").html("Γεια σου απο την ελληνικη μεταφραση");
		
	}

	else if (lan=="EN"){
		//alert('Switching language to Greek');
		lan="GR";
		//set to html element
		//$("#myInput").val(lan);
		$("#LangSelector").html(lan);
		$("#text1").html("Ice cream tart powder jelly-o.Gummies chocolate cake ice cream cookie halvah tiramisu jelly-o.");
	}
	
        //alert('Button clicked.');
	//alert('Button clicked4.');
	//return false;   //xwris tin entoli auti ginetai epanafora twn keimenwn tou koumpiou epeidi einai mesa sti forma

    });
});

</script>


</head>
<body>
<div class="big_wrapper">   
<div class="container">  
	<div class="row">
                <div class="col-md-2 col-centered text-center logo-top">
                <img src="images/logo_beaches.png" alt="Προβολή ελληνικών παραλιών"  width="80" height="80"/>
                </div>
        </div>  
</div>
<!--menu-->
<div class="container">
	<div class="row">
                <div class="col-xs-12">
		 	<nav class="navbar navbar-inverse custom-nav">
			  <div class="container-fluid">
			    <!----><div class="navbar-header">
			      <a class="navbar-brand" href="index.html" id="link1">Home</a>
			    </div>
			    <div>
			      <ul class="nav navbar-nav">
				<!--<li class="active"><a href="index.html" id="link2">Home</a></li>-->
				<li><a href="profile.php" id="link3">Profile</a></li>
				<li><a href="gallery.php" id="link4">Gallery</a></li> 
				<li><a href="services.php" id="link5">Services</a></li> 
				<li><a href="contact.php" id="link6">Contact Us</a></li> 
 				<?php
					$role=$_SESSION["role"];
					
					if ($role!="guest"){
					
					echo "";
					
					}
					else{
					echo "<li><a href=\"register.php\" id=\"link7\">Register</a></li> ";
					}

					if ($role=="admin"){
					echo "<li><a href=\"admin.php\" id=\"link8\">Admin Area</a></li> ";
					
					}
					else{
					echo "";
					}
				    ?>
				
			      </ul>
			    </div>
				<form class="navbar-form navbar-left custom-form" method="post" <?php
					$role=$_SESSION["role"];
					if ($role!="guest"){
					echo "action=\"logout.php\"";
					}
					else{
					echo "action=\"checklogin.php\"";
					}

					?>
					>
				    <div class="form-group">
				      <input type="text" name="myusername" placeholder="E-mail" class="form-control" id="email">
				    </div>
				    <div class="form-group">
				      <input type="password" name="mypassword" placeholder="Password" class="form-control" id="password">
				    </div>

				    <?php
					$role=$_SESSION["role"];

					if ($role!="guest"){
					//echo 'alert("message successfully sent")';
					echo "<button type=\"submit\" class=\"btn btn-default\" id=\"logout\">Logout</button>";
					//echo "<a class=\"btn btn-default\" id=\"logout\" role=\"button\">";
					}
					else{
					echo "<button class=\"btn btn-default\" id=\"login\">Login</button>";
					//<a class="btn btn-default beach_details_btn" href="beach-details.html" role="button">
					}

				    ?>
				    <!--<input type="text" id="myInput" value="EN"> btn btn-info -->
				  </form>	
				<button class="btn navbar-btn my-btn" id="LangSelector">GR</button>
			  </div>
				
			</nav>	
			 
				
			 
		</div>
	</div>
</div>
<div class="container">
	<div class="row">
                <div class="col-xs-12">
   		<div id="myCarousel" class="carousel slide " data-ride="carousel">
		  <!-- Indicators -->
		  <ol class="carousel-indicators">
		    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		    <li data-target="#myCarousel" data-slide-to="1"></li>
		    <li data-target="#myCarousel" data-slide-to="2"></li>
		    <li data-target="#myCarousel" data-slide-to="3"></li>
		  </ol>

		  <!-- Wrapper for slides -->
		  <div class="carousel-inner" role="listbox">
		    <div class="item active">
		      <img class="img-responsive center-block" src="images/bruxelles.jpg" alt="Chania">
		    </div>

		    <div class="item">
		      <img class="img-responsive center-block" src="images/london.jpg" alt="Chania">
		    </div>

		    <div class="item">
		      <img class="img-responsive center-block" src="images/collosseum.jpg" alt="Flower">
		    </div>

		    <div class="item">
		      <img class="img-responsive center-block" src="images/paris.jpg" alt="Flower">
		    </div>
		  </div>

		  <!-- Left and right controls -->
		  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
		    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
		    <span class="sr-only">Previous</span>
		  </a>
		  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
		    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
		    <span class="sr-only">Next</span>
		  </a>
		</div>

		</div> <!--end of class col--> 
	</div> <!--end of row-->    
</div>   <!--end of container-->   
<!--main area-->

     <div class="container">
  
            <div class="row">
  		<div class="col-sm-4">

			.col-sm-4
			<div class="blog">
			    <section class="post">
				<h2 class="post-title">Blog Post Title</h2>
				<p class="post-excerpt" id="text1">Ice cream tart powder jelly-o. 
				Gummies chocolate cake ice cream cookie halvah tiramisu jelly-o.</p>
				<div data-translate="hello">Hello there, how are you?</div>
				<div id="msgid1">Hello there, how are you?</div>
				<div id="msgid2">Hello there, how are you?</div>
			    </section>
			</div>
	       </div>
	       <div class="col-sm-8">
			.col-sm-8
			<div class="blog">
			    <section class="post">
				<h2 class="post-title">Blog Post Title</h2>
				<p class="post-excerpt">Ice cream tart powder jelly-o. 
				Gummies chocolate cake ice cream cookie halvah tiramisu jelly-o.</p>
			    </section>
			</div>

	       </div>
	    </div>
  
    </div>

     <div class="container">
  
            <div class="row footer">
                <div class="col-xs-4">
                    <ul class="nav navbar-nav">
				<li class="active">
					<a href="http://getbootstrap.com/" target="_blank">
						<img class="img-responsive center-block" src="images/logos/logoBootstrap.png" alt="Bootstrap">
					</a>
				</li>
				<li class="active">
					<a href="https://ellak.gr/" target="_blank">
						<img class="img-responsive center-block" src="images/logos/logoEllak.png" alt="Bootstrap"></a>

				</li>
				<li class="active">
					<a href="https://ma.ellak.gr/" target="_blank">
						<img class="img-responsive center-block" src="images/logos/logoMonadesAristeias.png" alt="Bootstrap">
					</a>
				</li>

				<li class="active">
					<a href="http://www.uoc.gr/" target="_blank">
						<img class="img-responsive center-block" src="images/logos/logoPK.png" alt="Bootstrap">
					</a>
				</li>
	 	    </ul>
                </div>
                <div class="col-xs-4">
                    <p>Κατασκευή ιστοσελίδας <a href="http://myapos.oncrete.gr" target="_blank">Αποστολάκης Μύρων</a></p>
                </div>
                <div class="col-xs-4">
                    <p>&COPY; Μονάδες Αριστείας Π.Κ. - <a href="https://ma.ellak.gr/edu/course/view.php?id=49" target="_blank">2ο Σχολείο Κώδικα</a></p>
                </div>
            </div>      
  
    </div>        
</div> <!--end of big_wrapper-->     
        
    </body>
</html>
