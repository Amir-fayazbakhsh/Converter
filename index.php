<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Convert Text To Pdf</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/sign-in/">

    <!-- Bootstrap core CSS -->
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
  </head>

  <body class="text-center">
    <div class="d-flex justify-content-center mt-5 p-5">
      <form action="getData.php" method="post">
          <div class="form-group">
              <textarea name="text" class="form-controll p-3" cols="55" rows="10" placeholder="Give me your text">

              </textarea>
          </div>
           <div class="form-check">
            <label class="form-check-label">
              <input type="radio" class="form-check-input" value="Pdf" name="optradio">PDF File
            </label>
          </div>
        <button class="btn btn-primary btn-block mt-2" name="btn" type="submit">Get File</button>

      </form>
    </div>
  </body>
</html>
