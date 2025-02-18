<!DOCTYPE html>
<html>
<head>
    <title>Even Numbers from Matrix</title>
</head>
<body>
    <h2>Even Numbers in Matrix</h2>
    <ul>
        <?php
        // Given Matrix
        $matrix = [
            [12, 23, 34],
            [45, 55, 62],
            [71, 84, 90]
        ];

        // Loop Variables
        $row = 0;
        while ($row < count($matrix)) {
            $col = 0;
            while ($col < count($matrix[$row])) {
                if ($matrix[$row][$col] % 2 == 0) { // Check if even
                    echo "<li>" . $matrix[$row][$col] . "</li>";
                }
                $col++;
            }
            $row++;
        }
        ?>
    </ul>
</body>
</html>
