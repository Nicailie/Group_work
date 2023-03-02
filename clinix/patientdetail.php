<?php
// Connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "clinic_db";


$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$patient_Id = $_GET['Patient_Id'];

// Prepare the SQL statement
$stmt = $conn->prepare("SELECT * FROM patients WHERE Patient_Id = 1027");
$stmt->bind_param("i", $patient_Id);
$stmt->execute();

// Get the result set
$result = $stmt->get_result();
$row = $result->fetch_assoc();

// Close the database connection
$stmt->close();
$conn->close();
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Patient Details</title>
  <link href="patient.css" rel="stylesheet" type="text/css" />
</head>


<body>
  <div class='navBar2'>
    <button onclick="myFunction()" class="dropbtn">Menu</button>
    <div id="myDropdown" class="dropdown-content">
      <a href="createAppointment.html">Link 1</a>
      <a href="#">Link 2</a>
      <a href="#">Link 3</a>
    </div>
  </div>

  <main>
    <div class='navBar'>
      <a class='navButton'>Home</a>
      <a class='navButton' href='calendar.html'>Calendar</a>
      <a class='navButton' href='patientsList.html'>Patients</a>
      <a class=' navButton' href='personsList.html'>Nurses</a>
      <a class=' navButton' href='createTask.html'>Create Task</a>
      <a class='navButton'>SignOut</a>
    </div>

    <?php
    // Include the PHP script that retrieves the patient details
    include('getPatientDetails.php');
    ?>

    <div class='patientData'>
      <div class='bioData'>
        <div class='imageContainer'><img src='assets/patientImage.jpg'></div>
        <h3 class='name' id='name' name='name'><?php echo $row['Firstname']; ?></h3>
        <p class='DOB' id='DOB' name='DOB'><?php echo $row['DOB']; ?></p>
        <p class='sex' id='sex' name='sex'><?php echo $row['Sex']; ?></p>
        <p class='Height' id='height' name='height'><?php echo $row['Height']; ?></p>
        <p class='Ethnicity' id='ethnicity' name='ethnicity'><?php echo $row['Ethnicity']; ?></p>
        <p class='Blood Group' id='Blood Group' name='bloodGroup'><?php echo $row['Blood Group']; ?></p>
      </div>

     <!-- <div class='medicalHistory'>
        <ul class='diseases'><b>Medical History</b></br>
           $sql = "SELECT * FROM medical_history WHERE id = $patient_id";
          // Retrieve the patient's medical history from the database-->
    </div>
  </main>
  <script>
    function myFunction() {document.getElementById("myDropdown").classList.toggle("show");}
  </script>

</body>  
