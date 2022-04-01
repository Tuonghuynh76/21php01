<?php
//Bài tập strings
    $fullname = 'Huynh Tri Tuong';   
    $Lname = substr($fullname, 0, 5);
    $Mname = substr($fullname, 6, 3);
    $Fname = substr($fullname, 10, 5);
    echo '<br>';
    echo $fullname;
    echo '<br>';
    //Số ký tự trong chuỗi
    echo '<b>Số ký tự trong chuỗi: </b>'. strlen($fullname);
    //Số chữ n trong chuỗi
    $arrString = str_split($fullname, 1);
    $count = 0;
    foreach($arrString as $key => $value) {
        if ($arrString[$key] == 'n'){
            $count++;
        }
    }
    echo '<br>';
    echo '<b>Số kí tự \'n\' trong chuỗi: </b>'.$count;
    //Số ký tự trong tên
    echo '<br>';
    echo '<b>Số ký tự trong tên: </b>'. strlen($Fname);
    //viết hoa tên đệm
    echo '<br>';
    echo $Lname.' '.strtoupper($Mname).' '.$Fname;
    //thay tên = 20php01
    echo '<br>';
    echo str_replace($Fname, " 20PHP01", $fullname);
////////////////////////////////////////////////////////////////////////////////

//Bài tập Array
echo '<h1>Bài tập Array</h1>';
$class = array(
    array('Fullname' => 'Nguyen Thanh Nam', 'Date' => '17/7/2000', 'Email' => 'thanhnam@gmail.com'),
    array('Fullname' => 'Nguyen Xuan Tu', 'Date' => '20/2/1999', 'Email' => 'tu@gmail.com'),
    array('Fullname' => 'Nguyen Quang Hai', 'Date' => '14/8/1997', 'Email' => 'hai@gmail.com'),
    array('Fullname' => 'Huynh Cong Minh', 'Date' => '12/7/1995', 'Email' => 'congminh@gmail.com'),
    array('Fullname' => 'Nguyen Trong Thai', 'Date' => '12/7/2000', 'Email' => 'trongthai@gmail.com')
);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body>
    <h1>Class</h1>
    <table class="table">
        <thead>
            <tr>
                <th>Fullname: </th>
                <th>Date: </th>
                <th>Email: </th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td scope="row"><?php echo $class[0]['Fullname']?></td>
                <td><?php echo $class[0]['Date']?></td>
                <td><?php echo $class[0]['Email']?></td>
            </tr>
            <tr>
                <td scope="row"><?php echo $class[1]['Fullname']?></td>
                <td><?php echo $class[1]['Date']?></td>
                <td><?php echo $class[1]['Email']?></td>
            </tr>
            <tr>
                <td scope="row"><?php echo $class[2]['Fullname']?></td>
                <td><?php echo $class[2]['Date']?></td>
                <td><?php echo $class[2]['Email']?></td>
            </tr>
            <tr>
                <td scope="row"><?php echo $class[3]['Fullname']?></td>
                <td><?php echo $class[3]['Date']?></td>
                <td><?php echo $class[3]['Email']?></td>
            </tr>
            <tr>
                <td scope="row"><?php echo $class[4]['Fullname']?></td>
                <td><?php echo $class[4]['Date']?></td>
                <td><?php echo $class[4]['Email']?></td>
            </tr>
        </tbody>
    </table>
<!-- =====================================================================   -->
    <h1>Đổi tên bạn thứ 2 và in lại</h1>
    <table class="table">
        <thead>
            <tr>
                <th>Fullname: </th>
                <th>Date: </th>
                <th>Email: </th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td scope="row"><?php echo $class[0]['Fullname']?></td>
                <td><?php echo $class[0]['Date']?></td>
                <td><?php echo $class[0]['Email']?></td>
            </tr>
            <tr>
                <td scope="row"><?php echo $class[1]['Fullname'] = 'Nguyen Van Tuan'?></td>
                <td><?php echo $class[1]['Date']?></td>
                <td><?php echo $class[1]['Email']?></td>
            </tr>
            <tr>
                <td scope="row"><?php echo $class[2]['Fullname']?></td>
                <td><?php echo $class[2]['Date']?></td>
                <td><?php echo $class[2]['Email']?></td>
            </tr>
            <tr>
                <td scope="row"><?php echo $class[3]['Fullname']?></td>
                <td><?php echo $class[3]['Date']?></td>
                <td><?php echo $class[3]['Email']?></td>
            </tr>
            <tr>
                <td scope="row"><?php echo $class[4]['Fullname']?></td>
                <td><?php echo $class[4]['Date']?></td>
                <td><?php echo $class[4]['Email']?></td>
            </tr>
        </tbody>
    </table>

<!-- ======================================================================    -->
<!-- Xoa ban thu 2 -->
    <?php   
        unset($class[2]);
        $class = array_values($class);
    ?>
    <h1>Xóa bạn thứ 3</h1>
    <table class="table">
        <thead>
            <tr>
                <th>Fullname: </th>
                <th>Date: </th>
                <th>Email: </th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td scope="row"><?php echo $class[0]['Fullname']?></td>
                <td><?php echo $class[0]['Date']?></td>
                <td><?php echo $class[0]['Email']?></td>
            </tr>
            <tr>
                <td scope="row"><?php echo $class[1]['Fullname'] = 'Nguyen Van Tuan'?></td>
                <td><?php echo $class[1]['Date']?></td>
                <td><?php echo $class[1]['Email']?></td>
            </tr>
            <tr>
                <td scope="row"><?php echo $class[2]['Fullname']?></td>
                <td><?php echo $class[2]['Date']?></td>
                <td><?php echo $class[2]['Email']?></td>
            </tr>
            <tr>
                <td scope="row"><?php echo $class[3]['Fullname']?></td>
                <td><?php echo $class[3]['Date']?></td>
                <td><?php echo $class[3]['Email']?></td>
            </tr>
        </tbody>
    </table>
</body>
</html>