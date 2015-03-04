
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

<php?
$myfile = fopen("domain.cfg", "r") or die("ERROR: Unable to find domain.cfg, please refer to the README.");
$domain =  fread($myfile,filesize("domain.cfg"));
fclose($myfile);
?>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">IP Logger 0.3</a>
    </div>
    <div>
      <ul class="nav navbar-nav">
        <li class="active"><a href="../">Home</a></li>
        <li><a href="../ip">Logs</a></li>
        <li><a href="../about">About</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-cog"></span></a>
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Panel</a></li>
            <li><a href="settings">Settings</a></li>
          </ul>
        </li>
        <p class="navbar-text">Created by Connor McFarlane</p>
      </ul>
    </div>
  </div>
</nav>
