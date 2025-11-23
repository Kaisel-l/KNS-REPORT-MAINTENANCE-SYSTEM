<!DOCTYPE html>
<html>
<head>
  <title>Kolehiyo Ng Subic Facility Maintenance Record Form</title>
</head>
<body>

  <h2>Kolehiyo Ng Subic Facility Maintenance Record Form</h2>

  <form action="current.php" method="POST">
    <label>Name:</label>
    <input type="text" name="reporter" required>

    <label>Issue:</label>
    <select name="issue">
      <option>Electrical</option>
      <option>Restroom</option>
      <option>Tables and Chairs</option>
      <option>Cleaning</option>
      <option>Other</option>
    </select>

    <label>Room/Building:</label>
    <input type="text" name="location" required>

    <label>Description:</label>
    <textarea name="description" rows="3" required></textarea>

    <button type="submit">Submit Report</button>
  </form>

</body>
</html>
