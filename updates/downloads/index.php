<?php
error_reporting(-1);
ini_set('display_errors', 'On');
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php

        class index {

            private $dl;

            public function Run() {
                require_once( 'DirectoryList.php');


                $this->dl = new DirectoryList();
                $this->dl->Output(".");
            }

        }
       
        $a=new index();
        $a->Run();
        ?>
    </body>
</html>
