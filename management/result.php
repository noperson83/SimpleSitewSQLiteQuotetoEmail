<?php
try {
    // Create (connect to) SQLite database in file
    $file_db = new PDO('sqlite:../db/lockgrooves');
    // Set errormode to exceptions
    $file_db->setAttribute(PDO::ATTR_ERRMODE,
        PDO::ERRMODE_EXCEPTION);

    // Select all data from memory db messages table
    $oth = $file_db->prepare("SELECT * FROM orders WHERE `order` = '".$_POST['order']."'");
    $oth->execute();
    $order = $oth->fetch(PDO::FETCH_ASSOC);

    if ($order) {
        $cth = $file_db->prepare("SELECT * FROM contacts WHERE `id` = '".$order['contact_id']."'");
        $cth->execute();
        $contact = $cth->fetch(PDO::FETCH_ASSOC);
    }

    // Close file db connection
    $file_db = null;
} catch (PDOException $e) {
    // Print PDOException message
    echo $e->getMessage();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <style>
        tr td:first-child { text-transform: capitalize; font-weight: bold; }
        td { padding: 5px; }
    </style>
</head>
<body>
<div class="container">
    <p><a href="lookup.php">&lt; Back to search</a></p>

    <?php
    if ($order) {
    ?>

    <table class="table table-striped">
        <?php
        foreach ($order as $a => $b) {
            if ($a !== 'id' AND $a !== 'contact_id') {
                echo "<tr><td>$a</td><td>$b</td></tr>";
            }
        }
        ?>
    </table>

    <table class="table table-striped">
        <?php
        foreach ($contact as $c => $d) {
            if ($c !== 'id') {
                echo "<tr><td>$c</td><td>$d</td></tr>";
            }
        }
        ?>
    </table>

    <?php } else { ?>
        <h1>Not found.</h1>
    <?php } ?>
</div>

<script src="/assets/js/jquery.min.js"></script>
<script src="/assets/js/bootstrap.min.js"></script>
</body>
</html>