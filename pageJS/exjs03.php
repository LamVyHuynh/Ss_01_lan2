<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exjs03</title>
</head>

<body>
    <div id="content">
        <div id="video">
            <video height="300px" controls autoplay>
                <source src="./img_HLV/nothing.mp4" type="video/mp4">
            </video>
        </div>
    </div>
    <hr />
    <div id="menu">
        No ajax <br />
        <a href="index.php?page=page01">Page01</a>
        <a href="index.php?page=page02">page02</a>
        <a href="index.php?page=page03">Page03</a>
        <a href="index.php?page=page04">Page04</a>
        <hr />
        Use ajax <br />
        <b class="linkmenu" value="page01">Page01</b>
        <b class="linkmenu" value="page02">Page02</b>
        <b class="linkmenu" value="page03">Page03</b>
        <b class="linkmenu" value="page04">Page04</b>
        <hr />
    </div>
    <div id="getContent">
        <?php 
    if(isset($_GET["page"]))
    {
        $page = $_GET["page"];
        include './pageJS/' . $page . '.php';
    }
    else
    {
        echo 'nothing to show';
    }
?>
    </div>
</body>

</html>