<!DOCTYPE html><!-- HTML5 Doctype -->
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="App Review Crawler" content="">
    <title>App Review Crawler</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/style.css">


  </head>
<body>
    <div class="container">
      <div class="form-box">
        <!-- USER INPUT FORM -->
          <form class="form-signin" action="api/index.php" method="post">
            <h1 class="form-signin-heading">Reviews to CSV </h1>
            <p>Download Reviews from iTunes Store to CSV format per page. Each page retrieves the latest 50 reviews.</p>

            <label for="uname" class="">App URL</label><i class="fas fa-question-circle show-tip"></i><span class="tip">Paste APP Url and Keep "?mt=8"</span>
            <input type="text" id="uname" name="url" class="form-control" placeholder="" autocomplete="off" required /> <br />

            <label for="page">Page number</label><i class="fas fa-question-circle show-tip"></i><span class="tip">The app scraps from pages, ex.: 1, 2, 3...</span>
            <input type="text" id="page" name="page" class="form-control" placeholder="" autocomplete="off" required /> <br />

            <button class="btn btn-lg btn-primary btn-block submit-btn" type="submit" name="signIn" id="signIn">Submit</button>
          </form>
        </div>
      </div>
    <script src="assets/js/bootstrap.min.js"></script>
  </body>
</html>
