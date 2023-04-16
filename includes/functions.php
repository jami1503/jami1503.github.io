<?php

/**
 * function openDocument 
 * @var String global $page_title
 */

function openDocument(){
	
	global $page_title;
	
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge"
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title><?= $page_title; ?></title>
	<link rel="stylesheet" href="./assets/css/style.css" />
	<link rel="icon" type="image/x-icon" href="/assets/img/logo.png" />
	<!-- Google font icons -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
</head>
<body>
<?php } ?>

<?php

/**
 * function closeDocument 
 */

function closeDocument(){ ?>
<button type="button" class="top-button">
	<span class="material-symbols-outlined">
		expand_less 
	</span>
</button>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="/assets/js/script.js"></script>
</body>
</html>
<?php } ?>

<?php

/**
 * function getHeader
 */
 
function getPageHeader(){ ?>
<header class="page-header">
	<div class="brand">
		<a href="/">
			<img src="/assets/img/logo.png" class="logo" />
		</a>
	</div>
	
	<!-- menu -->
	<nav class="menu">
		<ul class="nav">
			<li class="nav-item">
				<a href="/" class="nav-link">
					Inicio
				</a>
			</li>
			<li class="nav-item">
				<a href="/#about" class="nav-link">
					Nosotros
				</a>
			</li>
			<li class="nav-item">
				<a href="/contacto.php" class="nav-link">
					Contacto
				</a>
			</li>
			<li class="nav-item">
				<a href="/chamet.php" class="nav-link">
					Chamet
				</a>
			</li>
			<li class="nav-item">
				<a href="https://h5.ichamet.com/webH5/agent/bind.html?companyId=55309" class="nav-link cta-link">
					Unirse
				</a>
			</li>
		</ul>
	</nav>
	
	<!-- botón qué despliega el menú responsivo -->
	<button class="btn-toggle-menu btn-sow-menu">
		<span class="material-symbols-outlined">
			menu
		</span> 
	</button>
	
	<!-- menu responsivo -->
	<nav class="menu menu-responsive">
		
		<!-- botón qué cierra el menú responsivo -->
		<button type="button" class="btn-toggle-menu btn-hide-menu">
			<span class="material-symbols-outlined">
				close
			</span>
		</button>
		
		<ul class="nav">
			<li class="nav-item">
				<a href="/" class="nav-link">
					Inicio
				</a>
			</li>
			<li class="nav-item">
				<a href="/#about" class="nav-link">
					Nosotros
				</a>
			</li>
			<li class="nav-item">
				<a href="/contacto.php" class="nav-link">
					Contacto
				</a>
			</li>
			<li class="nav-item">
				<a href="/chamet.php" class="nav-link">
					Chamet
				</a>
			</li>
			<li class="nav-item">
				<a href="https://h5.ichamet.com/webH5/agent/bind.html?companyId=55309" class="nav-link cta-link">
					Unirse
				</a>
			</li>
		</ul>
	</nav>
	
</header>
<?php } ?>