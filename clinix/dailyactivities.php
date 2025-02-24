<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>replit</title>
  <link href="style.css" rel="stylesheet" type="text/css" />
  <style>
    * {
      box-sizing: border-box;
      font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
    }

    #saveChanges {
      background-color: #343D44;
      border: none;
      color: white;
      padding: 15px 32px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
    }

    /* The Modal (background) */
    .modal {
      display: none;
      /* Hidden by default */
      position: fixed;
      /* Stay in place */
      z-index: 1;
      /* Sit on top */
      left: 0;
      top: 0;
      width: 100%;
      /* Full width */
      height: 100%;
      /* Full height */
      overflow: auto;
      /* Enable scroll if needed */
      background-color: rgba(0, 0, 0, 0.4);
      /* Black w/ opacity */
    }

    /* Modal Content/Box */
    .modal-content {
      background-color: #fefefe;
      margin: 15% auto;
      /* 15% from the top and centered */
      padding: 20px;
      border: 1px solid #888;
      width: 80%;
      /* Could be more or less, depending on screen size */
    }

    /* The Close Button */
    .close {
      color: #aaa;
      float: right;
      font-size: 28px;
      font-weight: bold;
    }

    .close:hover,
    .close:focus {
      color: black;
      text-decoration: none;
      cursor: pointer;
    }

    /* Modal Header */
    .modal-header {
      padding: 2px 16px;
      background-color: #03989E;
      color: white;
    }

    /* Modal Body */
    .modal-body {
      padding: 2px 16px;

    }

    /* Modal Footer */
    .modal-footer {
      padding: 2px 16px;
      background-color: #03989E;
      color: white;
    }

    /* Modal Content */
    .modal-content {
      position: relative;
      background-color: #fefefe;
      margin: auto;
      padding: 0;
      border: 1px solid #888;
      width: 80%;
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
      animation-name: animatetop;
      animation-duration: 0.4s;
      color: #343D44;
    }

    /* Add Animation */
    @keyframes animatetop {
      from {
        top: -300px;
        opacity: 0
      }

      to {
        top: 0;
        opacity: 1
      }
    }
  </style>
</head>

<body>
  <input type='text' name='search' placeholder="search" class='searchBar'>
  <main>
    <div class='navBar'>
      <img>
      <a class='button' href='doctorsHome.php'>Home</a>
      <a class='button' href='calendar.php'>Calendar</a>
      <a class='button' href='patientsList.php'>Patients</a>
      <a class='button' href='nursesList.php'>Nurses</a>
      <a class='button' href='createTask.php'>Create Task</a>
      <a class='button' href='patient.php'>A patient</a>
      <a class='button' href='modal.php'>SignOut</a>
    </div>

    <div class='navBar2'>
      <button onclick="myFunction()" class="dropbtn">Menu</button>
      <div id="myDropdown" class="dropdown-content">
        <a href="createAppointment.php">Link 1</a>
        <a href="#">Home</a>
        <a href="nursesList.php">NursesList</a>
      </div>
    </div>

    <div class='taskTemplate'>
      <div class='timeBar'>
        <p>00:00</p>
        <p>01:00</p>
        <p>02:00</p>
        <p>03:00</p>
        <p>04:00</p>
        <p>05:00</p>
        <p>06:00</p>
        <p>07:00</p>
        <p>08:00</p>
        <p>09:00</p>
        <p>10:00</p>
        <p>11:00</p>
        <p>12:00</p>
        <p>13:00</p>
        <p>14:00</p>
        <p>15:00</p>
        <p>16:00</p>
        <p>17:00</p>
        <p>18:00</p>
        <p>19:00</p>
        <p>20:00</p>
        <p>21:00</p>
        <p>22:00</p>
        <p>23:00</p>
      </div>
      <div class='dailyScheduler'>
        <div class='hours' id='00:00' onclick="load_task('00:30', '00:40', 10, 'a townhall', 'bulaba' )">
        </div>
        <div class='hours' id='01:00'>
        </div>
        <div class='hours' id='02:00'></div>
        <div class='hours' id='03:00'></div>
        <div class='hours' id='04:00'></div>
        <div class='hours' id='05:00'></div>
        <div class='hours' id='06:00'></div>
        <div class='hours' id='07:00'></div>
        <div class='hours' id='08:00'></div>
        <div class='hours' id='09:00'></div>
        <div class='hours' id='10:00'></div>
        <div class='hours' id='11:00'></div>
        <div class='hours' id='12:00'></div>
        <div class='hours' id='13:00'></div>
        <div class='hours' id='14:00'></div>
        <div class='hours' id='15:00'></div>
        <div class='hours' id='16:00'></div>
        <div class='hours' id='17:00'></div>
        <div class='hours' id='18:00'></div>
        <div class='hours' id='19:00'></div>
        <div class='hours' id='20:00'></div>
        <div class='hours' id='21:00'></div>
        <div class='hours' id='22:00'></div>
        <div class='hours' id='23:00'></div>
        <div class='hours' id='24:00'></div>
      </div>
    </div>
  </main>
  <div>
    <!-- Trigger/Open The Modal -->
    <button id="myBtn">Open Modal</button>
    <!-- The Modal -->
    <div id="myModal" class="modal">

      <!-- Modal content -->
      <div class="modal-content">
        <div class="modal-header">
          <span class="close">&times;</span>
          <h2>Task Details</h2>
        </div>



        <div class="modal-body">
          <p id='taskAssignee'>Assignee</p>
          <p id='taskDate'>Date</p>
          <p id='taskStartTime'>StartTime</p>
          <p id='taskEndTime'>EndTime</p>
          <p id='taskDescription'>Task Descritpion</p>
          <h5>Mark As Done <label class="container">
              <form>
                <input type="checkbox" checked="checked" id='markAsDone' name='markAsDone'>
                <span class="checkmark"></span>
            </label></h5>
        </div>


        <div class="modal-footer">
          <button id='saveChanges' name='saveChanges'>Save Changes</button>
        </div>
      </div>

      <script src="script.js"></script>
      <script>
        //Function for NavBar
        function myFunction() {
          document.getElementById("myDropdown").classList.toggle("show");
        }
        // Get the modal
        var modal = document.getElementById("myModal");

        // Get the button that opens the modal
        var btn = document.getElementById("myBtn");

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks on the button, open the modal
        btn.onclick = function () {
          modal.style.display = "block";
        }

        // When the user clicks on <span> (x), close the modal
        span.onclick = function () {
          modal.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function (event) {
          if (event.target == modal) {
            modal.style.display = "none";
          }
        }
      </script>



      <script>
        //Function to check if Task has been checked
        function checkDisplay() {
          const checkButtons = document.querySelectorAll('input[name="markAsDone"]');

          for (const checkButton of checkButtons) {
            if (checkButton.checked) {
              //mark as completed in database
              break;
            }
          }
        }
      </script>
</body>

</html>