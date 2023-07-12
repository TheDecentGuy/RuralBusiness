<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <title>Rural Business | Login</title>
  <style>
    html {
      background: url('img/pbg.jpeg') no-repeat center center fixed;
      -webkit-background-size: cover;
      -moz-background-size: cover;
      -o-background-size: cover;
      background-size: cover;
    }
  </style>
</head>

<body>
  <header class="  text-gray-600 body-font bg-gradient-to-r from-violet-500 to-fuchsia-500 shadow-2xl rounded-2xl m-3">
    <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
      <nav class="flex lg:w-2/5 flex-wrap items-center  text-white text-base md:ml-auto">
        <a href="index.php" class="mr-5 text-white hover:text-black cursor-pointer">Home</a>
        <a class="mr-5 text-white hover:text-black cursor-pointer">About</a>
        <a href="./contact.php" class="mr-5 text-white hover:text-black cursor-pointer">Contact</a>
        <a class="text-white hover:text-black cursor-pointer"></a>
      </nav>
      <a class="flex order-first lg:order-none lg:w-1/5 title-font font-medium items-center text-gray-900 lg:items-center lg:justify-center mb-4 md:mb-0">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10 text-white p-2 bg-purple-500 rounded-full" viewBox="0 0 24 24">
          <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
        </svg>
        <span class="ml-3  text-white text-xl drop-shadow-lg">Rural Business</span>
      </a>
      <div class="lg:w-2/5 inline-flex lg:justify-end ml-5 lg:ml-0">
        <a href="login.php"><button class="flex-shrink-0 text-purple bg-slate-100 border-0 py-1 px-6 focus:outline-none hover:bg-purple-400 hover:text-white rounded-2xl text-lg mt-10 sm:mt-0 shadow-2xl">
            Log In
          </button></a>
        <a href="./signup.php"><button class="flex-shrink-0 text-purple bg-slate-100 border-0 py-1 px-6 focus:outline-none hover:bg-purple-400 hover:text-white rounded-2xl text-lg mt-10 sm:mt-0 shadow-2xl ml-2">
            Register
          </button></a>
      </div>
    </div>
  </header>


  <?php

  include 'dbcon.php';

  if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];


    $email_search = "select * from register where email='$email'";
    $query = mysqli_query($con, $email_search);

    $email_count = mysqli_num_rows($query);

    if ($email_count) {
      $email_pass = mysqli_fetch_assoc($query);

      $db_pass = $email_pass['pass'];

      $pass_decode = password_verify($password, $db_pass);

      $_SESSION['username'] = $email_pass['name'];
      $_SESSION['userid'] = $email_pass['id'];


      if ($pass_decode) {
  ?>
        <script>
          alert("login successful.....");
          location.replace("ecomerce/ecomerce.php");
        </script>
      <?php

      } else {
      ?>
        <script>
          alert("Password is Incorrect");
        </script>
      <?php
      }
    } else {
      ?>
      <script>
        alert("Email address not found......");
      </script>
  <?php
    }
  }
  ?>

  <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>
        " method="post">
    <section class="text-gray-600 body-font mt-10">
      <div class="container px-5 py-24 mx-auto flex flex-wrap items-center ">
        <div class="lg:w-3/5 md:w-1/2 md:pr-16 lg:pr-0 pr-0">
          <div class="flex">
            <h1 id="typingtxt" class="title-font font-medium text-3xl text-gray-900"></h1>
          </div>
          <p class="leading-relaxed mt-4">
            Enter the Email address and the password to access your account.
          </p>
        </div>
        <div class="lg:w-2/6 md:w-1/2 backdrop-blur-xl bg-white/30  rounded-3xl p-8 flex flex-col md:ml-auto w-full mt-10 md:mt-0 shadow-2xl shadow-purple-400 border-2 border-purple-400">
          <h2 class="text-gray-900 text-lg font-medium title-font mb-5">
            Login
          </h2>
          <div class="relative mb-4">
            <label for="full-name" class="leading-7 text-sm text-gray-600">Email</label>
            <input type="email" id="email" name="email" class="w-full bg-white rounded border border-gray-300 focus:border-purple-500 focus:ring-2 focus:ring-purple-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" />
          </div>
          <div class="relative mb-4">
            <label for="email" class="leading-7 text-sm text-gray-600">Password</label>
            <input type="password" id="password" name="password" class="w-full bg-white rounded border border-gray-300 focus:border-purple-500 focus:ring-2 focus:ring-purple-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" />
          </div>
          <button name="submit" class="text-white bg-purple-500 border-0 py-2 px-8 focus:outline-none hover:bg-purple-600 rounded text-lg">
            Login
          </button>


          <p class="text-xs text-gray-500 mt-3">
            Forget the password ?<a class="hover:text-blue-500	" href=""> click here .....</a>
          </p>
        </div>
      </div>
    </section>
  </form>



  <section class="text-gray-600 body-font">
    <div class="container px-5 py-24 mx-auto">
      <div class="lg:w-2/3 flex flex-col sm:flex-row sm:items-center items-start mx-auto">
        <h1 class="flex-grow sm:pr-16 text-2xl font-medium title-font text-gray-900">
          For the vendor login click here to persue......
        </h1>
        <a href="vlogin.php" class=""><button class="flex-shrink-0 text-white bg-purple-500 border-0 py-2 px-8 focus:outline-none hover:bg-purple-600 rounded-2xl text-lg mt-10 sm:mt-0">
            Login as Vendor
          </button></a>
      </div>
    </div>
  </section>

  <footer class="text-gray-600 body-font">
    <div class="container px-5 py-8 mx-auto flex items-center sm:flex-row flex-col">
      <a class="flex title-font font-medium items-center md:justify-start justify-center text-gray-900">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10 text-white p-2 bg-purple-500 rounded-full" viewBox="0 0 24 24">
          <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
        </svg>
        <span class="ml-3 text-xl">Rural Business</span>
      </a>
      <p class="text-sm text-gray-500 sm:ml-4 sm:pl-4 sm:border-l-2 sm:border-gray-200 sm:py-2 sm:mt-0 mt-4">
        © 2022 Rural Business —
        <a href="https://twitter.com/knyttneve" class="text-gray-600 ml-1" rel="noopener noreferrer" target="_blank">@vrushabhgawde</a>
      </p>
      <span class="inline-flex sm:ml-auto sm:mt-0 mt-4 justify-center sm:justify-start">
        <a class="text-gray-500">
          <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
            <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
          </svg>
        </a>
        <a class="ml-3 text-gray-500">
          <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
            <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z">
            </path>
          </svg>
        </a>
        <a class="ml-3 text-gray-500">
          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
            <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
            <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
          </svg>
        </a>
        <a class="ml-3 text-gray-500">
          <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="0" class="w-5 h-5" viewBox="0 0 24 24">
            <path stroke="none" d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"></path>
            <circle cx="4" cy="4" r="2" stroke="none"></circle>
          </svg>
        </a>
      </span>
    </div>
  </footer>

  <script src="js/tailwind.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.11"></script>
  <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>

  <script>
    var typed = new Typed("#typingtxt", {
      strings: ["Enter your Credintial for the Login...."],

      typeSpeed: 30,
      backSpeed: 20,
      loop: true,
    });
  </script>

</body>

</html>