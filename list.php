<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Documents List</title>
</head>
<body>
    <a href="?id=0">Add item</a>
    <table border=1>
        <tr>
            <td><b>date</b></td>
            <td><b>name</b></td>
            <td><b>kpowner</b></td>
            <td><b>phone</b></td>
            <td><b>address</b></td>
            <td><b>percentage</b></td>
            <td><b>acctype</b></td>
            <td><b>haul</b></td>
            <td><b>tujuan</b></td>
            <td><b>amount</b></td>
            <td><b>consultantid</b></td>
            <td><b>method</b></td>
            <td><b>asnafLuar</b></td>
            <td><b>status</b></td>
            <td><b>...</b></td>
        </tr>
        <?php foreach ($LIST as $row): ?>
            <tr>
                <td><?=e($row['date'])?></td>
                <td><?=e($row['name'])?></td>
                <td><?=e($row['kpowner'])?></td>
                <td><?=e($row['phone'])?></td>
                <td><?=e($row['address'])?></td>
                <td><?=e($row['percentage'])?></td>
                <td><?=e($row['acctype'])?></td>
                <td><?=e($row['haul'])?></td>
                <td><?=e($row['tujuan'])?></td>
                <td><?=e($row['amount'])?></td>
                <td><?=e($row['consultantid'])?></td>
                <td><?=e($row['method'])?></td>
                <td><?=e($row['asnafLuar'])?></td>
                <td><?=e($row['status'])?></td>
                <td><a href="?id=<?=e($row['id'])?>">Edit</a></td>
            </tr>
        <?php endforeach ?>
    </table>
</body>
</html>