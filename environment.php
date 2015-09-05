<div class="mw-module-admin-wrap"> <?php if(isset($params['backend'])): ?>
<module type="admin/modules/info" />
<style>
.tab{display: none;}
</style>
<?php endif;
 if(is_admin() == false) {return; }
 //$rand = uniqid(); ?>
	
	<h2>Server Details</h2>
	<table width="100%" class="mw-ui-table">
	<tr><td><strong>Server Name</strong></td><td><?=$_SERVER['SERVER_NAME'];?></td></tr>
	<tr><td><strong>Document Root</strong></td><td><?=$_SERVER['DOCUMENT_ROOT'];?></td></tr>
	<tr><td><strong>Server Address</strong></td><td><?=$_SERVER['SERVER_ADDR'];?></td></tr>
	<tr><td><strong>Server Software</strong></td><td><?=$_SERVER['SERVER_SOFTWARE'];?></td></tr>
	<tr><td><strong>Server Protocol</strong></td><td><?=$_SERVER['SERVER_PROTOCOL'];?></td></tr>
	<tr><td><strong>Gateway Interface</strong></td><td><?=$_SERVER['GATEWAY_INTERFACE'];?></td></tr>
	<tr><td><strong>Server Admin</strong></td><td><?=$_SERVER['SERVER_ADMIN'];?></td></tr>
	<tr><td><strong>Server Signature</strong></td><td><?=$_SERVER['SERVER_SIGNATURE'];?></td></tr>
	<tr><td><strong>Server Port</strong></td><td><?=$_SERVER['SERVER_PORT'];?></td></tr>
	</table>
	<hr />
	<h2>Browser Details</h2>
	<h4>HTTP_USER_AGENT</h4>
	<p><?=$_SERVER["HTTP_USER_AGENT"];?></p>
	<h4>HTTP_CONNECTION</h4>
	<p><?=$_SERVER["HTTP_CONNECTION"];?></p>
	<h4>REMOTE_PORT</h4>
	<p><?=$_SERVER["REMOTE_PORT"];?></p>
	<h4>REMOTE_ADDR</h4>
	<p><?=$_SERVER["REMOTE_ADDR"];?></p>
	<h4>HTTP_ACCEPT</h4>
	<p><?=$_SERVER["HTTP_ACCEPT"];?></p>
	<h4>HTTP_ACCEPT_LANGUAGE</h4>
	<p><?=$_SERVER["HTTP_ACCEPT_LANGUAGE"];?></p>
	<h4>REQUEST_METHOD</h4>
	<p><?=$_SERVER["REQUEST_METHOD"];?></p>
	<h4>REQUEST_TIME</h4>
	<p><?=$_SERVER["REQUEST_TIME"];?></p>
	<hr />

</div>