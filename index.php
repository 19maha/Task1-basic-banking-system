<html>
  <head>
    <title>Basic Banking System</title>
    <link rel="stylesheet" href="style.css">
  </head>

  <body>

  <div class="full-page">

    <?php
    include 'navbar.php';
    ?>
    <div class="center">
      <ul>
        <li class="operations"><a href="transfermoney.php"><button class="btn" id="blue">Transfer Money</button></a></li>
        <li class="operations"><a href="transcationhistory.php"><button class="btn" id="green">View Transfer History</button></a></li>
      </ul>
    </div>
    <br>
    <footer>
        <p id="foot">@ Copyright by Mahalakshmi G 2021</p>
    </footer>
</div>
</body>
</html>