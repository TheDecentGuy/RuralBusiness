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

if (isset($_POST['edit'])) {
    echo "hello world";
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

<body class="bg-slate-100">

    <header class="  bg-gradient-to-r shadow-lg from-cyan-400 to-blue-500 rounded-2xl m-3 shadow-purple-400">
        <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
            <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
                <span class="ml-3 text-white text-xl">Welcome Vendor</span>
            </a>
            <nav class="md:mr-auto md:ml-4 md:py-1 md:pl-4 md:border-l md:border-white flex flex-wrap items-center text-base justify-center">
                <div class="flex">
                    <h1 id="typingtxt" class="text-white"></h1>
                </div>
            </nav>
            <!-- <a href="login.php"><button
                    class="flex-shrink-0 text-black bg-slate-200 hover:bg-white border-0 py-1 px-6 focus:outline-none rounded-md text-lg mt-10 sm:mt-0">
                    Log Out
                </button></a> -->

        </div>
    </header>


    <div class="flex">
        <aside class="w-1/5 h-screen sticky top-0">
            <div class="h-[43rem] py-4 px-3 bg-cyan-400  rounded-xl shadow-2xl shadow-purple-400 m-3">
                <ul class="space-y-2">
                    <li>
                        <a href="vprofile.php" class="flex items-center p-2 text-base font-normal text-black rounded-lg cursor-default">
                            <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6  transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd">
                                </path>
                            </svg>
                            <span class="flex-1 ml-3 whitespace-nowrap">Hello Vrushabh </span>
                        </a>
                    </li>
                    <hr>
                    <li>
                        <a href="vindex.php" class="flex items-center p-2 text-base font-normal text-black rounded-lg bg-gray-100 ">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <path d="M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm6 13h-5v5h-2v-5h-5v-2h5v-5h2v5h5v2z" />
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
                            <svg aria-hidden="true" class="w-6 h-6  transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path>
                                <path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path>
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

        <main class="w-4/5 mr-3 rounded-xl ">

            <section class="text-gray-600 body-font overflow-hidden">
                <div class="container p-10 mx-auto">
                    <div class="lg:w-4/5 mx-auto  flex flex-wrap bg-white rounded-[2rem] pb-10 px-10 border-2 border-cyan-300 shadow-xl shadow-cyan-300">
                        <img alt="ecommerce" class="lg:w-1/2 w-full lg:h-auto h-64 object-cover object-center rounded-xl" src="https://4.imimg.com/data4/CS/BR/MY-28179751/flute-03-500x500.jpg" />
                        <div class="lg:w-1/2 w-full lg:pl-10 lg:pt-6 mt-6 lg:mt-0">
                            <h2 class="text-sm title-font text-gray-500 tracking-widest">
                                FLUTE
                            </h2>
                            <h1 class="text-gray-900 text-3xl title-font font-medium mb-1">
                                Hand made Flute
                            </h1>

                            <p class="leading-relaxed">
                                Fam locavore kickstarter distillery. Mixtape chillwave tumeric
                                sriracha taximy chia microdosing tilde DIY. XOXO fam indxgo
                                juiceramps cornhole raw denim forage brooklyn. Everyday carry +1
                                seitan poutine tumeric. Gastropub blue bottle austin listicle
                                pour-over, neutra jean shorts keytar banjo tattooed umami
                                cardigan.
                            </p>
                            <div class="flex mt-6 items-center pb-5 border-b-2 border-gray-100 mb-5">
                                <div class="flex">
                                    <span class="mr-3">Qauntity : 99</span>
                                </div>
                            </div>
                            <div class="flex">
                                <span class="title-font font-medium text-2xl text-gray-900">Rs. 1500.00</span>
                            </div>
                            <div class="sm:flex justify-between space-x-3 m-8">
                                <button class=" text-black hover:text-sky-500 bg-slate-100 border-2 py-2 px-6 focus:outline-none hover:bg-white rounded-full ">
                                    Edit
                                </button>
                                <button class=" text-white bg-red-400 border-0 py-2 px-6 focus:outline-none hover:bg-red-600 rounded-full">
                                    Delete
                                </button>
                                <button class=" text-white bg-green-400 border-0 py-2 px-6 focus:outline-none hover:bg-green-600 rounded-full">
                                    update
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </main>
    </div>






    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
    <script src="../js/tailwind.js"></script>
    <script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.11">
    </script>


    <script>
        var typed = new Typed("#typingtxt", {
            strings: ["Welcome to as A vendor"],

            typeSpeed: 40

        });
    </script>
</body>

</html>