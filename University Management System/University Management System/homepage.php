


  <!DOCTYPE html>
  <html lang="en" dir="ltr">
    <head>
      <meta charset="utf-8">
      <title></title>
      <link rel="stylesheet" href="homepage.css">
    </head>
    <body>

      <ul>
         <li style="float:left"><a href="homepage.php"> ABC UNIVERSITY</a></li>
         <li><a href="#about">About</a></li>
         <li><a href="#contact">Contact</a></li>
        <!-- <li><a href="#news">Registration</a></li> -->
        <div class="dropdown">
            <button class="dropbtn">Registration As
              <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
              <a href="teacher/view/Registration.php">Teacher</a>
              <a href="student/view/Registration.php">Student</a>
              <a href="account officer/view/Registration.php">Account Officer</a>
              <a href="addmission officer/view/Registration.php">Addmission Officer</a>
              <a href="librarian/view/Registration.php">Librarian</a>

            </div>
          </div>
        <div class="dropdown">
            <button class="dropbtn">Login As
              <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
              <a href="teacher/view/login.php">Teacher</a>
              <a href="student/view/login.php">Student</a>
              <a href="account officer/view/login.php">Account Officer</a>
              <a href="addmission officer/view/login.php">Addmission Officer</a>
              <a href="librarian/view/login.php">Librarian</a>

            </div>
          </div>
        <li><a href="homepage.php">Home</a></li>
      </ul>


      <div class="content">
        <div class="welcome">
           Welcome to ABC UNIVERSITY.
        </div>
      </div>

    </body>
  </html>
