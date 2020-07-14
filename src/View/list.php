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
<a href="index.php?page=add">ADD PRODUCT</a><br>
<a href="index.php?page=reset">RESERT PRODUCT</a>
<table>
    <tr>
        <td>STT</td>
        <td>ID</td>
        <td>NAME</td>
        <td>PRICE</td>
        <td>COLOR</td>
        <td>IMAGE</td>
    </tr>
    <?php if (empty($listPhone)):?>
    <tr>
        <td>No data</td>
    </tr>
    <?php else:?>
    <?php foreach ($listPhone as $key => $phone):?>
    <tr>
        <td><?php echo ++$key ?></td>
        <td><?php echo $phone->getId() ?></td>
        <td><?php echo $phone->getName() ?></td>
        <td><?php echo $phone->getPrice() ?></td>
        <td><?php echo $phone->getColor() ?></td>
        <td><img style="width: 75px;height: 75px" src="<?php echo $phone->getImage() ?>"</td>
        <td><a onclick="return confirm('Are you sure')" href="index.php?page=delete&id=<?php echo $phone->getId() ?>">Delete</a></td>
        <td><a href="index.php?page=update&id=<?php echo $phone->getId() ?>">Update</a></td>
    </tr>
    <?php endforeach; ?>
    <?php endif; ?>
</table>



</body>
</html>