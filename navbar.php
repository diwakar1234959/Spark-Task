<!DOCTYPE html>
<html>
<head>
<style>
body {
  margin: 0;
  font-family: 'Arial', sans-serif; /* Change the font family to your preference */
}

.Nav {
  margin-bottom: 12px;
}

.reorder {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #ef9c51;
  position: fixed;
  top: 0;
  width: 100%;
  display: flex;
  align-items: center;
  justify-content: space-between;
  height:70px
}

.left {
  margin-right: auto; /* Push the left content to the left side */
}

.right {
  display: flex;
  align-items: center;
}

li {
  display: inline-block;
}

li a {
  display: block;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover:not(.title) {
  background-color: #1ab984;
  color:#fff;
}

.title {
  background-color: #1ab984;
  color:#000;
  padding: 14px 16px;
  margin: 0;
}

</style>
</head>
<body>

<nav class="Nav">
  <ul class="reorder">
    <li class="left">
      <h3><a class="title" href="index.php">TSF BANK</a></h3>
    </li>
    <li class="right">
      <h3><a href="ViewCustomers.php">Customers Details</a></h3>
      <h3><a href="Transfer.php">Fund Transfer</a></h3>
      <h3><a href="RecordsPage.php">Transaction History</a></h3>
    </li>
  </ul>
</nav>

</body>
</html>
