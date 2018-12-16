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


<div class="container" style="margin-top:100px;width:450px;">

<!-- USER INPUT FORM -->
  <form class="form-signin" action="api/index.php" method="post">
    <h2 class="form-signin-heading">Review Donwloader</h2>
    <p>Download Reviews from iTunes Store to CSV format per page. Each page retrieves the latest 50 reviews.</p>

    <label for="uname" class="sr-only">URL</label>
      <input type="text" id="uname" name="url" class="form-control" placeholder="Enter app URL" autocomplete="off" required /> <br />
      <input type="text" id="page" name="page" class="form-control" placeholder="Enter page number" autocomplete="off" required /> <br />

    <button class="btn btn-lg btn-primary btn-block submit-btn" type="submit" name="signIn" id="signIn">Submit</button>
  </form>
</div>

    <script src="assets/js/bootstrap.min.js"></script>
  </body>
</html>

<style media="screen">
  p{text-align: left;margin-bottom: 25px;font-family: Gotham,Helvetica,Arial;color: #fff;}
  body,html{background: #19191E;}
  .btn-block {
    display: block;
    width: 100%;
    border-radius: 0!important;
    background: #0030FF;
    border: 0;
}
h2 {
    text-align: left;
    font-family: Gotham,Helvetica,Arial;
    letter-spacing: 30px;
    color: #fff;
    text-transform: uppercase;
    font-size: 22px;
    line-height: 40px;
    position: relative;
}
h2::after {
    content: '';
    position: absolute;
    right: -70px;
    top: 91%;
    width: 40px;
    height: 4px;
    background: #0030FF;
}

input {
    background: transparent!important;
    border-radius: 0!important;
    border: 0!important;
    border-bottom: 1px solid #fff!important;
    color: #fff!important;
}

.submit-btn{
  font-size: 14px!important;
}
.form-control:focus {
    border-color: #0030FF!important;
    outline: 0;
    -webkit-box-shadow: none!important;
    box-shadow: none!important;
}
</style>
