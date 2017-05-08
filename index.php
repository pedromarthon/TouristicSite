<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>gotour</title>
		
		<link rel="stylesheet" type="text/css" href="css/style.css" />
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
		<link rel="stylesheet" type="text/css" href="css/colorbox.css" />
		
		<link rel="stylesheet" type="text/css" href="css/mystyle.css" />
		
		
		<script type="text/javascript" src="jQuery/jquery.js"></script>
		<script type="text/javascript" src="jQuery/bootstrap.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script>
            $(document).ready(function(){
                // Add smooth scrolling to all links
                $("a").on('click', function(event) {

                    // Make sure this.hash has a value before overriding default behavior
                    if (this.hash !== "") {
                        // Prevent default anchor click behavior
                        event.preventDefault();

                        // Store hash
                        var hash = this.hash;
                        
                        // Using jQuery's animate() method to add smooth page scroll
                        // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
                        $('html, body').animate({
                            scrollTop: $(hash).offset().top
                        }, 800, function(){
   
                            // Add hash (#) to URL when done scrolling (default click behavior)
                            window.location.hash = hash;
                        });
                    } // End if
                });
            });
        </script>
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		
	</head>
	<style>
		body{
		background-image: url("images/background.jpg");
		background-attachment: fixed;
		background-size:100% 100%
		}
        .f_backtotop{
            position:fixed;
            left:0;bottom:0;
            z-index:3;width:100%;
            height:0;box-sizing:border-box
        }
        .f_backtotop span{position:relative;max-width:1920px;margin:0 auto;display:block}
        .f_backtotop a{position:absolute;right:30px;bottom:6px;width:48px;height:48px;font-family:'sssM';font-size:14px;-text-align:center;text-transform:uppercase;text-indent:-999em;line-height:35px;background:url('images/1.jpg');background-size:100% 100%;overflow:hidden;transform:rotate(180deg) translateZ(1px);-webkit-transform:rotate(180deg) translateZ(1px);-moz-transform:rotate(180deg) translateZ(1px);-o-transform:rotate(180deg) translateZ(1px);-ms-transform:rotate(180deg);transition:all .45s cubic-bezier(0.175,0.885,0.320,1.275);-webkit-transition:all .45s cubic-bezier(0.175,0.885,0.320,1);-webkit-transition:all .45s cubic-bezier(0.175,0.885,0.320,1.275);-moz-transition:all .45s cubic-bezier(0.175,0.885,0.320,1.275);-o-transition:all .45s cubic-bezier(0.175,0.885,0.320,1.275)}
        .ie8 .f_backtotop a{display:none !important}
        .ie10 .f_backtotop a{transition:none}
        .f_backtotop a.hide,.ie8 .f_backtotop a,.ie8 .f_backtotop a.rotate.hide{opacity:0}
        .f_backtotop a.rotate{transform:rotate(360deg) translateZ(1px);-webkit-transform:rotate(360deg) translateZ(1px);-moz-transform:rotate(360deg) translateZ(1px);-o-transform:rotate(360deg) translateZ(1px);-ms-transform:rotate(360deg)}
        .s2 .f_backtotop a{bottom:2px}.s1 .f_backtotop a{right:13px;bottom:10px;width:36px;height:36px}
	</style>
	<body >
		<script>
			$(window).scroll(function() {
				var height = $(window).scrollTop();
				document.getElementById("searcher").placeholder = height;
				if(height  < 589 ){
					document.getElementById("cat-nav").className = "navbar navbar-default changecolor";
					document.getElementById("cat-nav").style = "";
					document.getElementById("aboutid").style = "margin:auto;";
					
				}
				else if(height  < 2468 ){
					document.getElementById("cat-nav").className = "navbar navbar-default navbar-fixed-top changecolor";
					document.getElementById("cat-nav").style = "top:52px;";
					document.getElementById("aboutid").style = "padding-top: 72px; margin:auto;";
				}
				else {
					document.getElementById("cat-nav").className = "navbar navbar-default changecolor";
					document.getElementById("cat-nav").style = "";
					document.getElementById("aboutid").style = "margin:auto;";
				}
			});
			function scrollWin() {
				var height = $(window).scrollTop();
				
				window.scrollBy(0, 2468-height);
				getElementById("openabout").visibility = visible;
			}
		</script> 
		<br>
		<div>
			<div>
				<?php require_once("menu.php")?>
			</div>
			<div class="f_backtotop">
			    <span>
			        <a href="http://www.samsung.com/sg/smartphones/galaxy-s8/security/#contents" tabindex="-1" data-omni=":backtotop" data-omni-type="microsite" class="">
			         <span>
			             Back to
			         </span> 
			         top of page
			        </a>
			     </span>
			 </div>
        </div>
			<div id="slideshowid" style="">
							<?php require_once("newslider.php")?>
			</div>
			<table class="container">
				
				<tr>
					<td></td>
					<td>
						<div id="categoryid">
							<?php require_once("category.php")?>
						</div>
					</td>
					<td></td>
				</tr>
			   
			  <tr>
				<td></td>
				<td>
					<div class="container text-center">    
						<h3>ads!</h3><br>
						<div class="row">
							<div class="col-sm-4">
								<img src="images/1.jpg" class="img-responsive" style="width:100%" alt="Image">
								<p>Current Project</p>
							</div>
							<div class="col-sm-4"> 
								<img src="images/1.jpg" class="img-responsive" style="width:100%" alt="Image">
								<p>Project 2</p>    
							</div>
							<div class="col-sm-4">
							<div class="well">
								<p>Some text..</p>
						    </div>
							<div class="well">
								<p>Some text..</p>
							</div>
							</div>
					    </div>
                    </div>
				</td>
				<td></td>
			  </tr>
			  <br><br><br><br>
				
				<tr>
					<td>AD HOLDER</td>
					<td>
						<div id="aboutid" style="margin:auto;">
							<?php require_once("about.php")?>
						</div>
					</td>
					<td>AD HOLDER</td>
				</tr>
			</table>
				
			
			
		</div><br><br>
           <div id="contactus" >
				<?php require_once("contactus.php")?>
			</div>
			
<footer class="container-fluid text-center" style="background-color:white">
  <p>site design / logo © 2017 Stack Exchange Inc; user contributions licensed under cc by-sa 3.0 with attribution required
rev 2017.4.21.25730</p>
</footer>

	</body>
</html>
