<?php
include 'connection.php';
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css.css">
</head>
<body>
   
    <div class="row">
            <div class='menu'>
                <ol>
                    <a href="index.php"><li>product</li></a>
                    <a href="customers.php"><li>customers</li></a>
                    <a href="suppliers.php"><li>suppliers</li></a>
                    <a href="sales.php"><li>sales</li></a>
                </ol>
            </div>
            <div class='content'>
                <div class="form">
                    <h3>product form</h3>
                    <form action="index.php" method='post'>
                        <input type="text" placeholder='product name' name='pname'>
                        <input type="text" placeholder='product price' name='price'>
                        <button type='submit' class='btn' name="btn">save</button>
                    </form>
                </div>
                <div class="table">
                <h3> all products </h3>
                <table border='3'>
                    <tr>
                        <td>product id</td><td>product name</td> <td>product price</td>
                    </tr>
                    <?php
                    //connection
                     
                     //mysql_querry
                     $result=mysqli_query($connect,"select * from product");
                    while($data=mysqli_fetch_array($result)){
                        ?>
                        <tr>
                                <td><?php echo $data['id']; ?></td>
                                <td><?php echo $data['pname']; ?></td>
                                 <td><?php echo $data['price']; ?></td>
                                 <td><a href="delete.php?id=<?php echo $data['id']; ?>">delete</a></td>
                        </tr>
                        <?php
                    }
                    ?>
                  
                </table>
                </div>
            </div>
</div>
</body>
</html>
<?php
//variable declaration
@$n=$_POST['pname'];
@$p=$_POST['price'];
@$btn=$_POST['btn'];
if(isset($btn)){

        $result=mysqli_query($connect,"insert into product values('','$n','$p','')");
        if($result)
        {
            echo "<script>alert('data added successfully')</script>";
            header("location:index.php");
        }
}

?>