<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php require "blocks/header.php" ?>  

  <div class="container mt-5">
    <h3>Contact form</h3>
    <form action="check.php" method="post">
      <input type="email" name="email" placeholder="Enter Email" class="form-control">
      <textarea name="message" class="form-control" placeholder="Enter your message..."></textarea>
      <button type="submit" name="send" class="btn btn-success">Send</button>
    </form>
  </div>

  <?php require "blocks/footer.php" ?>  
</body>
</html>