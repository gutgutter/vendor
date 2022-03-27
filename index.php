<?php
    require_once 'includes/connection.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Goods</title>
    <style>
        @media (min-width: 1200px) {
            .cTable{
                max-width: 500px;
                float: left;
                margin-left: 80px;
                margin-top: 25px;
                padding: 10px;
            }
        }
        .goodsList {
            text-align: center;
            background-color: lightgrey;
            padding-bottom: 10px;
            margin-top: 10px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1 class="goodsList">Lisy Of Goods</h1>
        <table class="table table-hover">
            <thead class="table-dark">
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Description</th>
                    <th scope="col">&#9998;</th>
                    <th scope="col">&#10006;</th>
                </tr>
            </thead>
            <tbody>
            <?php
                $products = mysqli_query($connect, "SELECT * FROM `goods`");
                $products = mysqli_fetch_all($products);
                foreach($products as $product) {
            ?>
                <tr>
                    <td><?= $product[0] ?></td>
                    <td><?= $product[1] ?></td>
                    <td><?= $product[2] ?></td>
                    <td><?= $product[3] ?></td> 
                    <td><a href="updatePage.php?id=<?= $product[0] ?>">Update</a></td>
                    <td><a href="includes/delete.php?id=<?= $product[0] ?>">Delete</a></td> 
                </tr>
                <?php
                }
            ?>
                
            </tbody>
        </table>
    </div>

    <div class="container cTable bg-secondary">
        <h1 class="addGood" style="text-align: center;">Add a new good</h1>
        <form action="includes/create.php" method="POST" id="createForm">
            
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="title">
                
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <input type="text" class="form-control" id="description" name="description">
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="text" class="form-control" id="price" name="price">
            </div>
            <button type="submit" class="btn btn-primary">Add</button>
        </form>
    </div>
</body>

</html>