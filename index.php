<?php include('stock1.php'); ?>
<?php include('stock2.php'); ?>
<?php include('stock3.php'); ?>
<?php include('stock4.php'); ?>
<?php include('stock5.php'); ?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>SHUN Offical</title>

        <!-- 引入外部字體 -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+Display&family=Quintessential&family=Roboto+Serif&display=swap" rel="stylesheet">
        
        <style>
            /* for show menu */
            header {
                border: 0px;
                background-color: black;
                height: 132px;
                padding: 0 54px;
                position: fixed;
                z-index: 2;
            }

            body {
                padding: 0;
                margin: 0;
                background-color: white;
            }

            .box {
                display: block;
                width: 60px;
                height: 60px;
                position: relative;
                top: 48px;
            }

            /* 選單按鈕開始與結束動畫 */
            #show_menu:checked + label .box span:nth-child(1){
                transform: rotate(45deg);
                top: 12px;
                transition: top .3s ease-in-out, transform .3s ease-in-out .3s;
            }  /* 觸發後開始旋轉動畫(上) */

            #show_menu:checked + label .box span:nth-child(2){
                transform: rotate(-45deg);
                top: -12px;
                transition: top .3s ease-in-out, transform .3s ease-in-out .3s;
            }  /* 觸發後開始旋轉動畫(下) */
            
            .show_list {
                background-color: rgba(0, 0, 0, .82);
                width: 100%;
                height: 100%;
                position: fixed;
                top: 132px;
                left: 0;
                transform: scaleY(0);
                transition: transform .3s ease-in-out;
                transform-origin: 50% 0;
            }  /* 選單下拉狀態 */

            #show_menu:checked ~ .show_list {
                transform: scale(1);
            }  /* 取消觸發後回歸原始狀態 */

            #show_menu {
                display: none;
            }

            .box span {
                display: block;
                height: 3px;
                background-color: white;
                position: relative;
                transition: transform .3s ease-in-out, top .3s ease-in-out .3s;
                top: 0;
            }

            .box span:nth-child(2){
                margin-top: 21px;
            }

            

            /* 頁內滑動 */
            html {
                scroll-behavior: smooth;
            }

            /* for font */
            .font_for_title {
                font-family: 'Noto Serif Display', serif;
                text-align: center; 
                font-size: 80px;
                padding: 150px;
            }

            .font_for_list {
                color: white; 
                text-decoration:none; 
                font-family: 'Roboto Serif', sans-serif;
            }

            .font_a {
                font-family: 'Noto Serif Display', serif;
                text-align: center; 
                padding: 20px;
            }

            .font_b {
                font-family: 'Roboto Serif', sans-serif;
                font-size: 40px;
            }

            /* 數字選單 */
            .selector select {
                color: rgb(0, 0, 0);
                position: relative;
                appearance: none;
                -moz-appearance: none;
                -webkit-appearance: none;
                background-position: right 0.5em top 50%, 0 0;
                background-size: contain, cover;
                background-repeat: no-repeat, repeat;
                z-index: 1;
                font-size: 40px;
                font-family: 'Times New Roman', Times, serif;
                padding: 10px;
                margin: 15px;
                border: none;
                border-radius: 10px;
                background-color: rgb(235, 235, 235);
                width: 150px;
            }

            .selector2 select {
                color: rgb(0, 0, 0);
                position: relative;
                appearance: none;
                -moz-appearance: none;
                -webkit-appearance: none;
                background-position: right 0.5em top 50%, 0 0;
                background-size: contain, cover;
                background-repeat: no-repeat, repeat;
                z-index: 1;
                font-size: 50px;
                font-family: 'Times New Roman', Times, serif;
                padding: 10px;
                border: none;
                border-radius: 10px;
                background-color: rgb(235, 235, 235);
                width: 200px;
            }

            .selector .selector2 option {
                font-size: 30px;
            }

            /* button */
            .button {
                background-color: rgb(163, 163, 163);
                border: none;
                color: white;
                padding: 30px 64px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 50px;
                margin: 80px 2px;
                cursor: pointer;
                border-radius: 64px;
                font-family: 'Noto Serif Display', serif;
            }
        </style>
    </head>

    <body>
        <div style="z-index: 2; border: 0px; height: 134px; width: 100%; background-color: black; position: fixed; top: 0;"></div>
        
        <header>
        <!-- 下拉式選單(按鈕) -->
            <input type="checkbox" id="show_menu" />  <!-- 觸發動畫 -->

            <label for="show_menu">  <!-- 動畫部分 -->
                <div class="box">
                    <span></span>
                    <span></span>
                </div>
            </label>

        <!-- 下拉式選單(選項) -->
            <div class="show_list">
                <ul style="margin-top: 1em; color: whitesmoke; font-size: 40px;">
                    <a href="#top" class="font_for_list">Home</a>  <!-- 跳轉至最頂 -->
                    <hr />
                    <a href="#our-special" class="font_for_list">Our Special</a>  <!-- 跳轉至Our Special畫面 -->
                    <hr />
                    <a href="#our-menu" class="font_for_list">Our Menu</a>  <!-- 跳轉至Our Menu畫面 -->
                    <hr />
                    <a href="#submit" class="font_for_list">Table Number / Submit</a>  <!-- 跳轉至最底 -->
                    <hr />
                    <a href="page2.html" class="font_for_list">*Administrator Only*</a>  <!-- 進入後台驗證 -->
                    <hr />
                </ul>
            </div>
        </header>

        <div style="width: 100%; height: 88px; background-color: black;">

        </div>
        <!-- Home -->
        <div>
            <img style="width: 100%; z-index: -1; position: fixed;" src="Home.jpg" />
        </div>
        
        <div class="font_a" style="color: white; margin: 190px 200px;">
            <a style="font-size: 100px;">SHUN</a>
            <a style="font-size: 30px;"><br/>The taste place.</a>
        </div>
        
        <!-- our special -->
        <form action="/functions.php?op=createOrder" method="post">  <!-- 條件觸發後對functions.php下達指令 -->

            <div style="background-color: rgb(163, 163, 163);"><hr style="color: rgb(163, 163, 163); margin: 0; size: 5px; padding: 5px;"/></div>
            
            <div style="background-color: white;">
                <div class="font_for_title" id="our-special" style="background-color: white;">
                    <a>
                        Our Special
                    </a>
                </div>

                <!-- 單一品項 -->
                <div style="padding: 30px; background-color: white;">
                    <div style="height: 440px; background-color: white;">
                        <img style="float: left; height: 400px; margin: 20px;" src="Special-1.jpg"/>  <!-- 品項照片(僅特餐) -->
                        <div style="margin: 20px; padding: 20px;">
                            <br/>
                            <a class="font_b">AMERICAN <br/> SALAD</a>  <!-- 品項名稱 -->
                            <br/>
                            <a style="font-size: 30px;">11.99 USD</a>  <!-- 品項價格 -->
                            <br/>
                            <br/>
                            <br/>
                            <br/>
                            <!-- 數量輸入框 -->
                            <a style="font-size: 30px; font-family: 'Roboto Serif', sans-serif;">Quantity:</a>  
                            <div class="selector">  <!-- 數字選單 -->
                                <select name="quantity1" id="quantity1">
                            <?php
                                for ($i=0; $i < 100; $i++) { 
                                    echo "<option value='" . ($i) . "'>" . ($i) . "</option>
                                    ";
                                }
                            ?>  <!-- for迴圈列出選項1-99 -->
                                </select>
                            </div>
                        </div>
                    </div>
                </div>

                <div style="padding: 30px; background-color: white;">
                    <div style="height: 440px; background-color: rgb(255, 243, 226);">
                        <img style="float: right; height: 400px; margin: 20px;" src="Special-2.jpg"/>
                        <div style="margin: 20px; padding: 20px;">
                            <br/>
                            <a class="font_b">BOURBON <br/> TENDERLOIN</a>
                            <br/>
                            <a style="font-size: 30px;">19.99 USD/100gm</a>
                            <br/>
                            <br/>
                            <br/>
                            <br/>
                            <a style="font-size: 30px; font-family: 'Roboto Serif', sans-serif;">Quantity:</a>
                            <div class="selector">
                                <select name="quantity2" id="quantity2">
                            <?php
                                for ($i=0; $i < 100; $i++) { 
                                    echo "<option value='" . ($i) . "'>" . ($i) . "</option>
                                    ";
                                }
                            ?>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>

                <div style="padding: 30px; background-color: white;">
                    <div style="height: 440px; background-color: white;">
                        <img style="float: left; height: 400px; margin: 20px;" src="Special-3.jpg"/>
                        <div style="margin: 20px; padding: 20px;">
                            <br/>
                            <a class="font_b">WAFFLE</a>
                            <br/>
                            <a style="font-size: 30px;">9.99 USD</a>
                            <br/>
                            <br/>
                            <br/>
                            <br/>
                            <a style="font-size: 30px; font-family: 'Roboto Serif', sans-serif;">Quantity:</a>
                            <div class="selector">
                                <select name="quantity3" id="quantity3">
                            <?php
                                for ($i=0; $i < 100; $i++) { 
                                    echo "<option value='" . ($i) . "'>" . ($i) . "</option>
                                    ";
                                }
                            ?>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div style="background-color: rgb(163, 163, 163);"><hr style="color: rgb(163, 163, 163); margin: 0; size: 5px; padding: 5px;"/></div>
            
            <!-- our menu -->
            <div style="background-color: white;">
                <div class="font_for_title" id="our-menu" style="background-color: rgb(255, 243, 226);">
                    <a>
                        Our Menu
                    </a>
                </div>

                <div style="padding: 30px 60px;">  <!-- 菜單標題(此為前菜) -->
                    <a style="font-size: 60px;">
                        STARTERS
                    </a>
                </div>

                <?php
                    foreach($meal2s as $key => $meal2){
                        echo '<div style="padding: 40px; height: 130px;">
                            <div class="font_b" style="padding: 20px; float: left; font-size: 40px;">
                                <a style="font-size: 45px;">'.$meal2['name'].'</a>
                                <a><br/>'.$meal2['price'].'</a>
                            </div>
                            <div class="selector" style="float: right;">
                                <select name="quantity'.$meal2['meal_id'].'" id="quantity'.$meal2['meal_id'].'">';  //name屬性標示出數量輸入框
                        include("select.php");
                        echo '        </select>
                            </div>
                        </div>';
                    }
                ?>  <!-- foreach迴圈列出菜單(前菜)品項 -->

                <div style="padding: 30px 60px; background-color: rgb(255, 243, 226);">
                    <a style="font-size: 60px;">
                        MAINS
                    </a>
                </div>

                <?php
                    foreach($meal3s as $key => $meal3){
                        echo '<div style="padding: 40px; height: 130px; background-color: rgb(255, 243, 226);">
                            <div class="font_b" style="padding: 20px; float: left; font-size: 40px;">
                                <a style="font-size: 45px;">'.$meal3['name'].'</a>
                                <a><br/>'.$meal3['price'].'</a>
                            </div>
                            <div class="selector" style="float: right;">
                                <select name="quantity'.$meal3['meal_id'].'" id="quantity'.$meal3['meal_id'].'">';
                        include("select.php");
                        echo '        </select>
                            </div>
                        </div>';
                    }
                ?>

                <div style="padding: 30px 60px;">
                    <a style="font-size: 60px;">
                        DESSERTS
                    </a>
                </div>

                <?php
                    foreach($meal4s as $key => $meal4){
                        echo '<div style="padding: 40px; height: 130px;">
                            <div class="font_b" style="padding: 20px; float: left; font-size: 40px;">
                                <a style="font-size: 45px;">'.$meal4['name'].'</a>
                                <a><br/>'.$meal4['price'].'</a>
                            </div>
                            <div class="selector" style="float: right;">
                                <select name="quantity'.$meal4['meal_id'].'" id="quantity'.$meal4['meal_id'].'">';
                        include("select.php");
                        echo '        </select>
                            </div>
                        </div>';
                    }
                ?>

                <div style="padding: 30px 60px; background-color: rgb(255, 243, 226);">
                    <a style="font-size: 60px;">
                        DRINKS
                    </a>
                </div>

                <?php
                    foreach($meal5s as $key => $meal5){
                        echo '<div style="padding: 40px; height: 130px; background-color: rgb(255, 243, 226);">
                            <div class="font_b" style="padding: 20px; float: left; font-size: 40px;">
                                <a style="font-size: 45px;">'.$meal5['name'].'</a>
                                <a><br/>'.$meal5['price'].'</a>
                            </div>
                            <div class="selector" style="float: right;">
                                <select name="quantity'.$meal5['meal_id'].'" id="quantity'.$meal5['meal_id'].'">';
                        include("select.php");
                        echo '        </select>
                            </div>
                        </div>';
                    }
                ?>
            </div>

            <div style="background-color: rgb(163, 163, 163);"><hr style="color: rgb(163, 163, 163); margin: 0; size: 5px; padding: 5px;"/></div>
            
            <!-- Table number -->
            <div id="table_number" style="background-color: #fff;padding: 150px; font-size: 70px;">
                <a>Table Number:</a>
                <div class="selector2" style="float: right;">
                    <select id="table" name="table">
                        <?php
                            for ($i=1; $i < 11; $i++) { 
                                echo "<option value='" . ($i) . "'>" . ($i) . "</option>
                                ";
                            }
                        ?>
                    </select>
                </div>
            </div>

            <!-- submit button -->
            <div style="background-color: rgb(163, 163, 163);"><hr style="color: rgb(163, 163, 163); margin: 0; size: 5px; padding: 5px;"/></div>
            <div style="background-color: #fff;">
                <div class="font_for_title" id="submit" style="background-color: white;">
                    <a>
                        Please Check Again Before Submitting
                    </a>
                    <br/>
                    <input class="button" type="submit" value="SUBMIT">  <!-- 此按鈕為觸發條件(form標籤) -->
                </div>
            </div>
        </form>
    </body>
</html>

