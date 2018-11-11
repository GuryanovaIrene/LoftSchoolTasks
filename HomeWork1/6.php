<html>
<table>
    <thead>
        <tr>
            <th>&nbsp;</th>
            <?php
            for ($i = 1; $i <= 10; $i++) {
                echo '<th>' . $i . '</th>';
            }
            ?>
        </tr>
    </thead>
    <tbody>
        <?php
        for ($i = 1; $i <= 10; $i++) {
            echo '<tr><td>' . $i . '</td>';
            for ($j = 1; $j <= 10; $j++) {
                if ($i % 2 == 0 and $j % 2 == 0) {
                    $bg = '(';
                    $en = ')';
                } elseif ($i % 2 == 1 and $j % 2 == 1) {
                    $bg = '[';
                    $en = ']';
                } else {
                    $bg = '';
                    $en = '';
                }
                echo '<td>' . $bg . $i * $j . $en . '</td>';
            }
            echo '</tr>';
        }
        ?>
    </tbody>
</table>
</html>
