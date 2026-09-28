<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact Array</title>
</head>
<body>
    <h1>Two-Dimensional Associative Array</h1>
    <?php
    $contacts = [
        ['CA202' => [
            'Name' => 'Mohamed Ahmed Ali',
            'Phone' => '0648440403',
            'Address' => 'Laba Dhagax, Wardhiigley'
        ]],
        ['CA207' => [
            'Name' => 'Ahmed Abdi Jama',
            'Phone' => '0647223201',
            'Address' => 'Taleex, Hodan'
        ]],
        ['CA202' => [
            'Name' => 'Amina Nur Adan',
            'Phone' => '0646990276',
            'Address' => 'Macmaanka, Dharkeenley'
        ]]
    ];
    ?>
    <table border="1" cellpadding="6" cellspacing="0">
        <thead>
            <tr>
                <th></th>
                <th>Name</th>
                <th>Phone</th>
                <th>Address</th>
            </tr>
        </thead>
        <tbody>
            <?php for ($index = 0; $index < count($contacts); $index++):
                $code = array_key_first($contacts[$index]);
                $contact = $contacts[$index][$code];
            ?>
                <tr>
                    <th><?= htmlspecialchars($code, ENT_QUOTES, 'UTF-8') ?></th>
                    <td><?= htmlspecialchars($contact['Name'], ENT_QUOTES, 'UTF-8') ?></td>
                    <td><?= htmlspecialchars($contact['Phone'], ENT_QUOTES, 'UTF-8') ?></td>
                    <td><?= htmlspecialchars($contact['Address'], ENT_QUOTES, 'UTF-8') ?></td>
                </tr>
            <?php endfor; ?>
        </tbody>
    </table>
</body>
</html>