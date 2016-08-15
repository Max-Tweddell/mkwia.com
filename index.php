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
                <h2>This is my home.</h2>
            </div>
            <div id="main-content">
                <p><a href="/wow">Oh! What's this?</a></p>
            </div>
        </div>
    </body>
    <?php
        $path = $_SERVER['DOCUMENT_ROOT'];
        $path .= "/footer.php";
        include($path)
    ?>
</html>
