<?php include("includes/a_config.php"); ?>
<!DOCTYPE html>
<html>
<head>
    <?php include("includes/head-tag-contents.php"); ?>
</head>
<body>

<?php include("includes/design-top.php"); ?>
<?php include("includes/navigation.php"); ?>

<div class="container" id="main-content">
    <h2>Welcome to my website!</h2>
    <p>Some content goes here! Let's go with the classic "lorem ipsum."</p>

    <p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
    </p>

    <p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
    </p>

    <h3>Users from MySQL Database</h3>

    <?php
    include("DbConnect.php");

    $stmt = $conn->prepare("SELECT * FROM user");
    $stmt->execute();

    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

    foreach ($result as $row) {
        echo $row["ID"] . " - " . $row["Name"] . "<br>";
    }
    ?>

</div>

<?php include("includes/footer.php"); ?>

</body>
</html>