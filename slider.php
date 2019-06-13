<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Responsive Image Slider</title>
<link rel="stylesheet" href="slider.css" type="text/css" media="screen">
<script type="text/javascript" src="jquery/jquery-3.1.0.min.js"></script>
<script type="text/javascript" src="jquery/jquery.cycle2.min.js"></script>
</head>

<body class="responsive">
<div class="cycle-slideshow">
<span class="cycle-prev">&#9001;</span>
<span class="cycle-next">&#9002;</span>
<span class="cycle-pager"></span>
<?php 
$arr = file('bilder.txt');
	sort($arr, SORT_STRING);
	
    foreach($arr as $line){
        list($key,$value) = explode('.',$line);//string
        $arr_res[$key] = $value;//erzeugt ein assoziatives array
    }
    
    ksort($arr_res);
    $i = 1;
    
    function getMenu($txt,$link){
        global $i;
        $i = $i-0.1;
        $html = "<img src='slider-images/".htmlentities($txt).".".$link."' class='bild' >";
        return $html;
    }
    
    foreach($arr_res as $key => $value){
        echo getMenu( $key,$value);
    }
?>
</div>
</body>
</html>
