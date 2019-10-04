<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Notes</title>
    <link rel="stylesheet" href="style.css">
    <h2>Upcoming events</h2>
  </head>
  <body>
    <?php
    echo "<table style='border: solid 1px black;'>";
     echo "<tr><th>Id</th><th>Client_name</th><th>Date</th><th>Time</th><th>Client_type</th><th>Contact</th><th>Address</th><th>Email</th></tr>";

    class TableRows extends RecursiveIteratorIterator {
        function __construct($it) {
            parent::__construct($it, self::LEAVES_ONLY);
        }

        function current() {
            return "<td style='width: 150px; border: 1px solid black;'>" . parent::current(). "</td>";
        }

        function beginChildren() {
            echo "<tr>";
        }

        function endChildren() {
            echo "</tr>" . "\n";
        }
    }

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "kimbo";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $date_now = getdate();
        $stmt = $conn->prepare("SELECT id, client_name,date,time,client_type, contact,address, email FROM appointments WHERE date >'$date_now'");
        $stmt->execute();

        // set the resulting array to associative
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);

        foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
            echo $v;
        }
    }
    catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
    $conn = null;
    echo "</table>";
    ?>

    </body>
    <?php include_once('footer.php') ?>
</html>
