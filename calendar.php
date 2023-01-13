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
  <form action="calendar.php" method="post">
    <label for="month">Month</label>
    <select name="month" id="month">
      <option value="">Choose a month</option>
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
      <option value="6">6</option>
      <option value="7">7</option>
      <option value="8">8</option>
      <option value="9">9</option>
      <option value="10">10</option>
      <option value="11">11</option>
      <option value="12">12</option>
    </select>
    <input type="submit" value="Submit">
  </form>


  <h1>Calendar for
    <?php echo Date::MONTH ?>
    <?php echo Date::YEAR ?> (Myanmar)
  </h1>

  <?php
    class Date
    {
        const MONTH = 11;
        const YEAR = 2024;
    }

    $time = time();
    $numDay = date('d', $time);
    $numMonth = Date::MONTH;
    $strMonth = date('F', $time);
    $numYear = Date::YEAR;
    $firstDay = mktime(0, 0, 0, $numMonth, 1, $numYear);
    $daysInMonth = cal_days_in_month(0, $numMonth, $numYear);
    $dayOfWeek = date('w', $firstDay);
    ?>
  <table>
    <thead>
      <tr>
        <?php
                $mydays = array('Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat');

                foreach ($mydays as $day) {
                    if (date('D') === 'Sun') {
                        echo '<td>Mon</td>';
                    } else {
                        echo '<td>' . $day . '</td>';
                    }
                }
                ?>
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