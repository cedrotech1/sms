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
                    <form action="">
                        <input type="text" placeholder='product name'>
                        <input type="text" placeholder='product price'>
                        <button>save</button>
                    </form>
                </div>
                <div class="table">
                <h3> all products </h3>
                <table border='3'>
                    <tr>
                        <td>product id</td><td>product name</td> <td>product price</td>
                    </tr>
                    <tr>
                        <td>product id</td><td>product name</td> <td>product price</td>
                    </tr>
                    <tr>
                        <td>product id</td><td>product name</td> <td>product price</td>
                    </tr>
                </table>
                </div>
            </div>
</div>
</body>
</html>