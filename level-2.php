<?php
if (isset($_POST['save'])) {
    $results = array(
        "question1" => $_POST["question1"],
        "question2" => $_POST["question2"]
    );

    $json_data = json_encode($results);
    $file = 'data.json';
    file_put_contents($file, $json_data);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Quiz</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100 flex items-center justify-center h-screen">
    <?php if (isset($_POST['save'])) : ?>
        <div class="bg-white p-8 rounded-lg shadow-md w-full max-w-md">
            <h1 class="text-2xl font-bold mb-6">Quiz Results</h1>
            <div class="space-y-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700">What is the capital of France?</label>
                    <p class="mt-1 block w-full rounded-md border-gray-300 shadow-sm"><?= htmlspecialchars($results["question1"]) ?? ""; ?></p>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700">What is 2 + 2?</label>
                    <p class="mt-1 block w-full rounded-md border-gray-300 shadow-sm"><?= htmlspecialchars($results["question2"]) ?? ""; ?></p>
                </div>
                <a href="level-2.php" class="w-full py-2 px-4 bg-blue-600 text-white rounded-md hover:bg-blue-700 block text-center">Try Again</a>
            </div>
        </div>
    <?php else : ?>
        <div class="bg-white p-8 rounded-lg shadow-md w-full max-w-md">
            <h1 class="text-2xl font-bold mb-6">Online Quiz</h1>
            <form action="" method="post" class="space-y-4">
                <div>
                    <label for="question1" class="block text-sm font-medium text-gray-700">What is the capital of France?</label>
                    <input type="text" id="question1" name="question1" class="mt-1 block w-full rounded-md border-grey-500 shadow-sm">
                </div>
                <div>
                    <label for="question2" class="block text-sm font-medium text-gray-700">What is 2 + 2?</label>
                    <input type="text" id="question2" name="question2" class="mt-1 block w-full rounded-md border-grey-500 shadow-sm">
                </div>
                <div>
                    <input type="submit" name="save" value="Submit" class="w-full py-2 px-4 bg-blue-600 text-white rounded-md hover:bg-blue-700">
                </div>
            </form>
        </div>
    <?php endif; ?>
</body>

</html>