<!-- multTableX.php -->
<!-- By Owen Jonas -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>X-by-X Multiplication Table</title>
  <style>
    table {
      border-collapse: collapse;
      margin-top: 20px;
    }
    th, td {
      border: 1px solid #999;
      padding: 6px 10px;
      text-align: center;
    }
    th {
      background-color: #f0f0f0;
    }
  </style>
</head>
<body>
  <?php
    if (isset($_GET['size']) && is_numeric($_GET['size']) && $_GET['size'] > 0) {
      $size = (int)$_GET['size'];
      echo "<h2>{$size}x{$size} Multiplication Table</h2>";
      echo "<table>";
      

      echo "<tr><th></th>";
      for ($i = 1; $i <= $size; $i++) {
        echo "<th>$i</th>";
      }
      echo "</tr>";
      
      for ($row = 1; $row <= $size; $row++) {
        echo "<tr><th>$row</th>";
        for ($col = 1; $col <= $size; $col++) {
          echo "<td>" . ($row * $col) . "</td>";
        }
        echo "</tr>";
      }

      echo "</table>";
    } else {
      echo "<p>Enter a positive number <a href='multTableInput.php'>here</a>.</p>";
    }
  ?>
</body>
</html>
