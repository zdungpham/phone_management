<?php
    $host = "localhost";
    $user = "root";
    $pass = "root";
    $db = "phone_management";

    $conn = new mysqli($host,$user,$pass,$db);
    if($conn->connect_error){
      die("Connect database failed");
    }

  $id = $_GET["id"];

  $sql = "SELECT * FROM contacts WHERE id = $id";
  $result = $conn->query($sql);
  $contact = null;
  while($row = $result-> fetch_assoc()){
    $contact = $row;
  }

  if($contact == null){
    header("Location: /notfound.php");
    return;
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit contact</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
    <h1>Edit product</h1>
    <form action="/update_contact.php?id=<?php echo $id;?>" method="post">
    <div class="mb-3">
        <label for="exampleInputName1" class="form-label">Name</label>
        <input value="<?php echo $product["name"];?>" type="text" name="name" class="form-control">
    </div>
    <div class="mb-3">
        <label for="exampleInputTel1" class="form-label">Phone number</label>
        <input value="<?php echo $product["price"];?>" type="number" name="price" class="form-control" >
    </div>
    <button type="submit" class="btn btn-primary">Save</button>
    </form>
</div>
</body>
</html>