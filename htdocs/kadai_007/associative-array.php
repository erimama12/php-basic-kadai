<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>PHP基礎7章課題</title>
</head>
<body>
    <p>
        <?php
        // $連想配列名 = ['キー1' => 値1, 'キー2' => 値2,...]; と記述
        $product_data = ['name' => 'onion', 'price' => 200, 'weight' => 160];

        // 作った連想配列を画面に出力
        print_r($product_data);
        ?>
    </p>
</body>
</html>