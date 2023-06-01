<?php
include ('login.php');
if($_SESSION['logged_user']!="True")
{
    header("location:login.html");
}
?>
<html>
<head>
  <title>Asia Pacific University | Library System</title>
  <link rel="icon" href="Michelin.jpg">
  <link href="liaindex.css" rel="stylesheet">
</head>

<body>
<nav>
    <label>Welcome,  <!-- (?php echo $currentuser;?) Librarian Username -->  </a></label>
      <ul>
        <li><a class="active" href="#">Home</a></li>
        <li><a href="#">Book Management</a>
            <ul>
              <li><a href="#">Search Book</a></li>
              <li><a href="#">Add Book</a></li>
            </ul>
        </li>
        <li><a href="#">Account</a></li>
        <li><a href="#">History</a></li>
        <li><a href="logout.php">Logout</a></li>
      </ul>
</nav>

  <div class="searchbar">
    <form action="search.php" method="post">
    <label>Book Name:</label>
    <input type="text" name="search_key" placeholder="Keywords">
    <button type="submit">Search</button>
    </form>
  </div>


</body>
</html>
