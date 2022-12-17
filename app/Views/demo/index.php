<html>

<head>
  <title>Modeling Data and ORM in CodeIgniter 4</title>
</head>

<body>

  <h3>Product List</h3>
  <table border="1" cellpadding="2" cellspacing="2">
    <tr>
      <th>Id</th>
      <th>Name</th>
    </tr>
    <?php foreach ($diskons as $diskon) { ?>
      <tr>
        <td><?= $product['id'] ?></td>
        <td><?= $product['Kode_voucher'] ?></td>
      </tr>
    <?php } ?>
  </table>

</body>

</html>