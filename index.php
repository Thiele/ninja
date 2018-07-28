<?php
    $selector = strtolower($_GET["page"]);
    require('generator.php');

    $contentfile = null;
    $title = null;
    $customHeadHTML = null;
    switch($selector){
        case "ml":
            $contentfile = "ml.html";
            $title = "Markov lols";
            break;
        case "home":
            $contentfile = "home.html";
            $title = "Ninjas playground";
            break;
        case "pwtool":
            $contentfile = "pwtool.html";
            $title = "Password obfuscator";
            $customHeadHTML = '<script src="/js/jquery.min.js"></script>';
    }
    write_page($title, $contentfile, $selector, $customHeadHTML);
?>
