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
    <aside class="w-1/5 h-screen sticky top-0">
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
            <a href="vindex.php" class="flex items-center p-2 text-base font-normal text-black rounded-lg bg-gray-100 ">
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


      <div class="sm:rounded-xl p-2">


        <div class=" shadow-2xl shadow-purple-400 rounded-xl backdrop-blur-xl bg-white/30  p-6">
          <div class="">
            <table id="myTable">
              <thead>
                <tr>
                  <th class=" text-purple-400">Id</th>
                  <th class=" text-purple-400">Product</th>
                  <th class=" text-purple-400">Catagory</th>
                  <th class=" text-purple-400">Quantity</th>
                  <th class=" text-purple-400">Price</th>
                  <th class=" text-purple-400">Action</th>
                </tr>
              </thead>
              <tbody>
                <?php

                while ($data = mysqli_fetch_assoc($res)) {

                  echo "
                  <tr>
                      <td>" . $data['prod_id'] . "</td>
                      <td>" . $data['prod_name'] . "</td>
                      <td>" . $data['prod_catagory'] . "</td>
                      <td>" . $data['prod_qaut'] . "</td>
                      <td>" . $data['prod_price'] . "</td>
                      <td><a href='vupdate.php?id=$data[prod_id]&pname=$data[prod_name]&pcat=$data[prod_catagory]&pqaut=$data[prod_qaut]&pprice=$data[prod_price]&pdesc=$data[prod_desc]&pimg=$data[prod_img]'>Edit</a></td>

                  </tr>
                  ";
                }


                ?>

              </tbody>

            </table>
          </div>
        </div>

      </div>





    </main>
  </div>






  <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
  <script src="../js/tailwind.js"></script>
  <script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.11"></script>
  <script src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
  <script>
    $('#myTable').DataTable({
      dom: '<"toolbar">frtip',
    });

    $('div.toolbar').html('<h1 class="text-lg text-purple-400 m-2">Your Product List</h1>');
  </script>

  <script>
    var typed = new Typed("#typingtxt", {
      strings: ["Welcome to as A vendor"],

      typeSpeed: 40

    });
  </script>
</body>

</html>