<!DOCTYPE html>
<html lang="en">
<head>
	<title> Register </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body>
    <?php
        $gender = "";
        $fullname = $date = $native = $image = '';
        $error_gender =  $error_fullname = $error_date = $error_native = $error_img= '';
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["fullname"])) {
                $error_fullname = "<span style='color:red;'>Error: Please input fullname.</span>";
            }
            if (empty($_POST["gender"])) {
                $error_gender = "<span style='color:red;'>Error: Please input gender.</span>";
              } else {
                $gender = ($_POST["gender"]);
              }
              if (empty($_POST["date"])) {
                $error_date = "<span style='color:red;'>Error: Please input date of birth.</span>";
              }
              if (empty($_POST["native"])) {
                $error_native = "<span style='color:red;'>Error: Please input native.</span>";
              } else {
                $native = ($_POST["native"]);
              }
                $target_dir = "./uploads/";
                $target_file = $target_dir . basename($_FILES["image"]["name"]);
              move_uploaded_file($_FILES['image']['tmp_name'], './uploads/'.$_FILES['image']['name']);
              if(empty($_FILES['image']['name'])) {
                $error_img = 'Error: Please input avatar';
              } else {
                  $image = $target_dir.$_FILES['image']['name'];
              }
             
        }
    ?>
<div class="container">
    <div class="col-md-6">
        <h1 class="text-center">Register</h1>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" enctype="multipart/form-data">
            <div class="form-group"> 
                <label>Fullname:</label>
                <input type="text" class="form-control"  id="fullname" placeholder="Enter FullName" name="fullname" value="<?php if(isset($_POST["fullname"])) { echo $_POST["fullname"]; }?>">
                <span class="test-warning"> <?php echo $error_fullname; ?></span>
            </div>
                <div class="form-group"> 
                    <label> Gender: </label>
                    <input type="radio" name="gender" <?php if (isset($gender) && $gender=="Female") echo "checked";?> value="Female"> Female
                    <input type="radio" name="gender" <?php if (isset($gender) && $gender=="Male") echo "checked";?> value="Male"> Male
                    <input type="radio" name="gender" <?php if (isset($gender) && $gender=="Other") echo "checked";?> value="Other"> Other
                    <br>
                    <span style = 'color:red'> <?php echo $error_gender;?></span>
                </div>
                    <div class="form-group"> 
                        <label>Date of birth: </label> <input type="date" name="date" value = "<?php if(isset($_POST["date"])) { echo $_POST["date"]; }?>">
                        <br>
                        <span style = 'color:red'> <?php echo $error_date;?></span>
                    </div>
                        <div class="form-group"> 
                            <label>Native: </label>
                            <select class="form-control" name="native">
                            <option value=""></option>
                            <option <?php if (isset($native) && $native=="Hà Nội") echo "selected";?> value="Hà Nội">Hà Nội</option>
                            <option <?php if (isset($native) && $native=="Hồ Chí Minh") echo "selected";?> value="Hồ Chí Minh">Hồ Chí Minh</option>
                            <option <?php if (isset($native) && $native=="Đà Nẵng") echo "selected";?> value="Đà Nẵng">Đà Nẵng</option>
                            <option <?php if (isset($native) && $native=="Cần Thơ") echo "selected";?> value="Cần Thơ">Cần Thơ</option>
                            </select>
                            <span style = 'color:red'> <?php echo $error_native; ?></span>
                        </div>
                            <div class="form-group"> 
                                <label>Avatar: </label> <input type="file" name="image">
                            </div>
                                    <button type="submit" class="btn btn-danger btn-block" name="submit">Register</button>
        </form>
    </div>
    <div class="col-md-6">
        <br>
        <h3>Fullname: <?php if(isset($_POST["fullname"])) { echo $_POST["fullname"]; } ?></h3>
        <h3>Gender: <?php if(isset($_POST["gender"])) { echo $_POST["gender"]; } ?></h3>
        <h3>Date of birth: <?php if(isset($_POST["date"])) { echo $_POST["date"]; } ?></h3>
        <h3>Native: <?php if(isset($_POST["native"])) { echo $_POST["native"]; } ?></h3>
        <img src="<?php echo $image;?>" style="width:15rem;height:15rem;border-radius:50%;">
    </div>
</div>
</body>
</html>