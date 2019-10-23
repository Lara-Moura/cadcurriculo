<!DOCTYPE html>
<html>
<head>
	<title>Casa do Empreendedor</title>
	    <meta charset="utf-8">
    	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<meta name="description" content="Responsive Retina-Friendly Menu with different, size-dependent layouts" />
		<meta name="keywords" content="responsive menu, retina-ready, icon font, media queries, css3, transition, mobile" />
		<meta name="author" content="Codrops" />
		<link rel="shortcut icon" href="../favicon.ico"> 
		<link rel="stylesheet" type="text/css" href="css/default.css" />
		<link rel="stylesheet" type="text/css" href="css/component.css" />
		<script src="js/modernizr.custom.js"></script>


</head>
<body>
<style type="text/css">
.bt {
border:1px solid #25692A;
border-radius:4px;
display:inline-block;
cursor:pointer;
font-family:Verdana;
font-weight:bold;
font-size:13px;
padding:6px 10px;
text-decoration:none;
}
</style>
<center><h4><a href="consulta.php" style="color:blue;">Consultar todos os curriculos</a></h4></center>
<h4 style=" text-align: right; margin-right: 115px;">
	<a href="inicio.php">
		<input type="submit" name="voltar" value="Voltar" class="bt" style="color:blue; "/>
	</a>
</h4>
			<div class="main clearfix">
				<nav id="menu" class="nav">					
					<ul>
						<li>
							<a href="social.php">
								<span class="icon">
									<i aria-hidden="true" class="icon"></i>
								</span>
								<span>Serviços sociais</span>
							</a>
						</li>
						<li>
							<a href="tec.php">
								<span class="icon"> 
									<i aria-hidden="true" class="icon"></i>
								</span>
								<span>Tecnologia</span>
							</a>
						</li>
						<li>
							<a href="saude.php">
								<span class="icon">
									<i aria-hidden="true" class="icon"></i>
								</span>
								<span>Saúde</span>
							</a>
						</li>
						<li>
							<a href="auxiliar.php">
								<span class="icon">
									<i aria-hidden="true" class="icon"></i>
								</span>
								<span>Auxiliar</span>
							</a>
						</li>
						<li>
							<a href="edu.php">
								<span class="icon">
									<i aria-hidden="true" class="icon"></i>
								</span>
								<span>Educação</span>
							</a>
						</li>
						<li>
							<a href="servicos.php">
								<span class="icon">
									<i aria-hidden="true" class="icon"></i>
								</span>
								<span>Serviços Gerais</span>
							</a>
						</li>

					</ul>
				</nav>
			</div>
		</div>
		<!-- /container -->


		
		
		<script>
			//  The function to change the class
			var changeClass = function (r,className1,className2) {
				var regex = new RegExp("(?:^|\\s+)" + className1 + "(?:\\s+|$)");
				if( regex.test(r.className) ) {
					r.className = r.className.replace(regex,' '+className2+' ');
			    }
			    else{
					r.className = r.className.replace(new RegExp("(?:^|\\s+)" + className2 + "(?:\\s+|$)"),' '+className1+' ');
			    }
			    return r.className;
			};	

			//  Creating our button in JS for smaller screens
			var menuElements = document.getElementById('menu');
			menuElements.insertAdjacentHTML('afterBegin','<button type="button" id="menutoggle" class="navtoogle" aria-hidden="true"><i aria-hidden="true" class="icon-menu"> </i> Menu</button>');

			//  Toggle the class on click to show / hide the menu
			document.getElementById('menutoggle').onclick = function() {
				changeClass(this, 'navtoogle active', 'navtoogle');
			}

			// http://tympanus.net/codrops/2013/05/08/responsive-retina-ready-menu/comment-page-2/#comment-438918
			document.onclick = function(e) {
				var mobileButton = document.getElementById('menutoggle'),
					buttonStyle =  mobileButton.currentStyle ? mobileButton.currentStyle.display : getComputedStyle(mobileButton, null).display;

				if(buttonStyle === 'block' && e.target !== mobileButton && new RegExp(' ' + 'active' + ' ').test(' ' + mobileButton.className + ' ')) {
					changeClass(mobileButton, 'navtoogle active', 'navtoogle');
				}
			}
		</script>


		</body>
</html>
