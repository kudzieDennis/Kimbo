<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Advertise on Kimbo</title>
    	<?php include_once('header.php') ?>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <div class="header">
      <h2>Adverts Dashboard</h2>
    </div>
    <form method="POST" action="email_code.php">

      <div class="input-group">
        <label>From:</label> <small style="color:grey">(Recommended sales@dsc.co.zw)</small>
        <input type="email" name="sender" placeholder="example@domain.ext" required>
      </div>
      <div class="input-group">
        <label>Subject:</label> <small style="color:grey">(Campaign name)</small>
        <input type="text" name="subject" required >
      </div>
      <div class="input-group">
        <label>Message:</label>
        <textarea name="message" required></textarea>
      </div>
      <div class="input-group">
        <label>Attachment</label> <small style="color:grey">(attach pictures, pdf's and...)</small>
        <input type="file" name="attachment" encrypt="multipart/form-data" >
      </div>
      <div class="input-group">
        <button type="submit" class="btn" name="submit">Send Flood email</button>
        <small style="color:grey">(Please note that this cannot be undone)</small>
      </div>
    </form>
  </body>
  <br><br><br>
  <footer><?php include_once('footer.php') ?></footer>
</html>
