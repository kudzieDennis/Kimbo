<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Orders</title>
  	<?php include_once('header.php') ?>
  <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <div class="header">
      <h2>New order</h2>
    </div>

    <form method="post" action="orders_code.php">

      <div class="input-group">
        <label>Client Name</label>
        <select class="" required name="client_name">
          <?php
              $db   =mysqli_connect('localhost', 'root', '', 'kimbo');
              $sql  ="SELECT client_name FROM customers";
              $data =mysqli_query($db,$sql);
                ?>
              <option>Select Customer...</option>
              <?php while($row1=mysqli_fetch_array($data)){ ?>
              <option value="<?php echo $row1['client_name']; ?>"><?php echo $row1['client_name'];?></option>
              <?php }
          ?>
        </select>
      </div>
      <div class="input-group">
        <label>Product</label>
        <select class="" required name="product">
          <option value="printers">Printers</option>
          <option value="consumables">Consumables</option>
          <option value="laptops">Laptops</option>
          <option value="service">Service</option>
          <option value="other">Other...(specify in description)</option>
        </select>
      </div>
      <div class="input-group">
        <label>Quantity</label>
        <input type="number"required min="1" name="quantity" required>
      </div>
      <div class="input-group">
        <label>Description</label>
        <textarea name="description" rows="6" cols=""></textarea>
      </div>
      <div class="input-group">
        <label>Contact</label>
        <input type="number" name="contact" required>
      </div>
      <div class="input-group">
        <label><u>Total Price</u> $:</label>
        <input type="number" min="1" required name="price" required>
      </div>
      <div class="input-group">
        <button type="submit" class="btn">Submit order</button>
      </div>
    </form>
  </body>
  <?php include_once 'footer.php'; ?>
</html>
