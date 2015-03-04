
<?php
require('header.php');

include('welcome.php');
if (htmlspecialchars($_GET["e"] == 1)) {
    echo('<div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <span class="glyphicon glyphicon-ok"></span> Settings saved successfully!
</div>');
}
if (htmlspecialchars($_GET["e"] == 2)) {
    echo('<div class="alert alert-danger alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <span class="glyphicon glyphicon-warning-sign"></span> Failed to save settings!
</div>');
}
if (htmlspecialchars($_GET["e"] == 3)) {
    echo('<div class="alert alert-danger alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <span class="glyphicon glyphicon-exclamation-sign"></span> Some information was missing from your request, please try again.
</div>');
}
if (htmlspecialchars($_GET["e"] == 4)) {
    echo('<div class="alert alert-danger alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <span class="glyphicon glyphicon-exclamation-sign"></span> Please enter either TRUE or FALSE into the Enabled value, please note that this is case senstive!
</div>');
}
if (htmlspecialchars($_GET["e"] == 5)) {
    echo('<div class="alert alert-danger alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <span class="glyphicon glyphicon-wrench"></span> Saving does not yet work, I am working on it though. :D
</div>');
}
?>
<p>
<form action="save.php" method="post">
  <fieldset>
    <input type="text" placeholder="TRUE/FALSE" name="enable">
    <span class="help-block">Is the system enabled? [TRUE/FALSE] [Case-sensitive]</span>
    <br>
    <input type="text" placeholder="IP Logger" name="name">
    <span class="help-block">The title displayed in the top left.</span>
    <br>
    <button type="submit" class="btn btn-large btn-primary">Save</button>
  </fieldset>
</form>
</p>