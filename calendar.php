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
  <form action="calendar.php" method="get">
    <label for="month">Month</label>
    <select name="month" id="month">
      <option value="">Choose a month</option>
      <option value="1">January</option>
      <option value="2">February</option>
      <option value="3">March</option>
      <option value="4">April</option>
      <option value="5">May</option>
      <option value="6">June</option>
      <option value="7">July</option>
      <option value="8">August</option>
      <option value="9">September</option>
      <option value="10">October</option>
      <option value="11">November</option>
      <option value="12">December</option>
    </select>
    <label for="year">Year</label>
    <select name="year" id="year">
      <option value="">Choose a year</option>
      <option value="2022">2022</option>
      <option value="2023">2023</option>
      <option value="2024">2024</option>
      <option value="2025">2025</option>
      <option value="2026">2026</option>
      <option value="2027">2027</option>
    </select>
    <input type="submit" value="Submit">
  </form>
  <?php
  
  if (isset($_GET['month']) && isset($_GET['year'])) {
    $month = $_GET['month'];
    $year = $_GET['year'];
  }

  if (isset($month) || isset($year)) {
    if
    ($month >= 1 && $month <= 12){
      showmonth($month, $year);
    }
  }

  function showmonth($month, $year)
  {
    $firstDay = mktime(0, 0, 0, $month, 1, $year);
    $title = date('F', $firstDay);
    $weekDays = date('D', $firstDay);

    switch ($weekDays) {
      case "Sun":
        $blankdays = 0;
        break;
      case "Mon":
        $blankdays = 1;
        break;
      case "Tue":
        $blankdays = 2;
        break;
      case "Wed":
        $blankdays = 3;
        break;
      case "Thu":
        $blankdays = 4;
        break;
      case "Fri":
        $blankdays = 5;
        break;
      case "Sat":
        $blankdays = 6;
        break;
    }

    $monthDay = cal_days_in_month(0, $month, $year);

    echo "<table border=1 width=294>";
    echo "<tr>
      <th colspan=7> $title $year </th>
    </tr>";

    $weekDays = array('Sun','Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat');

    foreach ($weekDays as $day) {
      if (date('D') === 'Sun') {
        echo '<td>Mon</td>';
      } else {
        echo '<td>' . $day . '</td>';
      }
    }

    $dayCount = 1;

    $blankCnt = $blankdays;
    echo "<tr>";

    while ($blankCnt > 0) {
      echo "<td></td>";
      $blankCnt--;
      $dayCount++;
    }

    $dayNum = 1;
    $cnt = $blankdays;

    while ($dayNum <= $monthDay) {
      if ($cnt == 7) {
        $cnt = 0;
      };
      while ($cnt < 7) {
        echo " <td>$dayNum</td> ";
        $dayNum++;
        $dayCount++;
        $cnt++;
        if ($dayNum > $monthDay) {
          break;
        }
        if ($cnt == 7) {
          echo "</tr>";
        }
      }
    }

    while ($cnt > 1 && $cnt <= 6) {
      echo "<td></td>";
      $cnt++;
    }
    echo "</tr></table>";
  } ?>
</body>

</html>

</html>