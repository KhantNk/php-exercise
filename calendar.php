<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="calendar.css">
    <title>Document</title>
</head>

<body>
    <?php
    $time = time();
    $numDay = date('d', $time);
    $numMonth = date('m', $time);
    $strMonth = date('F', $time);
    $numYear = date('Y', $time);
    $firstDay = mktime(0, 0, 0, $numMonth, 1, $numYear);
    $daysInMonth = cal_days_in_month(0, $numMonth, $numYear);
    $dayOfWeek = date('w', $firstDay);
    ?>
    <table>
        <caption>Calendar for <?php echo "$strMonth $numYear"; ?></caption>
        <thead>
            <tr>
                <th title="Sunday">S</th>
                <th title="Monday">M</th>
                <th title="Tuesday">T</th>
                <th title="Wednesday">W</th>
                <th title="Thursday">T</th>
                <th title="Friday">F</th>
                <th title="Saturday">S</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <?php
                if (0 != $dayOfWeek) {
                    echo ('<td colspan="' . $dayOfWeek . '"> </td>');
                }
                for ($i = 1; $i <= $daysInMonth; $i++) {

                    if ($i == $numDay) {
                        echo ('<td id="today">');
                    } else {
                        echo ("<td>");
                    }
                    echo ($i);
                    echo ("</td>");
                    if (date('w', mktime(0, 0, 0, $numMonth, $i, $numYear)) == 6) {
                        echo ("</tr><tr>");
                    }
                }
                ?>
            </tr>
        </tbody>
    </table>
</body>

</html>
