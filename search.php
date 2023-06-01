<?php
if(isset($_GET['search_key'])){
//Step 1 - Establishing connection
//Step 2 - Handling connection error
include('conn.php');

//Step 3 - Execute SQL query
$sql = 'SELECT * FROM book WHERE book_title OR book_author LIKE "%'.$_GET['search_key'].'%"';
$result = mysqli_query($conn, $sql);

//Step 4 - Process result
if(mysqli_affected_rows($conn)>0){
  echo "<table>
          <tr bgcolor = 'FF55FF'>
            <th>Book Title</th>
            <th>Author</th>
            <th>Date Published</th>
            <th>Publisher</th>
            <th>Location</th>
            <th>Availability</th>
            <th>Update</th>
            <th>Remove</th>
          </tr>";
  for ($i = 0; $i < mysqli_num_rows($result); $i++){
    $row  = mysqli_fetch_assoc($result);
    echo '<tr>';
    echo '<td>'.$row['book_title'].'</td>';
    echo '<td>'.$row['book_author'].'</td>';
    echo '<td>'.$row['book_datepublished'].'</td>';
    echo '<td>'.$row['book_publisher'].'</td>';
    echo '<td>'.$row['book_location'].'</td>';
    echo '<td>'.$row['book_availability'].'</td>';
    echo '<td><a href = "liaUpdate.php?id='.$row['id'].'"><button>Update</button></a></td>';
    echo '<td><a href = "liaDelete.php?id='.$row['id'].'"><button>Delete</button></a></td>';
  }
  echo'</table>';
}
else
  echo '<script>alert("No match found")</script>';

//Step 5 - Free resource & close connection
mysqli_free_result($result);
mysqli_close($conn);
}
?>
