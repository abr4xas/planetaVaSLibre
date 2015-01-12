<?php
    /*
    * Filename: header.php
    * Description: Header
    * @author Angel Cruz (@abr4xas) - http://abr4xas.org
    * License: GPLv2 or later
    * @version 0.1
    */
echo'<div id="header">
		<nav class="navbar navbar-inverse navbar-fixed-top barra_nav" role="navigation">
		    <div class="container">
		        <div class="navbar-header">
		          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
		                <span class="sr-only">Toggle navigation</span>
		                <span class="icon-bar"></span>
		                <span class="icon-bar"></span>
		                <span class="icon-bar"></span>
		            </button>
		            <a class="navbar-brand darken" href="index.php" title="'.$nombre_sitio.'">
		          <img src="themes/'.$theme.'/images/logo.png" class="img-responsive logo" alt="Logo" height="95" width="95" />
		            </a>
		        </div>
		     </div>
		  </nav>
    </div>';
?>