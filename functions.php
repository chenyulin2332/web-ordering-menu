<?php
if($_GET['op']=='createOrder')  //收到指令即開始執行
{
    createOrder();  //執行此程式
}

function createOrder(){  //定義程式
    if ($_POST['quantity1'] < 1 & $_POST['quantity2'] < 1 & $_POST['quantity3'] < 1 & $_POST['quantity4'] < 1 & $_POST['quantity5'] < 1 & $_POST['quantity6'] < 1 & $_POST['quantity7'] < 1 & $_POST['quantity8'] < 1 & $_POST['quantity9'] < 1 & $_POST['quantity10'] < 1 & $_POST['quantity11'] < 1 & $_POST['quantity12'] < 1 & $_POST['quantity13'] < 1 & $_POST['quantity14'] < 1 & $_POST['quantity15'] < 1 & $_POST['quantity16'] < 1 & $_POST['quantity17'] < 1) {
        header("Location: /order-fail.php");  //辨識出空訂單並引導至下單失敗畫面
    } else {
        $myfile = fopen("data.csv", "a");  //開啟csv檔案寫入模式
        $data = $_POST['table'].','.$_POST['quantity1'].','.$_POST['quantity2'].','.$_POST['quantity3'].','.$_POST['quantity4'].','.$_POST['quantity5'].','.$_POST['quantity6'].','.$_POST['quantity7'].','.$_POST['quantity8'].','.$_POST['quantity9'].','.$_POST['quantity10'].','.$_POST['quantity11'].','.$_POST['quantity12'].','.$_POST['quantity13'].','.$_POST['quantity14'].','.$_POST['quantity15'].','.$_POST['quantity16'].','.$_POST['quantity17'].','.date('H:i:s')."\r\n";
        //12行 取得數值並寫成csv格式(包含換行)
        fwrite($myfile, $data);  //寫入
        fclose($myfile);  //關閉檔案
        header("Location: /order-completed.php");  //引導至下單成功畫面
    }   
}