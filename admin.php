<?php

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.3/dist/flowbite.min.css" />

  <style>
    html {
      background: url('img/adminbg.jpeg') no-repeat center center fixed;
      -webkit-background-size: cover;
      -moz-background-size: cover;
      -o-background-size: cover;
      background-size: cover;
      opacity: 40;
    }
  </style>

  <title>Rural Business | Admin LogIn</title>


</head>

<body>
  <header class="sticky top-0 text-gray-600 body-font bg-teal-400 shadow-2xl rounded-2xl m-3">
    <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
      <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">

        <span class="ml-3 text-xl text-white">Rural Business</span>
      </a>
      <nav class="md:mr-auto md:ml-4 md:py-1 md:pl-4 md:border-l md:border-gray-400 flex flex-wrap items-center text-base justify-center">
        <h1 class="text-white">Welcome To the Administrative Panel</h1>
      </nav>
      <!-- <button id="logout_btn"
        class="inline-flex items-center bg-gray-100 border-0 py-1 px-3 focus:outline-none hover:bg-gray-200 rounded text-base mt-4 md:mt-0">
        Logout
      </button> -->
    </div>
  </header>



  <section class="text-gray-600 body-font mt-20">
    <div class="container px-5 py-24 mx-auto flex flex-wrap items-center mb-20">
      <div class="lg:w-3/5 md:w-1/2 md:pr-16 lg:pr-0 pr-0">
        <h1 class="title-font font-medium text-3xl text-white">
          Welcom to as an Administrative...
        </h1>
        <p class="leading-relaxed text-white mt-4">
          You can continue with this as an Administrative. You have to enter
          the Administrative user and password info to continue with the
          access the Administrative panal.
        </p>
      </div>
      <div class="lg:w-2/6 md:w-1/2 backdrop-blur-lg bg-white/60  rounded-2xl p-8 flex flex-col md:ml-auto w-full mt-10 md:mt-0 shadow-2xl shadow-indigo-400">
        <h2 class="text-gray-900 text-lg font-medium title-font mb-5">
          Administrative
        </h2>
        <div class="relative mb-4">
          <label for="full-name" class="leading-7 text-sm text-gray-600">ID</label>
          <input type="text" id="user" class="w-full bg-white rounded border border-gray-300 focus:border-green-500 focus:ring-2 focus:ring-green-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" />
        </div>
        <div class="relative mb-4">
          <label for="email" class="leading-7 text-sm text-gray-600">Password</label>
          <input type="password" id="pass" class="w-full bg-white rounded border border-gray-300 focus:border-green-500 focus:ring-2 focus:ring-green-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" />
        </div>
        <button id="btn" class="text-white opacity-90 bg-teal-500 border-0 py-2 px-8 focus:outline-none hover:bg-teal-400 rounded text-lg">
          Log In
        </button>
        <p class="text-xs text-gray-500 mt-3">
          If you forget your password, contact to your Agent....
        </p>
      </div>
    </div>
  </section>

  <footer class="text-gray-600 body-font">
    <div class="container px-5 py-8 mx-auto flex items-center sm:flex-row flex-col">
      <a class="flex title-font font-medium items-center md:justify-start justify-center text-gray-900">
        <span class="ml-3 text-xl">Rural Business</span>
      </a>
      <p class="text-sm text-gray-500 sm:ml-4 sm:pl-4 sm:border-l-2 sm:border-gray-200 sm:py-2 sm:mt-0 mt-4">
        © 2022 Rural Business —
        <a href="" class="text-gray-600 ml-1" rel="noopener noreferrer" target="_blank">@vrushabhGawde</a>
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
</body>
<script src="js/tailwind.js"></script>
<script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script>

<script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>

<script>
  $("#logout_btn").click(function() {
    alert("Admin Logout Successfully......");
    location.replace("./index.php");
  });

  $("#btn").click(function() {
    var id = $("#user").val();
    var pass = $("#pass").val();

    if (id == "admin" && pass == "Admin@1234") {
      location.replace("admin/index.php");
    } else {
      alert("Adimin Access Deined......");
    }
  });

  var typed = new Typed("#typingtxt", {
    strings: ["Enter your Credintial for the Login...."],

    typeSpeed: 30,
    backSpeed: 20,
    loop: true,
  });
</script>

</html>