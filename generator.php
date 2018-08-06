<?php
    function write_page($title, $contentfile, $page = "home", $customHeaderHTML = ""){
        $myfile = fopen($contentfile, "r") or die("Unable to open file!");
        $content = fread($myfile,filesize($contentfile));
        fclose($myfile);
?>
<html>
<head>
    <title><?php echo $title; ?></title>
     <meta charset="UTF-8"> 
    <style>
        body{
            padding: 0;
            margin: 0;
            color: rgb(83, 46, 146);
        }
        body a{
            font-weight: bolder;
            text-decoration: none;
        }
        #content {
            padding: 1.5em;
        }
        #content h1{
            font-weight: bolder;
            color: rgb(83, 46, 146);
        }
        nav{
            background-color: rgb(83, 46, 146);
            padding: 1em;
            display: flex;
        }
        nav a{
            text-decoration: none;
            font-size: 2em;
            color: white;
        }
        nav a.activepage{
            color: yellow;
        }
        nav span.spacer{
            font-size:1.5em;
            color:white;
        }
        .center-content{
            text-align: center;
        }
        .center-content > .center-in-parent{
            margin: 0 auto;
        }
        .highlighted-text{
            font-weight: bolder;
        }
        hr.spacer{
            height: 0.1em;
            background-color: rgb(83, 46, 146);
            color: rgb(83, 46, 146);
            width:70%;
        }
        table.spaced-table td{
            padding: 20px;
        }
        p.intro-text{
            font-size: 1.2em;
        }
    </style>
<?php
    if($customHeaderHTML != null){
?>
    <?php echo $customHeaderHTML; ?>
<?php
}
?>
</head>
<body>
    <nav>
        <a href="/"<?php echo ($page == "home" ? 'class="activepage"' : '');?>>Home</a> 
        <span class="spacer">&nbsp;|&nbsp;</span>
        <a href="/ml/"<?php echo ($page == "ml" ? 'class="activepage"' : '');?>>ML</a> 
        <span class="spacer">&nbsp;|&nbsp;</span>
        <a href="/pwtool/"<?php echo ($page == "pwtool" ? 'class="activepage"' : '');?>>Password obfuscator</a> 
    </nav>
    <div id="content">
<?php echo $content; ?>
    </div>
</body>
</html>

<?php
    }
?>
