<?php
include "../dbcon.php";
session_start();

if (!isset($_SESSION['username'])) {
?>
    <script>
        location.replace("../login.php");
    </script>
<?php
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.3/dist/flowbite.min.css" />
    <title>Document</title>
    <style>
        body {
            background: url('../img/pbg.jpeg') no-repeat center center fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }
    </style>
</head>

<body class="">

    <header class="  bg-gradient-to-r from-cyan-400 to-blue-500 shadow-2xl rounded-2xl m-3 shadow-purple-400">
        <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
            <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
                <span class="ml-3 text-white text-xl">Welcome Vendor</span>
            </a>
            <nav class="md:mr-auto md:ml-4 md:py-1 md:pl-4 md:border-l md:border-white flex flex-wrap items-center text-base justify-center">
                <div class="flex">
                    <h1 id="typingtxt" class="text-white"></h1>
                </div>
            </nav>

        </div>
    </header>


    <div class="flex">
        <aside class="w-1/5 h-screen sticky top-0">
            <div class="h-[43rem] py-4 px-3 bg-cyan-400 rounded-xl shadow-2xl shadow-purple-400 m-3">
                <ul class="space-y-2">
                    <li>
                        <a href="#" class="flex items-center p-2 text-base font-normal cursor-default  text-black rounded-lg bg-gray-100 ">
                            <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6  transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd">
                                </path>
                            </svg>
                            <span class="flex-1 ml-3 whitespace-nowrap">Hello
                                <?php echo $_SESSION['username'];  ?>
                            </span>
                        </a>
                    </li>
                    <hr>
                    <li>
                        <a href="vindex.php" class="flex items-center p-2 text-base font-normal hover:text-black rounded-lg  hover:bg-gray-100">
                            <svg aria-hidden="true" class="w-6 h-6  transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path>
                                <path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path>
                            </svg>
                            <span class="ml-3">Your Products
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="vorder.php" class="flex items-center p-2 text-base font-normal text-black hover:text-black rounded-lg  hover:bg-gray-100 ">
                            <img src="https://img.icons8.com/ios-glyphs/28/null/purchase-order.png" />
                            <span class="ml-3">Orders
                            </span>
                        </a>
                    </li>


                    <li>
                        <a href="vaddProduct.php" class="flex items-center p-2 text-base font-normal text-black hover:text-black rounded-lg  hover:bg-gray-100 ">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <path d="M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm6 13h-5v5h-2v-5h-5v-2h5v-5h2v5h5v2z" />
                            </svg>
                            <span class="ml-3">Add new Products
                            </span>
                        </a>
                    </li>

                    <li>
                        <a href="vsales.php" class="flex items-center p-2 text-base font-normal text-black hover:text-black rounded-lg  hover:bg-gray-100 ">
                            <img src="https://img.icons8.com/ios/28/000000/total-sales-1.png" />
                            <span class="ml-3">Your Sales
                            </span>
                        </a>
                    </li>

                    <li>
                        <a href="vbilling.php" class="flex items-center p-2 text-base font-normal text-black hover:text-black rounded-lg  hover:bg-gray-100 ">
                            <img src="https://img.icons8.com/external-itim2101-lineal-itim2101/28/000000/external-pay-currency-and-money-itim2101-lineal-itim2101.png" />
                            <span class="ml-3">Billing
                            </span>
                        </a>
                    </li>



                    <li>
                        <a href="vlogout.php" class="flex items-center p-2 text-base font-normal text-black hover:text-red-400 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                            <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M3 3a1 1 0 00-1 1v12a1 1 0 102 0V4a1 1 0 00-1-1zm10.293 9.293a1 1 0 001.414 1.414l3-3a1 1 0 000-1.414l-3-3a1 1 0 10-1.414 1.414L14.586 9H7a1 1 0 100 2h7.586l-1.293 1.293z" clip-rule="evenodd"></path>
                            </svg>
                            <span class="flex-1 ml-3 whitespace-nowrap">Sign Out</span>
                        </a>
                    </li>
                </ul>
            </div>
        </aside>

        <main class="w-4/5 mr-3">

            <?php
            if (isset($_POST['update'])) {

                $id = $_SESSION['vendor_id'];
                $name = mysqli_real_escape_string($con, $_POST['name']);
                $email = mysqli_real_escape_string($con, $_POST['email']);
                $pass = mysqli_real_escape_string($con, $_POST['pass']);
                $address = mysqli_real_escape_string($con, $_POST['address']);
                $city = mysqli_real_escape_string($con, $_POST['city']);
                $country = mysqli_real_escape_string($con, $_POST['country']);
                $zipcode = mysqli_real_escape_string($con, $_POST['zipcode']);




                $updatequery = "UPDATE VENDORS SET name='$name',email='$email',pass='$pass',address='$address',city='$city',country='$country',
                    zipcode='$zipcode' where id='$id'";

                $iquery = mysqli_query($con, $updatequery);
                if ($iquery) {
            ?>
                    <script>
                        location.replace("vindex.php");
                    </script>
                <?php
                } else {
                ?>
                    <script>
                        alert("There is a problem while Updating... ");
                    </script>
            <?php
                }
            }

            ?>

            <form action="" method="post">
                <div class=" m-3">
                    <div class="flex flex-wrap -mx-3">
                        <div class="w-full max-w-full px-3">
                            <div class="relative flex flex-col min-w-0 break-words backdrop-blur-md bg-white/30  border-0 shadow-2xl shadow-purple-400 rounded-2xl bg-clip-border">
                                <div class="border-black/12.5 rounded-t-2xl border-b-0 border-solid p-6 pb-0">
                                    <div class="flex items-center">
                                        <p class="mb-0 text-indigo-500">Hello There... </p>
                                    </div>
                                </div>
                                <div class="flex-auto p-6">
                                    <p class="leading-normal uppercase dark:text-white dark:opacity-60 text-sm">Your
                                        Information
                                    </p>
                                    <div class="flex flex-wrap -mx-3">
                                        <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
                                            <div class="mb-4">
                                                <label for="username" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">name</label>
                                                <input type="text" name="name" value="<?php echo $_SESSION['username'];  ?>" class="focus:shadow-primary-outline  text-sm leading-5.6 ease block w-64 appearance-none  border-solid  bg-slate-200 bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none border-2 border-purple-400 rounded-2xl h-12" disabled>
                                            </div>
                                        </div>
                                        <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
                                            <div class="mb-4">
                                                <label for="email" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Email
                                                    address</label>
                                                <input type="email" name="email" value="<?php echo $_SESSION['email'];  ?>" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-64 appearance-none  border-solid  bg-slate-200 bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none border-2 border-purple-400 rounded-2xl h-12" disabled>
                                            </div>
                                        </div>
                                        <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
                                            <div class="mb-4">
                                                <label for="first name" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Password
                                                    :
                                                </label>
                                                <input type="password" name="pass" value="<?php echo $_SESSION['pass'];  ?>" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-64 appearance-none border-solid bg-slate-200 bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none border-2 border-purple-400 rounded-2xl h-12" disabled>
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
                                                <input type="text" name="address" value="<?php echo $_SESSION['address'];  ?>" class="focus:shadow-primary-outline text-sm leading-5.6 ease block w-full appearance-none  border-solid  bg-slate-200 bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none border-2 border-purple-400 rounded-2xl h-32" disabled>
                                            </div>
                                        </div>
                                        <div class="w-full max-w-full px-3 shrink-0 md:w-4/12 md:flex-0">
                                            <div class="mb-4">
                                                <label for="city" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">City</label>
                                                <input type="text" name="city" value="<?php echo $_SESSION['city'];  ?>" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-64 appearance-none border-solid  bg-slate-200 bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none border-2 border-purple-400 rounded-2xl h-12" disabled>
                                            </div>
                                        </div>
                                        <div class="w-full max-w-full px-3 shrink-0 md:w-4/12 md:flex-0">
                                            <div class="mb-4">
                                                <label for="country" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Country</label>
                                                <input type="text" name="country" value="<?php echo $_SESSION['country'];  ?>" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-64 appearance-none border-solid bg-slate-200 bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none border-2 border-purple-400 rounded-2xl h-12
                                               " disabled>
                                            </div>
                                        </div>
                                        <div class="w-full max-w-full px-3 shrink-0 md:w-4/12 md:flex-0">
                                            <div class="mb-4">
                                                <label for="postal code" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Postal
                                                    code</label>
                                                <input type="text" name="zipcode" value="<?php echo $_SESSION['zipcode'];  ?>" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-64 appearance-none border-solid  bg-slate-200 bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none border-2 border-purple-400 rounded-2xl h-12" disabled>
                                            </div>
                                        </div>
                                    </div>
                                    <hr class="h-px mx-0 my-4 bg-transparent border-0 opacity-25 bg-gradient-to-r from-transparent via-black/40 to-transparent dark:bg-gradient-to-r dark:from-transparent dark:via-white dark:to-transparent ">

                                    <div class="flex justify-end">
                                        <a name="edit" class="text-white bg-purple-500 border-0 py-2 px-8 focus:outline-none hover:bg-purple-600 rounded-2xl text-lg" id="edit">Edit
                                        </a>
                                        <button name="" class="text-white bg-slate-400 border-0 py-2 px-8 focus:outline-none hover:bg-slate-200 rounded-2xl text-lg hover:text-black mr-2 hover:border hover:border-red-500" id="cancel" hidden>cancel
                                        </button>
                                        <button name="update" class="text-white bg-purple-500 border-0 py-2 px-8 focus:outline-none hover:bg-purple-600 rounded-2xl text-lg" id="update" hidden>Update
                                        </button>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>



        </main>
    </div>






    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
    <script src="../js/tailwind.js"></script>
    <script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.11"></script>
    <script>
        var typed = new Typed("#typingtxt", {
            strings: ["Welcome to as A vendor"],

            typeSpeed: 40

        });
    </script>

    <script>
        $("#edit").click(function() {
            $("input").prop('disabled', false);
            $("input").removeClass("bg-slate-200");
            $("input").addClass("ring-2");


            $("#edit").hide();
            $("#update").show();
            $("#cancel").show();

        });

        $("#cancel").click(function() {
            $("input").prop('disabled', true);
            $("input").addClass("bg-slate-200");
            $("input").removeClass("ring-2");


            $("#edit").show();
            $("#update").hide();
            $("#cancel").hide();

        });
    </script>
</body>

</html>