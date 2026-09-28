<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Numeric Array</title>
</head>
<body>
    <h1>One-Dimensional Numeric Array</h1>
    <?php
    $numbers = [5, -7, 12, 10, -7, 11, -6, 12, 1, -7, 2, 9];

    echo '<h2>Array elements</h2><ol>';
    for ($index = 0; $index < count($numbers); $index++) {
        echo '<li>' . $numbers[$index] . '</li>';
    }
    echo '</ol>';

    $total = 0;
    $evenTotal = 0;
    $oddTotal = 0;
    $minimum = $numbers[0];
    $maximum = $numbers[0];
    $minimumPositions = [1];
    $maximumPositions = [1];
    $index = 0;

    while ($index < count($numbers)) {
        $value = $numbers[$index];
        $position = $index + 1;
        $total += $value;

        switch ($value % 2) {
            case 0:
                $evenTotal += $value;
                break;
            default:
                $oddTotal += $value;
                break;
        }

        if ($value < $minimum) {
            $minimum = $value;
            $minimumPositions = [$position];
        } else if ($value === $minimum) {
            $minimumPositions[] = $position;
        }

        if ($value > $maximum) {
            $maximum = $value;
            $maximumPositions = [$position];
        } else if ($value === $maximum) {
            $maximumPositions[] = $position;
        }

        $index++;
    }
    ?>
    <h2>Results</h2>
    <ul>
        <li>Total of all elements: <?= $total ?></li>
        <li>Total of even elements: <?= $evenTotal ?></li>
        <li>Total of odd elements: <?= $oddTotal ?></li>
        <li>Minimum element: <?= $minimum ?>; positions: <?= implode(', ', $minimumPositions) ?></li>
        <li>Maximum element: <?= $maximum ?>; positions: <?= implode(', ', $maximumPositions) ?></li>
    </ul>
</body>
</html>