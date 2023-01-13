< !DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="calendar.css">
        <title>Document</title>
    </head>

    <body>
        <h1>Calendar for January 2023 (Myanmar)</h1>
        
        echo "<table border=1>";
            echo "<tr>
                <th colspan=7> $title $year </th>
            </tr>";

            echo "<tr>
                <td width=42>S</td>
                <td width=42>M</td>
                <td width=42>T</td>
                <td width=42>W</td>
                <td width=42>T</td>
                <td width=42>F</td>
                <td width=42>S</td>
            </tr>";

            $day_count = 1;

            $blank_cnt = $blankdays;
            echo "<tr>";

                while ($blank_cnt > 0) {
                echo "<td></td>";
                $blank_cnt--;
                $day_count++;
                }

                $day_num = 1;
                $cnt = $blankdays;

                while ($day_num <= $days_in_month) { if ($cnt==7) { $cnt=0; }; while ($cnt < 7) { echo " <td>$day_num</td> " ; $day_num++; $day_count++; $cnt++; if ($day_num> $days_in_month) {
                    break;
                    }

                    if ($cnt == 7) {
                    echo "</tr>";
            }
            }
            }

            while ($cnt > 1 && $cnt <= 6) { echo "<td></td>" ; $cnt++; } echo "</tr></table>" ; } ?>
    </body>

    </html>
