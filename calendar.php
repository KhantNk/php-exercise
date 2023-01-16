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
  <form action="test.php" method="post">
    <label for="month">Month</label>
    <select name="month" id="month">
      <option value="January">1</option>
      <option value="February">2</option>
      <option value="March">3</option>
      <option value="April">4</option>
      <option value="May">5</option>
      <option value="June">6</option>
      <option value="July">7</option>
      <option value="August">8</option>
      <option value="September">9</option>
      <option value="October">10</option>
      <option value="November">11</option>
      <option value="December">12</option>
    </select>
    <select name="year" id="month">
      <option value="2022">1</option>
      <option value="2023">2</option>
      <option value="2024">3</option>
      <option value="2025">4</option>
      <option value="2026">5</option>
    </select>
    <input type="submit" value="Submit">
  </form>

  <?php

  function  showmonth()
  {
    $first_day = mktime(0, 0, 0, 1, 1, $year);
    $day_of_week = date('D', $first_day);
    switch ($day_of_week) {
      case "Sun":
        $blank = 0;
        break;
      case "Mon":
        $blank = 1;
        break;
      case "Tue":
        $blank = 2;
        break;
      case "Wed":
        $blank = 3;
        break;
      case "Thu":
        $blank = 4;
        break;
      case "Fri":
        $blank = 5;
        break;
      case "Sat":
        $blank = 6;
        break;
    }

    $days_in_month = cal_days_in_month(0, $month, $year);
    echo "<table border=1 width=294>";

    $weekdays = array('Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat');

    foreach ($weekdays as $day) {
      if (date('D') === 'Sun') {
        echo '<th>Mon</th>';
      } else {
        echo '<th>' . $day . '</th>';
      }
    }

    $day_count = 1;
    $blank_space =  $blank;
    echo "<tr>";

    while ($blank_space > 0) {
      echo "<td></td>";
      $blank_space--;
      $day_count++;
    }

    $day_num = 1;
    $space = $blank;
    while ($day_num <= $days_in_month) {
      if ($space == 7) {
        $space = 0;
      };
      while ($space < 7) {
        echo " <td>$day_num</td> ";
        $day_num++;
        $day_count++;
        $space++;
        if ($day_num > $days_in_month) {
          break;
        }
        if ($space == 7) {
          echo "</tr>";
        }
      }
    }

    while ($space > 1 && $space <= 6) {
      echo "<td></td>";
      $space++;
    }

    echo "</tr></table>";
  }

  ?>
