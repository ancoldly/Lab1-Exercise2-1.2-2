<?php 
    if(isset($_POST['submit'])) {
        $sotien = $_POST['sotien'];
        $laisuat = $_POST['laisuat'];
        $nam = $_POST['nam'];
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <section>
        <h1>TÍNH LÃI ĐẦU TƯ</h1>
        <?php if (!empty($error_message)) { ?>
            <p class="error"><?php echo htmlspecialchars($error_message); ?></p>
        <?php } ?>
        <form action="money_next.php" method="post">

            <div style="display: grid; width: max-content; gap: 10px;">
                <input type="text" name="sotien" placeholder="Nhập vào số tiền đầu tư" value="<?php echo $sotien?>">

                <input type="text" name="laisuat" placeholder="Nhập vào lãi suất" value="<?php echo $laisuat?>">

                <input type="text" name="nam" placeholder="Nhập vào số năm" value="<?php echo $nam?>">

                <button type="submit" name="submit">Tính đầu tư</button>
            </div>
        </form>
    </section>

    <style>
        section {
            width: max-content;
            padding: 20px;
            border: 2px solid red;
            border-radius: 5px;
        }

        h1 {
            color: brown;
        }
    </style>
</body>
</html>