<?php
    /*
    * Filename: content.php
    * Description: Content
    * @author Angel Cruz (@abr4xas) - http://abr4xas.org
    * License: GPLv2 or later
    * @version 0.1
    */
  echo'
       <div class="col-md-8">';
           $tags = RSS_MOSTRAR($url,$imagen,$leer_cant_feed,$largo_lectura,$feeds,$theme,$timenota); 
 echo '</div>
       <aside class="col-md-4">
       <div class="well well-sm">
            <img src="themes/'.$theme.'/images/planeta-vaslibre.png" class="img-responsive img-center logo" alt="VaSLibre">
            <p>'.$descripcion.'</p>
               <hr>
         <h3>Redes Sociales</h3>
            <ul class="list-inline">
                <li><a href="https://twitter.com/'.$twitter.'" class="darken" data-toggle="tooltip" data-placement="bottom" title="Siguenos"><img src="themes/'.$theme.'/images/64/01_twitter.png" class="img-responsive img-rounded" alt="Twitter"></a></li>
                <li><a href="https://facebook.com/groups/'.$facebook.'" class="darken" data-toggle="tooltip" data-placement="bottom" title="Danos un Like"><img src="themes/'.$theme.'/images/64/02_facebook.png" class="img-responsive img-rounded" alt="Facebokk"></a></li>     
                <li><a href="https://plus.google.com/'.$glus.'" class="darken" data-toggle="tooltip" data-placement="bottom" title="Siguenos en G+"><img src="themes/'.$theme.'/images/64/14_google+.png" class="img-responsive img-rounded" alt="G+"></a></li>
                <li><a href="http://'.$principal.'" class="darken" data-toggle="tooltip" data-placement="bottom" title="Visita nuestro Blog"><img src="themes/'.$theme.'/images/64/21_blogger.png" class="img-responsive img-rounded" alt="Blog"></a></li>   
                <li><a href="backend.xml" class="darken" data-toggle="tooltip" data-placement="bottom" title="Agreganos a tu Lector"><img src="themes/'.$theme.'/images/64/25_rss.png" class="img-responsive img-rounded" alt="RSS|XML"></a></li>    
                <li><a href="'.$urlplanet.'opml.php" target="_parent" class="darken" data-toggle="tooltip" data-placement="bottom" title="Descarga Nuestro OPML"><img src="themes/'.$theme.'/images/64/26_opml.png" class="img-responsive img-rounded" alt="opml"></a></li>                  
            </ul>           
         <hr>
         <div id="envio_feed">
 	        <h3>Envía tu Feed</h3>
	        <div id="myWatch"></div>
		    <form enctype="application/x-www-form-urlencoded" action="javascript:void(0);" role="form" method="post" name="form1" id="form1" onsubmit="return GetUser(); return document.MM_returnValue">
		        <div class="form-group">
		            <label for="inputEmail">Tu eMail</label>
		            <input type="email" class="form-control" id="inputEmail" name="inputEmail" placeholder="eMail">
                    <input type="hidden" name="auth_token" value="'.CREAR_TOKEN('VaS').'" />
		        </div>
		        <div class="form-group">
		            <label for="inputPassword3">URL Feed</label>
		            <input type="text" class="form-control" id="url" placeholder="http:// | https:// Url Feed">
		        </div>
		        <div class="form-group">
		            <button type="submit" class="btn btn-success">Agregar</button>
		        </div>
		    </form>         
		     <hr>      
		     <h3>Contáctanos</h3>
		     <div id="myWatchContac"></div>
		        <form enctype="application/x-www-form-urlencoded" action="javascript:void(0);" role="form" method="post" name="form2" id="form2" onsubmit="return GetUserContac(); return document.MM_returnValue">
		            <div class="form-group">
		                <label for="inputEmail">Tu eMail</label>
		                <input type="email" class="form-control" id="Email" name="inputEmail" placeholder="eMail">
		            </div>
		            <div class="form-group">
		                <label for="inputPassword3">Mensaje</label>
		                <textarea class="form-control" id="mensaje" placeholder="Tu Mensaje"></textarea>
		            </div>
		            <div class="form-group">
		                <button type="submit" class="btn btn-success" id="enviar">Enviar</button>
                        <input type="hidden" name="auth_token" value="'.CREAR_TOKEN('VaS').'" />
		            </div>
		        </form>   
         </div>      
         <hr>
         <h3>Publicidad</h3>
         <div id="publicidad">';
            PUBLICIDAD($publicidad);  
    echo '
         </div>
         <hr>';
        RSS_IMG();
echo '         <h3>Suscripciones</h3>';
            SUBSCRIPCIONES($feeds);  
    echo '

         <hr>         
         <div id="nube">  
          <h3>Nube de tags</h3>';
          NUBE_TAGS($tags);
          echo '
         </div>
         <hr>
         <h3>Powered by:</h3>
         <ul class="list-inline">
            <li>
                <a href="http://getbootstrap.com" target="_blank" class="darken" data-toggle="tooltip" data-placement="bottom" title="Powered by bootstrap">
                <img src="themes/'.$theme.'/images/64/button_bootstrap.png" class="img-responsive" alt="Powered by bootstrap">
                </a>
            </li> 
            <li>
                <a href="http://jquery.com" target="_blank" class="darken" data-toggle="tooltip" data-placement="bottom" title="Powered by Jquery">
                <img src="themes/'.$theme.'/images/64/jquery.png" class="img-responsive" alt="Powered by Jquery">
                </a>
            </li>
            <li>
                <a href="http://php.net" target="_blank" class="darken" data-toggle="tooltip" data-placement="bottom" title="Powered by PHP">
                <img src="themes/'.$theme.'/images/64/php_powered.png" class="img-responsive" alt="Powered by PHP">
                </a>
            </li>
            <li>
                <a href="http://validator.w3.org/feed/check.cgi?url=http%3A//planeta.vaslibre.org.ve/backend.xml" target="_blank" class="darken" data-toggle="tooltip" data-placement="bottom" title="Validate my RSS feed"><img src="themes/'.$theme.'/images/64/icon_rss.png" class="img-responsive" alt="[Valid RSS]" title="Validate my RSS feed" /></a>
            </li>
         </ul>
        </div>
      </aside>
       <hr>';                                    
?> 
