<?php
include('db.php');

?>
<link rel="stylesheet" href="css/bootstrap.css">

<style>
    .navbar_ {
        width: 100%; 
        min-height: 50px;
        background-color: white;
        text-align: center; 
    }

    .menu_ {
        min-height: 50px;
        text-align: center;
        color: #1d9bf0;
        font-weight: bold;
        display: inline-block;
        padding: 15 50px;
    }

    .left_box {
        padding-top: 10px;
        width: 35%;
        height: 100%;
        position: fixed;
        left:0;
        top: 0;
    }

    .mid_box {
        width: 30%;
        height: 100%;
        float: left;
        margin: auto;
    }

    .right_box {
        padding-top: 10px;
        width: 35%;
        height: 100%;
        position: fixed;
        right: 0;
        top: 0;
    }

    .sidebar_ {
        width: 40%;
        float: right;
        min-height: 35%;
        margin: 50 10 0 0px;
        background-color: white;
        border-radius: 15px;
    }

    .menu2_ {
        width: 100%;
        min-height: 50px;
        padding: 20 0 0 20px;
        border-radius: 15px;
    }

    .clear_ {
        clear: both;
    }

    body {
        background-image: linear-gradient(43deg , #ba99df 0% , #d2e8ff 50% , #ffc2d1 100%);
        background-size: cover;
        background-attachment: fixed;
        background-repeat: no-repeat;
        background-position: left top;
        display: flex;
    }

    a {
        text-decoration: none;
        color: black;
    }

    .act_box {
        width: 95%;
        min-height: 50px;
        background-color: #ffffff;
        color: black;
        border-radius: 15px;
        margin: 60 0 -20 15px;
    }
    

    .text_box {
        width: 100%;
        min-height: 50px;
        font-size: 24px;
        padding-left: 20px;
    }

    .text_box2 {
        width: 100%;
        min-height: 50px;
        font-size: 16px;
        color: black;
        padding: 10px;
    }

    .img_box img {
        width: 100%;
        height: 300px;
        border-radius: 15px 15px 0px 0px;
    }

    .search_box {
        width: 100%;
        padding-top: 60px;
        float: right;
        display: flex;
        align-items: center;
    }

    .content_ {
        overflow: auto;
        width: 64%;
        border-radius: 15px;
        background-color: white;
        min-height: 300px;
        margin-top: 60px;
        margin-left: 35%;
        padding: 20px;
    }

    .form_box {
        width: 30%;
        border-radius: 15px;
        background-color: white;
        min-height: 300px;
        margin-top: 60px;
        margin-left: 35%;
        padding: 20px;
    }
    .card {
    background-color: #fff!important;
    border-radius: 0.8rem!important;
    border: none!important;
}
</style>