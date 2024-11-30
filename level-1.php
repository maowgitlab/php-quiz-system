<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP QUIZ SYSTEM</title>
</head>
<body>
    <h1>Welcome to PHP QUIZ SYSTEM</h1>
    <form action="" method="post">
        <label for="q1">Where are you from?</label> <br>
        <input type="text" name="q1"> <br><br>
        <label for="q2">Your age?</label> <br>
        <input type="text" name="q2"> <br><br>
        <button type="submit" name="save">Save</button>
    </form>
</body>
</html>
<?php 

if (isset($_POST['save'])) {
    $data = [
        "question1" => $_POST['q1'],
        "question2" => $_POST['q2']
    ];

    $data = json_encode($data);
    $file = "data.json";
    if (file_put_contents($file, $data)) {
        echo "Data saved successfully";
    } else {
        echo "Failed to save data";
    }
}

?>