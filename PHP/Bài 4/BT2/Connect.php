<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myclass";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  echo "<h1 style='text-align: center'>Connected successfully </h1>";
  echo "<br>";
 
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["name"])) {
        $name = $_POST['name'];
    }
    if (isset($_POST["phone"])) {
        $phone = $_POST['phone'];
    }
    if (isset($_POST["email"])) {
        $email = $_POST['email'];
    }
    if (isset($_POST["course"])) {
        $course = $_POST['course'];
    }
    if (isset($_POST["year"])) {
        $year = $_POST['year'];
    }
    if(!empty($name)&&!empty($phone)&&!empty($email)&&!empty($course)&&!empty($year)){
    //Insert Data
    $sql = "INSERT INTO `class` (`name`, `phone`, `email`, `course`, `year`)
                VALUES ('{$name}', '{$phone}', '{$email}', '{$course}', '{$year}')";
    if ($conn->query($sql) === TRUE) {
        echo "<h2 style='text-align: center'>Add data successfully </h2>";
        } else {
                echo "Error!! '{$sql}'".$conn->error;
            }
}
else{
    echo "<h2 style='text-align: center'>Please input information!!! </h2>";
}
}

$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title> Add Class </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body>
<?php
        $course = "";
        $name = $email = $phone = $year = '';
        $error_course = $error_email = $error_phone = $error_name = $error_year ='';
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["name"])) {
                $error_name = "<span style='color:red;'>Error: Please input name.</span>";
            }
            if (empty($_POST["phone"])) {
                $error_phone = "<span style='color:red;'>Error: Please input name.</span>";
            }
            if (empty($_POST["email"])) {
                $error_email = "<span style='color:red;'>Error: Please input name.</span>";
            }
            if (empty($_POST["course"])) {
                $error_course = "<span style='color:red;'>Error: Please input course.</span>";
              } else {
                $course = ($_POST["course"]);
              }
              if (empty($_POST["year"])) {
                $error_year = "<span style='color:red;'>Error: Please input year.</span>";
              }
        }
    ?>
<div class="container">
    <div class="col-md-6">
        <h1 class="text-center">Register</h1>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" >
            <div class="form-group"> 
                <label>Name:</label>
                <input type="text" class="form-control"  id="name" placeholder="Name" name="name" value="<?php if(isset($_POST["name"])) { echo $_POST["name"]; }?>">
                <span class="test-warning"> <?php echo $error_name; ?></span>
            </div>
            <div class="form-group"> 
            <label>Phone:</label>
                <input type="text" class="form-control"  id="phone" placeholder="Phone" name="phone" value="<?php if(isset($_POST["phone"])) { echo $_POST["phone"]; }?>">
                <span class="test-warning"> <?php echo $error_phone; ?></span>
                </div>
            <div class="form-group"> 
                <label>E-mail:</label>
                <input type="text" class="form-control"  id="email" placeholder="E-mail" name="email" value="<?php if(isset($_POST["email"])) { echo $_POST["email"]; }?>">
                <span class="test-warning"> <?php echo $error_email; ?></span>
            </div>
                <div class="form-group"> 
                    <label> Course: </label>
                    <input type="radio" name="course" <?php if (isset($course) && $course=="PHP") echo "checked";?> value="PHP"> PHP
                    <input type="radio" name="course" <?php if (isset($course) && $course=="HTML") echo "checked";?> value="HTML"> HTML
                    <input type="radio" name="course" <?php if (isset($course) && $course=="SQL") echo "checked";?> value="SQL"> SQL
                    <br>
                    <span style = 'color:red'> <?php echo $error_course;?></span>
                </div>
                <div class="form-group"> 
                <label>Year:</label>
                <input type="text" class="form-control"  id="year" placeholder="Year" name="year" value="<?php if(isset($_POST["year"])) { echo $_POST["year"]; }?>">
                <span class="test-warning"> <?php echo $error_year; ?></span>
            </div>
                        <button type="submit" class="btn btn-danger btn-block" name="submit">Register</button>
        </form>
    </div>
</div>
</form>
</body>
</html>