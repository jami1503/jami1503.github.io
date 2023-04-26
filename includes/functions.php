<?php

/**
 * function openDocument 
 * @var String global $page_title
 */

function openDocument(){ ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

	<title>Streamer Queens Agency</title>
	<link rel="stylesheet" href="./assets/css/style.css" />
	<link rel="icon" type="image/x-icon" href="/assets/img/logo.png" />
	<!-- Google fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Lato&family=Lora:ital@1&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
	<!-- bootstrap -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
	
	
</head>
<body>
<?php } ?>



<?php

/**
 * function closeDocument 
 */

function closeDocument(){ ?>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="/assets/js/script.js"></script>
</body>
</html>
<?php } ?>





<?php

/**
 * function getNavigation
 */

function getNavigation($responsive = false){ 

  $responsiveClass = $responsive ? "menu-responsive" : "";
   
  $menuItems = [
    [
      "label" => "Inicio", 
      "url" => "/?page=home"
    ],
    [
      "label" => "Contacto", 
      "url" => "/?page=contact"
    ],
    [
      "label" => "Chamet",
      "url" => "/?page=chamet",
    ],
    [
      "label" => "Unirme",
      "url" => "https://h5.ichamet.com/webH5/agent/bind.html?companyId=55309"
    ]
  ];
  

?>

  <!-- menu -->
	<nav class="menu <?= $responsiveClass; ?>">
	
	  <?php if($responsive == true): ?>
	    <!-- botón qué cierra el menú responsivo -->
		  <button type="button" class="btn-toggle-menu btn-hide-menu">
			  <span class="material-symbols-outlined">
				  close
			  </span>
		  </button>
	  <?php endif; ?>
	
		<ul class="nav">
			<?php foreach($menuItems as $item): ?>
			  <li class="nav-item">
			    <a href="<?= $item['url']; ?>" class="nav-link">
			      <?= $item['label']; ?>
			    </a>
			  </li>
			<?php endforeach; ?>
		</ul>
	</nav>

<?php } ?>



<?php

/**
 * function getHeader
 */
 
function getPageHeader(){ ?>
<header class="page-header">
  <div class="container">
    
    <div class="brand">
		  <a href="/">
		  	<img src="/assets/img/logo.png" class="logo" />
	    </a>
    </div>
    
    <?= getNavigation(); ?>
    
    <!-- botón qué despliega el menú responsivo -->
	  <button class="btn-toggle-menu btn-sow-menu">
		  <span class="material-symbols-outlined">
			  menu
		  </span> 
  	</button>
    
    <?= getNavigation(true); ?>
      	
  </div>
</header>
<?php } ?>