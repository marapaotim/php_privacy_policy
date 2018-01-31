
<?php header('X-Frame-Options: DENY'); ?>
<style type="text/css">
.no-close .ui-dialog-titlebar-close {
  display: none;
}
</style>
<script>
  jQuery("head").append('<link rel="shortcut icon" href="favicon1.ico" type="image/x-icon" />');
</script>
<script type="text/javascript">

if(typeof jQuery == 'undefined')
	document.write('<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.js"></'+'script>');

if(typeof jQuery != 'undefined' && !('ui' in jQuery)) {
	
	document.write('<script type="text/javascript" src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></'+'script>');
	
	jQuery("head").append('<link rel="stylesheet" type="text/css" href="jquery-ui.css">');
	
}

	$(function () {
		
<?php if(isset($_SESSION['agree'])): ?>
		
		$('<script>')
			.text('\
				(function(i,s,o,g,r,a,m){i[\'GoogleAnalyticsObject\']=r;i[r]=i[r]||function(\
				){\
					(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new\
				Date();a=s.createElement(o),\
				m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore\
				(a,m)\
				})(window,document,\'script\',\'//www.google-analytics.com/analytics.js\',\'ga\'\
				);\
					ga(\'create\', \'UA-50933724-1\', \'sanmiguelbrewery.com.ph\');\
					ga(\'send\', \'pageview\');\
			')
			.appendTo('head');
		
<?php else: ?>

		$( "#dialog" ).dialog({
		  dialogClass: "no-close",
		  closeOnEscape: false,
		  autoOpen: false,
		  height: 300,
	      width: 508,
	      modal: true,
		  buttons: [
			{
			  text: "I Agree",
			  click: function() {
				  
				var that = this;
				
				$.getJSON(
					'?agree=1',
					function (data) {
						
						if(data.success) {
							
							$( that ).dialog( "close" );
							
							$('<script>')
								.text('\
									(function(i,s,o,g,r,a,m){i[\'GoogleAnalyticsObject\']=r;i[r]=i[r]||function(\
									){\
										(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new\
									Date();a=s.createElement(o),\
									m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore\
									(a,m)\
									})(window,document,\'script\',\'//www.google-analytics.com/analytics.js\',\'ga\'\
									);\
										ga(\'create\', \'UA-50933724-1\', \'sanmiguelbrewery.com.ph\');\
										ga(\'send\', \'pageview\');\
								')
								.appendTo('head');
						}
					}
				);
			  }
			}
		  ]
		});
		
		$( "#dialog" ).dialog('open');
		
<?php endif; ?>
		
	});
</script>
<div id="header">
  <div id="logo">
    <a href="index.php">
      <img src="images/San Miguel 2.png" border="0" style="margin-left:20px;">
    </a>
  </div>
  <div id="menu">
    <ul class="menu">
      <li>
        <a href="index.php">
          Home
        </a>
      </li>
      
      <li>
        <a href="about-us.php" class="drop">
          Our
          <br />
          Company
        </a>
		<div style="position:relative;">
          <div class="dropdown_submenu">
			<ul>
				<li> 
					<a href="about-us.php">
					  Company Profile
					</a> 
				</li>
				<li> 
					<a href="plants-and-facilities.php">
					  Plants &amp; Facilities
					</a>
				</li>
				<li> 
					<a href="board-of-directors.php">
					  Board of Directors &amp; Operations Committees
					</a>
				</li>
				<li> 
					<a href="mission-vision.php">
					   Mission &amp; Vision
					</a>
				</li>
				
                <li> 
					<a href="corporate structure.php">
					  Corporate Structure
					</a>
				</li>
				<li> 
					<a href="awards-and-citations.php">
					  Awards &amp; Citations
					</a>
				</li>
								
			</ul>
		  </div>
		</div>
      </li>
      
      <li>
        <a href="csr.php" class="drop">
          Corporate
          <br />
          Citizenship
        </a>
		<div style="position:relative;">
          <div class="dropdown_submenu">
			<ul>
				<li> 
					<a href="csr.php">
						Corporate Social Responsibility
					</a>
				</li>
				<li> 
					<a href="corporate-governance.php">
						Corporate Governance
					</a>
				</li>
				<li> 
					<a href="policy.php">
						Policy
					</a>
				</li>
			</ul>
		  </div>
		</div>
      </li>
      <li>
        <a href="investors.php" class="drop">
          Investors
        </a>
		<div style="position:relative;">
          <div class="dropdown_submenu">
			<ul>
				<li> 
					<a href="financial-highlights.php">
						Financial Highlights
					</a>
				</li>
								
				<li> 
					<a href="disclosures.php">
					  Disclosures
					</a>
				</li>
				<li> 
					<a href="financial-reports.php">
					  Financial Reports
					</a>
				</li>
				<li> 
					<a href="investor-inquiries.php">
					  Inquiries
					</a>
				</li>
			</ul>
		  </div>
		</div>
      </li>
      
      <li>
        <a href="our-brands.php">
          Our Brands
        </a>
      </li>
      <li>
        <a href="news.php" class="drop">
          News
        </a>
		<div style="position:relative;">
          <div class="dropdown_submenu">
			<ul>
				<li> 
					<a href="news.php">
						News
					</a>
				</li>
				<li> 
					<a href="news-archive.php">
						Archive
					</a>
				</li>
                <li> 
					<a href="beermen.php">
					  San Miguel Beermen
					</a>
				</li>
			</ul>
		  </div>
		</div>
      </li>
      <li>
        <a href="contact-us.php" class="drop">
          Contact Us
        </a>
		<div style="position:relative;">
          <div class="dropdown_submenu">
			<ul>
				<li> 
					<a href="customer-feedback.php">
						Customer Feedback
					</a>
				</li>
				<li> 
					<a href="business.php">
						Business Opportunities
					</a>
				</li>
				<li> 
					<a href="contact-us.php">
						Breweries
					</a>
				</li>
				<li> 
					<a href="careers.php">
						Careers
					</a>
				</li>
				<li> 
					<a href="dpo.php">
						Data Protection Officer
					</a>
				</li>
			</ul>
		  </div>
		</div>
      </li>
    </ul>
  </div>
  <div style="clear:both; width:0px; height:0px;">
  </div>
</div>