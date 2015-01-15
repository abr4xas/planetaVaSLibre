<?php
    /*
    * Filename: footer.php
    * Description: Footer
    * @author Angel Cruz (@abr4xas) - http://abr4xas.org
    * License: GPLv2 or later
    * @version 0.1
    */

echo '<div class="row">
       <div class="col-lg-12">
         <div class="pull-right"> Licencia de uso:<br />
           <a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/4.0/" target="_blank"  data-toggle="tooltip" data-placement="bottom" title="Bajo Licencia Creative Commons"><img alt="Licencia de Creative Commons" src="themes/'.$theme.'/images/80x15.png" style="width:80px; height:15px;" /></a>
         </div>
         <address>
            <strong>Planeta de Grupo de Usuarios de VaSlibre</strong><br />
            Valencia - Carabobo - Venezuela<br />';
            echo "<a href=\"#\" onclick=\"javascript:void window.open('include/politicas.php','1421363962543','width=700,height=500,toolbar=0,menubar=0,location=0,status=0,scrollbars=1,resizable=1,left=0,top=0');return false;\">Politicas de uso</a>";           
echo '</address>
         &copy; 2014 - '.date("Y",time()).'  Dise&ntilde;o & Programaci&oacute;n: [ <a href="http://viserproject.com" target="_blank" title="Visitar ViserProject">ViSerProject</a> ]<br />
         C&oacute;digo fuente: <a href="https://github.com/Vaslibre/planeta" target="_blank" title="Código Fuente del Planeta">github.com</a>                    
       </div>
     </div>';
?>