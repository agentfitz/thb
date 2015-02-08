
		<!-- END #content -->
		</div>
        
			
			<script type="text/javascript">
				$(function(){

					$("#tweet_container").click(function(){
						window.open("http://twitter.com/thehealthbits");
					});

				});
			</script>
				
				
    
    </div><!-- END #container -->
    
    <!-- BEGIN #footer-container -->
    <div id="footer-container">
		
    	
			<div id="tweet_wrapper">
				<div id="tweet_container" style="position: relative;">
					<img src="/wp-content/themes/classica/images/tweeting.gif" id="tweeting" width="150" height="35" />
					<p><span id="tweet_text">Treating ourselves right is something we all owe ourselves.</span> &mdash; Cinthia, <a href="http://twitter.com/thehealthbits">@TheHealthBits</a></p>
					<img src="/wp-content/themes/classica/images/tweet_bird.png" id="tweet_bird" />
					<img src="/wp-content/themes/classica/images/tweet_triangle.png" id="tweet_triangle" />
				</div>
			</div>
			
        <!-- BEGIN #footer-widgets -->
    	<div id="footer-widgets">
        	
            <!-- BEGIN .widget-wrap -->
            <div class="widget-wrap clearfix">
						
								<a href="/2012/10/07/pumpkin-spice-body-scrub/"><img src="/wp-content/themes/classica/images/footer_video.jpg" /></a>
            	
                <div id="footer-form-container">
								
									<img src="/wp-content/themes/classica/images/bottom_signup_hdr.png" width="400" height="85" id="footer-form-hdr" />
									<h2>Live healthier with tips and recipes from Cinthia</h2>
										
									<form method="post" action="https://app.icontact.com/icp/signup.php" name="footer_signup_form" id="footer_signup_form" class="sign_up_form" accept-charset="UTF-8">
										<input type="hidden" name="redirect" value="<?php echo get_subscribe_thank_you_url() ?>">
										<input type="hidden" name="errorredirect" value="http://www.icontact.com/www/signup/error.html">
										<input type="text" class="textField clearField fname" value="First name" name="fields_fname" />
										<input type="text" class="textField clearField email" value="Email address" name="fields_email" />
										<input type="submit" class="submit_button" name="signup_submit" value="jump in!" id="top_sign_up" />			
										<input type="hidden" name="listid" value="78754">
										<input type="hidden" name="specialid:78754" value="KMJ3">	
										<input type="hidden" name="clientid" value="261574">
										<input type="hidden" name="formid" value="6210">
										<input type="hidden" name="reallistid" value="1">
										<input type="hidden" name="doubleopt" value="0">
									</form>
								
								</div>
								
								
								<!-- BEGIN .widget-section -->
                <div class="widget-section">
                	
                    <?php /* Widgetised Area */ if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar( 'Footer One' ) ) ?>
                    
                <!-- END .widget-section -->   
                </div>
                
                <!-- BEGIN .widget-section -->
                <div class="widget-section">
                
                	<?php /* Widgetised Area */ if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar( 'Footer Two' ) ) ?>
                    
                <!-- END .widget-section -->   
                </div>
                
                <!-- BEGIN .widget-section -->
                <div class="widget-section">
                
                	<?php /* Widgetised Area */ if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar( 'Footer Three' ) ) ?>
                    
                <!-- END .widget-section -->   
                </div>
                
                <!-- BEGIN .widget-section -->
                <div class="widget-section">
                
                	<?php /* Widgetised Area */ if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar( 'Footer Four' ) ) ?>
                    
                <!-- END .widget-section -->   
                </div>
            
            <!-- END .widget-wrap -->
       		</div>
            
        <!-- END #footer-widgets -->
        </div>
    
        <!-- BEGIN #footer
        <div id="footer" class="clearfix">
        
            <p class="copyright">&copy; Copyright <?php echo date( 'Y' ); ?>. Powered by The Health Bits.</p>
            
            <p class="credit"><?php if (get_option('tz_footer_text')) echo stripslashes(get_option('tz_footer_text')); ?></p>
        
        
        </div>END #footer -->
	

       



    <!-- END #footer-container -->
	</div>

	<div style="width: 960px; margin: 15px auto;">

		<p style="margin: 0; color: #aaa; font-size: 12px; line-height: 16px;">
			Medical and Site Disclaimer: The information on this website is not intended to replace a one-on-one
			relationship with a qualified health care professional and is not intended as medical advice.
			It is intended as a sharing of knowledge and information from the research and experience of
			Cinthia Torres, TheHealthBits.com and Veda Media, LLC. We encourage you to make your own
			health care decisions based upon your research and in partnership with a qualified health care
			professional. All trademarks and copyrights on this page are owned by their respective owners.
			© <?php echo date("Y"); ?> The Health Bits
		</p>

	</div>
		
	<!-- Theme Hook -->
	<?php wp_footer(); ?>
	

	<script type="text/javascript">	
		$(function(){
		
			$(".sign_up_form").submit(function(e){
				
				var $this = $(this),
						$email = $this.find(".email"),
						$fname = $this.find(".fname"),
						errors = [];
			
				if($email.val() === "" || $email.val() === "Email address"){
					errors.push("Whoops! Don't forget your email");
				}
				
				if($fname.val() ==="" || $fname.val() === "First name"){
					errors.push("Whoops! Don't forget your first name");
				}
				
				if(errors.length){
					for(var i = 0; i < errors.length; i++){
						alert(errors[i]);
					}
					e.preventDefault();
				}
			
			});
		
		
			$(".clearField").clearField();
		});
	</script>
	
	<!--
	<script type="text/javascript" async data-pin-height="28" data-pin-hover="true" src="//assets.pinterest.com/js/pinit.js"></script>
	-->

	<script>
		$(function(){
			// $("img").attr("data-pin-no-hover", "true");
			//$ ("#primary img").removeAttr("data-pin-no-hover");


			/*$("a[data-pin-log]").each(function(i, el){

				var top = parseInt($(this).css("top"), 10),
					newTop = top + 30;

				$(this).css("top", newTop + "px");

			});*/

			var pinDesc = $(".pin-desc").text();

			$(".single #primary img:not(.wp-smiley,#signature,.post_feature_img,.avatar)").each(function(){

				var $img = $(this),
					$a = $("<a target='_blank'></a>"),
					uri = "http://www.pinterest.com/pin/create/button/?" +
						  "url=http://thehealthbits.com/2013/12/05/raw-hazelnut-spread/&" + 
						  "media=" + $img.attr("src") + "&" +
						  "description=" + pinDesc;


				$a.attr("href", uri).addClass("pin");

				$img
					.wrap("<div class='img-wrapper' />")
					.after("<div class='pin-overlay' />")
					.parents("p")
					.addClass("img-container")
					.end()
					.before($a);



			});

			/*$(document).on("mouseover mouseout", ".pin", function(e){

				var isMouseover = e.type === "mouseover" ? true : false,
					$a = $(this),
					$img = $a.parents(".img-wrapper").find("img");

				if(isMouseover) {

					$img.addClass("faded");

				}

				else {

					$img.removeClass("faded");

				}

				e.stopPropagation();

			});*/


		});
	</script>


<!--END body-->
</body>
<!--END html-->
</html>