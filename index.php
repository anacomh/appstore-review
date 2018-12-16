<!DOCTYPE html><!-- HTML5 Doctype -->
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="App Review Crawler" content="">
    <title>App Review Crawler</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="assets/css/bootstrap.css" rel="stylesheet">
  </head>


<div class="container" style="margin-top:100px">

<!-- USER INPUT FORM -->
  <form class="form-signin" action="api/index.php" method="post">
    <h2 class="form-signin-heading">REVIEW DOWNLOADER</h2>

    <label for="uname" class="sr-only">URL</label>
      <input type="text" id="uname" name="url" class="form-control" placeholder="Enter URL here..." autocomplete="off" required /> <br />
      <input type="text" id="page" name="page" class="form-control" placeholder="Enter page number" autocomplete="off" required /> <br />

    <button class="btn btn-lg btn-primary btn-block" type="submit" name="signIn" id="signIn">Submit</button>
  </form>
</div>

    <script src="assets/js/bootstrap.min.js"></script>
  </body>
</html>
