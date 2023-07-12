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

$emailquery = "select * from cart";
$Equery = mysqli_query($con, $emailquery);
$cartcount = mysqli_num_rows($Equery);
$itemquery = "select * from order_items";
$Iquery = mysqli_query($con, $itemquery);
$itemcount = mysqli_num_rows($Iquery);
if ($itemcount < 1) {
?>
  <script>
    alert("You have not Order the product yet......")
    location.replace("ecomerce.php");
  </script>
<?php
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.3/dist/flowbite.min.css" />
  <link rel="stylesheet" href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css" />
  <style>
    body {
      background: url('../img/pbg.jpeg') no-repeat center center fixed;
      -webkit-background-size: cover;
      -moz-background-size: cover;
      -o-background-size: cover;
      background-size: cover;
    }
  </style>

  <title>Rural Business | Login</title>
</head>

<body>
  <header class="opacity-90 text-gray-600 body-font bg-gradient-to-r from-violet-500 to-fuchsia-500 shadow-2xl shadow-purple-500 rounded-2xl m-3">
    <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
      <nav class="flex lg:w-2/5 flex-wrap items-center  text-white text-base md:ml-auto">
        <a href="ecomerce.php" class="mr-5 text-white hover:text-black cursor-pointer">Shop Now</a>
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
        <p class="text-white">Welcome To Rural Business |</p>
      </div>
    </div>
  </header>

  <div class="flex">
    <aside class="w-1/5 h-screen sticky top-0">
      <div class="overflow-y-auto py-4 px-3 bg-violet-500 opacity-80 rounded-xl shadow-xl shadow-purple-500 m-3">
        <ul class="space-y-2">
          <li>
            <a href="#" class="flex items-center p-2 text-base font-normal text-white rounded-lg cursor-default">
              <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6  transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd">
                </path>
              </svg>
              <span class="flex-1 ml-3 whitespace-nowrap">Hello
                <?php echo $_SESSION['username'];  ?>
              </span>
            </a>
          </li>
          <li>
            <a href="orders.php" class="flex items-center p-2 text-base font-normal text-white hover:text-black rounded-lg  hover:bg-gray-100 ">
              <svg aria-hidden="true" class="w-6 h-6  transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path>
                <path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path>
              </svg>

              <span class="flex-1 ml-3 whitespace-nowrap">Your Orders</span>
              <?= $itemcount; ?>
            </a>
          </li>
          <li>
            <button type="button" class="flex items-center p-2 w-full text-base font-normal text-white hover:text-black rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700" aria-controls="dropdown-example" data-collapse-toggle="dropdown-example">
              <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 transition duration-75 group-hover:text-black" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M10 2a4 4 0 00-4 4v1H5a1 1 0 00-.994.89l-1 9A1 1 0 004 18h12a1 1 0 00.994-1.11l-1-9A1 1 0 0015 7h-1V6a4 4 0 00-4-4zm2 5V6a2 2 0 10-4 0v1h4zm-6 3a1 1 0 112 0 1 1 0 01-2 0zm7-1a1 1 0 100 2 1 1 0 000-2z" clip-rule="evenodd"></path>
              </svg>
              <span class="flex-1 ml-3 text-left hover:text-black whitespace-nowrap" sidebar-toggle-item="">Catagories</span>
              <svg sidebar-toggle-item="" class="w-6 h-6 hover:text-black" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
              </svg>
            </button>
            <ul id="dropdown-example" class="hidden py-2 space-y-2">
              <li>
                <a href="ecomerce.php?catagory=<?= "Catagory1" ?>" class="flex items-center p-2 pl-11 w-full text-base font-normal text-white rounded-lg transition duration-75 group hover:bg-gray-100 hover:text-black">Handmade</a>
              </li>
              <li>
                <a href="ecomerce.php?catagory=<?= "Catagory2" ?>" class="flex items-center p-2 pl-11 w-full text-base font-normal text-white rounded-lg transition duration-75 group hover:bg-gray-100 hover:text-black">Wood</a>
              </li>
              <li>
                <a href="ecomerce.php?catagory=<?= "Catagory3" ?>" class="flex items-center p-2 pl-11 w-full text-base font-normal text-white rounded-lg transition duration-75 group hover:bg-gray-100 hover:text-black">Soil Material</a>
              </li>
              <li>
                <a href="ecomerce.php?catagory=<?= "Catagory4" ?>" class="flex items-center p-2 pl-11 w-full text-base font-normal text-white rounded-lg transition duration-75 group hover:bg-gray-100 hover:text-black">Clothing</a>
              </li>
              <li>
                <a href="ecomerce.php?catagory=<?= "Catagory4" ?>" class="flex items-center p-2 pl-11 w-full text-base font-normal text-white rounded-lg transition duration-75 group hover:bg-gray-100 hover:text-black">Toys</a>
              </li>
            </ul>
          </li>


          <li>
            <a href="cart.php" class="flex items-center p-2 text-base font-normal text-white hover:text-black rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
              <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6  transition duration-75" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M10 2a4 4 0 00-4 4v1H5a1 1 0 00-.994.89l-1 9A1 1 0 004 18h12a1 1 0 00.994-1.11l-1-9A1 1 0 0015 7h-1V6a4 4 0 00-4-4zm2 5V6a2 2 0 10-4 0v1h4zm-6 3a1 1 0 112 0 1 1 0 01-2 0zm7-1a1 1 0 100 2 1 1 0 000-2z" clip-rule="evenodd"></path>
              </svg>
              <span class="flex-1 ml-3 whitespace-nowrap">Cart</span>
              <?= $cartcount; ?>

            </a>
          </li>
          <li>
            <a href="logout.php" class="flex items-center p-2 text-base font-normal text-white hover:text-red-400 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
              <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M3 3a1 1 0 00-1 1v12a1 1 0 102 0V4a1 1 0 00-1-1zm10.293 9.293a1 1 0 001.414 1.414l3-3a1 1 0 000-1.414l-3-3a1 1 0 10-1.414 1.414L14.586 9H7a1 1 0 100 2h7.586l-1.293 1.293z" clip-rule="evenodd"></path>
              </svg>
              <span class="flex-1 ml-3 whitespace-nowrap">Sign Out</span>
            </a>
          </li>
        </ul>
      </div>
    </aside>


    <main class="w-full">

      <div class="ml-6 mt-4">
        <caption class="p-5 text-lg font-semibold text-left text-gray-900 bg-white dark:text-white dark:bg-gray-800">
          Your Orders
          <p class="mt-1 text-sm font-normal text-gray-500 dark:text-gray-400">Thank You so much for Ordering product from our website. You can Browse a list of Ordered products through from Below Table And can make changes as you want to . </p>
        </caption>
      </div>
      <div class="overflow-x-auto backdrop-blur-md bg-white/30 relative mt-3 mx-4 border-2 rounded-xl border-purple-400 ">
        <table id="myTable" class="w-full text-sm text-left text-gray-500 dark:text-gray-400">

          <thead class="text-xs text-gray-900 uppercase dark:text-gray-400">

            <tr>
              <th scope="col" class="py-3 px-6 text-purple-500">
                Product name
              </th>
              <th scope="col" class="py-3 px-6 text-purple-500">
                Quantity
              </th>
              <th scope="col" class="py-3 px-6 text-purple-500">
                Category
              </th>
              <th scope="col" class="py-3 px-6 text-purple-500">
                Price
              </th>
            </tr>

          </thead>
          <tbody>
            <?php
            $user_id = (int) $_SESSION['userid'];
            $order_id = (int)$order_data['id'];
            $select_query = "SELECT * from order_items where user_id ='$user_id'";
            $result = mysqli_query($con, $select_query);



            while ($data = mysqli_fetch_assoc($result)) {
              $pid = (int)$data['prod_id'];

              $res = mysqli_query($con, "select * from products where prod_id='$pid'");

              $product_data = mysqli_fetch_assoc($res);


            ?>
              <tr class="bg-white dark:bg-gray-800">
                <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                  <?= strtoupper($product_data['prod_name']); ?>
                </th>
                <td class="py-4 px-6">
                  <h1 class="ml-6"><?= $data['qty']; ?></h1>
                </td>
                <td class="py-4 px-6">
                  <?= $product_data['prod_catagory']; ?>
                </td>
                <td class="py-4 px-6">
                  ₹<?= $data['price']; ?>
                </td>
              </tr>
            <?php
            }
            ?>
          </tbody>
        </table>
      </div>

      <?php
      if (isset($_POST['cancel'])) {
        $user_id = $_SESSION['userid'];
        $order_query = mysqli_query($con, "SELECT * FROM orders WHERE user_id = '$user_id'");
        $order_data = mysqli_fetch_assoc($order_query);
        $order_id = $order_data['id'];
        $remove_item = mysqli_query($con, "DELETE FROM order_items WHERE order_id ='$order_id'");
        if ($remove_item) {
          $cancel_query = mysqli_query($con, "DELETE FROM orders WHERE user_id ='$user_id'");
      ?>
          <script>
            alert("Order canceled susscessfully...");
            location.replace("ecomerce.php");
          </script>
        <?php
        } else {
        ?>
          <script>
            alert("There is problem while canceling the order ");
            location.replace("orders.php");
          </script>
      <?php
        }
      }
      ?>

      <form action="" method="post">
        <div class="flex justify-end h-auto mx-4 w-auto ">
          <a name="" id="invoicebtn" class="bg-sky-400 text-white  m-2 mt-4 rounded-2xl py-2 px-4 hover:bg-blue-500 cursor-pointer">Show Invoice</a>
          <button name="cancel" id="cancel" class="cursor-pointer bg-red-500 hover:bg-red-600 text-white  m-2 mt-4 rounded-2xl py-2 px-4">Cancel Your Order</button>
        </div>
      </form>


      <hr class="mt-5">

      <section id="invoice" class="py-10 " hidden>
        <div class="mx-auto bg-white  ">
          <article class="">
            <div class="bg-[white] rounded-2xl border-2 shadow-2xl shadow-purple-500 mx-4 ">
              <div class="p-9">
                <div class="space-y-6 text-slate-700">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10 text-white p-2 bg-purple-500 rounded-full" viewBox="0 0 24 24">
                    <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
                  </svg>

                  <p class="text-xl font-extrabold tracking-tight uppercase font-body">
                    thank you...
                  </p>
                </div>
              </div>
              <div class="p-9">
                <div class="flex w-full">
                  <div class="grid grid-cols-4 gap-12">
                    <div class="text-sm font-light text-slate-500">

                      <p class="text-sm font-normal text-slate-700">Billed To
                        <?= strtoupper($_SESSION['username']); ?>
                      </p>
                      <p>BILL TO <?php
                                  $userid = (int) $_SESSION['userid'];
                                  $order_query = mysqli_query($con, "select * from orders where user_id='$userid'");
                                  $order_details = mysqli_fetch_assoc($order_query);

                                  echo $order_details['address'];;
                                  ?></p>
                    </div>

                  </div>
                </div>
              </div>

              <div class="p-9">
                <div class="flex flex-col mx-0 mt-8">
                  <table class="min-w-full divide-y divide-slate-500">
                    <thead>
                      <tr>
                        <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-sm font-normal text-slate-700 sm:pl-6 md:pl-0">
                          Description
                        </th>
                        <th scope="col" class="hidden py-3.5 px-3 text-right text-sm font-normal text-slate-700 sm:table-cell">
                          Quantity
                        </th>
                        <th scope="col" class="hidden py-3.5 px-3 text-right text-sm font-normal text-slate-700 sm:table-cell">
                          Rate
                        </th>
                        <th scope="col" class="py-3.5 pl-3 pr-4 text-right text-sm font-normal text-slate-700 sm:pr-6 md:pr-0">
                          Amount
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php

                      $select_query = "select * from order_items";
                      $result = mysqli_query($con, $select_query);


                      $total = 0;

                      while ($data = mysqli_fetch_assoc($result)) {
                        $pid = (int)$data['prod_id'];

                        $res = mysqli_query($con, "select * from products where prod_id='$pid'");

                        $product_data = mysqli_fetch_assoc($res);


                      ?>

                        <tr class="border-b border-slate-200">
                          <td class="py-4 pl-4 pr-3 text-sm sm:pl-6 md:pl-0">
                            <div class="font-medium text-slate-700"><?= strtoupper($product_data['prod_name']); ?></div>
                          </td>
                          <td class="hidden px-3 py-4 text-sm text-right text-slate-500 sm:table-cell">
                            <?= $data['qty'] ?>
                          </td>
                          <td class="hidden px-3 py-4 text-sm text-right text-slate-500 sm:table-cell">
                            ₹<?= $data['price'] ?>
                          </td>
                          <td class="py-4 pl-3 pr-4 text-sm text-right text-slate-500 sm:pr-6 md:pr-0">
                            ₹<?= $data['price'] ?>

                          </td>
                        </tr>
                      <?php
                        $total = $total + (int)$data['price'];
                        $total = $total * (int)$data['qty'];
                      }
                      ?>

                      <!-- Here you can write more products/tasks that you want to charge for-->
                    </tbody>
                    <tfoot>
                      <tr>
                        <th scope="row" colspan="3" class="hidden pt-6 pl-6 pr-3 text-sm font-light text-right text-slate-500 sm:table-cell md:pl-0">
                          Subtotal
                        </th>
                        <td class="pt-6 pl-3 pr-4 text-sm text-right text-slate-500 sm:pr-6 md:pr-0">
                          ₹<?= $total; ?>
                        </td>
                      </tr>
                      <tr>
                        <th scope="row" colspan="3" class="hidden pt-6 pl-6 pr-3 text-sm font-light text-right text-slate-500 sm:table-cell md:pl-0">
                          Shipping
                        </th>
                        <td class="pt-6 pl-3 pr-4 text-sm text-right text-slate-500 sm:pr-6 md:pr-0">
                          ₹100.00
                        </td>
                      </tr>
                      <tr>
                        <th scope="row" colspan="3" class="hidden pt-4 pl-6 pr-3 text-sm font-light text-right text-slate-500 sm:table-cell md:pl-0">
                          Tax
                        </th>

                        <td class="pt-4 pl-3 pr-4 text-sm text-right text-slate-500 sm:pr-6 md:pr-0">
                          ₹<?php $tax = (18 / 100) * $total;
                            echo $tax;
                            $total = $total + $tax + 100; ?>
                        </td>
                      </tr>
                      <tr>
                        <th scope="row" colspan="3" class="hidden pt-4 pl-6 pr-3 text-sm font-normal text-right text-slate-700 sm:table-cell md:pl-0">
                          Total
                        </th>

                        <td class="pt-4 pl-3 pr-4 text-sm font-normal text-right text-slate-700 sm:pr-6 md:pr-0">
                          ₹<?= $total; ?>
                        </td>
                      </tr>
                    </tfoot>
                  </table>
                </div>
              </div>

              <div class="mt-48 p-9">
                <div class="border-t pt-9 border-slate-200">
                  <div class="text-sm font-light text-slate-700">
                    <p>
                      Payment terms are 14 days. Please be aware that according to the
                      Late Payment of Unwrapped Debts Act 0000, freelancers are
                      entitled to claim a 00.00 late fee upon non-payment of debts
                      after this time, at which point a new invoice will be submitted
                      with the addition of this fee. If payment of the revised invoice
                      is not received within a further 14 days, additional interest
                      will be charged to the overdue account and a statutory rate of
                      8% plus Bank of England base of 0.5%, totalling 8.5%. Parties
                      cannot contract out of the Act’s provisions.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </article>
        </div>
      </section>
    </main>
  </div>




  <footer class="text-gray-600 body-font ">
    <div class="container px-5 py-8 mx-auto flex items-center sm:flex-row flex-col">
      <a class="flex title-font font-medium items-center md:justify-start justify-center text-gray-900">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10 text-white p-2 bg-purple-500 rounded-full" viewBox="0 0 24 24">
          <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
        </svg>
        <span class="ml-3 text-xl">Rural Business</span>
      </a>
      <p class="text-sm text-gray-500 sm:ml-4 sm:pl-4 sm:border-l-2 sm:border-gray-200 sm:py-2 sm:mt-0 mt-4">
        © 2022 Vrushabh Gawde
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

  <script src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
  <script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    $(document).ready(function() {
      var commentCount = 12;
      $("#load").click(function() {
        console.log("Loadmore Button is clicked");
        var commentCount = 12 + 8;
        $("#data").load("loadmore.php", {
          commentCountNew: commentCount
        });
      });





      $("#invoicebtn").click(function() {

        var rowCount = $('#myTable >tbody >tr').length;


        if (rowCount) {
          $("#invoice").toggle();
          $("#invoicebtn").html("Show Invoice");
        }
        if ($('#invoice').is(':visible')) {
          $("#invoicebtn").html("Hide Invoice");
        }


      });


    });
  </script>

</body>




</html>