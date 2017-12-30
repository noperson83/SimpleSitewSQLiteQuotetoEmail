<?php   

try {
    // Create (connect to) SQLite database in file
    $file_db = new PDO('sqlite:../db/lockgrooves');
    // Set errormode to exceptions
    $file_db->setAttribute(PDO::ATTR_ERRMODE,
        PDO::ERRMODE_EXCEPTION);

    // Select all data from memory db messages table
    $oth = $file_db->prepare("SELECT * FROM orders ORDER BY id DESC");
    $oth->execute();
    $orders = $oth->fetchAll(PDO::FETCH_ASSOC);

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
    <?php
    if ($orders) {
        ?>
        <ul class="list-group">
        <?php
        foreach ($orders as $order) {
        ?>
        <li class="list-group-item">
            <form class="form-inline" method="post" action="result.php">
                <div class="form-group">
                    <label for="order">Order #: <?php echo $order['order']; ?></label>
                    <input type="hidden" name="order" value="<?php echo $order['order']; ?>">
                </div>
                <button type="submit" class="btn btn-primary">View Order</button>
            </form>
        </li>
        <?php } ?>
    <?php } else { ?>
        <h1>No orders.</h1>
    <?php } ?>
</div>

<script src="/assets/js/jquery.min.js"></script>
<script src="/assets/js/bootstrap.min.js"></script>
</body>
</html>