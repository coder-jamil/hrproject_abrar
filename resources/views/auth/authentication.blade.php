<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('login/css/login.css') }}">
</head>
<body>
    <section>
        <div class="form-box">
          <div class="form-value">
            <form action="">
              <h2>Employee Login</h2>
              <div class="inputbox">
                <ion-icon name="mail-outline"></ion-icon>
                <input type="text" required>
                <label for="">Username</label>
              </div>
              <div class="inputbox">
                <ion-icon name="lock-closed-outline"></ion-icon>
                <input type="password" required>
                <label for="">Password</label>
              </div>
              <div class="forget">
                <label><input type="checkbox">Remember Me</label>
                <a href="#">Forgot password?</a>
              </div>
              <button>Log in</button>
              <div class="register">
                <p>Don't have a account <a href="#">Register</a></p>
              </div>
            </form>
          </div>
        </div>
      </section>
      <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
              <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>