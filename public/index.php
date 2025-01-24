<html>
  <head>
    <title>My first php-page</title>
    <link rel="stylesheet" href="./index.css" />
  </head>
  <body>
    <h1>Heipputirallaa</h1>

    <?php
      $conn = new PDO("pgsql:host=possukka;port=5432;dbname=postgres;user=postgres;password=example");

      $query = $conn->query("SELECT * FROM person");
      $rows = $query->fetchAll(PDO::FETCH_ASSOC);
    ?>

    <?php echo "My first PHP ECHO"; ?>
    <?php //echo phpinfo(); ?>
    <p>Meikä mandoliini on koodimestari ja muita koodimestareita ovat:</p>


    <ul>
      <?php foreach ($rows as $row): ?>
        <li><?php echo $row['name']; ?></li>
      <?php endforeach; ?>
    </ul>


    <p>Tänään opettelen PHP:tä ja yritän parhaani pysyä hereillä.</p>
  </body>
</html>
