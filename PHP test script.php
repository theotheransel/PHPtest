<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $string = 'The quick brown fox jumped over the lazy dog.';
        $patterns = array();
        $patterns[0] = '/l/';
        $patterns[1] = '/f/';
        $patterns[2] = '/qu/';
        $replacements = array();
        $replacements[0] = 'h';
        $replacements[1] = 'b';
        $replacements[2] = 'sl';
        echo preg_replace($patterns, $replacements, $string);
        ?>
    </body>
</html>
