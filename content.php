<?php
    /*
    * Filename: content.php
    * Description: Content
    * @author Angel Cruz (@abr4xas) - http://abr4xas.org
    * License: GPLv2 or later
    * @version 0.1
    */
echo'<div class="row">
      
  <div class="col-md-12">
          <h1 class="text-primary text-center">'.$nombre_sitio.'</h1>
        </div>
        <div class="col-md-8"> ';
<<<<<<< HEAD
           $tags = RSS_MOSTRAR($url,$imagen,$leer_cant_feed,$largo_lectura,$feeds);  
echo '  
        </div>
      </div>
      <aside class="col-md-4 well well-sm">
=======
           $tags = RSS_MOSTRAR($url,$imagen,$leer_cant_feed,$largo_lectura,$feeds); 
		  
echo '  
        </div>
      </div>
      <aside class="col-md-4">
        <div id="sociales">
>>>>>>> 8d8865a5fa99c814b61d6409af3005f6dfd6e537
          <h3>Redes Sociales</h3>
          <ul class="list-inline">
           <li><a href="https://twitter.com/'.$twitter.'" class="darken" data-toggle="tooltip" data-placement="bottom" title="Siguenos"><img src="themes/'.$theme.'/images/64/01_twitter.png" class="img-responsive img-rounded" alt="Twitter"></a></li>
           <li><a href="https://facebook.com/groups/'.$facebook.'" class="darken" data-toggle="tooltip" data-placement="bottom" title="Danos un Like"><img src="themes/'.$theme.'/images/64/02_facebook.png" class="img-responsive img-rounded" alt="Facebokk"></a></li>     
           <li><a href="https://plus.google.com/'.$glus.'" class="darken" data-toggle="tooltip" data-placement="bottom" title="Siguenos en G+"><img src="themes/'.$theme.'/images/64/14_google+.png" class="img-responsive img-rounded" alt="G+"></a></li>
            <li><a href="http://'.$principal.'" class="darken" data-toggle="tooltip" data-placement="bottom" title="Visita nuestro Blog"><img src="themes/'.$theme.'/images/64/21_blogger.png" class="img-responsive img-rounded" alt="Blog"></a></li>   
           <li><a href="backend.xml" class="darken" data-toggle="tooltip" data-placement="bottom" title="Agreganos a tu Lector"><img src="themes/'.$theme.'/images/64/25_rss.png" class="img-responsive img-rounded" alt="RSS|XML"></a></li>     
          </ul> 
<<<<<<< HEAD

        <hr>
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
         <h3>Contactános</h3>
  		 <div id="myWatchContac"></div>
			  <form enctype="application/x-www-form-urlencoded" action="javascript:void(0);" role="form" method="post" name="form2" id="form2" onsubmit="return GetUserContac(); return document.MM_returnValue">
				<div class="form-group">
<<<<<<< HEAD
				   <label for="inputEmail">Tu eMail</label>
					  <input type="email" class="form-control" id="inputEmail" name="inputEmail" placeholder="eMail">
=======
				   <label for="inputEmail" class="col-sm-4 control-label">Tu eMail</label>
					  <input type="email" class="form-control" id="Email" name="inputEmail" placeholder="eMail">
>>>>>>> 8d8865a5fa99c814b61d6409af3005f6dfd6e537
				</div>
				<div class="form-group">
				   <label for="inputPassword3">Mensaje</label>
					   <textarea class="form-control" id="mensaje" placeholder="Tu Mensaje"></textarea>
				 </div>
				 <div class="form-group">
					<button type="submit" class="btn btn-success">Enviar</button>
				 </div>
			  </form>
        <hr>
         <h3>Nube de tags</h3>';
             NUBE_TAGS($tags);
   echo '          
     </aside>
  </div>';                                    
?>                                    
=======
        </div> 

        <hr>

        <div id="SendFeed">
          <h3>Envía tu Feed</h3>
  		  <div id="myWatch"></div>
			  <form enctype="application/x-www-form-urlencoded" class="form-horizontal" action="javascript:void(0);" role="form" method="post" name="form1" id="form1" onsubmit="return GetUser(); return document.MM_returnValue">
				<div class="form-group">
				   <label for="inputEmail" class="col-sm-4 control-label">Tu eMail</label>
					  <input type="email" class="form-control" id="inputEmail" name="inputEmail" placeholder="eMail">
				</div>
				<div class="form-group">
				   <label for="inputPassword3" class="col-sm-4 control-label">URL Feed</label>
					   <input type="text" class="form-control" id="url" placeholder="http:// | https:// Url Feed">
				 </div>
				 <div class="form-group">
					<button type="submit" class="btn btn-success">Agregar</button>
				 </div>
			  </form>
		</div>

        <hr>      

       <div id="SendContacto">
         <h3>Contactános</h3>
  		 <div id="myWatchContac"></div>
			  <form enctype="application/x-www-form-urlencoded" class="form-horizontal" action="javascript:void(0);" role="form" method="post" name="form2" id="form2" onsubmit="return GetUserContac(); return document.MM_returnValue">
				<div class="form-group">
				   <label for="inputEmail" class="col-sm-4 control-label">Tu eMail</label>
					  <input type="email" class="form-control" id="Email" name="inputEmail" placeholder="eMail">
				</div>
				<div class="form-group">
				   <label for="inputPassword3" class="col-sm-4 control-label">Mensaje</label>
					   <textarea class="form-control" id="mensaje" placeholder="Tu Mensaje"></textarea>
				 </div>
				 <div class="form-group">
					<button type="submit" class="btn btn-success">Enviar</button>
				 </div>
			  </form>
       </div>

        <hr>  

       <div id="Nube">
         <h3>Nube de tags</h3>';
             NUBE_TAGS($tags);
   echo '          
       </div>


     </aside>
  </div>
     
';                                    
?>                                    
>>>>>>> 8d8865a5fa99c814b61d6409af3005f6dfd6e537
