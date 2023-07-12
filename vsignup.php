<?php

session_start();
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Rural Business | Sign up</title>
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.3/dist/flowbite.min.css" />

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
    <header class="text-gray-600 body-font bg-gradient-to-r from-violet-500 to-fuchsia-500 shadow-2xl rounded-2xl m-3">
        <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
            <nav class="flex lg:w-2/5 flex-wrap items-center  text-white text-base md:ml-auto">
                <a href="index.php" class="mr-5 text-white hover:text-black cursor-pointer">Home</a>
                <a class="mr-5 text-white hover:text-black cursor-pointer">About</a>
                <a href="./contact.php" class="mr-5 text-white hover:text-black cursor-pointer">Contact</a>
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
        $name =  mysqli_real_escape_string($con, $_POST['name']);
        $email =  mysqli_real_escape_string($con, $_POST['email']);
        $pass =  mysqli_real_escape_string($con, $_POST['pass']);
        $address =  mysqli_real_escape_string($con, $_POST['address']);
        $city =  mysqli_real_escape_string($con, $_POST['city']);
        $country =  mysqli_real_escape_string($con, $_POST['country']);
        $zipcode =  mysqli_real_escape_string($con, $_POST['zipcode']);


        $pass = password_hash($password, PASSWORD_BCRYPT);


        $emailquery = "select * from vendors where email= '$email'";
        $query = mysqli_query($con, $emailquery);
        $emailcount = mysqli_num_rows($query);

        if ($emailcount > 0) {
    ?>
            <script>
                alert("This email address is already in use...")
            </script>
            <?php
        } else {
            $insertquery = "insert into vendors (name,email,pass,address,city,country,zipcode)values('$name','$email','$pass','$address','$city','$country','$zipcode')";
            $iquery = mysqli_query($con, $insertquery);
            if ($iquery) {
            ?>
                <script>
                    alert("Registered succesfully..");
                    location.replace("vlogin.php");
                </script>
            <?php
            } else {
            ?>
                <script>
                    alert("There is a problem while inserting... ");
                </script>
    <?php
            }
        }
    }

    ?>



    <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>
        " method="post">
        <div class=" m-3">
            <div class="flex flex-wrap -mx-3">
                <div class="w-full max-w-full px-3">
                    <div class="relative flex flex-col min-w-0 break-words backdrop-blur-xl bg-white/30  border-0 shadow-2xl shadow-indigo-400 rounded-2xl bg-clip-border">
                        <div class="border-black/12.5 rounded-t-2xl border-b-0 border-solid p-6 pb-0">
                            <div class="flex items-center">
                                <p class="mb-0 text-indigo-500">Hello There... </p>
                            </div>
                        </div>
                        <div class="flex-auto p-6">
                            <p class="leading-normal uppercase dark:text-white dark:opacity-60 text-sm">Your Information
                            </p>
                            <div class="flex flex-wrap -mx-3">
                                <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
                                    <div class="mb-4">
                                        <label for="username" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">name</label>
                                        <input type="text" name="name" value="" class="focus:shadow-primary-outline  text-sm leading-5.6 ease block w-64 appearance-none  border-solid  bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none border-2 border-purple-400 rounded-2xl h-12">
                                    </div>
                                </div>
                                <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
                                    <div class="mb-4">
                                        <label for="email" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Email
                                            address</label>
                                        <input type="email" name="email" value="" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-64 appearance-none  border-solid  bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none border-2 border-purple-400 rounded-2xl h-12">
                                    </div>
                                </div>
                                <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
                                    <div class="mb-4">
                                        <label for="first name" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Password
                                            :
                                        </label>
                                        <input type="password" name="pass" value="" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-64 appearance-none border-solid bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none border-2 border-purple-400 rounded-2xl h-12">
                                    </div>
                                </div>
                                <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
                                    <div class="mb-4">
                                        <label for="last name" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Confirm
                                            Password :</label>
                                        <input type="text" name="cpass" value="" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-64 appearance-none  border-solid bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none border-2 border-purple-400 rounded-2xl h-12">
                                    </div>
                                </div>
                            </div>
                            <hr class="h-px mx-0 my-4 bg-transparent border-0 opacity-25 bg-gradient-to-r from-transparent via-black/40 to-transparent dark:bg-gradient-to-r dark:from-transparent dark:via-white dark:to-transparent ">

                            <p class="leading-normal uppercase dark:text-white dark:opacity-60 text-sm">Contact
                                Information
                            </p>
                            <div class="flex flex-wrap -mx-3">
                                <div class="w-full max-w-full px-3 shrink-0 md:w-full md:flex-0">
                                    <div class="mb-4">
                                        <label for="address" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Address</label>
                                        <input type="text" name="address" value="" class="focus:shadow-primary-outline text-sm leading-5.6 ease block w-full appearance-none  border-solid  bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none border-2 border-purple-400 rounded-2xl h-32">
                                    </div>
                                </div>
                                <div class="w-full max-w-full px-3 shrink-0 md:w-4/12 md:flex-0">
                                    <div class="mb-4">
                                        <label for="city" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">City</label>
                                        <input type="text" name="city" value="" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-64 appearance-none border-solid  bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none border-2 border-purple-400 rounded-2xl h-12">
                                    </div>
                                </div>
                                <div class="w-full max-w-full px-3 shrink-0 md:w-4/12 md:flex-0">
                                    <div class="mb-4">
                                        <label for="country" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Country</label>
                                        <input type="text" name="country" value="" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-64 appearance-none border-solid bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none border-2 border-purple-400 rounded-2xl h-12">
                                    </div>
                                </div>
                                <div class="w-full max-w-full px-3 shrink-0 md:w-4/12 md:flex-0">
                                    <div class="mb-4">
                                        <label for="postal code" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Postal
                                            code</label>
                                        <input type="text" name="zipcode" value="" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-64 appearance-none border-solid  bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none border-2 border-purple-400 rounded-2xl h-12">
                                    </div>
                                </div>
                            </div>
                            <hr class="h-px mx-0 my-4 bg-transparent border-0 opacity-25 bg-gradient-to-r from-transparent via-black/40 to-transparent dark:bg-gradient-to-r dark:from-transparent dark:via-white dark:to-transparent ">

                            <div class="flex justify-end">
                                <button name="submit" class="text-white bg-purple-500 border-0 py-2 px-8 focus:outline-none hover:bg-purple-600 rounded text-lg">SIGN
                                    UP</button>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>




    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
    <script src="js/tailwind.js"></script>
    <script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.11">
    </script>

    <script>
        var typed = new Typed("#typingtxt", {
            strings: ["Enter your Credintial for the Registration...."],

            typeSpeed: 30,
            backSpeed: 20,
            loop: true,
        });
    </script>


</body>

</html>