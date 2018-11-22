<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>formator</title>
    <link rel="apple-touch-icon" sizes="57x57" href="resources/favicon/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="resources/favicon/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="resources/favicon/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="resources/favicon/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="resources/favicon/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="resources/favicon/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="resources/favicon/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="resources/favicon/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="resources/favicon/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="resources/favicon/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="resources/favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="resources/favicon/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="resources/favicon/favicon-16x16.png">
<link rel="manifest" href="resources/favicon/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="resources/css/main.css" />
    <script src="resources/js/main.js"></script>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">


<!-- Vendor list -->
<!-- prism -->
<link rel="stylesheet" href="resources/vendor/prism/prism.css" />
<link rel="stylesheet" href="resources/vendor/prism/linenumbers/linenumbers.css" />
<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<!-- Latest compiled and minified JavaScript -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<style>

.mind_message{
    font-family: "Segoe UI","Helvetica Neue","Helvetica",Arial,sans-serif;  
    font-weight: 400;
    text-rendering: optimizeLegibility;
}
._heading{

}

._comment{
    font-size: 16px;
    color: #444;
}
</style>

</head>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Formator</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
        <li><a href="#">Link</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>
      </ul>
      <form class="navbar-form navbar-left">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        
        <button class="btn btn-primary" id="mind-navbar-modal-upload" >upload php.ini</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li>
        <a role="button" class="btn btn-success" href="#" id="mind-navbar-download">Download</a>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<div class="container-fluid">
  <div class="row">
  <div class="col-md-6 col-md-offset-1">


<?php
echo nl2br("HELLO MIND" . "\n");

$block = 1024 * 1024;//1MB or counld be any higher than HDD block_size*2
if ($fh = fopen("file.txt", "r")) {
  $left = '';
  ?>
    <form>
    <?php
    while (!feof($fh)) {
      // read the file
      $temp = fread($fh, $block);
      $fgetslines = explode("\n", $temp);
      $fgetslines[0] = $left . $fgetslines[0];

      if (!feof($fh)) {
        $left = array_pop($lines);
      }
      flush();
      $heading_flag = false;
      $heading_end = false;
      $collapse_count = 0;
      $section_body_end = false;
      echo '<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">';
      foreach ($fgetslines as $k => $line) {
            //do smth with $line
        if ($heading_end) {
          $heading_end = false;
          continue;
        }

        if ($line[0] == '[') {
          if ($collapse_count > 0) {
            echo '</div></div></div>';
          }
          $collapse_count++;
          echo "<script>console.log('" . $collapse_count . "');</script>";
          ?>
                <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="heading<?php echo $collapse_count; ?>">
                <h4 class="panel-title">
                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $collapse_count; ?>" aria-expanded="true" aria-controls="collapse<?php echo $collapse_count; ?>">
         <?php echo str_replace(']', '', substr($line, 1)); ?>
        </a>
      </h4>
    </div>
    <div id="collapse<?php echo $collapse_count; ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading<?php echo $collapse_count; ?>">
      <div class="panel-body">
    <?php

  } elseif ($line[0] == ';') {

    if (strpos($line, ';;;;;;;;;;;;;;;;;;') !== false) {
      $heading_flag = true;
      continue;
    }
    if ($heading_flag) {
      echo '<div class="page-header">';
      echo "<h1 class='mind_message _heading'>" . nl2br(str_replace(';', '', substr($line, 1)) . "\n") . "</h1>";
      echo '</div>';
      $heading_flag = false;
      $heading_end = true;
    } else {
                    // echo "<h5>".nl2br(substr($line, 1)."\n")."</h5>"; 
      echo "<p class='mind_message _comment'>" . nl2br(substr($line, 1) . "\n") . "</p>";
    }
                
                // echo "<p>".nl2br(substr($line,1)."\n")."</p>"; 
  } else {
    if (strlen($line) <= 1) {
      echo nl2br($line . "\n");
    } else {
      $equlator;

      if (strpos($line, ':') !== false) {
     $equlator =  ":";
   $value = trim(substr($line, strpos($line,$equlator)+1,strlen($line)),':');
   $label = substr($line,0,strpos($line,$equlator));
    } else {
      $equlator =  "=";
      $value = trim(substr($line, strpos($line,$equlator)+1,strlen($line)),'=');
      $label = substr($line,0,strpos($line,$equlator));
    }
      ?>
                  
                <div class="form-group">
    <label for="exampleInputEmail1"><?php echo $label; ?></label>
    <input type="text" value="<?php echo $value; ?>"
     class="form-control" id="exampleInputEmail1" placeholder="<?php echo $label; ?>">
  </div>
                  <?php
              
                }


              }
            }

            flush();
          }
          ?>
   
    <?php

  }
  fclose($fh);


/* feof
file
$file = fopen("test.txt","r");
echo fgets($file);
fclose($file);
if you want the line breaks to be visible in the browser too, you can use the PHP nl2br()
   */


  ?>
</div></div></div>
<!-- last panel -->
 </div>;
 <!-- accordance -->

  <button type="submit" class="btn btn-default">Submit</button>
    </form>
  </div>
  <div class="col-md-4">

  <pre class="line-numbers"><code class="language-apacheconf">
  <?php

  foreach ($fgetslines as $k => $line) {
    echo nl2br($line . "\n");
  }

  ?>
  </code></pre>
  </div>
  </div>
</div>

<div class="modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Upload File</h4>
      </div>
      <div class="modal-body">
        <p>One fine body&hellip;</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" id="mind-navbar-upload-file" class="btn btn-primary">Save changes</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<script src="resources/vendor/prism/prism.js"></script>
<script src="resources/vendor/prism/linenumbers/linenumbers.js"></script>
<script>

$(document).ready(function () {
  

});
</script>
</body>
</html>
