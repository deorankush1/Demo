<?php

 session_start();
 if(isset($_SESSION['email']))
 {
  echo "<a href ='logout.php'>Logout</a>";
  echo "<h4> Welcome </h4>".$_SESSION['email']."<br>";
  include 'config.php';
  $sql =  "select * from Registration";
  $result = $conn1->query($sql);
  if ($result->num_rows > 0)
  { echo 'hello';
    // while($row = $result->fetch_assoc())
    // {
    //   $s_id = $row['id'];
    //  echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]."<a href = 'student_record.php?student_id={$s_id}'>View</a>". "<br>";
    // }
    include 'pagination.php';
   }
  else 
  {
    echo "0 results";
  } 
}
else
{
  header("location:". 'indexpage.html'); 

}
       
?>


 
        
