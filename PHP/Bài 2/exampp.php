<!DOCTYPE html>
<html>
<head>
	<title>Add news</title>
</head>
<body>
<?php 
	$errTitle = '';
	$errDescription = '';
	$errContent = '';
    $errStatus = '';
    $errCategory = '';
    $errDate = '';
		if (isset($_POST['title'])) {
			if ($_POST['title'] == '') {
				$errTitle = 'Please input title';
			}
            if ($_POST['content'] == '') {
				$errContent = 'Please input content';
			}
			if ($_POST['description'] == '') {
				$errDescription = 'Please input description';
			}
            if (isset($_POST['status']) == '') {
				$errStatus = 'Please input status';
			}
            if ($_POST['category'] == '') {
				$errCategory = 'Please input category';
			}
		} else {
			echo "Chưa submit";
		}
	?>
    <h1>Add news</h1>
<form action="#" method="POST">
        <p>
			Title:
			<input type="text" name="title" value="<?php if(isset($_POST["title"])) { echo $_POST["title"]; }
            ?>">
			<?php echo $errTitle;?>
		</p>
        <p>Content: 
            <input type="text" name="content" value="<?php if(isset($_POST["content"])) { echo $_POST["content"];}
            ?>">
        <?php echo $errContent;?>
    </p>
        <p>Status: Public <input type="radio" name="status" value="Public"> Private <input type="radio" name="status" value="Private">
    </p>
    <p>Category: <select name="category">
        <option value="Thể thao">Thể thao</option>
        <option value="Văn hóa">Văn hóa</option>
        <option value="Thế giới">Thế giới</option>
    </select></p>
    <p>Date: <input type="date" name="date" value="date"></p>
    <p>Image: <input type="file" name="image"> </p>
    <p>Description: <input type="text" name="description" value="<?php if(isset($_POST["description"])) { echo $_POST["description"]; } ?>">
    <?php echo $errDescription;?></p>
    <button type="submit">Gửi</button>
</form>
<p>Title: <?php if(isset($_POST["title"])) { echo $_POST["title"]; } ?></p>
<p>Content: <?php if(isset($_POST["content"])) { echo $_POST["content"]; } ?></p>
<p>Status: <?php if(isset($_POST["status"])) { echo $_POST["status"]; } ?></p>
<p>Category: <?php if(isset($_POST["category"])) { echo $_POST["category"]; } ?></p>
<p>Date: <?php if(isset($_POST["date"])) { echo $_POST["date"]; } ?></p>
<p>Description: <?php if(isset($_POST["description"])) { echo $_POST["description"]; } ?></p>

</body>
</html>