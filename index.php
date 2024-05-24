<?php 
    require_once("function/contact.php");
    $get_contacts = get_contacts();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List of contact</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</head>

<body>
    <main class="main">
        <div class="container">
            <button class="btn btn-primary">
                <a href="add_contact.php" class="text-light">Add contact</a>
            </button>
            <h1> List of contacts:</h1>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Phone number</th>

                    </tr>
                </thead>
                <tbody>
                    <?php foreach($get_contacts as $item): ?>
                    <tr>
                        <th scope="row"><?php echo $item["name"] ?></th>
                        <td><?php echo $item["tel"] ?></td>
                        <td><a href="/edit_contact.php?id=<?php echo $item["id"];?>">Edit</a></td>
                        <td><a onclick="return confirm('Are you sure you want to delete this contact')" href="/delete_contact.php?id=<?php echo $item["id"];?> " class="text-danger">Delete</a></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>

        </div>
    </main>

</body>

</html>