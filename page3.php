<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="refresh" content="60">  <!-- 定期刷新頁面 -->
        <title>Backstage</title>
    </head>

    <body style="font-size: 50px;">
        <h1>The order we recived</h1>
        <a style="font-size: 60px;" href="index.php">Home</a>
        <hr/>
        <?php
            $orderData = file_get_contents('data.csv');  //取得數據檔案
            $orders = str_getcsv($orderData, "\r\n");  //依行讀取數據

            foreach($orders as $order){

                $singleOrder = explode(",", $order);  //以逗號為分隔將數據轉為數列
                echo '<div class="order"><p>';
                echo 'Table number : '.$singleOrder[0].'<br/>';  //依照數列顯示資料
                echo '<br/>';
                if($singleOrder[1] >= 1){  //判斷有無此品項
                    echo 'American Salad : '.$singleOrder[1].'<br/>';
                };  //依照數列顯示資料...下方重複此動作
                if($singleOrder[2] >= 1){
                    echo 'Bourbon Tenderloin : '.$singleOrder[2].'<br/>';
                };
                if($singleOrder[3] >= 1){
                    echo 'Waffle : '.$singleOrder[3].'<br/>';
                };
                if($singleOrder[4] >= 1){
                    echo 'Caesar Salad : '.$singleOrder[4].'<br/>';
                };
                if($singleOrder[5] >= 1){
                    echo 'Tomato Soup : '.$singleOrder[5].'<br/>';
                };
                if($singleOrder[6] >= 1){
                    echo 'Pumpkin Bisque Soup : '.$singleOrder[6].'<br/>';
                };
                if($singleOrder[7] >= 1){
                    echo 'Filet : '.$singleOrder[7].'<br/>';
                };
                if($singleOrder[8] >= 1){
                    echo 'Rib Eye : '.$singleOrder[8].'<br/>';
                };
                if($singleOrder[9] >= 1){
                    echo 'Short Rib : '.$singleOrder[9].'<br/>';
                };
                if($singleOrder[10] >= 1){
                    echo 'Pork Loin : '.$singleOrder[10].'<br/>';
                };
                if($singleOrder[11] >= 1){
                    echo 'Ice Cream : '.$singleOrder[11].'<br/>';
                };
                if($singleOrder[12] >= 1){
                    echo 'Tiramisu : '.$singleOrder[12].'<br/>';
                };
                if($singleOrder[13] >= 1){
                    echo 'Water : '.$singleOrder[13].'<br/>';
                };
                if($singleOrder[14] >= 1){
                    echo 'Sparkling Water : '.$singleOrder[14].'<br/>';
                };
                if($singleOrder[15] >= 1){
                    echo 'Red Wine : '.$singleOrder[15].'<br/>';
                };
                if($singleOrder[16] >= 1){
                    echo 'White Wine : '.$singleOrder[16].'<br/>';
                };
                if($singleOrder[17] >= 1){
                    echo 'Juice : '.$singleOrder[17].'<br/>';
                };
                echo '<br/>';
                echo 'Order time : '.$singleOrder[18].'<br/>';
                echo '</p><hr/></div>';
            }

        ?>
        <br/>
        Bottom
    </body>
</html>