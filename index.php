<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>urlShorter</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php include_once("autoloader.php");?>
</head>
<body>
<div class="container">
  <h2>Url Shortner</h2>
  <form class="form-inline" action="short.php" method="post">
    <?php 
      if(isset($_SESSION['feedback'])){
        echo "<p>{$_SESSION['feedback']}</p>";
        unset($_SESSION['feedback']);

      }
    ?>
    <div class="form-group">

      <input type="url" class="form-control" id="url" placeholder="Enter URL"  name="url" autocomplete=off>
     
    </div>
    <input type="submit" class="btn btn-default custom-button" id="short" value="Shorten" onclick="return validate_url();">
     <span id="url_error"></span>
  </form>
</div>
</body>
</html>

<script>

  // Validation For Url 
  function validate_url()
  {
      var url_regex = /(https?:\/\/(?:www\.|(?!www))[a-zA-Z0-9][a-zA-Z0-9-]+[a-zA-Z0-9]\.[^\s]{2,}|www\.[a-zA-Z0-9][a-zA-Z0-9-]+[a-zA-Z0-9]\.[^\s]{2,}|https?:\/\/(?:www\.|(?!www))[a-zA-Z0-9]+\.[^\s]{2,}|www\.[a-zA-Z0-9]+\.[^\s]{2,})/
      var url = $('#url').val();
      $('#url_error').html('');
      if(url == "")
      {
        $('#url_error').html('<span class="error">Please enter the Url</span>').fadeIn().delay(3000).fadeOut();
        $('#url').focus();
        return false;
      }
      else if(url !="" && !url_regex.test(url))
      {
          $('#url_error').html('<span class="error">Invalid Url</span>').fadeIn().delay(3000).fadeOut();
          $('#url').focus();
          return false;
      }
      else{
        return true;
      }
  }
</script>