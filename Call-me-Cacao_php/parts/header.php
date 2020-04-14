<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Call me Cacao</title>
    <link rel = "stylesheet" href = "styles.css">
    <link rel = "stylesheet" href = "bootstrap-grid.css">
</head>
<body>
    <header>
        <div class="container">
            <div class="row">
                <div class="col-12 header">
                    <div class="info_header">
                        <img src="media/logo_text.png" class="logo_header">
                        <span>
Ми працюємо:
                            <br>
пн-нд 10:00 - 22:00
<br>
                            вул. Нижній Вал, 35
</span>
                    </div>
                    <img src="media/nav.svg" id="nav_icon">
                    <ul id="navigation">
                        <li><a href="/<?php echo explode('/', $_SERVER['REQUEST_URI'])[1]?>?page=index">ГОЛОВНА</a></li>
                        <li><a href="#">ПРО НАС</a></li>
                        <li><a href="#">МЕНЮ</a></li>
                        <li><a href="/<?php echo explode('/', $_SERVER['REQUEST_URI'])[1]?>?page=events">ПОДІЇ</a></li>
                        <li><a href="/<?php echo explode('/', $_SERVER['REQUEST_URI'])[1]?>?page=contacts">КОНТАКТИ</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
