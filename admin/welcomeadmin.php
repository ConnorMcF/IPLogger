<div class="container">
  <div class="jumbotron">
    <h1>IP Logger</h1> 
    <p>Welcome, this website is for tracking others IPs. By using this website you agree that you
       take full responsiblity for your actions. Your IP is logged and stored, there is no guarentee
       about your data, use at your own risk.</p> 
       <p>
    		<a class="btn btn-lg btn-primary" href="ip" role="button"><span class="glyphicon glyphicon-briefcase"></span> Access Logs</a>

    		<a class="btn btn-lg btn-danger" data-toggle="modal" data-target="#my-modal"><span class="glyphicon glyphicon-remove-circle"></span> Purge Data</a>
	   </p>
  </div>

  <div class="modal fade" id="my-modal" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Purge Data</h4>
      </div>
      <div class="modal-body">
        <p>This cannot be undone, are you sure you wish to continue?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-thumbs-down"></span> No</button>
        <a class="btn btn-primary" href="delete.php" role="button"><span class="glyphicon glyphicon-thumbs-up"></span> Yes</a>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->