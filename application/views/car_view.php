<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>List Car</title>
</head>
<body>

<table>
  <table border= "1px solid black"> 

  <tr>
    <th>Name</th>
    <th>Category</th>
    <th>Price</th>
    <th>Status</th>
    <th>image</th>
</tr>
  <?php foreach ($cars as $car) : ?> 

    <tr>
      <td><?php echo $car['name'] ?> </td>
      <td><?php echo $car['category'] ?> </td>
      <td><?php echo $car['price'] ?> </td>
      <td><?php echo $car['status'] ?> </td>
      <td><?php echo $car['image'] ?> </td>
    </tr>

    <?php endforeach; ?>


</table>


</body>
</html>