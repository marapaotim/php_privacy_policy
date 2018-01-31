
<?php
$meta_keywords_general = "Pinoy Rock, rock n roll, all the names of the RHB and Tanduay Bands, Mixed martial arts, PXC, URCC, redhorse, beer, horse, red, muziklaban, promos, fanpage, moshpit, milyun-milyong, delivery, smb, history, retrace, rakista.com, watch, ambassadors, panalo, events, gallery, bands, music, articles, gig, muziklaban.tv, promo, article, backstage, champions, videos, news, horse beer, red horse, panalo promo, fanpage, beer sites, delivery muziklaban , retrace smb , beer ambassadors , beer bands , red horse beer , smb delivery muziklaban , sites red horse";
switch ($this->uri->segment(1)):
    default:
        $meta_keywords = $meta_keywords_general;
        break;
    case 'muziklaban':
        $meta_keywords = $meta_keywords_general;
        break;
    case 'brandevangelist':
        $meta_keywords = $meta_keywords_general;
        break;
    case 'promo':
        $meta_keywords = $meta_keywords_general;
        break;
    case 'tvc':
        $meta_keywords = $meta_keywords_general;
        break;
    case 'rhb':
        $meta_keywords = $meta_keywords_general;
        break;
endswitch;
?>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title><?=$headtitle?> | Red Horse Beer</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<meta name="keywords" content="<?=$meta_keywords?>"/>
<meta name="description" content="<?php if (isset($og['desc'])) { echo $og['desc']; } else { ?>Red Horse Beer is your extra strong beer that brings you that pure alcoholic experience. It is not your ordinary beer - rebellious and flavorful yet bold and intense. It is sweet and bitter smooth, giving you a fueled kick. Excite yourself with this deeply hued distinct tasting beer.<?php } ?>"/>
<meta property="fb:pages" content="106796147484,150963188250458" />

<?php if($this->uri->segment(2) == 'bands_profile'){?>
    <meta property="og:title" content="<?=$email_data->band_name;?>" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="<?=base_url('index.php/muziklaban/bands_profile/' . $email_data->email_id);?>"/>
    <meta property="og:image" content="<?=(strlen($email_data->avatar_path) > 0) ? base_url('/assets/images/site/pmlphotos/' . basename($email_data->avatar_path) ) : base_url('/assets/images/site/og_redhorse.png');?>" />
    <meta property="og:description" content="<?= substr($email_data->band_desc,0,110);?>" />
<?php }elseif($this->uri->segment(1) == 'quiz' AND $this->uri->segment(2) == 'summary'){?>
    <meta property="og:title" content="<?=$tattoo_info['type']?>" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="<?=$tattoo_info['url']?>"/>
    <meta property="og:image" content="<?=base_url('/assets/images/site/og_redhorse.png');?>" />
    <meta property="og:description" content="<?=$tattoo_info['desc'];?>"/>
<?php }elseif($this->uri->segment(1) == 'quiz' AND $this->uri->segment(2) == 'lyric'){?>
    <meta property="og:title" content="<?=$tattoo_info['title']?>" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="<?=$tattoo_info['url']?>"/>
    <meta property="og:image" content="<?=$tattoo_info['img'];?>" />
    <meta property="og:description" content="<?=$tattoo_info['desc'];?>"/>
<?php }elseif($this->uri->segment(1) == 'shop'){?>
    <meta property="og:title" content="BUY YOUR TICKETS NOW!" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="http://redhorsebeer.com/index.php/shop/"/>
    <meta property="og:image" content="<?=base_url('/assets/images/site/home/selling-pager-banner-1.png');?>" />
    <meta property="og:description" content="Ito na ang pinakaiintay ninyong rock battle ng taon! Ang Pambansang Muziklaban XVIII Judging Night! Bili na ng tickets mga repa, RAKRAKAN NA!"/>
<?php }elseif($this->uri->segment(1) == 'muziklaban' AND $this->uri->segment(2) == 'registration'){?>
    <meta property="og:title" content="2016 Red Horse Pambansang Muziklaban" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="http://redhorsebeer.com/index.php/muziklaban/registration/"/>
    <meta property="og:image" content="<?=base_url('/assets/images/site/media/pxp-2015-2nd-landing-page_p2.jpg');?>" />
    <meta property="og:description" content="Register na mga 'dre para masigurado ang slot nyo sa nalalapit na live auditions at makakuha ng updates sa mga kaganapan sa nagiisang 2016 Red Horse Pambansang Muziklaban! Pagregister nyo ay magkakaroon kayo ng sariling band profile page!"/>
<?php }else{?>
    <meta property="og:title" content="<?=$headtitle?> | Red Horse Beer" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="<?php if (isset($og['url'])) { echo $og['url']; } else { ?>http://redhorsebeer.com/<?php } ?>" />
    <meta property="og:image" content="<?php if (isset($og['image'])) { echo $og['image']; } else { ?>http://redhorsebeer.com/assets/images/site/og_redhorse.png<?php } ?>" />
    <meta property="og:description" content="<?php if (isset($og['desc'])) { echo $og['desc']; } else { ?>Red Horse Beer is your extra strong beer that brings you that pure alcoholic experience. It is not your ordinary beer - rebellious and flavorful yet bold and intense. It is sweet and bitter smooth, giving you a fueled kick. Excite yourself with this deeply hued distinct tasting beer.<?php } ?>" />
<?php }/*endif*/?>

<link rel="stylesheet" href="<?=base_url()?>assets/css/site/plugins/accordion.css" media="screen" />
<link rel="stylesheet" media="all" href="<?=base_url()?>assets/css/site/customs/style.css" />
<link rel="stylesheet" media="all" href="<?=base_url()?>assets/css/site/customs/override.css?v=<?=time();?>" />
<link rel="icon" type="image/png" href="<?=base_url()?>assets/images/site/favicon.png">
<link rel="stylesheet"  href='http://fonts.googleapis.com/css?family=Oswald' type='text/css' media='all' />
<link rel="stylesheet"  href="<?=base_url()?>assets/css/site/plugins/jquery-ui-1.8.css" type='text/css' media='all' />
<?php if(isset($_GET['theme']) ): ?>
    <link rel="stylesheet" href="<?=base_url()?>assets/css/site/customs/<?=$_GET['theme']?>.css" type="text/css" media="all" />
<?php else:   ?>
    <link rel="stylesheet" href="<?=base_url()?>assets/css/site/customs/options.css" type="text/css" media="all" />
<?php endif; ?>
<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/site/plugins/jquery.fancybox.css?v=2.1.5" media="screen" />

<script type="text/javascript">

    function isNumberKey(evt) {
        evt = (evt) ? evt : window.event
        var charCode = (evt.which) ? evt.which : evt.keyCode
        if (charCode > 31 && (charCode < 48 || charCode > 57)) {
            return false;
        }
        return true;

        //<input type="text"  onKeyPress="return isNumberKey(event)" maxlength="2" autocomplete="off"    />
    }

    function base_url(){
        return '<?=base_url()?>';
    }


</script>

<script type="text/javascript" src="<?=base_url()?>assets/js/site/plugins/jquery-1.10.1.min.js"></script>
<script type='text/javascript' src="<?=base_url()?>assets/js/site/customs/custom.js"></script>
<script type='text/javascript' src="<?=base_url()?>assets/js/site/customs/rh.js"></script>
<script type="text/javascript" src="<?=base_url()?>assets/js/site/plugins/jquery.fancybox.js?v=2.1.5"></script>
<script type='text/javascript' src="<?=base_url()?>assets/js/site/plugins/jquery.cycle.all.min.js"></script>
<script type='text/javascript' src='<?=base_url()?>assets/js/site/plugins/jquery-ui-1.9.2.custom.min.js'></script>
<script type="text/javascript" src="<?=base_url()?>assets/js/site/plugins/jquery-migrate-1.1.1.min.js"></script>
<script type='text/javascript' src="<?=base_url()?>assets/js/site/plugins/jquery.li-scroller.1.0.js"></script>
<script type='text/javascript' src='<?=base_url()?>assets/js/site/plugins/jquery.iosslider.min.js'></script>
<script type='text/javascript' src='<?=base_url()?>assets/js/site/plugins/jquery.isotope.min.js'></script>
<script type='text/javascript' src='<?=base_url()?>assets/js/site/plugins/jquery.ba-bbq.js'></script>
<script type="text/javascript" src="<?=base_url()?>assets/js/site/plugins/audio-player.js"></script>
<script type="text/javascript" src="<?=base_url()?>assets/js/site/plugins/jquery.nested.accordion.js"></script>
<script type="text/javascript" src="<?=base_url()?>assets/js/site/plugins/slick.min.js"></script>
<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/js/site/plugins/slick.css"/>

<script type="text/javascript" src="<?=base_url()?>assets/js/site/plugins/jquery.fancybox.js"></script>
<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/js/site/plugins/jquery.fancybox.css"/>

<!--[if lt IE 9]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->


<script type="text/javascript">
	<?php
	session_start();
		if(isset($_GET['agree'])) {
			
			$_SESSION['agree'] = true;
			
			header('Content-Type: application/json');
			
			echo json_encode(array('success' => true));
			
			die();
		}

	?>
	<?php if(isset($_SESSION['agree'])): ?>
			
			var _gaq = _gaq || [];
			_gaq.push(['_setAccount', 'UA-28690482-1']);
			_gaq.push(['_setDomainName', 'redhorsebeer.com']);
			_gaq.push(['_setAllowLinker', true]);
			_gaq.push(['_trackPageview']);

			(function() {
				var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
				ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
				var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
			})();
			
	<?php else: ?>
		$(function () {
			$("#srn-agree").click(function(){
				var that = this;
				$( "#srn-modal" ).hide();
				$.getJSON(
					'?agree=1',
					function (data) {
						
						//if(data.success) {
							
							
							
							var _gaq = _gaq || [];
							_gaq.push(['_setAccount', 'UA-28690482-1']);
							_gaq.push(['_setDomainName', 'redhorsebeer.com']);
							_gaq.push(['_setAllowLinker', true]);
							_gaq.push(['_trackPageview']);

							(function() {
								var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
								ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
								var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
							})();
						//}
					}
				);
			})
			
		});
	<?php endif; ?>
    
</script>