<?php
include "../dbcon.php";
session_start();

$vid = $_SESSION['vendor_id'];
$res = mysqli_query($con, "select * from products where vendor_id='$vid'");
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
    <link rel="stylesheet" href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css" />
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
        <aside class="w-1/5 h-screen stikcy  top-0">
            <div class="h-[43rem] py-4 px-3 bg-cyan-400 rounded-xl shadow-2xl shadow-purple-400 m-3">
                <ul class="space-y-2">
                    <li>
                        <a href="vprofile.php" class="flex items-center p-2 text-base font-normal text-black rounded-lg">
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
                        <a href="vindex.php" class="flex items-center p-2 text-base font-normal text-black hover:text-black rounded-lg  hover:bg-gray-100 ">
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
                        <a href="vbilling.php" class=" flex items-center p-2 text-base font-normal text-black rounded-lg bg-gray-100">
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

            <div class="w-full px-6 py-6 mx-auto">
                <!-- content -->

                <div class="flex flex-wrap -mx-3">

                    <div class="w-full max-w-full px-3">
                        <div class="relative flex flex-col h-full min-w-0 break-words backdrop-blur-lg bg-white/30 border-0 border-transparent border-solid shadow-2xl shadow-purple-400 rounded-2xl bg-clip-border">
                            <div class="p-4 pb-0 mb-0 border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
                                <div class="flex flex-wrap -mx-3">
                                    <div class="flex items-center flex-none w-1/2 max-w-full px-3">
                                        <h6 class="mb-0 dark:text-white">Invoices</h6>
                                    </div>

                                </div>
                            </div>
                            <div class="flex-auto p-4 pb-0">
                                <ul class="flex flex-col pl-0 mb-0 rounded-lg">
                                    <li class="relative flex justify-between px-4 py-2 pl-0 mb-2 border-0 rounded-t-inherit text-inherit rounded-xl">
                                        <div class="flex flex-col">
                                            <h6 class="mb-1 text-sm font-semibold leading-normal dark:text-white text-slate-700">March, 01, 2020
                                            </h6>
                                            <span class="text-xs leading-tight dark:text-white dark:opacity-80">#MS-415646</span>
                                        </div>
                                        <div class="flex items-center text-sm leading-normal dark:text-white/80">
                                            $180
                                            <button class="dark:text-white inline-block px-0 py-2.5 mb-0 ml-6 font-bold leading-normal text-center uppercase align-middle transition-all bg-transparent border-0 rounded-lg shadow-none cursor-pointer ease-in bg-150 text-sm active:opacity-85 hover:-translate-y-px tracking-tight-rem bg-x-25 text-slate-700"><i class="mr-1 text-lg leading-none fas fa-file-pdf" aria-hidden="true"></i> PDF</button>
                                        </div>
                                    </li>
                                    <li class="relative flex justify-between px-4 py-2 pl-0 mb-2 border-0 rounded-xl text-inherit">
                                        <div class="flex flex-col">
                                            <h6 class="mb-1 text-sm font-semibold leading-normal dark:text-white text-slate-700">February, 10,
                                                2021</h6>
                                            <span class="text-xs leading-tight dark:text-white dark:opacity-80">#RV-126749</span>
                                        </div>
                                        <div class="flex items-center text-sm leading-normal dark:text-white/80">
                                            $250
                                            <button class="dark:text-white inline-block px-0 py-2.5 mb-0 ml-6 font-bold leading-normal text-center uppercase align-middle transition-all bg-transparent border-0 rounded-lg shadow-none cursor-pointer ease-in bg-150 text-sm active:opacity-85 hover:-translate-y-px tracking-tight-rem bg-x-25 text-slate-700"><i class="mr-1 text-lg leading-none fas fa-file-pdf" aria-hidden="true"></i> PDF</button>
                                        </div>
                                    </li>
                                    <li class="relative flex justify-between px-4 py-2 pl-0 mb-2 border-0 rounded-xl text-inherit">
                                        <div class="flex flex-col">
                                            <h6 class="mb-1 text-sm font-semibold leading-normal dark:text-white text-slate-700">April, 05, 2020
                                            </h6>
                                            <span class="text-xs leading-tight dark:text-white dark:opacity-80">#FB-212562</span>
                                        </div>
                                        <div class="flex items-center text-sm leading-normal dark:text-white/80">
                                            $560
                                            <button class="dark:text-white inline-block px-0 py-2.5 mb-0 ml-6 font-bold leading-normal text-center uppercase align-middle transition-all bg-transparent border-0 rounded-lg shadow-none cursor-pointer ease-in bg-150 text-sm active:opacity-85 hover:-translate-y-px tracking-tight-rem bg-x-25 text-slate-700"><i class="mr-1 text-lg leading-none fas fa-file-pdf" aria-hidden="true"></i> PDF</button>
                                        </div>
                                    </li>
                                    <li class="relative flex justify-between px-4 py-2 pl-0 mb-2 border-0 rounded-xl text-inherit">
                                        <div class="flex flex-col">
                                            <h6 class="mb-1 text-sm font-semibold leading-normal dark:text-white text-slate-700">June, 25, 2019
                                            </h6>
                                            <span class="text-xs leading-tight dark:text-white dark:opacity-80">#QW-103578</span>
                                        </div>
                                        <div class="flex items-center text-sm leading-normal dark:text-white/80">
                                            $120
                                            <button class="dark:text-white inline-block px-0 py-2.5 mb-0 ml-6 font-bold leading-normal text-center uppercase align-middle transition-all bg-transparent border-0 rounded-lg shadow-none cursor-pointer ease-in bg-150 text-sm active:opacity-85 hover:-translate-y-px tracking-tight-rem bg-x-25 text-slate-700"><i class="mr-1 text-lg leading-none fas fa-file-pdf" aria-hidden="true"></i> PDF</button>
                                        </div>
                                    </li>
                                    <li class="relative flex justify-between px-4 py-2 pl-0 border-0 rounded-b-inherit rounded-xl text-inherit">
                                        <div class="flex flex-col">
                                            <h6 class="mb-1 text-sm font-semibold leading-normal dark:text-white text-slate-700">March, 01, 2019
                                            </h6>
                                            <span class="text-xs leading-tight dark:text-white dark:opacity-80">#AR-803481</span>
                                        </div>
                                        <div class="flex items-center text-sm leading-normal dark:text-white/80">
                                            $300
                                            <button class="dark:text-white inline-block px-0 py-2.5 mb-0 ml-6 font-bold leading-normal text-center uppercase align-middle transition-all bg-transparent border-0 rounded-lg shadow-none cursor-pointer ease-in bg-150 text-sm active:opacity-85 hover:-translate-y-px tracking-tight-rem bg-x-25 text-slate-700"><i class="mr-1 text-lg leading-none fas fa-file-pdf" aria-hidden="true"></i> PDF</button>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class=" -mx-3">
                    <div class="w-full px-3 mt-6  md:flex-none">
                        <div class="relative flex flex-col w-full break-words backdrop-blur-lg bg-white/30 border-0 shadow-2xl shadow-purple-400  rounded-2xl bg-clip-border">
                            <div class="p-6 px-4 pb-0 mb-0 border-b-0 rounded-t-2xl">
                                <h6 class="mb-0 dark:text-white">Billing Information</h6>
                            </div>
                            <div class="flex-auto p-4 pt-6">
                                <ul class="flex flex-col pl-0 mb-0 rounded-lg">
                                    <li class="relative flex p-6 mb-2 border-0 rounded-t-inherit rounded-xl bg-gray-50 dark:bg-slate-850">
                                        <div class="flex flex-col">
                                            <h6 class="mb-4 text-sm leading-normal dark:text-white">Oliver Liam</h6>
                                            <span class="mb-2 text-xs leading-tight dark:text-white/80">Company Name: <span class="font-semibold text-slate-700 dark:text-white sm:ml-2">Viking Burrito</span></span>
                                            <span class="mb-2 text-xs leading-tight dark:text-white/80">Email Address: <span class="font-semibold text-slate-700 dark:text-white sm:ml-2">oliver@burrito.com</span></span>
                                            <span class="text-xs leading-tight dark:text-white/80">VAT Number: <span class="font-semibold text-slate-700 dark:text-white sm:ml-2">FRB1235476</span></span>
                                        </div>
                                        <div class="ml-auto text-right">
                                            <a class="relative z-10 inline-block px-4 py-2.5 mb-0 font-bold text-center text-transparent align-middle transition-all border-0 rounded-lg shadow-none cursor-pointer leading-normal text-sm ease-in bg-150 bg-gradient-to-tl from-red-600 to-orange-600 hover:-translate-y-px active:opacity-85 bg-x-25 bg-clip-text" href="javascript:;"><i class="mr-2 far fa-trash-alt bg-150 bg-gradient-to-tl from-red-600 to-orange-600 bg-x-25 bg-clip-text" aria-hidden="true"></i>Delete</a>

                                        </div>
                                    </li>
                                    <li class="relative flex p-6 mt-4 mb-2 border-0 rounded-xl bg-gray-50 dark:bg-slate-850">
                                        <div class="flex flex-col">
                                            <h6 class="mb-4 text-sm leading-normal dark:text-white">Lucas Harper</h6>
                                            <span class="mb-2 text-xs leading-tight dark:text-white/80">Company Name: <span class="font-semibold text-slate-700 dark:text-white sm:ml-2">Stone Tech Zone</span></span>
                                            <span class="mb-2 text-xs leading-tight dark:text-white/80">Email Address: <span class="font-semibold text-slate-700 dark:text-white sm:ml-2">lucas@stone-tech.com</span></span>
                                            <span class="text-xs leading-tight dark:text-white/80">VAT Number: <span class="font-semibold text-slate-700 dark:text-white sm:ml-2">FRB1235476</span></span>
                                        </div>
                                        <div class="ml-auto text-right">
                                            <a class="relative z-10 inline-block px-4 py-2.5 mb-0 font-bold text-center text-transparent align-middle transition-all border-0 rounded-lg shadow-none cursor-pointer leading-normal text-sm ease-in bg-150 bg-gradient-to-tl from-red-600 to-orange-600 hover:-translate-y-px active:opacity-85 bg-x-25 bg-clip-text" href="javascript:;"><i class="mr-2 far fa-trash-alt bg-150 bg-gradient-to-tl from-red-600 to-orange-600 bg-x-25 bg-clip-text" aria-hidden="true"></i>Delete</a>

                                        </div>
                                    </li>
                                    <li class="relative flex p-6 mt-4 mb-2 border-0 rounded-b-inherit rounded-xl bg-gray-50 dark:bg-slate-850">
                                        <div class="flex flex-col">
                                            <h6 class="mb-4 text-sm leading-normal dark:text-white">Ethan James</h6>
                                            <span class="mb-2 text-xs leading-tight dark:text-white/80">Company Name: <span class="font-semibold text-slate-700 dark:text-white sm:ml-2">Fiber Notion</span></span>
                                            <span class="mb-2 text-xs leading-tight dark:text-white/80">Email Address: <span class="font-semibold text-slate-700 dark:text-white sm:ml-2">ethan@fiber.com</span></span>
                                            <span class="text-xs leading-tight dark:text-white/80">VAT Number: <span class="font-semibold text-slate-700 dark:text-white sm:ml-2">FRB1235476</span></span>
                                        </div>
                                        <div class="ml-auto text-right">
                                            <a class="relative z-10 inline-block px-4 py-2.5 mb-0 font-bold text-center text-transparent align-middle transition-all border-0 rounded-lg shadow-none cursor-pointer leading-normal text-sm ease-in bg-150 bg-gradient-to-tl from-red-600 to-orange-600 hover:-translate-y-px active:opacity-85 bg-x-25 bg-clip-text" href="javascript:;"><i class="mr-2 far fa-trash-alt bg-150 bg-gradient-to-tl from-red-600 to-orange-600 bg-x-25 bg-clip-text" aria-hidden="true"></i>Delete</a>

                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>

                <footer class="pt-4">
                    <div class="w-full px-6 mx-auto">
                        <div class="flex flex-wrap items-center -mx-3 lg:justify-between">
                            <div class="w-full max-w-full px-3 mt-0 mb-6 shrink-0 lg:mb-0 lg:w-1/2 lg:flex-none">
                                <div class="text-sm leading-normal text-center text-slate-500 lg:text-left">
                                    ©2022
                                    <a href="" class="font-semibold text-slate-700 dark:text-white" target="_blank">Rural Business</a>
                                    - @VrushabhDeepakGawde
                                </div>
                            </div>
                            <div class="w-full max-w-full px-3 mt-0 shrink-0 lg:w-1/2 lg:flex-none">
                                <ul class="flex flex-wrap justify-center pl-0 mb-0 list-none lg:justify-end">
                                    <li class="nav-item">
                                        <a href="https://www.creative-tim.com" class="block px-4 pt-0 pb-1 text-sm font-normal transition-colors ease-in-out text-slate-500" target="_blank">Rural Business</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="https://www.creative-tim.com/presentation" class="block px-4 pt-0 pb-1 text-sm font-normal transition-colors ease-in-out text-slate-500" target="_blank">About Us</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="https://creative-tim.com/blog" class="block px-4 pt-0 pb-1 text-sm font-normal transition-colors ease-in-out text-slate-500" target="_blank">Blog</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="https://www.creative-tim.com/license" class="block px-4 pt-0 pb-1 pr-0 text-sm font-normal transition-colors ease-in-out text-slate-500" target="_blank">License</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </footer>

            </div>

        </main>
    </div>






    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.11"></script>
    <script src="../js/tailwind.js"></script>


    <script src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script>

    </script>

    <script>
        var typed = new Typed("#typingtxt", {
            strings: ["Welcome to as A vendor"],

            typeSpeed: 40

        });


        $('#myTable').DataTable({
            dom: '<"toolbar">frtip',
        });
    </script>


</body>

</html>