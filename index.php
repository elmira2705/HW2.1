<?php
$json = file_get_contents(_DIR_."/phones.json");
$data = json_decode($json, true);
?>
<html>
<head>
  <meta charset="UTF-8">
  <title>Home work #2.1: phonebook</title>
</head>
<body>
  <table>
    <thead>
      <tr>
        <td>Имя</td>
        <td>Адрес</td>
        <td>Телефон</td>
      </tr>
    </thead>
    <tbody>
      <?php foreach($data as $item) { ?>
      <tr>
        <td><?php echo $item["firstName"." ". "lastName"]?></td>
        <td><?php echo $item["address"]?></td>
        <td><?php echo $item["phoneNumber"]?></td>
      </tr>
    </tbody>
  </table>
</body>
</html>
