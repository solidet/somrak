
    <table>
        <tr>
            <th>ID</th>
            <th>FIRST NAME</th>
            <th>USERNAME</th>
        </tr>
        <? foreach($data['owners'] as $owner) { ?>
        <tr>
            <td><?= $owner->id; ?></td>
            <td><?= $owner->firstname; ?></td>
            <td><?= $owner->username; ?></td>
        </tr>
        <? } ?>
    </table>




