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
 
  <form class="form-inline" action="short.php">
    <div class="form-group">
      <label class="sr-only" for="email">Shorten Url:</label>
      <input type="text" class="form-control" id="url" placeholder="Enter URL"  name="url" autocomplete=off>
    </div>
    <button type="submit" class="btn btn-default custom-button">Shorten</button>
  </form>
</div>
</body>
</html>