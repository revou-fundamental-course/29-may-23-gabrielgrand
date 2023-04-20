<?php
include "koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="style.css">
</head>
<body>


<?php include "navbar.php";?>
<?php
            $sql = "SELECT * FROM db_kategori where id_kategori=$_GET[id]";
              $result = $conn->query($sql);
              $row = $result->fetch_assoc();
            ?>

<div class="container mb-4">
<h3 class="text-center font-weight-bold m-4"><?=$row['nama_kategori'];?></h3>


<div class="row mx-auto">
  <?php
      $sql2 = "SELECT * FROM db_product where id_kategori=$_GET[id]";
        $result2 = $conn->query($sql2);
       if ($result2->num_rows > 0) {
    // output data of each row
      $no=1;
       while($row2 = $result2->fetch_assoc()) {
      ?>

  <div class="card mr-2 ml-2 mt-4" style="width: 18rem;">
    <a href="detailproduk.php?id=<?=$row2['productID'];?>">
    <img src="image/<?=$row2['imagesource'];?>" class="card-img-top" alt="...">
  </a>
    <div class="card-body">
      <p class="card-text"><?=$row2['productName'];?></p>
      Rp. <?=$row2['price'];?>
      
    </div>
  </div>
  <?php $no++; }}     ?>
</div>
</div>

 
<?php include "footer.php";?>


  
</body>
</html>
