<?php include 'portal-config.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title><?=$title?></title>
    <meta name="description" content="a workspace for learning html and web development basics">
    <meta name="robots" content="noindex,nofollow" />
    <meta name="viewport" content="width=device-width" />
    <meta charset="utf-8" />
    <link rel="stylesheet" href="../css/portal.css" type="text/css"/>   
    <link rel="stylesheet" href="../css/nav.css" type="text/css"/>
</head>
<body>
    <div class="wrapper">
        <header>
            <h1 id="top"><a href="index.php">Michael's WEB120 Portal Website</a></h1>
            
            <!--
                MADE WITH <3
            -->
                
            <nav class="topnav" id="myTopnav">
                <?=makeLinks($nav1)?>
                    <a href="javascript:void(0);" class="icon" onclick="myFunction() ">&#9776;</a>
            </nav>
        </header>