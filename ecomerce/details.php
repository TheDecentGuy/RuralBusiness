<?php
include "../dbcon.php";
session_start();
$res = mysqli_query($con, "select * from products limit 12");

if (!isset($_SESSION['username'])) {
?>
  <script>
    location.replace("../login.php");
  </script>
<?php
}
$emailquery = "select * from cart";
$itemquery = "select * from order_items";

$Equery = mysqli_query($con, $emailquery);
$Iquery = mysqli_query($con, $itemquery);

$cartcount = mysqli_num_rows($Equery);
$itemcount = mysqli_num_rows($Iquery);

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.3/dist/flowbite.min.css" />

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
                <a href="ecomerce.php?catagory=<?= "Handmade" ?>" class="flex items-center p-2 pl-11 w-full text-base font-normal text-white rounded-lg transition duration-75 group hover:bg-gray-100 hover:text-black">Handmade</a>
              </li>
              <li>
                <a href="ecomerce.php?catagory=<?= "Wood" ?>" class="flex items-center p-2 pl-11 w-full text-base font-normal text-white rounded-lg transition duration-75 group hover:bg-gray-100 hover:text-black">Wood</a>
              </li>
              <li>
                <a href="ecomerce.php?catagory=<?= "Soil Material" ?>" class="flex items-center p-2 pl-11 w-full text-base font-normal text-white rounded-lg transition duration-75 group hover:bg-gray-100 hover:text-black">Soil Material</a>
              </li>
              <li>
                <a href="ecomerce.php?catagory=<?= "Clothing" ?>" class="flex items-center p-2 pl-11 w-full text-base font-normal text-white rounded-lg transition duration-75 group hover:bg-gray-100 hover:text-black">Clothing</a>
              </li>
              <li>
                <a href="ecomerce.php?catagory=<?= "Toys" ?>" class="flex items-center p-2 pl-11 w-full text-base font-normal text-white rounded-lg transition duration-75 group hover:bg-gray-100 hover:text-black">Toys</a>
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

      <?php
      $res = mysqli_query($con, "select * from cart");
      $data = mysqli_fetch_assoc($res);

      $uid = $_SESSION['userid'];
      $pid = (int) mysqli_real_escape_string($con, $_GET['id']);
      $pname = mysqli_real_escape_string($con, $_GET['pname']);
      $pcat = mysqli_real_escape_string($con, $_GET['pcat']);
      $pqaut = mysqli_real_escape_string($con, $_POST['product_qty']);
      $pprice = mysqli_real_escape_string($con, $_GET['pprice']);
      $pdesc = mysqli_real_escape_string($con, $_GET['pdesc']);
      $pimg = mysqli_real_escape_string($con, $_GET['pimg']);


      if (isset($_POST['add'])) {
        if ($pid == (int)$data['p_id']) {
      ?>
          <script>
            alert("Product is already Available in the Cart......");
          </script>
        <?php
        } else {
          $vendor_query = mysqli_query($con, "SELECT * FROM products WHERE prod_id ='$pid'");
          $vendor_data = mysqli_fetch_assoc($vendor_query);
          $v_id = $vendor_data['vendor_id'];
          $insert_product = mysqli_query($con, "INSERT INTO `cart` (user_id,p_id,vendor_id,p_name,p_desc,p_img,p_qty,p_price,p_cat)values('$uid','$pid','$v_id','$pname','$pdesc','$pimg','$pqaut','$pprice','$pcat')");

        ?>
          <script>
            alert("Item Added to the Cart...");
            location.replace("ecomerce.php");
          </script>
        <?php
        }
      }

      if (isset($_POST['addupdate'])) {
        $pqaut = mysqli_real_escape_string($con, $_POST['product_qty']);
        $cid = (int)$_GET['cid'];
        $updatequery = "UPDATE CART SET p_qty='$pqaut' where cart_id='$cid'";
        $run = mysqli_query($con, $updatequery);
        if (isset($run)) {

        ?>
          <script>
            alert("Quantity Updated Succesfully...");
            location.replace("cart.php");
          </script>

      <?php
        }
      }


      ?>


      <section class="text-gray-600 body-font overflow-hidden">
        <div class="container px-5 py-24 mx-auto shadow-xl rounded-xl">
          <form action="" method="post">
            <div class="lg:w-4/5 backdrop-blur-md bg-white/30  mx-auto flex flex-wrap p-2 border-2 border-purple-500 rounded-2xl shadow-2xl shadow-purple-500">
              <img alt="ecommerce" class="lg:w-1/2 w-full lg:h-auto h-64 object-cover object-center rounded" src="<?php echo $_GET['pimg']; ?>" />
              <div class="lg:w-1/2 w-full lg:pl-10 lg:py-6 mt-6 lg:mt-0">
                <h2 class="text-sm title-font text-gray-500 tracking-widest">
                  <?php echo $_GET['pcat']; ?>
                </h2>
                <h1 class="text-gray-900 text-3xl title-font font-medium mb-1">
                  <?php echo strtoupper($_GET['pname']); ?>
                </h1>

                <p class="h-36 leading-relaxed">
                  <?php echo $_GET['pdesc']; ?>
                </p>
                <div class="flex mt-6 items-center pb-5 border-b-2 border-gray-100 mb-5">
                  <div class="flex">
                    <span class="mr-3">Available Quanitity : <?php echo $_GET['pqaut']; ?></span>

                    <h1>
                      Enter Quanitity :
                    </h1>
                    <input name="product_qty" class="ml-2 w-16 h-7 rounded-xl border-2 border-purple-400" type="number" value="1">
                  </div>
                  <div class="flex ml-6 items-center">

                  </div>
                </div>
                <div class="flex">
                  <span class="title-font font-medium text-2xl text-gray-900">₹<?php echo $_GET['pprice']; ?></span>
                  <button name="add<?= $_GET['cupdate']; ?>" class="flex ml-auto text-white bg-purple-500 border-0 py-2 px-6 focus:outline-none hover:bg-purple-400 rounded-2xl mr-4">
                    <?= $_GET['btn']; ?>
                  </button>


                  <!-- <button class="rounded-full w-10 h-10 bg-gray-200 p-0 border-0 inline-flex items-center justify-center text-gray-500 ml-4">
                  <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                    <path d="M20.84 4.61a5.5 5.5 0 00-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 00-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 000-7.78z">
                    </path>
                  </svg>
                </button> -->


                </div>
              </div>
            </div>
          </form>
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

    });
  </script>

</body>

</html>