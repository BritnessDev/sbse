<?php 
if($_SERVER['REMOTE_ADDR']=='127.0.0.1'){define('PRL','F:/hoski/groupesbse/+/');}else{define('PRL','D://xampp//htdocs//+/');}




define('WEB','https://groupesbse.com/');
define('BRAND','Group SBSE');


session_start();

if($_GET) { define('hash',trim(explode('?',$_SERVER['REQUEST_URI'])[0],'/')); } else { define('hash',trim($_SERVER['REQUEST_URI'],'/'));}
$H=['','','','','','',''];

$H=explode('/',hash);

if(!isset($H[0])){$H[0]='';}
if(!isset($H[1])){$H[1]='';}
if(!isset($H[2])){$H[2]='';}
if(!isset($H[3])){$H[3]='';}
if(!isset($H[4])){$H[4]='';}
if(!isset($H[5])){$H[5]='';}
define('H',$H);unset($H);

define('R',ltrim(rtrim($_SERVER["REQUEST_URI"],'/'),'/'));

switch(hash){
case(''):require(PRL.'fr_home.php');break;
case(hash=='ingénierie-structurelle' || hash=='ing%C3%A9nierie-structurelle'):require(PRL.'fr_ingenierie-structurelle.php');break;
case(hash=='ingénierie-géotechnique' || hash=='ing%C3%A9nierie-g%C3%A9otechnique'):require(PRL.'fr_ingenierie-geotechnique.php');break;
case(hash=='ingénierie-environnementale' || hash=='ing%C3%A9nierie-environnementale'):require(PRL.'fr_ingenierie-environnementale.php');break;
case(hash=='ingénierie-du-bâtiment' || hash=='ing%C3%A9nierie-du-b%C3%A2timent'):require(PRL.'fr_ingenierie-du-batiment.php');break;
case('contact'):require(PRL.'fr_contact.php');break;
case('services'):require(PRL.'fr_services.php');break;

case('en'):require(PRL.'en_home.php');break;
case(hash=='en/ingénierie-structurelle' || hash=='en/ing%C3%A9nierie-structurelle'):require(PRL.'en_ingenierie-structurelle.php');break;
case(hash=='en/ingénierie-géotechnique' || hash=='en/ing%C3%A9nierie-g%C3%A9otechnique'):require(PRL.'en_ingenierie-geotechnique.php');break;
case(hash=='en/ingénierie-environnementale' || hash=='en/ing%C3%A9nierie-environnementale'):require(PRL.'en_ingenierie-environnementale.php');break;
case(hash=='en/ingénierie-du-bâtiment' || hash=='en/ing%C3%A9nierie-du-b%C3%A2timent'):require(PRL.'en_ingenierie-du-batiment.php');break;
case('en/contact'):require(PRL.'en_contact.php');break;
case('en/services'):require(PRL.'en_services.php');break;


default:require(PRL.'404.php');break;
}

if(!function_exists('title')){function title(){}}
if(!function_exists('header')){function header(){}}
if(!function_exists('head_content')){function head_content(){}}
if(!function_exists('description')){function description(){}}
if(!function_exists('keywords')){function keywords(){}}
if(!function_exists('meta')){function meta(){}}
if(!function_exists('style')){function style(){}}
if(!function_exists('image')){function image(){}}
if(!function_exists('topbar')){function topbar(){}}
if(!function_exists('content')){function content(){}}
if(!function_exists('footer')){function footer(){}}
if(!function_exists('script')){function script(){}}
date_default_timezone_set("America/New_York"); ?>
<!DOCTYPE html>
<html lang="en-US">

<head prefix="og: http://ogp.me/ns# article: http://ogp.me/ns/article#">
	<title><?php echo title();?> &vert; <?php echo BRAND; ?></title>
	<meta http-equiv="Content-type" content="text/html;charset=utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta charset="utf-8">
	<meta name="HandheldFriendly" content="True">
	<meta name="MobileOptimized" content="320">
	<meta name="theme-color" content="#ffffff">
	<meta name="viewport"
		content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
	<meta name="description" content="<?php echo description(); ?>">
	<meta name="keywords" content="<?php echo keywords(); ?>">
	<meta name="referrer" content="always">
	<meta name="twitter:card" content="summary_large_image">
	<meta name="twitter:site" content="@">
	<meta name="twitter:site:id" content="">
	<meta name="twitter:image" content="">
	<meta property="fb:app_id" content="">
	<meta property="og:type" content="website">
	<meta property="og:site_name" content="">
	<meta property="og:image" content="">
	<meta property="og:image:width" content="">
	<meta property="og:image:height" content="">
	<meta property="og:title" content="<?php echo title(); ?>">
	<meta property="og:description" content="<?php echo description(); ?>">
	<meta property="article:author" content="<?php echo BRAND; ?>">
	<meta name="robots" content="max-snippet:-1">
	<meta name="robots" content="max-video-preview:-1">
	<?php echo meta();?>
	<link rel="canonical" href="https://<?php echo $_SERVER['SERVER_NAME']; ?>" />
	<link rel="apple-touch-icon" href="/cdn/icon.png" sizes="192x192">
	<link rel="icon" type="image/png" href="/cdn/icon.png" sizes="16x16">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;700&display=block" rel="stylesheet">
	<link href="/cdn/css.css" rel="stylesheet" type="text/css">
	<?php echo style(); ?>
</head>

<body>
	<nav>
		<div class="nav">
			<div class="navin">
				<div class="logo"><a href="/<?php if(H[0]=='en'){ ?>en<?php } ?>"><img src="/cdn/logo.png"
							alt="Structural Engineer"></a></div>
				<div class="nav-links"><a
						href="/<?php if(H[0]=='en'){ ?>en<?php } ?>"><?php if(H[0]=='en'){ ?>Welcome<?php } else { ?>Accueil<?php } ?></a><span
						class="submenu">Services<div class="drop">
							<?php if(H[0]=='en'){ ?>
							<div class="dropin"><a href="/en/ingénierie-structurelle">Structural Engineering</a><a
									href="/en/ingénierie-du-bâtiment">Building Engineering</a><a
									href="/en/ingénierie-environnementale">Environmental Engineering</a><a
									href="/en/ingénierie-géotechnique">Geotechnical Engineering</a></div>
							<?php } else { ?>
							<div class="dropin"><a href="/ingénierie-structurelle">Ingénierie Structurale</a><a
									href="/ingénierie-du-bâtiment">Ingénierie du Bâtiment</a><a
									href="/ingénierie-environnementale">Ingénierie Environnementale</a><a
									href="/ingénierie-géotechnique">Ingénierie Géotechnique</a></div>
							<?php } ?>


						</div></span><a href="/<?php if(H[0]=='en'){ ?>en/<?php } ?>contact">Contact</a></div>
				<div class="contact-info">
					<p> info@groupesbse.com<br />438-988-5203</p>
				</div>
				<div class="nav_btnz"><a href="/<?php if(H[0]=='en'){ ?>en/<?php } ?>contact" class="cont_btn">Contact
						Us</a>
					<div class="dropdown">
						<div class="dropdown_selection"><?php if(H[0]=='en'){ ?>EN<?php } else { ?>FR<?php } ?> <svg
								width="17" height="10" viewBox="0 0 17 10" fill="none"
								xmlns="http://www.w3.org/2000/svg">
								<path d="M1 1L8.5 9L16 1" stroke="#565656" /></svg></div>
						<div class="dropdown_items">
							<div class="dropdown_item" data-type="/">FR</div>
							<div class="dropdown_item" data-type="/en/">EN</div>
						</div>
					</div>
					<div class="mobile_button">
						<svg xmlns="http://www.w3.org/2000/svg" height="45" width="45" viewBox="0 0 45 45">
							<g>
								<path id="path1"
									transform="rotate(0,22.5,22.5) translate(10,13.3652350306511) scale(0.78125,0.78125)  "
									fill="#3DC8BD"
									d="M1.230957,19.693036L30.768982,19.693036C31.506958,19.693036,32,20.185041,32,20.923019L32,22.154038C32,22.893054,31.506958,23.384999,30.768982,23.384999L1.230957,23.384999C0.49194336,23.384999,0,22.893054,0,22.154038L0,20.923019C0,20.185041,0.49194336,19.693036,1.230957,19.693036z M1.230957,9.8470059L30.768982,9.8470059C31.506958,9.8470059,32,10.339011,32,11.076989L32,12.30801C32,13.045987,31.506958,13.53903,30.768982,13.53903L1.230957,13.53903C0.49194336,13.53903,0,13.047025,0,12.30801L0,11.076989C0,10.339011,0.49194336,9.8470059,1.230957,9.8470059z M1.230957,0L30.768982,0C31.506958,-6.3337211E-08,32,0.49298194,32,1.2309594L32,2.4619804C32,3.1999579,31.506958,3.6930011,30.768982,3.6930013L1.230957,3.6930013C0.49194336,3.6930011,0,3.1999579,0,2.4619804L0,1.2309594C0,0.49298194,0.49194336,-6.3337211E-08,1.230957,0z" />
							</g>
						</svg>
					</div>
				</div>
			</div>
		</div>


		<div class="mobile_menu">
			<a
				href="/<?php if(H[0]=='en'){ ?>en<?php } ?>"><?php if(H[0]=='en'){ ?>Welcome<?php } else { ?>Accueil<?php } ?></a><a
				href="/services">Services</a>
			<div class="subdrop">
				<?php if(H[0]=='en'){ ?>
				<a href="/en/ingénierie-structurelle">Structural Engineering</a><a
					href="/en/ingénierie-du-bâtiment">Building Engineering</a><a
					href="/en/ingénierie-environnementale">Environmental Engineering</a><a
					href="/en/ingénierie-géotechnique">Geotechnical Engineering</a>
				<?php } else { ?>
				<a href="/ingénierie-structurelle">Ingénierie Structurale</a><a
					href="/ingénierie-du-bâtiment">Ingénierie du Bâtiment</a><a
					href="/ingénierie-environnementale">Ingénierie Environnementale</a><a
					href="/ingénierie-géotechnique">Ingénierie Géotechnique</a>
				<?php } ?></div>
			<a href="/<?php if(H[0]=='en'){ ?>en/<?php } ?>contact">Contact</a>
		</div>
		</div>

	</nav>
	<div class="nav_base"></div>
	<?php echo content(); ?>

	<?php if(H[0]=='en'){ ?>
	<section class="areas">
		<div class="wrap">
			<h3>Area Served</h3>
			<p>The SBSE group offers services in the greater Montreal area including Laval, Longueuil, Brossard, Ville
				Saint-Laurent, Mont Royal, Côte Saint Luc, Hampstead, West Island, Terrebonne, Repentigny, Saint-Jérôme,
				Blainville, Mirabel, Dollard-des-Ormeaux, Quebec, Sherbrooke, Trois-Rivières, Chicoutimi, Saint-Jérôme,
				Saint-Jean-sur-Richelieu, Châteauguay, Drummondville and are available to travel to more remote regions
				of the province of Quebec.</p>
		</div>
	</section>
	<?php } else { ?>
	<section class="areas">
		<div class="wrap">
			<h3>Zone Desservie</h3>
			<p>Le groupe SBSE offrent des services dans la grande région de Montréal incluant Laval, Longueuil,
				Brossard, Ville Saint-Laurent, Mont Royal, Côte Saint Luc, Hampstead, West Island, Terrebonne,
				Repentigny, Saint-Jérôme, Blainville, Mirabel, Dollard-des-Ormeaux, Québec, Sherbrooke, Trois-Rivières,
				Chicoutimi, Saint-Jérôme, Saint-Jean-sur-Richelieu, Châteauguay, Drummondville et sont disponibles pour
				se rendre dans les régions plus éloignées de la province de Québec.</p>
		</div>
	</section>
	<?php } ?>

	<footer>
		<div class="footer">
			<div class="footerin">
				<div><a href="/"><img src="/cdn/ftr-logo.png"></a></div>
				<div class="social_link"><a href="/#">
						<svg width="12" height="24" viewBox="0 0 12 24" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path
								d="M11.2137 13.3283L11.8356 9.23311H7.94521V6.5768C7.94521 5.45617 8.48767 4.3632 10.2301 4.3632H12V0.876797C12 0.876797 10.3945 0.600098 8.86027 0.600098C5.6548 0.600098 3.56164 2.56189 3.56164 6.11194V9.23311H0V13.3283H3.56164V23.2285C4.27671 23.342 5.00822 23.4001 5.75342 23.4001C6.49863 23.4001 7.23014 23.342 7.94521 23.2285V13.3283H11.2137Z"
								fill="white" />
						</svg>
					</a></div>
				<div class="social_link"><a href="/#">
						<svg width="24" height="20" viewBox="0 0 24 20" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path
								d="M21.0571 5.18066C21.0664 5.39186 21.0664 5.59346 21.0664 5.80466C21.0756 12.2079 16.3712 19.5999 7.76793 19.5999C5.23048 19.5999 2.73933 18.8415 0.600098 17.4207C0.970528 17.4687 1.34096 17.4879 1.71139 17.4879C3.81358 17.4879 5.86021 16.7583 7.51789 15.4047C5.51756 15.3663 3.75802 14.0127 3.14681 12.0351C3.85063 12.1791 4.57296 12.1503 5.25826 11.9487C3.08198 11.5071 1.51691 9.51987 1.50765 7.20626C1.50765 7.18706 1.50765 7.16786 1.50765 7.14866C2.15591 7.52306 2.88751 7.73426 3.62837 7.75346C1.58174 6.33266 0.942746 3.50065 2.18369 1.28304C4.5637 4.31665 8.06427 6.15026 11.8241 6.35186C11.4445 4.67185 11.9631 2.90545 13.1762 1.71505C15.0561 -0.118561 18.0196 -0.0225605 19.7977 1.92625C20.8441 1.71505 21.8535 1.31184 22.7704 0.745442C22.4185 1.86865 21.6869 2.81905 20.7145 3.42385C21.6406 3.30865 22.5481 3.04945 23.4001 2.66545C22.7704 3.64465 21.9739 4.48945 21.0571 5.18066Z"
								fill="white" />
						</svg>
					</a></div>
				<div class="social_link"><a href="/#">
						<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path
								d="M0 3.20169C0 2.42947 0.270278 1.79241 0.810811 1.29049C1.35134 0.788555 2.05406 0.537598 2.91892 0.537598C3.76835 0.537598 4.45559 0.784686 4.9807 1.27891C5.52123 1.78856 5.79151 2.45264 5.79151 3.27119C5.79151 4.0125 5.52897 4.63025 5.00386 5.12447C4.46333 5.63412 3.7529 5.88895 2.87259 5.88895H2.84942C1.99999 5.88895 1.31275 5.63412 0.787645 5.12447C0.262541 4.61482 0 3.97388 0 3.20169ZM0.301158 23.472V7.99706H5.44402V23.472H0.301158ZM8.29344 23.472H13.4363V14.831C13.4363 14.2905 13.4981 13.8735 13.6216 13.5801C13.8378 13.055 14.166 12.6109 14.6062 12.248C15.0463 11.8851 15.5984 11.7036 16.2626 11.7036C17.9923 11.7036 18.8571 12.8696 18.8571 15.2017V23.472H24V14.5994C24 12.3137 23.4595 10.5801 22.3784 9.3986C21.2973 8.21713 19.8687 7.6264 18.0927 7.6264C16.1004 7.6264 14.5483 8.48354 13.4363 10.1978V10.2442H13.4131L13.4363 10.1978V7.99706H8.29344C8.32432 8.49126 8.33977 10.0279 8.33977 12.6071C8.33977 15.1862 8.32432 18.8079 8.29344 23.472Z"
								fill="white" />
						</svg>
					</a></div>


				<div><a href="mailto:info@groupesbse.com" class="social">info@groupesbse.com</a></div>
				<div><a href="tel:4389885203">438-988-5203</a></div>
				<div>
					<p class="foot_addr">5475 Pare Rue, Mont-Royal, QC, suite 205</p>
				</div>
			</div>
		</div>
	</footer>
	<script>
		document.querySelector('.dropdown').addEventListener('click', function () {
			document.querySelector('.dropdown').classList.toggle('actz');
		});
		document.querySelector('.mobile_button').addEventListener('click', function () {
			document.querySelector('.mobile_menu').classList.toggle('actz');
		});
		document.querySelectorAll('.dropdown_item').forEach(function (el) {
			el.addEventListener('click', function () {
				if (window.location.pathname.replace(/^\/|\/$/g, '') != 'en') {
					window.location = el.getAttribute('data-type') + window.location.pathname.replace(
						/^\/|\/$/g, '').replace('en/', '');
				} else {
					window.location = el.getAttribute('data-type');
				}
			})
		});
	</script>
	<script>
		< ? php echo script(); ? >
	</script>

</body>

</html>