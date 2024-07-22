<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="./stylecss_hlv/style.css">
    <script src="./js_hlv/jquery-3.7.1.min.js"></script>
    <script src="./js_hlv/jscript.js"></script>
</head>


<body>
    <div id="div-top"></div>
    <div id="div-left">
        <?php   
        require './element_HLV/left.php';
        ?>
    </div>

    <div id="div-center">
        <?php
            require './element_HLV/center.php';
        ?>
    </div>
    <div id="div-right"></div>
    <div id="div-bottom"></div>
</body>

</html>