
<?php
// $connection = mysqli_connect("localhost:3307", "root", "");
// $db = mysqli_select_db($connection, 'demo');
include "../connection.php";
include("connect.php"); 
if($_SESSION['name']==''){
	header("location:signin.php");
}
?>
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="admin.css">
     
    <!----===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <title>Admin Dashboard Panel</title> 
    
<?php
 $connection=mysqli_connect("localhost","root","");
 $db=mysqli_select_db($connection,'demo');
 


?>
</head>
<body>
    <nav>
        <div class="logo-name">
            <div class="logo-image">
                <!--<img src="images/logo.png" alt="">-->
            </div>

            <span class="logo_name">ADMIN</span>
        </div>

        <div class="menu-items">
            <ul class="nav-links">
                <li><a href="admin.php">
                    <i class="uil uil-estate"></i>
                    <span class="link-name">Dahsboard</span>
                </a></li>
                <!-- <li><a href="#">
                    <i class="uil uil-files-landscapes"></i>
                    <span class="link-name">Content</span>
                </a></li> -->
                <li><a href="analytics.php">
                    <i class="uil uil-chart"></i>
                    <span class="link-name">Analytics</span>
                </a></li>
                <li><a href="#">
                    <i class="uil uil-heart"></i>
                    <span class="link-name">Donates</span>
                </a></li>
                <li><a href="feedback.php">
                    <i class="uil uil-comments"></i>
                    <span class="link-name">Feedbacks</span>
                </a></li>
                <li><a href="adminprofile.php">
                    <i class="uil uil-user"></i>
                    <span class="link-name">Profile</span>
                </a></li>
                <!-- <li><a href="#">
                    <i class="uil uil-share"></i>
                    <span class="link-name">Share</span>
                </a></li> -->
            </ul>
            
            <ul class="logout-mode">
                <li><a href="../logout.php">
                    <i class="uil uil-signout"></i>
                    <span class="link-name">Logout</span>
                </a></li>

                <li class="mode">
                    <a href="#">
                        <i class="uil uil-moon"></i>
                    <span class="link-name">Dark Mode</span>
                </a>

                <div class="mode-toggle">
                  <span class="switch"></span>
                </div>
            </li>
            </ul>
        </div>
    </nav>

    <section class="dashboard">
        
        <div class="top">
            <i class="uil uil-bars sidebar-toggle"></i>
            <!-- <p>Food Donate</p> -->
            <p  class ="logo" >Hunger-Free <b style="color: #67519f; ">Mission</b></p>
             <p class="user"></p>
            <!-- <div class="search-box">
                <i class="uil uil-search"></i>
                <input type="text" placeholder="Search here...">
            </div> -->
            
            <!--<img src="images/profile.jpg" alt="">-->
        </div>
        <br>
        <br>
        <br>
    
  

            <div class="activity">
               
            <div class="location">
                <!-- <p class="logo">Filter by Location</p> -->
          <form method="post">
             <label for="location" class="logo">Select Location:</label>
             <!-- <br> -->
            <select id="location" name="location">
            <option value="achham">Achham</option>
  <option value="arghakhanchi">Arghakhanchi</option>
  <option value="baglung">Baglung</option>
  <option value="baitadi">Baitadi</option>
  <option value="bajhang">Bajhang</option>
  <option value="bajura">Bajura</option>
  <option value="banke">Banke</option>
  <option value="bara">Bara</option>
  <option value="bardiya">Bardiya</option>
  <option value="bhaktapur">Bhaktapur</option>
  <option value="bhojpur">Bhojpur</option>
  <option value="chitwan">Chitwan</option>
  <option value="dadeldhura">Dadeldhura</option>
  <option value="dailekh">Dailekh</option>
  <option value="dang">Dang</option>
  <option value="darchula">Darchula</option>
  <option value="dhading">Dhading</option>
  <option value="dhankuta">Dhankuta</option>
  <option value="dhanusa">Dhanusa</option>
  <option value="dholkha">Dholkha</option>
  <option value="dolpa">Dolpa</option>
  <option value="doti">Doti</option>
  <option value="gorkha">Gorkha</option>
  <option value="gulmi">Gulmi</option>
  <option value="humla">Humla</option>
  <option value="ilam">Ilam</option>
  <option value="jajarkot">Jajarkot</option>
  <option value="jhapa">Jhapa</option>
  <option value="jhapa">Jumla</option>
  <option value="kailali">Kailali</option>
  <option value="kalikot">Kalikot</option>
  <option value="kanchanpur">Kanchanpur</option>
  <option value="kapilvastu">Kapilvastu</option>
  <option value="kaski">Kaski</option>
  <option value="kathmandu">Kathmandu</option>
  <option value="kavrepalanchok">Kavrepalanchok</option>
  <option value="khotang">Khotang</option>
  <option value="lalitpur">Lalitpur</option>
  <option value="lamjung">Lamjung</option>
  <option value="mahottari">Mahottari</option>
  <option value="makwanpur">Makwanpur</option>
  <option value="manang">Manang</option>
  <option value="morang">Morang</option>
  <option value="mugu">Mugu</option>
  <option value="mustang">Mustang</option>
  <option value="myagdi">Myagdi</option>
  <option value="nawalparasi">Nawalparasi</option>
  <option value="nuwakot">Nuwakot</option>
  <option value="okhaldhunga">Okhaldhunga</option>
  <option value="palpa">Palpa</option>
  <option value="panchthar">Panchthar</option>
  <option value="parbat">Parbat</option>
  <option value="parsa">Parsa</option>
  <option value="pyuthan">Pyuthan</option>
  <option value="ramechhap">Ramechhap</option>
  <option value="rasuwa">Rasuwa</option>
  <option value="rautahat">Rautahat</option>
  <option value="rolpa">Rolpa</option>
  <option value="rukum">Rukum</option>
  <option value="rupandehi">Rupandehi</option>
  <option value="salyan">Salyan</option>
  <option value="sankhuwasabha">Sankhuwasabha</option>
  <option value="saptari">Saptari</option>
  <option value="sarlahi">Sarlahi</option>
  <option value="sindhuli">Sindhuli</option>
  <option value="sindhupalchok">Sindhupalchok</option>
  <option value="siraha">Siraha</option>
  <option value="solukhumbu">Solukhumbu</option>
  <option value="sunsari">Sunsari</option>
  <option value="surkhet">Surkhet</option>
  <option value="syangja">Syangja</option>
  <option value="tanahu">Tanahu</option>
  <option value="taplejung">Taplejung</option>
  <option value="terhathum">Terhathum</option>
  <option value="udayapur">Udayapur</option>
        
            </select>
                <input type="submit" value="Get Details">
         </form>
         <br>

         <?php
    // Get the selected location from the form
    if(isset($_POST['location'])) {
      $location = $_POST['location'];
      
      // Query the database for people in the selected location
      $sql = "SELECT * FROM food_donations WHERE location='$location'";
      $result=mysqli_query($connection, $sql);
    //   $result = $conn->query($sql);
      
      // If there are results, display them in a table
      if ($result->num_rows > 0) {
        // echo "<h2>Food Donate in $location:</h2>";
        
        echo" <div class=\"table-container\">";
        echo "    <div class=\"table-wrapper\">";
        echo "  <table class=\"table\">";
        echo "<table><thead>";
        echo" <tr>
        <th >Name</th>
        <th>food</th>
        <th>Category</th>
        <th>phoneno</th>
        <th>date/time</th>
        <th>address</th>
        <th>Quantity</th>
        
    </tr>
    </thead><tbody>";

        while($row = $result->fetch_assoc()) {
            echo "<tr><td data-label=\"name\">".$row['name']."</td><td data-label=\"food\">".$row['food']."</td><td data-label=\"category\">".$row['category']."</td><td data-label=\"phoneno\">".$row['phoneno']."</td><td data-label=\"date\">".$row['date']."</td><td data-label=\"Address\">".$row['address']."</td><td data-label=\"quantity\">".$row['quantity']."</td></tr>";

        //   echo "<tr><td>" . $row["name"] . "</td><td>" . $row["phoneno"] . "</td><td>" . $row["location"] . "</td></tr>";
        }
        echo "</tbody></table></div>";
      } else {
        echo "<p>No results found.</p>";
      }
      
   
    }
  ?>
 </div>

 

            
            </div>
    </section>

    <script src="admin.js"></script>
</body>
</html>
