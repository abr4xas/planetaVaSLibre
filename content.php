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
            $tags = RSS_MOSTRAR($url,$imagen,$leer_cant_feed,$largo_lectura,$feeds); 
 echo '</div>
       <aside class="col-md-4">
       <div class="well well-sm">
       <div class="pull-left">
        <a class="media-left" href="#">
            <img src="themes/'.$theme.'/images/logovaslibre2.svg" class="img-responsive vaslibre" alt="VaSLibre">
        </a>
        </div>
            <h3>Planeta VaSLibre</h3>
            <p>'.$descripcion.'</p>
               <hr>
         <h3>Redes Sociales</h3>
            <ul class="list-inline">
                <li><a href="https://twitter.com/'.$twitter.'" class="darken" data-toggle="tooltip" data-placement="bottom" title="Siguenos"><img src="themes/'.$theme.'/images/64/01_twitter.png" class="img-responsive img-rounded" alt="Twitter"></a></li>
                <li><a href="https://facebook.com/groups/'.$facebook.'" class="darken" data-toggle="tooltip" data-placement="bottom" title="Danos un Like"><img src="themes/'.$theme.'/images/64/02_facebook.png" class="img-responsive img-rounded" alt="Facebokk"></a></li>     
                <li><a href="https://plus.google.com/'.$glus.'" class="darken" data-toggle="tooltip" data-placement="bottom" title="Siguenos en G+"><img src="themes/'.$theme.'/images/64/14_google+.png" class="img-responsive img-rounded" alt="G+"></a></li>
                <li><a href="http://'.$principal.'" class="darken" data-toggle="tooltip" data-placement="bottom" title="Visita nuestro Blog"><img src="themes/'.$theme.'/images/64/21_blogger.png" class="img-responsive img-rounded" alt="Blog"></a></li>   
                <li><a href="backend.xml" class="darken" data-toggle="tooltip" data-placement="bottom" title="Agreganos a tu Lector"><img src="themes/'.$theme.'/images/64/25_rss.png" class="img-responsive img-rounded" alt="RSS|XML"></a></li>     
            </ul>           
         <hr>
         <div id="envio_feed">
 	        <h3>Envía tu Feed</h3>
	        <div id="myWatch"></div>
		    <form enctype="application/x-www-form-urlencoded" action="javascript:void(0);" role="form" method="post" name="form1" id="form1" onsubmit="return GetUser(); return document.MM_returnValue">
		        <div class="form-group">
		            <label for="inputEmail">Tu eMail</label>
		            <input type="email" class="form-control" id="inputEmail" name="inputEmail" placeholder="eMail">
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
		            </div>
		        </form>   
         </div>      
         <hr>
         <h3>Publicidad</h3>
         <div id="publicidad">';
            PUBLICIDAD($publicidad);  
    echo '
         </div>
         <hr>
         <div id="nube">  
          <h3>Nube de tags</h3>';
          NUBE_TAGS($tags);
          echo '
         </div>
        </div>
      </aside>
       <hr>';                                    
?> 
