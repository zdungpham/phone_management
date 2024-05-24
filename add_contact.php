<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add contact</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
  <h1>Add a new contact</h1>
    <form action="save_contact.php" method="post">
    <div class="mb-3">
        <label  class="form-label">Name</label>
        <input type="text" name="name" class="form-control">
    </div>
    <div class="mb-3">
        <label  class="form-label">Tel</label>
        <input type="number" name="tel" class="form-control" >
    </div>
    <button type="submit" class="btn btn-primary">Save</button>
    </form>
</div>
</body>
</html>