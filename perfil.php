<!DOCTYPE html>
<html>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue-grey.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
html, body, h1, h2, h3, h4, h5 {font-family: "Open Sans", sans-serif}
</style>
<body class="w3-theme-l5">
<!-- Navbar -->
<div class="w3-top">
 <div class="w3-bar w3-white w3-card">
  <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
  <a href="#" onclick="location.href='http://mamuthack.test/web_portada.html'"class="w3-button w3-padding-16 w3-left"><i class="fa fa-home w3-margin-right"></i>Go Back</a>
 <a href="#" onclick="location.href='http://mamuthack.test/index.html'"class="w3-button w3-padding-16 w3-left">Log Out</a>
 
  
  

  <a href="#" class="w3-bar-item w3-button w3-hide-small w3-right w3-padding-large w3-hover-white" title="My Account">
    <img src="/w3images/avatar2.png" class="w3-circle" style="height:23px;width:23px" alt="Avatar">
  </a>
 </div>
</div>

<!-- Navbar on small screens -->
<div id="navDemo" class="w3-bar-block w3-theme-d2 w3-hide w3-hide-large w3-hide-medium w3-large">
  <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 1</a>
  <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 2</a>
  <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 3</a>
  <a href="#" class="w3-bar-item w3-button w3-padding-large">My Profile</a>
</div>

<!-- Page Container -->
<div class="w3-container w3-content" style="max-width:1400px;margin-top:80px">
  <!-- The Grid -->
  <div class="w3-row">
    <!-- Left Column -->
    <div class="w3-col m3">
      <!-- Profile -->
      <div class="w3-card w3-round w3-white">
        <div class="w3-container">
         <h4 class="w3-center">My Profile</h4>
         <p class="w3-center"><img src="https://avatarsed1.serversdev.getgo.com/2205256774854474505_medium.jpg" class="w3-circle" style="height:106px;width:106px" alt="Avatar"> </p>
         <hr>
         
         <p><i class="fa fa-user fa-fw w3-margin-right w3-text-theme"></i>
          
         <?php

          $host = "localhost";
          $dbusername = "mamut";
          $dbpassword = "Mamut_1234";
          $dbname = "mamuthack";
          $tbl_name = "Users";


          //Create connection
          $conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
      
          if (mysqli_connect_error()){
            die('Connect Error ('. mysqli_connect_errno() .') '
            . mysqli_connect_error());
          }
          else { //Si s'ha connectat be

            $result = mysqli_query($conn, "SELECT current_user_id FROM Currents") or die("Failed to query database".mysqli_error());
            $row = mysqli_fetch_array($result);
            $user_id = $row['current_user_id'];
            //El id de l'usuari amb mateix nom que el del index
            $result = mysqli_query($conn, "SELECT * FROM Users WHERE user_id = '$user_id'") or die("Failed to query database".mysqli_error());
            $row = mysqli_fetch_array($result);

            echo $row['user_name'];

            $conn->close();
            }

            ?>

         </p>
         <p><i class="fa fa-pencil fa-fw w3-margin-right w3-text-theme"></i> 

           <?php
          
          $host = "localhost";
          $dbusername = "mamut";
          $dbpassword = "Mamut_1234";
          $dbname = "mamuthack";
          $tbl_name = "Users";


          //Create connection
          $conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
      

          if (mysqli_connect_error()){
            die('Connect Error ('. mysqli_connect_errno() .') '
            . mysqli_connect_error());
          }
          else { //Si s'ha connectat be
            $result = mysqli_query($conn, "SELECT current_user_id FROM Currents") or die("Failed to query database".mysqli_error());
            $row = mysqli_fetch_array($result);
            $user_id = $row['current_user_id'];
            //El id de l'usuari amb mateix nom que el del index
            $result = mysqli_query($conn, "SELECT * FROM Users WHERE user_id = '$user_id'") or die("Failed to query database".mysqli_error());
            $row = mysqli_fetch_array($result);

            echo $row['user_job'];

            $conn->close();
            }

            ?>



         </p>
         <p><i class="fa fa-home fa-fw w3-margin-right w3-text-theme"></i> 

           <?php

          $host = "localhost";
          $dbusername = "mamut";
          $dbpassword = "Mamut_1234";
          $dbname = "mamuthack";
          $tbl_name = "Users";


          //Create connection
          $conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
          

          if (mysqli_connect_error()){
            die('Connect Error ('. mysqli_connect_errno() .') '
            . mysqli_connect_error());
          }
          else { //Si s'ha connectat be
            $result = mysqli_query($conn, "SELECT current_user_id FROM Currents") or die("Failed to query database".mysqli_error());
            $row = mysqli_fetch_array($result);
            $user_id = $row['current_user_id'];

            //El id de l'usuari amb mateix nom que el del index
            $result = mysqli_query($conn, "SELECT * FROM Users WHERE user_id = '$user_id'") or die("Failed to query database".mysqli_error());
            $row = mysqli_fetch_array($result);

            echo $row['user_location'];

            $conn->close();
            }

            ?>

         </p>
         <p><i class="fa fa-birthday-cake fa-fw w3-margin-right w3-text-theme"></i> 

           <?php


          $host = "localhost";
          $dbusername = "mamut";
          $dbpassword = "Mamut_1234";
          $dbname = "mamuthack";
          $tbl_name = "Users";


          //Create connection
          $conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
      

          if (mysqli_connect_error()){
            die('Connect Error ('. mysqli_connect_errno() .') '
            . mysqli_connect_error());
          }
          else { //Si s'ha connectat be
            $result = mysqli_query($conn, "SELECT current_user_id FROM Currents") or die("Failed to query database".mysqli_error());
            $row = mysqli_fetch_array($result);
            $user_id = $row['current_user_id'];
            //El id de l'usuari amb mateix nom que el del index
            $result = mysqli_query($conn, "SELECT * FROM Users WHERE user_id = '$user_id'") or die("Failed to query database".mysqli_error());
            $row = mysqli_fetch_array($result);

            echo $row['user_birthday'];

            $conn->close();
            }

            ?>
         </p>
        </div>
      </div>
      <br>

      <!-- Accordion -->
        <div class="w3-card w3-round">
          <div class="w3-white">
            <div id="Demo3" class="w3-hide w3-container">
          <div class="w3-row-padding">
          <br>
            <div class="w3-half">
              <img src="/w3images/lights.jpg" style="width:100%" class="w3-margin-bottom">
            </div>
            <div class="w3-half">
              <img src="/w3images/nature.jpg" style="width:100%" class="w3-margin-bottom">
            </div>
            <div class="w3-half">
              <img src="/w3images/mountains.jpg" style="width:100%" class="w3-margin-bottom">
            </div>
            <div class="w3-half">
              <img src="/w3images/forest.jpg" style="width:100%" class="w3-margin-bottom">
            </div>
            <div class="w3-half">
              <img src="/w3images/nature.jpg" style="width:100%" class="w3-margin-bottom">
            </div>
            <div class="w3-half">
              <img src="/w3images/snow.jpg" style="width:100%" class="w3-margin-bottom">
            </div>
          </div>
            </div>
          </div>
        </div>
      <br>


      <br>

    <!-- End Left Column -->
    </div>

   <!-- Middle Column -->
    <div class="w3-col m7">

      <div class="w3-row-padding">
        <div class="w3-col m12">
          <div class="w3-card w3-round w3-white">
            <div class="w3-container w3-padding">
              <h6 class="w3-opacity">FUTURE EVENTS</h6>

              <?php

              $host = "localhost";
              $dbusername = "mamut";
              $dbpassword = "Mamut_1234";
              $dbname = "mamuthack";
              $tbl_name = "Users";


              //Create connection
              $conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
      

              if (mysqli_connect_error()){
                die('Connect Error ('. mysqli_connect_errno() .') '
                . mysqli_connect_error());
              }
              else { //Si s'ha connectat be
                $result = mysqli_query($conn, "SELECT current_user_id FROM Currents") or die("Failed to query database".mysqli_error());
                $row = mysqli_fetch_array($result);
                $user_id = $row['current_user_id'];

                $result = mysqli_query($conn, "SELECT us.user_id, MAX(reg.activity_id) max_activities FROM Users AS us, Registers AS reg WHERE us.user_id = reg.user_id GROUP BY user_id;") or die("Failed to query database".mysqli_error());
                $row = mysqli_fetch_array($result);
                $max_activities = $row['max_activities'];
                
                $result = mysqli_query($conn, "SELECT ac.activity_id FROM Activities AS ac, Users AS us, Registers AS reg WHERE (reg.user_id = $user_id) AND (reg.activity_id = ac.activity_id)");
                $row = mysqli_fetch_array($result);

                for ($i = 1; $i <= $max_activities; $i++) { 
                
                    $result = mysqli_query($conn, "SELECT ac.activity_description FROM Activities AS ac, Users AS us, Registers AS reg WHERE (reg.user_id = $user_id) AND (reg.activity_id = ac.activity_id) AND (ac.activity_id = $i)");

                    $row = mysqli_fetch_array($result);

                    echo '<p>' .$row['activity_description'] . '</p>';

                }

                $conn->close();
              }

                ?>
              </p>

            </div>
          </div>
        </div>
      </div>
      <br>


      <div class="w3-row-padding">
        <div class="w3-col m12">
          <div class="w3-card w3-round w3-white">
            <div class="w3-container w3-padding">
              <h6 class="w3-opacity">NUMBER OF ECO-POINTS</h6>

              <p><span class="w3-padding-large w3-right"><b> POINTS  </b> <span class="w3-tag">
                
               <?php

              $host = "localhost";
              $dbusername = "mamut";
              $dbpassword = "Mamut_1234";
              $dbname = "mamuthack";
              $tbl_name = "Users";


              //Create connection
              $conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
      

              if (mysqli_connect_error()){
                die('Connect Error ('. mysqli_connect_errno() .') '
                . mysqli_connect_error());
              }
              else { //Si s'ha connectat be
                $result = mysqli_query($conn, "SELECT current_user_id FROM Currents") or die("Failed to query database".mysqli_error());
                $row = mysqli_fetch_array($result);
                $user_id = $row['current_user_id'];
                //El id de l'usuari amb mateix nom que el del index
                $result = mysqli_query($conn, "SELECT us.user_id, SUM(ac.points) FROM Users AS us, Registers AS reg, Activities AS ac WHERE (us.user_id = reg.user_id) AND (ac.activity_id = reg.activity_id) AND (us.user_id = '$user_id') GROUP BY user_id") or die("Failed to query database".mysqli_error());

                $row = mysqli_fetch_array($result);

                if ($row['SUM(ac.points)'] == 0){
                  echo "0";
                }
                else {
                  echo $row['SUM(ac.points)'];
                }

                $conn->close();
                }

            ?>
              </span></span></p>
            </div>
          </div>
        </div>
      </div>

      <br>

      <div class="w3-row-padding">
        <div class="w3-col m12">
          <div class="w3-card w3-round w3-white">
            <div class="w3-container w3-padding">
              <h6 class="w3-opacity">NUMBER OF DAILY CHALLENGES</h6>
              <p>You are currently a:  </p>

              <?php

              $host = "localhost";
              $dbusername = "mamut";
              $dbpassword = "Mamut_1234";
              $dbname = "mamuthack";
              $tbl_name = "Users";


              //Create connection
              $conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
      

              if (mysqli_connect_error()){
                die('Connect Error ('. mysqli_connect_errno() .') '
                . mysqli_connect_error());
              }
              else { //Si s'ha connectat be
                $result = mysqli_query($conn, "SELECT current_user_id FROM Currents") or die("Failed to query database".mysqli_error());
                $row = mysqli_fetch_array($result);
                $user_id = $row['current_user_id'];
                //El id de l'usuari amb mateix nom que el del index
                $result = mysqli_query($conn, "SELECT lev.level_name FROM Levels AS lev, Users AS us WHERE (us.user_id = '$user_id') AND (us.tracking_num >= lev.start_level AND us.tracking_num <= lev.end_level)") or die("Failed to query database".mysqli_error());

                $row = mysqli_fetch_array($result);

                echo $row['level_name'];

                $conn->close();
                }

            ?>
            <br>

            <p><button onclick="location.href='http://mamuthack.test/miweb.html'" class="w3-button w3-padding-small w3-white w3-border"  ><b>Consult Prizes</b></button></p>


              <p><span class="w3-padding-large w3-right"><b> POINTS  </b> <span class="w3-tag">

                <?php

              $host = "localhost";
              $dbusername = "mamut";
              $dbpassword = "Mamut_1234";
              $dbname = "mamuthack";
              $tbl_name = "Users";


              //Create connection
              $conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
      

              if (mysqli_connect_error()){
                die('Connect Error ('. mysqli_connect_errno() .') '
                . mysqli_connect_error());
              }
              else { //Si s'ha connectat be
                $result = mysqli_query($conn, "SELECT current_user_id FROM Currents") or die("Failed to query database".mysqli_error());
                $row = mysqli_fetch_array($result);
                $user_id = $row['current_user_id'];
                //El id de l'usuari amb mateix nom que el del index
                $result = mysqli_query($conn, "SELECT us.tracking_num FROM Users AS us WHERE (us.user_id = $user_id)") or die("Failed to query database".mysqli_error());

                $row = mysqli_fetch_array($result);

                echo $row['tracking_num'];

                $conn->close();
                }

            ?>


              </span></span></p>
            </div>
          </div>
        </div>
      </div>


    <!-- End Middle Column -->
    </div>


  <!-- End Grid -->
  </div>

<!-- End Page Container -->
</div>
<br>

<!-- Footer -->
<footer class="w3-container w3-theme-d3 w3-padding-16">
  <h5>Footer</h5>
</footer>

<footer class="w3-container w3-theme-d5">
  <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">w3.css</a></p>
</footer>

<script>
// Accordion
function myFunction(id) {
  var x = document.getElementById(id);
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
    x.previousElementSibling.className += " w3-theme-d1";
  } else {
    x.className = x.className.replace("w3-show", "");
    x.previousElementSibling.className =
    x.previousElementSibling.className.replace(" w3-theme-d1", "");
  }
}

// Used to toggle the menu on smaller screens when clicking on the menu button
function openNav() {
  var x = document.getElementById("navDemo");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else {
    x.className = x.className.replace(" w3-show", "");
  }
}
</script>

</body>
</html>
