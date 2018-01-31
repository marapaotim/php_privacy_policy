<div id="footer">
    <div class="totop"> 
        <div class="gototop"> 
          <div class="arrowgototop"></div> 
        </div> 
    </div>

    <div class="fshadow"></div> <?php /*
        <div id="footerinside"> 
            <div class="footer_widget"> 
            <!-- footer 1 column --> 
              <div class="footer_widget1"> 
                    <div class="widget widget_text"> 
                      <h3>About San Miguel Brewery</h3> 
                      <div class="textwidget"> 
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500.
                      </div> 
                    </div> 
                    <!-- footer social icons --> 
                    <div class="socialfooter"> 
                      <h3>Socialize with us</h3> 
                      <div class="socialcategory"> 
                            <a target="_blank" class="facebooklink top" href="https://www.facebook.com/PremiumCoding" title="Facebook"></a>
                            <a target="_blank" class="dribble top" href="http://dribbble.com/gljivec" title="Dribble"></a>
                            <a target="_blank" class="twitterlink top" href="https://twitter.com/premiumcoding" title="Twitter"></a>
                            <a target="_blank" class="emaillink top" href="mailto:info@premiumcoding.com" title="Send us Email"></a>
                            <a target="_blank" class="vimeo top" href="http://www.digg.com" title="Vimeo"></a>
                      </div>
                    </div>
              </div>

            <!-- footer 2 column -->
              <div class="footer_widget2">
                      <div class="widget widget_tag_cloud"> 
                            <h3>Tags</h3> 
                            <div class="tagcloud"> 
                              <a href='#' >Audio</a>  
                              <a href='#' >book</a>  
                              <a href='#'>business</a>  
                              <a href='#'>business cards</a>  
                              <a href='#'>Cards</a>  
                              <a href='#'>concert</a>  
                              <a href='#'>dance</a>   
                              <a href='#'>gallery</a>  
                              <a href='#'>guitar</a>  
                              <a href='#'>images</a>    
                            </div> 
                      </div> 
              </div>

            <!-- footer 3 column --> 
              <div class="footer_widget3"> 
                      <div class="widget widget_categories"> 
                            <h3>Our categories</h3> 
                            <ul>
                              <li class="cat-item cat-item-2"><a href="#" title="View all posts filed under Blogroll">Blogroll</a></li>
                              <li class="cat-item cat-item-3"><a href="#" title="View all posts filed under Company News">Company News</a></li>
                              <li class="cat-item cat-item-4"><a href="#" title="Our featured items">Featured</a></li>
                              <li class="cat-item cat-item-5"><a href="#" title="Check the latest news about our company and don't miss anything from our Blog.">News</a></li>
                              <li class="cat-item cat-item-6"><a href="#" title="Just a test category about Photography.">Photography</a></li>
                              <li class="cat-item cat-item-7"><a href="#" title="View all posts filed under Sculptures">Sculptures</a></li>
                            </ul>
                      </div>
              </div>

            <!-- footer 4 column -->
              <div class="footer_widget4 last">
                <div class="widget recent_posts">
                      <h3>Recent Posts</h3>
                      <!--racent posts -->
                      <div class="widgett">
                        <div class="imgholder">
                              <a href="#" rel="bookmark" title="Permanent Link to Music Event with DJ starting at 20.00">
                                  <img width="85" height="55" src="<?=base_url()?>assets/images/site/placeholder/placeholder-85x55.gif" class="attachment-widget wp-post-image" alt="music-event">
                              </a>
                        </div>
                        <div class="wttitle">
                              <h4><a href="#" rel="bookmark" title="Permanent Link to Music Event with DJ starting at 20.00">Music Event with DJ starting at 20.00</a></h4>
                        </div>
                        <div class="details2">
                              <a href="#" title="Comment on Music Event with DJ starting at 20.00">3 Replies</a>
                        </div>
                      </div>

                      <div class="widgett">
                        <div class="imgholder">
                              <a href="#" rel="bookmark" title="Permanent Link to Welcome to our Guitar Concert">
                                      <img width="85" height="55" src="<?=base_url()?>assets/images/site/placeholder/placeholder-85x55.gif" class="attachment-widget wp-post-image" alt="Guitar-rock">
                              </a>
                        </div>
                        <div class="wttitle">
                              <h4><a href="http://www.redhorsebeer.com/welcome-to-our-guitar-concert/" rel="bookmark" title="Permanent Link to Welcome to our Guitar Concert">Welcome to our Guitar Concert</a></h4>
                        </div>
                        <div class="details2">
                              <a href="#" title="Comment on Welcome to our Guitar Concert">No Replies</a>
                        </div>
                      </div>

                      <div class="widgett"> 
                        <div class="imgholder"> 
                              <a href="#" rel="bookmark" title="Permanent Link to This is audio post">
                                      <img width="85" height="55" src="<?=base_url()?>assets/images/site/placeholder/placeholder-85x55.gif" class="attachment-widget wp-post-image" alt="young-artist">
                              </a>
                        </div>
                        <div class="wttitle">
                              <h4><a href="#" rel="bookmark" title="Permanent Link to This is audio post">This is audio post</a></h4>
                        </div>
                        <div class="details2">
                              <a href="#" title="Comment on This is audio post">No Replies</a>
                        </div>
                      </div>
                </div> 
            </div> 
            <!-- end  footer 4 column -->

            </div>
            <!--- class="footer_widget" --->
	</div> */ ?>

    <div id="footerbwrap"> 
      <div id="footerb">
        <div class="footernav menu-footer-container">
		<!-- foter menu 
          <ul id="menu-footer" class="footernav">
            <li><a href="<?=base_url()?>">Home</a></li>
            <li><a href="#">News</a></li>
            <li><a href="#">About Us</a></li>
          </ul>-->
        </div> 
        <!-- copyright" -->
        <div class="copyright">
           &#169; <?=date('Y');?> Red Horse Beer
        </div>
      </div>
    </div>

  </div>
  
<?php if(!isset($_SESSION['agree'])): ?>
	<!-- POP-UP START -->
	
	<div id="srn-modal" class="modal">

	  <!-- Modal content -->
	  <div class="modal-content"> 
		<h2>Important Notice</h2>
		<p>This Website uses cookies, web beacons, and other similar technologies to collect information about your device, browsing actions and patterns, and improve your experience when you visit. By continuing to browse our Website, you agree our use of these information in accordance with our Privacy Policy.</p>
		<button id="srn-agree">I Agree</button> 
	  </div>

	</div>
	
	
	<style type="text/css">
	html,body{
		overflow:hidden;
	}
	#srn-modal.modal {
		/*display: none;  */
		position: absolute;  
		z-index: 9999;  
		/*padding: 100px 300px 0px 300px; */
		left: 0;
		top: 0px;
		width: 100%; 
		height: 100%; 
		overflow: auto; 
		background-color: rgb(0,0,0); 
		background-color: rgba(0,0,0,0.4);  
	}
	 
	#srn-modal .modal-content {
		    background-color: #fefefe;
			padding: 20px;
			border: 1px solid #888;
			width: 80%;
			text-align: center;
			margin: 0px auto;
			margin-top: 100px;
	}
	 
	#srn-modal .close {
		color: #aaaaaa;
		float: right;
		font-size: 28px;
		font-weight: bold;
	}

	#srn-modal .close:hover,
	#srn-modal .close:focus {
		color: #000;
		text-decoration: none;
		cursor: pointer;
	} 

	#srn-modal .modal-content h2{
	  background-color: #cccccc;
		color: white;
		padding: 20px;
		margin-top: 0;
		border:1px solid #000;
		color:#000;
	}
	</style>

	<!-- POP-UP END -->
<?php endif; ?>
