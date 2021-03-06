<?php
    /*
    * Filename: modal.php
    * Description: Modal
    * @author Angel Cruz (@abr4xas) - http://abr4xas.org
    * License: GPLv2 or later
    * @version 0.1
    */

?>
  
<div class="modal fade" id="myModal" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
		  <div class="modal-content">
		    <div class="modal-header">
		      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
		      <h4 class="modal-title" id="myModalLabel"> Agregar tu Blog - FEED/RSS </h4>
		    </div>
		    <div class="modal-body">
		      <div id="myWatch"></div>
		      <form enctype="application/x-www-form-urlencoded" class="form-horizontal" action="javascript:void(0);" role="form" method="post" name="form1" id="form1" onsubmit="return GetUser(); return document.MM_returnValue">
		        <div class="form-group">
		          <label for="inputEmail">Tu eMail</label>
		          <div class="col-sm-10">
		            <input type="email" class="form-control" id="inputEmail" name="inputEmail" placeholder="eMail">
		          </div>
		        </div>
		        <div class="form-group">
		          <label for="inputPassword3" class="col-sm-2 control-label">URL Feed</label>
		          <div class="col-sm-10">
		            <input type="text" class="form-control" id="url" placeholder="http:// | https:// Url Feed">
		          </div>
		        </div>
		        <div class="form-group">
		          <div class="col-sm-offset-2 col-sm-10">
		            <button type="submit" class="btn btn-success">Agregar</button>
		          </div>
		        </div>
		      </form>
		    </div>
		    <div class="modal-footer">
		      <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
		    </div>
		  </div>
		</div>
	  </div>