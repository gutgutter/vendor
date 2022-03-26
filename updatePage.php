<?php
    require_once 'includes/connection.php';
    $product_id = $_GET['id'];
    $product = mysqli_query($connect, "SELECT * FROM `goods` WHERE `id` = '$product_id'");
    $product = mysqli_fetch_assoc($product);
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Updating</title>
    <style>
        @media (min-width: 1200px) {
            .container{
                max-width: 500px;
            }
        }
        #updatingForm {
            margin: 10px;
            padding: 10px;
            font-size: 1.3em;
        }
    </style>
</head>
<body>
    <div class="container bg-secondary">
        <form action="includes/update.php" method="POST" id="updatingForm">

            <input type="hidden" name="id" value="<?= $product['id'] ?>">
            
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" 
                    id="name" value="<?= $product['title'] ?>">
                
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <input type="text" class="form-control" 
                    value="<?= $product['description'] ?>" id="description">
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="text" class="form-control" 
                    value="<?= $product['price'] ?>" id="price">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>
</html>