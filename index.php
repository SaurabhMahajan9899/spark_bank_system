<?php include('nav.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>


<body>

  <h1>Welcome to Apna Bank Co. PVT LTD.</h1>


  <div class="bg">
    <div class="center" style="margin-top: 50px;">
      <img src="img/user1.jpg" alt="user" width="100" height="100" style="margin-right:auto;">
      <a href="transfer_money.php"><button class="btn" id="red">View All Customers</button></a><br><br>
      <img src="img/transfer_money.jpg" alt="user" width="100" height="100" style="margin-right:auto;">
      <a href="transfer_money.php"><button class="btn" id="blue">Transfer Money</button></a><br><br>
      <img src="img/history.png" alt="user" width="100" height="100" style="margin-right:auto;">
      <a href="transactionhistory.php"><button class="btn" id="green">View Transfer History</button></a>
    </div>
  </div>
  <?php include('footer.php') ?>

</body>

</html>