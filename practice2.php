<!DOCTYPE html>
<html>
<head>
    <title>Array of Fruits</title>
</head>
<body>
    <h2>List of Fruits</h2>
    <ol>
        <?php
        // Step 1: Create an array with at least 5 fruit names
        $fruits = ["Apple", "Banana", "Orange", "Mango", "Grapes"];

        // Step 2: Use a for loop to iterate over the array
        for ($i = 0; $i < count($fruits); $i++) {
            echo "<li>" . $fruits[$i] . "</li>";
        }
        ?>
    </ol>
</body>
</html>
