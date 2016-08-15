<!DOCTYPE html>
<html>
    <?php
        $title = "crypto :: mkwia.com";
        $path = $_SERVER['DOCUMENT_ROOT'];
        $path .= "/header.php";
        include($path)
    ?>
    <body>
        <div class="main">
            <div id="main-header">
                <h1 class="main-header-name"><a href="/">crypto :: mkwia.com</a></h1>
                <h2>Wow. Such currency.</h2>
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
