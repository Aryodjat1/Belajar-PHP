<html>
    <head>
        <title>SET COOKIE</title>
    </head>

    <body>
        <?php
            //men-set nilai cookie
            setcookie("nama_cookie", "nilai_cookie");
            // Mendapatkan nilai cookie
            echo $_COOKIE['nama_cookie'];

        ?>
        <p>
            Tekan Refresh (F5);
    </body>
</html>