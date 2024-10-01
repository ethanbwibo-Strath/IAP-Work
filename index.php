<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Internet Application Programming</title>
</head>
<body>

    <?php
        require "load.php";
        $ObjLayouts->__heading();
        $ObjMenus->main_menu(); 
        $ObjHeadings->main_banner();
        $ObjContents->main_content();
        $ObjContents->side_bar();
        $ObjLayouts->__footer()
    ?>

</body>
</html>