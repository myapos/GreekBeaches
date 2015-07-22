<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title id="title">Greek Beaches</title>

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

		var title_greek="Ελληνικές παραλίες";
		var intro_title_greek="Πίνακας ελέγχου!";


		var intro_text_greek="Παρακαλώ επιλέξτε αρχείο εικόνας για μεταφόρτωση";

		var footerdevelopment_text_greek="Κατασκευή ιστοσελίδας <a href=\"http://myapos.oncrete.gr\" target=\"_blank\">Αποστολάκης "
						+" Μύρων</a>";
		var footercodeschool_text_greek="&COPY; Μονάδες Αριστείας Λογισμικού - <a href=\"https:\/\/ma.ellak.gr/edu/course/view.php"
						+"?id=49\" target=\"_blank\">2ο Σχολείο Κώδικα</a>";

		var password_text_greek="Συνθηματικό";
		var email_text_greek="Ηλ.Διεύθυνση";
		var login_text_greek="Είσοδος";
		var link1_text_greek="Αρχική";
		//var link2_text_greek="Αρχική";
		var link3_text_greek="Προφίλ";
		var link4_text_greek="Φωτογραφίες";
		var link5_text_greek="Υπηρεσίες";
		var link6_text_greek="Επικοινωνία";
		var link7_text_greek="Εγγραφή";
		var link8_text_greek="Διαχείριση";
		var select_img_txt_greek="Επιλέξτε εικόνα για μεταφόρτωση:";		
		var lat_txt_greek="γεωγραφικό πλάτος:";	
		var longit_txt_greek="γεωγραφικό μήκος:";
		var desc_txt_greek="Περιγραφή:";	
		var rating_txt_greek="Αξιολόγηση:";
		var category_txt_greek="Κατηγορία:";
		var submit_txt_greek="Υποβολή";		
		
		$("#title").html(title_greek);
		$("#password").attr("placeholder", password_text_greek);
		$("#email").attr("placeholder", email_text_greek);
		$("#login").html(login_text_greek);
		$("#introtitle").html(intro_title_greek);
		$("#introtext").html(intro_text_greek);
		$("#footerdevelopment").html(footerdevelopment_text_greek);
		$("#footercodeschool").html(footercodeschool_text_greek);

		$("#link1").html(link1_text_greek);
		//$("#link2").html(link2_text_greek);
		$("#link3").html(link3_text_greek);
		$("#link4").html(link4_text_greek);
		$("#link5").html(link5_text_greek);
		$("#link6").html(link6_text_greek);
		$("#link7").html(link7_text_greek);
		$("#link8").html(link8_text_greek);
		/**/	
		$("#select_img_txt").html(select_img_txt_greek);
		$("#lat_txt").html(lat_txt_greek);
		$("#longit_txt").html(longit_txt_greek);
		$("#desc_txt").html(desc_txt_greek);
		$("#rating_txt").html(rating_txt_greek);
		$("#category_txt").html(category_txt_greek);
		$("#upload_img").html(submit_txt_greek);
		
	}

	else if (lan=="EN"){
		//alert('Switching language to Greek');
		lan="GR";
		//set to html element
		//$("#myInput").val(lan);
		$("#LangSelector").html(lan);
		var title_english="Greek Beaches";
		var intro_title_english="Administration Panel!";
		var intro_text_english="Please select your image file to upload to database ";

		var footerdevelopment_text_english="Website development <a href=\"http://myapos.oncrete.gr\" target=\"_blank\">Apostolakis"
						    +" Myron</a>";
		var footercodeschool_text_english="&COPY; Monades Aristeias Logismikou - <a href=\"https:\/\/ma.ellak.gr/edu/course/view.php"
						+"?id=49\" target=\"_blank\">2nd Code School</a>";

		var password_text_english="Password";
		var email_text_english="Email";
		var login_text_english="Login";
		var link1_text_english="Home";
		//var link2_text_english="Home";
		var link3_text_english="Profile";
		var link4_text_english="Gallery";
		var link5_text_english="Services";
		var link6_text_english="Contact Us";
		var link7_text_english="Register";
		var link8_text_english="Admin area";
		var select_img_txt_english="Select image to upload:";	
		var lat_txt_english="latitude:";	
		var longit_txt_english="longitude:";	
		var desc_txt_english="Description:";	
		var rating_txt_english="Rating:";
		var category_txt_english="Category:";
		var submit_txt_english="Submit";		
		
		$("#title").html(title_english);
		$("#password").attr("placeholder", password_text_english);
		$("#email").attr("placeholder", email_text_english);
		$("#login").html(login_text_english);
		$("#introtitle").html(intro_title_english);
		$("#introtext").html(intro_text_english);
		$("#footerdevelopment").html(footerdevelopment_text_english);
		$("#footercodeschool").html(footercodeschool_text_english);
		$("#link1").html(link1_text_english);
		//$("#link2").html(link2_text_english);
		$("#link3").html(link3_text_english);
		$("#link4").html(link4_text_english);
		$("#link5").html(link5_text_english);
		$("#link6").html(link6_text_english);
		$("#link7").html(link7_text_english);
		$("#link8").html(link8_text_english);
		/**/
		$("#select_img_txt").html(select_img_txt_english);
		$("#lat_txt").html(lat_txt_english);
		$("#longit_txt").html(longit_txt_english);
		$("#desc_txt").html(desc_txt_english);
		$("#rating_txt").html(rating_txt_english);
		$("#category_txt").html(category_txt_english);
		$("#upload_img").html(submit_txt_english);	
		
		

	}
	
        //alert('Button clicked.');
	//alert('Button clicked4.');

    });
/*    
$("#upload_img").click(function () {
    //alert("Hey!!");
	 callUploadManagerScript();
		//upload_manager.php
});
*/

});
/*
function callUploadManagerScript() {
	  
    //call php script to locate nearest beach with ajax
	 $.ajax({
      url: "upload_manager.php"
    }).done(function(data) {
      console.log(data);
      
   });
  
}*/ 
</script>


</head>
<body>
<div class="big_wrapper">   
<div class="container">  
	<div class="row">
                <div class="col-md-2 col-centered text-center logo-top">
                <a href="home.php"><img src="images/logo_beaches.png" alt="Προβολή ελληνικών παραλιών"  width="80" height="80"/></a>
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
			      <a class="navbar-brand" href="index.php" id="link1">Home</a>
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
				  </ol>

		  <!-- Wrapper for slides -->
		  <div class="carousel-inner" role="listbox">
			    <div class="item active">
			      <img class="img-responsive center-block" src="images/carousel/Bali.jpg" alt="Bali">
			    </div>

			    <div class="item">
			      <img class="img-responsive center-block" src="images/carousel/Matala.jpg" alt="Matala">
			    </div>

			    <div class="item">
			      <img class="img-responsive center-block" src="images/carousel/Marathi.jpg" alt="Marathi">
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
		

		</div> <!--end of class col--> 
	</div> <!--end of row-->    
</div>   <!--end of container-->   
<!--main area-->
<?php
$role=$_SESSION["role"];
echo "Welcome, ".$role." ".$_SESSION["myusername"];
//session_write_close (); 
?>
     <div class="container">
  
            <div class="row">
	       <div class="col-sm-3">
	       </div>
  		<div class="col-sm-6">
			<div class="blog">
			    <section class="post">
				<h2 class="post-title" id="introtitle">Administration Panel</h2>
				<p class="post-excerpt" id="introtext">Please select your image file to upload to database </p>
				<form role="form" method="post" action="upload_manager.php" enctype="multipart/form-data">
				   <div class="form-group">
				    <label for="image"><span id="select_img_txt">Select image to upload:</span></label>
				    <input type="file" id="image" name="image">
				   </div>  
				  <div class="form-group">
				    <label for="latitude"><span id="lat_txt">latitude:</span></label>
				    <input type="text" class="form-control" id="latitude" name="latitude">
				  </div>
				  <div class="form-group">
				    <label for="longitude"><span id="longit_txt">longitude:</span></label>
				    <input type="text" class="form-control" id="longitude" name="longitude">
				  </div>
				  <div class="form-group">
				    <label for="description"><span id="desc_txt">Description:</span></label>
				    <textarea class="form-control" rows="5" id="description" name="description"></textarea>
				  </div>
				  <div class="form-group">
				    <label for="rating"><span id="rating_txt">Rating:</span></label>
				    <!--<textarea class="form-control" rows="5" id="rating" name="rating"></textarea>-->
				   <select class="form-control" id="rating" name="rating">
   				 <option value="" disabled="disabled" selected="selected">Please select rating</option>
    				 <option value="1">One</option>
    				 <option value="2">Two</option>
    				 <option value="3">Three</option>
    				 <option value="4">Four</option>
    				 <option value="5">Five</option>
    				 <option value="6">Six</option>
    				 <option value="7">Seven</option>
    				 <option value="8">Eight</option>
    				 <option value="9">Nine</option>
    				 <option value="10">Ten</option>    				 						
					</select>
				  </div>
				  <div class="form-group">
				    <label for="category"><span id="category_txt">Category:</span></label>
				    <!--<textarea class="form-control" rows="5" id="rating" name="rating"></textarea>-->
				   <select class="form-control" id="category" name="category">
   				 <option value="" disabled="disabled" selected="selected">Please select category</option>
    				 <option value="Swimming">Swimming</option>
    				 <option value="Sea sports">Sea sport</option>
    				 <option value="Fishing">Fishing</option>
    				 <option value="Sand">Sand</option>
    				 <option value="Rock Beach">Rock Beach</option>		
					</select>
				  </div>
				  
				  <button type="submit" id="upload_img" class="btn btn-default">Submit</button> 
				  <!-- <input type="submit" id="upload_img" value="Upload Image" name="submit"> action="upload_manager.php"-->
				</form>
			    </section>
			</div>
	       </div>
	       <div class="col-sm-3">
	       </div>
	       <!--
	       <div class="col-sm-8">
			<div class="blog">
			    <section class="post">
				<h2 class="post-title">Blog Post Title</h2>
				<p class="post-excerpt">Ice cream tart powder jelly-o. 
				Gummies chocolate cake ice cream cookie halvah tiramisu jelly-o.</p>
			    </section>
			</div>

	       </div>-->
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
                    <p id="footerdevelopment">Website development <a href="http://myapos.oncrete.gr" target="_blank">Apostolakis Myron</a></p>
                </div>
                <div class="col-xs-4">
                    <p id="footercodeschool">&COPY; Monades Aristeias Logismikou - <a href="https://ma.ellak.gr/edu/course/view.php?id=49" target="_blank">2nd Code School</a></p>
                </div>
            </div>      
  
    </div>        
</div> <!--end of big_wrapper-->     
        
    </body>
</html>
