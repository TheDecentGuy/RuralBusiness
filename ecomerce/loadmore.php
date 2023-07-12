<?php
include "../dbcon.php";

$commentCountNew = $_POST['commentCountNew'];
$res = mysqli_query($con, "select * from products limit $commentCountNew");

while ($data = mysqli_fetch_assoc($res)) {
?>
  <div class="w-full max-w-[15rem] bg-white rounded-xl shadow-xl border-2 hover:border-purple-400 hover:shadow-2xl hover:shadow-purple-400 m-1">
    <a href="details.php?id=<?php echo $data['prod_id']; ?>&pname=<?php echo $data['prod_name']; ?>&pcat=<?php echo $data['prod_catagory']; ?>&pqaut=<?php echo $data['prod_qaut']; ?>&pprice=<?php echo $data['prod_price']; ?>&pdesc=<?php echo $data['prod_desc']; ?>&pimg=<?php echo $data['prod_img']; ?>&btn=<?php echo "Add to Cart"; ?>" class="">

      <img name="img" class="object-scale-down h-48 w-96" src="<?= $data['prod_img'] ?>" alt="product image">

    </a>
    <div class="px-5 pb-5">
      <a href="#">
        <h5 name="name" class="text-md font-semibold tracking-tight text-gray-900 dark:text-white">
          <?= $data['prod_name'] ?>
        </h5>
      </a>
      <div class="flex items-center mt-2.5 mb-5">

        <span name="cat" class="bg-blue-100 text-blue-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded ">
          <?= $data['prod_catagory'] ?>
        </span>
      </div>
      <div class="flex justify-between items-center">
        <span name="price" class="text-lg font-bold text-gray-900 dark:text-white">₹
          <?= $data['prod_price'] ?>
        </span>
        <a href="details.php?id=<?php echo $data['prod_id']; ?>&pname=<?php echo $data['prod_name']; ?>&pcat=<?php echo $data['prod_catagory']; ?>&pqaut=<?php echo $data['prod_qaut']; ?>&pprice=<?php echo $data['prod_price']; ?>&pdesc=<?php echo $data['prod_desc']; ?>&pimg=<?php echo $data['prod_img']; ?>&btn=<?php echo "Add to Cart"; ?>"><button name="add" class="text-white bg-violet-700 hover:bg-purple-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-2xl text-sm px-5 py-2.5 text-center ">BUY</button></a>
        <input type="hidden" value="<?= $data['prod_id'] ?>" name="product_id">
        <input type="hidden" value="<?= $data['prod_qaut'] ?>" name="product_qty">
        <input type="hidden" value="<?= $data['prod_price'] ?>" name="product_price">
        <input type="hidden" value="<?= $data['prod_img'] ?>" name="product_img">
        <input type="hidden" value="<?= $data['prod_catagory'] ?>" name="product_cat">
        <input type="hidden" value="<?= $data['prod_desc'] ?>" name="product_desc">
        <input type="hidden" value="<?= $data['prod_name'] ?>" name="product_name">



      </div>
    </div>
  </div>
<?php

}
?>