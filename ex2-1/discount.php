<?php
    $product = filter_input(INPUT_POST, 'mota');
	$price = filter_input(INPUT_POST, 'gia');
	$discount = filter_input(INPUT_POST, 'chietkhau');

    $discount_next = ($price * $discount)/100;
    $price_next = $price - $discount_next;


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
        <h1>Bảng giá khuyến mãi</h1>

        <div>
            <p>Mô tả sản phẩm: </p>
            <span><?php echo $product?></span>
        </div>

        <div>
            <p>Giá ban đầu $</p>
            <span><?php echo $price?> $</span>
        </div>
            
        <div>
            <p>Chiết khấu %</p>
            <span><?php echo $discount?> %</span>
        </div>
            
        <div>
            <p>Khuyến mãi $</p>
            <span><?php echo $discount_next?> $</span>
        </div>

        <div>
            <p>Giá khuyến mãi $</p>
            <span><?php echo $price_next?> $</span>
        </div>
    </section>

    <style>
        div {
            display: flex;
            gap: 30px;
            align-items: center;
        }

        section {
            border: 2px solid blue;
            width: max-content;
            padding: 20px;
            border-radius: 5px;
        }

        h1 {
            color: brown;
            text-transform: uppercase;
        }

        p {
            font-weight: 600;
            font-size: 18px;
        }
    </style>
</body>
</html>