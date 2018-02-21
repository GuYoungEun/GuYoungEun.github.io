<?php 
    $wh = "60px";
    $wh2 = "0.7";

?>
<style>
* {
    margin: 0;
    padding: 0;
}
html, body {
    width: 100%;
    height: 100%;
}
.rdogr {
    width: 600px;
    height: 400px;
    margin: 0 auto;
    margin-top: 20px;
}
.ck {
    display: none;
}
label {
    display: block;
    clear: both;
    width: <?php echo $wh; ?> ;
    height: <?php echo $wh; ?>;
    border: 1px solid black;
    border-radius: 100px;
}
.rdoinner {
    display: block;
    width: <?php echo $wh * $wh2 . "px"; ?>;
    height: <?php echo $wh * $wh2 . "px"; ?>;
    background-color: bisque; 
    margin: 0 auto;
    margin-top: <?php echo ( $wh * (1 - $wh2) ) / 2 . "px"?> ;
    border-radius: 100px;
}
</style>

