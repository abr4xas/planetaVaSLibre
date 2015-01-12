<?php
    /*
    * Filename: content.php
    * Description: Content
    * @author Angel Cruz (@abr4xas) - http://abr4xas.org
    * License: GPLv2 or later
    * @version 0.1
    */
echo'
        <div class="row">
            <div class="col-md-12">
              <h1 class="text-primary text-center">'.$nombre_sitio.'</h1>
            </div>
            <div class="col-md-8">
                <div class="feed">';
           foreach ($feeds as $imagen => $url) 
             { RSS($url,$imagen,$leer_cant_feed,$largo_lectura);  }
           krsort($entries); 
           foreach ($entries as $timestamp => $entry) {
               echo '                   
                    <div class="feed-item">
                 
                        <article class="feed-content">
                            <div class="pull-left">
                                    <a class="media-left" href="#">
                                        <img alt="'.$entry['image'].'" src="img/avatar/'.$entry['image'].'.png" width="95" height="95" class="img-responsive img-circle">
                                    </a>
                            </div>

                            <h2><a href="'.$entry['link'].'" target="_blank" title="Leer nota: '.$entry['title'].'">'.$entry['title'].'</a></h2>
                            '.$entry['description'].'
                            <hr/>
                            <ul class="list-inline list-unstyled">
                                <li><span><i class="fa fa-calendar"></i> '.date("d/m/Y",$entry['pubdate']).'</span></li>
                            </ul>
                        </article>                
                    </div>'; 
		} 
echo '  
                </div>
            </div>
            <aside class="col-md-4">

                    <h4>Se social</h4>
                    <ul class="list-inline">
                      <li><a href="https://twitter.com/'.$twitter.'" class="darken" data-toggle="tooltip" data-placement="bottom" title="Siguenos"><img src="themes/'.$theme.'/images/64/01_twitter.png" class="img-responsive img-rounded" alt="Red Social"></a></li>
                      <li><a href="https://facebook.com/groups/'.$facebook.'" class="darken" data-toggle="tooltip" data-placement="bottom" title="Danos un Like"><img src="themes/'.$theme.'/images/64/02_facebook.png" class="img-responsive img-rounded" alt="Red Social"></a></li>     
                      <li><a href="https://plus.google.com/'.$glus.'" class="darken" data-toggle="tooltip" data-placement="bottom" title="Siguenos en G+"><img src="themes/'.$theme.'/images/64/14_google+.png" class="img-responsive img-rounded" alt="Red Social"></a></li>

                      <li><a href="http://'.$principal.'" class="darken" data-toggle="tooltip" data-placement="bottom" title="Visita nuestro Blog"><img src="themes/'.$theme.'/images/64/21_blogger.png" class="img-responsive img-rounded" alt="Red Social"></a></li>   
                      <li><a href="backend.xml" class="darken" data-toggle="tooltip" data-placement="bottom" title="Agreganos a tu Lector"><img src="themes/'.$theme.'/images/64/25_rss.png" class="img-responsive img-rounded" alt="Red Social"></a></li>     
                    </ul>';
                        COOKIES();
ADD_BLOG();
 echo'
 </aside>
        </div>
        <hr>
';                                    
?>                                    