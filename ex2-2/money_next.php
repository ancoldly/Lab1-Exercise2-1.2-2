<?php 
    $tiendautu = filter_input(INPUT_POST, 'sotien',
    FILTER_VALIDATE_FLOAT);
    $laisuat = filter_input(INPUT_POST, 'laisuat',
        FILTER_VALIDATE_FLOAT);
    $namdautu = filter_input(INPUT_POST, 'nam',
        FILTER_VALIDATE_INT);

        if($tiendautu === false) {
            $error_message = 'Số tiền đầu tư phải hợp lệ';
        } else if($tiendautu <= 0) {
            $error_message = 'Số tiền phải lớn hơn 0';
        } else if($laisuat === false) {
            $error_message = 'Lãi suất phải hợp lệ';
        } else if($laisuat<= 0) {
            $error_message = 'Lãi suất phải lớn hơn 0';
        } else if($namdautu === false) {
            $error_message = 'Số năm phải hợp lệ';
        } else if($namdautu<= 0) {
            $error_message = 'Số năm phải lớn hơn 0';
        } elseif($namdautu > 30) {
            $error_message = 'Vượt quá số năm quy định';
        } else {
            $error_message = '';
        }
        
        if ($error_message != '') {
            include('index.php');
            exit(); }

        $temp_tien = $tiendautu;

        for($i = 1; $i <= $namdautu; $i++) {
            $temp_tien += $temp_tien * $laisuat * .01;
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
        <h1>Kết quả tính toán</h1>

        <div>
            <p>Số tiền đầu tư $: </p>
            <span><?php echo $tiendautu ?> $</span>
        </div>
        <div>
            <p>Lãi suất %: </p>
            <span><?php echo $laisuat ?> %</span>
        </div>
        <div>
            <p>Năm đầu tư: </p>
            <span><?php echo $namdautu ?> Năm</span>
        </div>
        <div>
            <p>Số tiền thu được $: </p>
            <span><?php echo number_format($temp_tien, 2); ?> $</span>
        </div>
    </section>

    <style>
        div {
            display: flex;
            align-items: center;
            gap: 20px;
        }

        p {
            font-weight: 600;
        }

        section {
            width: max-content;
            padding: 30px;
            border: 2px red solid;
            border-radius: 5px;
        }

        h1 {
            color: brown;
        }

    </style>
</body>
</html>