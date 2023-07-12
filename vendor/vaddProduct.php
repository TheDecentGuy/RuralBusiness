<?php
session_start();
include "../dbcon.php";


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
        <aside class="w-1/5 h-screen sticky top-0">
            <div class="h-[43rem] py-4 px-3 bg-cyan-400  rounded-xl shadow-2xl shadow-purple-400 m-3">
                <ul class="space-y-2">
                    <li>
                        <a href="vprofile.php" class="flex items-center p-2 text-base font-normal text-black rounded-lg ">
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
                        <a href="vindex.php" class="flex items-center p-2 text-base font-normal text-black rounded-lg hover:bg-gray-100 hover:text-black ">
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
                        <a href="vaddProduct.php" class="flex items-center p-2 text-base font-normal text-black rounded-lg  bg-gray-100 ">
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

        <main class="w-4/5 mr-3 ">

            <?php
            if (isset($_POST['submit'])) {
                //Exatracting Images from file and storing into the variable
                $file = $_FILES['file'];

                $fileName = $_FILES['file']['name'];
                $fileTmpName = $_FILES['file']['tmp_name'];
                $fileSize = $_FILES['file']['size'];
                $fileError = $_FILES['file']['error'];
                $fileType = $_FILES['file']['type'];

                $fileExt = explode('.', $fileName);
                $fileActualExt = strtolower(end($fileExt));

                $allowed = array('jpg', 'jpeg', 'png');

                if (in_array($fileActualExt, $allowed)) {

                    if ($fileError === 0) {
                        if ($fileSize < 1000000) {
                            $fileNameNew = uniqid('', true) . "." . $fileActualExt;
                            $fileDestination = '../upload/' . $fileNameNew;
                            move_uploaded_file($fileTmpName, $fileDestination);
                        } else {
            ?>
                            <script>
                                alert("Your File is too large than the limitation..");
                            </script>
                        <?php
                        }
                    } else {
                        ?>
                        <script>
                            alert("There was an error while uploading the file..");
                        </script>
                    <?php
                    }
                } else {
                    ?>
                    <script>
                        alert("You cannot upload this File Type..");
                    </script>
                <?php
                }




                $pname =  mysqli_real_escape_string($con, $_POST['pname']);
                $pcat =  mysqli_real_escape_string($con, $_POST['pcatagory']);
                $pprice =  mysqli_real_escape_string($con, $_POST['pprice']);
                $pdesc =  mysqli_real_escape_string($con, $_POST['pdesc']);
                $pquantity =  mysqli_real_escape_string($con, $_POST['pquantity']);
                $pimg =  mysqli_real_escape_string($con, $fileDestination);
                $vendor_id = $_SESSION['vendor_id'];


                $insertquery = "insert into products(prod_name,vendor_id,prod_catagory,prod_price,prod_desc,prod_qaut,prod_img)values('$pname','$vendor_id','$pcat','$pprice','$pdesc','$pquantity','$pimg')";
                $iquery = mysqli_query($con, $insertquery);
                if ($iquery) {
                ?>
                    <script>
                        alert("Product Added succesfully..");
                        location.replace("vindex.php");
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


            ?>


            <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>
        " method="post" enctype="multipart/form-data">
                <div class=" m-3">
                    <div class="flex flex-wrap -mx-3">
                        <div class="w-full max-w-full px-3">
                            <div class="relative flex flex-col min-w-0 break-word border-0 ">

                                <div class="border-2 backdrop-blur-xl bg-white/30  border-purple-400 rounded-2xl p-6 shadow-2xl shadow-purple-400">
                                    <div class="border-black/12.5 rounded-t-2xl border-b-0 border-solid p-6 pb-0">
                                        <div class="flex items-center">
                                            <p class="mb-0 text-indigo-500">Hello There... </p>
                                        </div>
                                    </div>
                                    <div class="flex-auto p-6">
                                        <p class="leading-normal uppercase dark:text-white dark:opacity-60 text-sm">Product
                                            Information
                                        </p>
                                        <div class="flex flex-wrap -mx-3">
                                            <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
                                                <div class="mb-4">
                                                    <label for="username" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Product
                                                        Name :</label>
                                                    <input type="text" name="pname" value="" class="text-sm leading-5.6 ease block w-64 appearance-none bg-clip-padding px-3 py-2 font-normal text-gray-700 transition-all placeholder:text-gray-500 ring-2 focus:ring-purple-500 focus:outline-none border-2 border-purple-400 rounded-2xl h-12 bg-slate-50" required>
                                                </div>
                                            </div>
                                            <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
                                                <div class="mb-4">
                                                    <label for="email" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Catagory
                                                        :</label>

                                                    <select class="text-sm leading-5.6 ease block w-64 appearance-none bg-clip-padding px-3 py-2 font-normal text-gray-700 transition-all placeholder:text-gray-500 ring-2 focus:ring-purple-500 focus:outline-none border-2 border-purple-400 rounded-2xl h-12 bg-slate-50" name="pcatagory" id="" required>
                                                        <option value="Handmade">Handmade</option>
                                                        <option value="Wood">Wood</option>
                                                        <option value="Soil Material">Soil Material</option>
                                                        <option value="Clothing">Clothing</option>
                                                        <option value="Toys">Toys</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
                                                <div class="mb-4">
                                                    <label for="pdesc" class="w-full inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Product
                                                        Description :

                                                    </label>
                                                    <textarea class="ring-2 focus:ring-purple-500 focus:outline-none border-2 border-purple-400 rounded-2xl p-2 bg-slate-50" name="pdesc" id="" cols="27" rows="6" required></textarea>
                                                </div>
                                            </div>

                                        </div>
                                        <hr class="h-px mx-0 my-4 bg-transparent border-0 opacity-25 bg-gradient-to-r from-transparent via-black/40 to-transparent dark:bg-gradient-to-r dark:from-transparent dark:via-white dark:to-transparent ">

                                        <p class="leading-normal uppercase dark:text-white dark:opacity-60 text-sm">Upload
                                            the Product Image
                                        </p>
                                        <div class="flex flex-wrap -mx-3">
                                            <div class="w-full max-w-full px-3 shrink-0 md:w-full md:flex-0">
                                                <div class="mb-4">
                                                    <label for="address" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Upload
                                                        Here :</label>

                                                    <div class="flex justify-center items-center w-full">
                                                        <label for="dropzone-file" class="flex flex-col justify-center items-center w-full h-64 bg-gray-50 rounded-lg border-2 border-gray-300 border-dashed cursor-pointer dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                                                            <div class="flex flex-col justify-center items-center pt-5 pb-6">
                                                                <svg aria-hidden="true" class="mb-3 w-10 h-10 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12">
                                                                    </path>
                                                                </svg>
                                                                <p class="mb-2 text-sm text-gray-500 dark:text-gray-400">
                                                                    <span class="font-semibold">Click to upload</span> or
                                                                    drag and drop
                                                                </p>
                                                                <p class="text-xs text-gray-500 dark:text-gray-400">
                                                                    PNG, JPG or JPEG</p>
                                                            </div>
                                                            <input id="dropzone-file" type="file" name="file" class="" required>
                                                        </label>
                                                    </div>




                                                </div>
                                                <div class="w-full flex">
                                                    <div class="mb-4">
                                                        <label for="city" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Quanitity
                                                            :</label>
                                                        <input type="number" name="pquantity" value="" class="text-sm leading-5.6 ease block w-64 appearance-none bg-clip-padding px-3 py-2 font-normal text-gray-700 transition-all placeholder:text-gray-500 ring-2 focus:ring-purple-500 focus:outline-none border-2 border-purple-400 rounded-2xl h-12 bg-slate-50" required>
                                                    </div>
                                                    <div class="mx-4">
                                                        <label for="country" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Price
                                                            :</label>
                                                        <input type="number" name="pprice" value="" class="text-sm leading-5.6 ease block w-64 appearance-none bg-clip-padding px-3 py-2 font-normal text-gray-700 transition-all placeholder:text-gray-500 ring-2 focus:ring-purple-500 focus:outline-none border-2 border-purple-400 rounded-2xl h-12 bg-slate-50" required>
                                                    </div>
                                                </div>

                                            </div>
                                            <hr class="h-px mx-0 my-4 bg-transparent border-0 opacity-25 bg-gradient-to-r from-transparent via-black/40 to-transparent dark:bg-gradient-to-r dark:from-transparent dark:via-white dark:to-transparent ">

                                            <div class="w-full flex justify-end">
                                                <button name="submit" type="submit" class="text-white bg-purple-500 border-0 py-2 px-8 focus:outline-none hover:bg-purple-600 rounded text-lg">Submit</button>
                                            </div>

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
</body>

</html>