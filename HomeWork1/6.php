<html>
<table>
    <thead>
        <tr>
            <th>&nbsp;</th>';
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
                echo '<td>' . $i * $j . '</td>';
            }
            echo '</tr>';
        }
        ?>
    </tbody>
</table>
</html>