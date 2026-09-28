<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Color Array</title>
</head>
<body>
    <h1>Two-Dimensional Associative Array</h1>
    <?php
    $colors = [
        'Light' => [
            'Red' => 'Light Red',
            'Green' => 'Light Green',
            'Blue' => 'Light Blue'
        ],
        'Normal' => [
            'Red' => 'Normal Red',
            'Green' => 'Normal Green',
            'Blue' => 'Normal Blue'
        ],
        'Dark' => [
            'Red' => 'Dark Red',
            'Green' => 'Dark Green',
            'Blue' => 'Dark Blue'
        ]
    ];
    $columns = ['Red', 'Green', 'Blue'];
    $rows = array_keys($colors);
    $rowIndex = 0;
    ?>
    <table border="1" cellpadding="6" cellspacing="0">
        <thead>
            <tr>
                <th></th>
                <?php foreach ($columns as $column): ?>
                    <th><?= htmlspecialchars($column, ENT_QUOTES, 'UTF-8') ?></th>
                <?php endforeach; ?>
            </tr>
        </thead>
        <tbody>
            <?php do {
                $row = $rows[$rowIndex];
            ?>
                <tr>
                    <th><?= htmlspecialchars($row, ENT_QUOTES, 'UTF-8') ?></th>
                    <?php foreach ($colors[$row] as $color): ?>
                        <td><?= htmlspecialchars($color, ENT_QUOTES, 'UTF-8') ?></td>
                    <?php endforeach; ?>
                </tr>
            <?php
                $rowIndex++;
            } while ($rowIndex < count($rows)); ?>
        </tbody>
    </table>
</body>
</html>