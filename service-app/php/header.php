<?php
    echo' <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="http://momentjs.com/downloads/moment-with-locales.js"></script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
        <title>'.$title.'</title>
        <style>
            .indexTable {width:50%;
                position:relative;
                left:25%;}

            .indexTable, .indexTable td{
                border:1px solid black;
                border-collapse:collapse;
                text-align:center;
            }
            
            .indexTable tr:nth-child(even){
                background-color:#ddd;
            }
            .indexTable td{
                padding:10px;
            }
            h2{
                font-size:17px;
                font-weight:bold;
            }

            h1{
                text-align:center;
                font-style:italic;
            }

            select{
                background-color:white;
                font-size:14px;
                padding:3px;
            }

            input[type="submit"]{
                font-size:14px;
                background-color:white;
                font-weight:bold;
            }

            .back{
                position:absolute;
                top:30px;
                left:70px;
                width:50px;
                height:auto;
                transition:1s;
            }

            .back:hover {
                filter:
                    /* for demonstration purposes; originals not entirely black */
                    contrast(1000%)
                    /* black to white */
                    invert(100%)
                    /* white to off-white */
                    sepia(100%)
                    /* off-white to yellow */
                    saturate(10000%)
                    /* do whatever you want with yellow */
                    hue-rotate(90deg);
                    width:60px;
            }

            .viewTable {
                width: 100%;
                border-collapse: collapse;
                margin-top:70px;
            }
            
            .viewTable, .viewTable td, .viewTable th {
                border: 1px solid black;
                padding: 5px;
            }
            
            .viewTable th {text-align: left;}
            
            .viewH1{
                text-align:center;
                font-size:35px;
                font-family:BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, "Open Sans", "Helvetica Neue", sans-serif;
            
            }
            
            .archive{
                border:none;
            }
            
            .back{
                            position:absolute;
                            top:30px;
                            left:70px;
                            width:50px;
                            height:auto;
                            transition:1s;
                        }
            

        </style>
    </head>
    <body>'
?>