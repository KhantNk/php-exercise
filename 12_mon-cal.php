<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="12-mon-cal.css">
  <title>Document</title>
</head>

<body>
  <h1>
    2023
  </h1>
  <div class="container">
    <?php
    $year = 2023;
    for ($m = 1; $m <= 12; $m++) {
      $month = date($m);
      $dateObject = DateTime::createFromFormat('!m', $m);
      $monthName = $dateObject->format('F');
      $d = 1;
      
      $no_of_days = cal_days_in_month(CAL_GREGORIAN, $month, $year);

      $j = date('w', mktime(0, 0, 0, $month, 1, $year));
      $j = $j - 1;
      if ($j < 0) {
        $j = 0;
      }

      $adj = str_repeat("<td>&nbsp;</td>", $j);
      $blank_at_end = 42 - $j - $no_of_days;
      if ($blank_at_end >= 7) {
        $blank_at_end = $blank_at_end - 7;
      }

      $link = "calendar.php?month=$m&year=2022";
      echo "<td><a href='$link' target='_blank'><table>
      <th colspan=7>$monthName</th>";

      echo "<tr>
        <td>S</td>
        <td>M</td>
        <td>T</td>
        <td>W</td>
        <td>T</td>
        <td>F</td>
        <td>S</td>
      </tr>";

      for ($i = 1; $i <= $no_of_days; $i++) { echo $adj . "<td>$i</td>" ; $adj='' ; $j++; if ($j==7) { echo "</tr><tr>"
        ; $j=0; } } echo "</tr></table></td>" ; } echo "</table>" ; ?>
  </div>

</body>

</html>