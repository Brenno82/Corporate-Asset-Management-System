<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Assets</h2>
    
    <table border="1">    
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Type</th>
            <th>Status</th>
        </tr>

        <?php foreach ($assets as $asset): ?>
            <tr>
                <td><?= $asset['id'] ?></td>
                <td><?= $asset['name'] ?></td>
                <td><?= $asset['type'] ?></td>
                <td><?= $asset['status'] ?></td>
            </tr>
        <?php endforeach; ?>    
    </table>
</body>
</html>