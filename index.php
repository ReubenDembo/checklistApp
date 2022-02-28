
<!Doctype html>
<html lang="en">
  <head>

    <title>Checklist App</title>

    <link rel="stylesheet" type="text/css" href="styles.css">

  </head>
  <body class="text-center">
    
<main class="form-signin">
  <form action="dbconnection.php" method="POST">
    <img class="icon" src="logo1.png" alt="" width="" height="">
    <h1 class="h1" id="fc">Checklist App</h1>

    <div class="form-floating">
      <input type="text" class="form-control"  placeholder="username" name="username" id="username" required>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control"  placeholder="Password" name="password" id="username" required>
    </div>

    <div class="checkbox">
      <label>
        <input type="checkbox" value="remember-me" class="box"> Remember me
      </label>
    </div>
    <div class="btn">
      <button class="btntxt" type="submit" name="submit" id="login">Login in</button>
    </div>
  </form>


</main>
<script type="text/javascript" src="file.js"></script>
</body>
</html>
