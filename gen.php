<?php
    /*
     * 本文件用于生成files.html
     */
    if(!isset($_GET['m'])) exit;
    $m = $_GET['m'];
    switch($m):
        case "update":
            echo "1";
        default:
            echo $m."is not allowed";
        
    
?>