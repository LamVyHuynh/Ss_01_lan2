<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Center</title>
</head>

<body>
    <?php
        if(isset($_GET['req'])){
            $request = $_GET['req'];
            switch($request){
                case 'exjs':
                    require './pageJS/exjs.php';
                    break;
                case 'exjs02':
                    require './pageJS/exjs02.php';
                    break;
                case 'exjs03':
                    require './pageJS/exjs03.php';
                    break;
                case 'userview':
                    require './element_HLV/mUser/userView.php';
                    break;
                case 'hanghoaview':
                    require './element_HLV/mHanghoa/hanghoaview.php';
                    break;
                }
        }
        else
        {
            require './element_HLV/default.php';
        }
    ?>
</body>

</html>