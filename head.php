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

            #show_menu:checked + label .box span:nth-child(1){
                transform: rotate(45deg);
                top: 12px;
                transition: top .3s ease-in-out, transform .3s ease-in-out .3s;
            }

            #show_menu:checked + label .box span:nth-child(2){
                transform: rotate(-45deg);
                top: -12px;
                transition: top .3s ease-in-out, transform .3s ease-in-out .3s;
            }

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
            }

            #show_menu:checked ~ .show_list {
                transform: scale(1);
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

            /* 下拉式選單 */
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