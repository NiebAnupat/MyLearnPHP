<?php
require_once "helpers/db.php"; 
// require_once "new-color.php"
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="new-color.php" method="post" class='inputForm'>
        <input type="text" name="title" placeholder="Title">
        <input type="text" name="code" placeholder="Code">
        <button type="submit">Add</button>
    </form>
    <div class="container">

        <?php
        $sql = "SELECT * FROM color";
        $result = mysqli_query($connection, $sql);
        $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
        ?>
        <?php foreach ($rows as $row): ?>
            <div style="width: 300px;height:auto;">
                <h1>
                    <?php echo $row["title"]; ?>
                </h1>
                <p>
                    <?php echo $row["code"]; ?>
                </p>
                <div style="height: 100px; background-color: <?php echo $row["code"]; ?>"></div>
            </div>
        <?php endforeach; ?>
    </div>

</body>

</html>

<style>
    body {
        /* center content */
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }

    .inputForm {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        row-gap: 1rem;
        padding-top: 15%;
    }

    .container {
        margin-top: 3rem;
        display: flex;
        flex-wrap: wrap;
        column-gap: 2rem;
        text-align: center;
        align-items: center;
        justify-content: center;
    }
</style>

<?php mysqli_close($connection); ?>