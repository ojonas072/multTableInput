<!-- multTableInput.php -->
<!-- By Owen Jonas -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Enter Table Size</title>
</head>
<body>
  <h2>Multiplication Table Generator</h2>
  <form action="multTableX.php" method="get">
    <label for="size">Enter a positive integer:</label>
    <input type="number" name="size" id="size" min="1" required>
    <button type="submit">Generate Table</button>
  </form>
</body>
</html>
