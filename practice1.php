<!DOCTYPE html>
<html>
<head>
    <title>Triangle Area Calculator</title>
</head>
<body>
    <h2>Triangle Area Calculator</h2>
    <form method="POST">
        Side 1: <input type="number" name="side1" step="any" required><br><br>
        Side 2: <input type="number" name="side2" step="any" required><br><br>
        Side 3: <input type="number" name="side3" step="any" required><br><br>
        <input type="submit" name="calculate" value="Calculate">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get input values
        $side1 = $_POST['side1'];
        $side2 = $_POST['side2'];
        $side3 = $_POST['side3'];
    }
        // Check if input values form a valid triangle
        if ($side1 + $side2 > $side3 && $side1 + $side3 > $side2 && $side2 + $side3 > $side1) {
            // Calculate semi-perimeter (s)
            $s = ($side1 + $side2 + $side3) / 2;
        }
            // Calculate area using Heron's formula
            $areaSquared = $s * ($s - $side1) * ($s - $side2) * ($s - $side3);

            // Ensure the area is valid before calculating square root
            if ($areaSquared > 0) {
                $area = $areaSquared ** 0.5; // Using arithmetic operator instead of sqrt()
                echo "<h3>Triangle Area: " . number_format($area, 2)
            }