<?php
include("login.php"); 
if($_SESSION['name']==''){
	header("location: signin.php");
}
// include("login.php"); 
$emailid= $_SESSION['email'];
$connection=mysqli_connect("localhost","root","");
$db=mysqli_select_db($connection,'demo');
if(isset($_POST['submit']))
{
    $foodname=mysqli_real_escape_string($connection, $_POST['foodname']);
    $meal=mysqli_real_escape_string($connection, $_POST['meal']);
    $category=$_POST['image-choice'];
    $quantity=mysqli_real_escape_string($connection, $_POST['quantity']);
    // $email=$_POST['email'];
    $phoneno=mysqli_real_escape_string($connection, $_POST['phoneno']);
    $district=mysqli_real_escape_string($connection, $_POST['district']);
    $address=mysqli_real_escape_string($connection, $_POST['address']);
    $name=mysqli_real_escape_string($connection, $_POST['name']);
  

 



    $query="insert into food_donations(email,food,type,category,phoneno,location,address,name,quantity) values('$emailid','$foodname','$meal','$category','$phoneno','$district','$address','$name','$quantity')";
    $query_run= mysqli_query($connection, $query);
    if($query_run)
    {

        echo '<script type="text/javascript">alert("data saved")</script>';
        header("location:delivery.html");
    }
    else{
        echo '<script type="text/javascript">alert("data not saved")</script>';
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food Donate</title>
    <link rel="stylesheet" href="loginstyle.css">
</head>
<body>
    <div class="container">
        <div class="regformf" >
    <form action="" method="post">
        <p class="logo"> <b>Donate</b></p>
        
       <div class="input">
        <label for="foodname"  > Food Name:</label>
        <input type="text" id="foodname" name="foodname" required/>
        </div>
      
      
        <div class="radio">
        <label for="meal" >Meal type :</label> 
        <br><br>

        <input type="radio" name="meal" id="veg" value="veg" required/>
        <label for="veg" style="padding-right: 40px;">Veg</label>
        <input type="radio" name="meal" id="Non-veg" value="Non-veg" >
        <label for="Non-veg">Non-veg</label>
    
        </div>
        <br>
        <div class="input">
        <label for="food">Select the Category:</label>
        <br><br>
        <div class="image-radio-group">
            <input type="radio" id="raw-food" name="image-choice" value="raw-food">
            <label for="raw-food">
              <img src="img/raw-food.png" alt="raw-food" >
            </label>
            <input type="radio" id="cooked-food" name="image-choice" value="cooked-food"checked>
            <label for="cooked-food">
              <img src="img/cooked-food.png" alt="cooked-food" >
            </label>
            <input type="radio" id="packed-food" name="image-choice" value="packed-food">
            <label for="packed-food">
              <img src="img/packed-food.png" alt="packed-food" >
            </label>
          </div>
          <br>
        <!-- <input type="text" id="food" name="food"> -->
        </div>
        <div class="input">
        <label for="quantity">Quantity:(number of person /kg)</label>
        <input type="text" id="quantity" name="quantity" required/>
        </div>
       <b><p style="text-align: center;">Contact Details</p></b>
        <div class="input">
          <!-- <div>
      <label for="email">Email:</label>
      <input type="email" id="email" name="email">
          </div> -->
      <div>
      <label for="name">Name:</label>
      <input type="text" id="name" name="name"value="<?php echo"". $_SESSION['name'] ;?>" required/>
      </div>
      <div>
        <label for="phoneno" >PhoneNo:</label>
      <input type="text" id="phoneno" name="phoneno" maxlength="10" pattern="[0-9]{10}" required />
        
      </div>
      </div>
        <div class="input">
        <label for="location"></label>
        <label for="district">District:</label>
        <select id="district" name="district" style="padding:10px;">
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

        <label for="address" style="padding-left: 10px;">Address:</label>
        <input type="text" id="address" name="address" required/><br>
        
      
       
       
        </div>
        <div class="btn">
            <button type="submit" name="submit"> submit</button>
     
        </div>
     </form>
     </div>
   </div>
     
    
</body>
</html>