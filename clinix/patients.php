<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "clinic_db";

$conn = new mysqli($servername, $username, $password, $dbname);

// Retrieve data from the database table
$sql = "SELECT * FROM patients";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html>
<head>
  <title>Display Data</title>
  <link rel="stylesheet" href="admin.css">
</head>
<body>
    <h2>Display Data</h2>
    <table>
      <tr>
        <th>Patient_Id</th>
        <th>Firstname</th>
        <th>Lastname</th>
        
      </tr>
      <?php
      if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
          echo "<tr>
                 <td>". $row["Patient_Id"]. "</td>
                 <td>".$row["Firstname"]."</td>
                 <td>".$row["Lastname"]."</td>
                 </tr>";
        }
      } else {
        echo "<tr>
              <td colspan='3'>No data found</td>
              </tr>";
      }
      $conn->close();
      ?>
    </table>
    
     <h2>Nursery Data</h2>
</div>
</div>
  </div>
<script type="text/javascript">
    document.addEventListener("DOMContentLoaded", function() {
      const tableRows = document.querySelectorAll("#patients tr");
      tableRows.forEach(row => {
        const patientId = row.getAttribute("Patient_Id");
        row.addEventListener("click", function() {
          
          window.location.href = "patientdetail.php";
        });
      });
    });
</script>




</body>
