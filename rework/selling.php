<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Selling on T4T!</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="logo_banner">
    <img src = "Logo.png" width ="400px">
  </div>
  <div class="header">
  	<h2>Selling</h2>
  </div>

  <form method="post" action="selling.php">
    <?php include('errors.php'); ?>
    <div class="input-group">
  		<label>Product Name</label>
  		<input type="text" name="product_name" value="<?php echo $product_name; ?>">
  	</div>
    <div class="input-group">
      <label>Price (HKD)</label>
      <input type="number" step="0.1" name="price" value="<?php echo $price; ?>">
    </div>
    <div class="input-group">
      <label>Photo link (e.g. http://www.example.com)</label>
      <input type="url" name="photo" value="<?php echo $photo; ?>">
    </div>
    <p>
      Create a link for your photo <a href="https://imgbb.com">here</a>
    </p>
    <div class="input-group">
      <button type="submit" class="btn" name="sell_this">Submit</button>
      <center><p><button onclick="location.href='index.php'" class="btn" name="selling_link">Homepage</button></p>
      <p><a href="index.php?logout='1'">logout</a></p></center>
    </div>
  </form>
</body>
</html>
