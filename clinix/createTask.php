<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>replit</title>
  <link href="tasksAppointments.css" rel="stylesheet" type="text/css" />
</head>

<body>
  <div class='navBar'>
    <button onclick="myFunction()" class="dropbtn">Menu</button>
    <div id="myDropdown" class="dropdown-content">
      <a href='doctorsHome.php'>Home</a>
      <a href='calendar.php'>Calendar</a>
      <a href='patientsList.php'>Patients</a>
      <a href='nursesList.php'>Nurses</a>
      <a href='createTask.php'>Create Task</a>
      <a href='patient.php'>A patient</a>
    </div>
  </div>
  <form class='scheduleForm' action="getFreeNurses()" name='createTaskForm' action='#' method='POST' >
    <select>
      <option value="0">Select Date</option>
      <option value="1">Audi</option>
      <option value="2">BMW</option>
      <option value="3">Citroen</option>
      <option value="4">Ford</option>
      <option value="5">Honda</option>
      <option value="6">Jaguar</option>
      <option value="7">Land Rover</option>
      <option value="8">Mercedes</option>
      <option value="9">Mini</option>
      <option value="10">Nissan</option>
      <option value="11">Toyota</option>
      <option value="12">Volvo</option>
    </select>

    <select>
      <option value="0">Select Start Time</option>
      <option value="1">Audi</option>
      <option value="2">BMW</option>
      <option value="3">Citroen</option>
      <option value="4">Ford</option>
      <option value="5">Honda</option>
      <option value="6">Jaguar</option>
      <option value="7">Land Rover</option>
      <option value="8">Mercedes</option>
      <option value="9">Mini</option>
      <option value="10">Nissan</option>
      <option value="11">Toyota</option>
      <option value="12">Volvo</option>
    </select>


    <select>
      <option value="0">Select Duration</option>
      <option value="1">Audi</option>
      <option value="2">BMW</option>
      <option value="3">Citroen</option>
      <option value="4">Ford</option>
      <option value="5">Honda</option>
      <option value="6">Jaguar</option>
      <option value="7">Land Rover</option>
      <option value="8">Mercedes</option>
      <option value="9">Mini</option>
      <option value="10">Nissan</option>
      <option value="11">Toyota</option>
      <option value="12">Volvo</option>
    </select>
    <input class="verify" type="submit" class='createTask' name='checkNurses' value="View Free Nurses">
  </form>
  
  <form class='scheduleForm' action="assignTask()" name='assignTaskForm' id='assignTaskForm'>
    <select>
      <option value="0">Select Nurse ID</option>
      <option value="1">Audi</option>
      <option value="2">BMW</option>
      <option value="3">Citroen</option>
      <option value="4">Ford</option>
      <option value="5">Honda</option>
      <option value="6">Jaguar</option>
      <option value="7">Land Rover</option>
      <option value="8">Mercedes</option>
      <option value="9">Mini</option>
      <option value="10">Nissan</option>
      <option value="11">Toyota</option>
      <option value="12">Volvo</option>
    </select>

    <input type='text' class='taskDescr' name='taskDescr' placeholder='Description' />
    <input class="assign" type="submit" value="Assign Task"><br>
  </form>

  <script src='script.js'></script>
  <script>
    /* When the user clicks on the button, 
    toggle between hiding and showing the dropdown content */
    function myFunction() {
      document.getElementById("myDropdown").classList.toggle("show");
    }

    // Close the dropdown if the user clicks outside of it
    window.onclick = function (event) {
      if (!event.target.matches('.dropbtn')) {
        var dropdowns = document.getElementsByClassName("dropdown-content");
        var i;
        for (i = 0; i < dropdowns.length; i++) {
          var openDropdown = dropdowns[i];
          if (openDropdown.classList.contains('show')) {
            openDropdown.classList.remove('show');
          }
        }
      }
    }
  </script>


</body>