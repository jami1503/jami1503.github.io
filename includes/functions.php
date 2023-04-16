<?php

function openDocument(){
	
	global $page_title;
	
	echo "
		<!DOCTYPE html>
		<html lang=\"es\">
		  <head>
		    <meta charset=\"UTF-8\" />
		    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
		    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />
		    <title>$page_title</title>
			<title>Stream Queens Agency</title>
		    <link rel=\"stylesheet\" href=\"./assets/css/style.css\" />
		    <link
		      rel=\"icon\"
		      type=\"image/x-icon\"
		      href=\"./assets/img/SQ_logo-removebg-preview (1).png\"
		    />
		    <!-- Google font icons -->
		    <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0\" />
		  </head>
		  <body>";
}

function closeDocument(){
	echo "
	<button type=\"button\" class=\"top-button\">
		<span class=\"material-symbols-outlined\">
			expand_less 
		</span>
	</button>
	<script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
    <script src=\"/assets/js/script.js\"></script>
    </body>
	</html>";
}
