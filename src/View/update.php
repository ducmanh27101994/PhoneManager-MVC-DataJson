<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<form method="post">
    <input type="text" name="id" value="<?php echo $phone->getId()?>">
    <input type="text" name="name" value="<?php echo $phone->getName()?>">
    <input type="text" name="price" value="<?php echo $phone->getPrice()?>">
    <input type="text" name="color" value="<?php echo $phone->getColor()?>">
    <input type="text" name="image" value="<?php echo $phone->getImage()?>">
    <br>
    <br>
    <button type="submit">Update Product</button>

</form>


</body>
</html>