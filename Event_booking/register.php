<?php
  include "connect.php";
  if(isset($_POST['submit']))
  {
    $name=$_POST['fullname'];
    $email=$_POST['email'];
    $number=$_POST['number'];
    $pass=$_POST['password'];
    $city=$_POST['city'];
    $isql="insert into user_data (name,email,number,password,city) VALUES ('$name','$email','$number','$pass','$city')";
    $in=mysqli_query($con,$isql);
    if($in){
      header("location:index.php");
    }
    else{
      echo "Error: " . mysqli_error($con);
    }
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>User Registration</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #f0f8ff; /* light blue */
    }
    .register-container {
      max-width: 500px;
      margin: 60px auto;
      padding: 30px;
      background-color: white;
      border-radius: 15px;
      box-shadow: 0 0 10px rgba(0,0,255,0.1);
    }
    .btn-blue {
      background-color: #007BFF;
      color: white;
    }
    .btn-blue:hover {
      background-color: #0056b3;
    }
    .co{
      color:red;
    }
  </style>
</head>
<body>

  <div class="register-container">
    <h3 class="text-center text-primary mb-4">New User Registration</h3>
    <form action="" method="POST">
      <div class="mb-3">
        <label class="form-label text-primary">Full Name</label>
        <input type="text" class="form-control" name="fullname" placeholder="Enter your full name" required>
      </div>
      <div class="mb-3">
        <label class="form-label text-primary">Email</label>
        <input type="email" class="form-control" name="email" placeholder="Enter email" required>
      </div>
      <div class="mb-3">
        <label class="form-label text-primary">Mobile Number</label>
        <input type="tel" class="form-control" name="number" placeholder="Enter mobile number" required>
      </div>
      <div class="mb-3">
        <label class="form-label text-primary">Password</label>
        <input type="password" class="form-control" name="password" id="password" placeholder="Enter password" required>
      </div>
      <div class="mb-3">
        <label class="form-label text-primary">Confirm Password</label>
        <input type="password" class="form-control" name="confirm_password" id="confirm_password" placeholder="Re-enter password" required>
        <small id="matchMessage" class="text-danger"></small>
      </div>
      <div class="mb-3">
        <label class="form-label text-primary">City</label>
        <select name="city" class="form-control " id="city">
            <?php
              $sql="select *from city";
              $res=mysqli_query($con,$sql);
              while($row = mysqli_fetch_assoc($res))
                echo"<option value='".$row['name']."'>".$row['name']."</option>";
            ?>
        </select>
      </div>
      <div class="d-grid">
        <button type="submit" id="submit" name="submit" class="btn btn-blue">Register</button>
      </div>
      <div class="d-grid mt-2">
        <a href="index.php" class="btn btn-outline-primary">Login</a>
      </div>
    </form>
  </div>
<script>
  const pass = document.querySelector("#password");
  const conf = document.querySelector("#confirm_password");
const message = document.querySelector("#matchMessage");

const form = document.querySelector("form");
let password=false;
conf.addEventListener("keyup", () => {
  if (conf.value === pass.value) {
    message.textContent = "✅ Passwords match";
    message.classList.remove("text-danger");
    message.classList.add("text-success");
    password=true;
  } else {
    message.textContent = "❌ Passwords do not match";
    message.classList.remove("text-success");
    message.classList.add("text-danger");
    password=false;
  }
});
form.addEventListener("submit", (e) => {
    if (!password) {
      e.preventDefault(); // Stop form submission
      alert("Please ensure passwords match before submitting.");
    }
  });
</script>
</body>
</html>
