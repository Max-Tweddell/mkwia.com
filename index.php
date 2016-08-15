<!DOCTYPE html>
<html>
    <?php
        $title = "mkwia.com";
        $path = $_SERVER['DOCUMENT_ROOT'];
        $path .= "/header.php";
        include($path)
    ?>
    <body>
        <div class="main">
            <div id="main-header">
                <h1 class="main-header-name"><a href="/">mkwia.com</a></h1>
                <h2>Now with 17% more bandwidth!</h2>
            </div>
        </div>
    </body>
    <?php
        $path = $_SERVER['DOCUMENT_ROOT'];
        $path .= "/footer.php";
        include($path)
    ?>
</html>
