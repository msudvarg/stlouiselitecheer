<?
  require_once('config.php');
?>
<?php
    header("Content-Type: text/css");
    $colors = array(
        "#000",
        "#fff",
        "orange"
    );
?>
body {
    font-family: "verdana";
    color: <?php echo $colors[1]; ?>;
}
h1 {
    text-align:center;
    text-shadow: 0px 0px 10px <?php echo $colors[0]; ?>;
    padding:0px;
    <?php
        $h1size = 24;
    ?>
    font-size: <?php echo $h1size; ?>px;
    margin:0px 0px 1em;
}
h2 {
    text-align:center;
    padding:0px;
    font-size:18px;
    margin:0px 0px 1em;
}
h3 {
    text-align:center;
    padding:0px;
    font-size:14px;
    margin:0px 0px 1em;
}
textarea {
    width:500px;
    height:300px;
}
a img {
    border:0px;
}
#content {
    <?php
        $coverphotos = $facebook->api('/391557050925355/photos','GET');
        $image = $coverphotos['data'][0]['images'][1];
        $source = $image['source'];
        $height = $image['height'];
        $width = $image['width'];
    ?>
    background: url("<?php echo $source; ?>") no-repeat top center;
    //height: <?php echo $height; ?>px;
    width: <?php echo $width; ?>px;
    margin:0px auto;
    overflow:hidden;
}
#content a {
    color: <?php echo $colors[2]; ?>;
}
#navigation {
    <?php
        $navwidth = 250;
    ?>
    width: <?php echo $navwidth; ?>px;
    height: <?php echo $height; ?>px;
    float:left;
    background: url("logo-small.png") no-repeat top center;
}
#navigation>ul {
    list-style-type:none;
    padding:0px;
    text-align:center;
    margin:0px;
}
#navigation li.nav {
    background: <?php echo $colors[0]; ?>;
    <?php
        $liheight = 28;
        $border = 2;
        $ulheight = ($liheight+$border) * 5; 
        $eventsheight = $height - $ulheight;       
    ?>
    height: <?php echo $liheight; ?>px;
    margin-left:0px;
    border-top: <?php echo $border ?>px solid <?php echo $colors[1]; ?>;
    font-size:18px;
    line-height:26px;
}
li#events {
    background: rgba(0, 0, 0, 0.8);
    height: <?php echo $eventsheight; ?>px;
    overflow:auto;
    display:none;
    font-size:14px;
}
li#events ul {
    margin-bottom:1em;
    text-align:left;
    list-style-type:disc;
}
li#eventspacer {
    background: transparent;
    height: <?php echo $eventsheight; ?>px;
}
#right {
    float:right;
    <?php
        $photoswidth = $width - $navwidth;
    ?>
    width: <?php echo $photoswidth; ?>px;
    display:block;
}
#text {
    display:block;
    <?php
        $textpadding = 10;
        $photomargin = $height - $photoheight - $textpadding*2;
    ?>
    height: <?php echo $photomargin; ?>px;
    overflow:auto;
    font-size:14px;
    padding: <?php echo $textpadding; ?>px;
}
#photos {
    width:100%;
    display:block;
    height: <?php echo $photoheight; ?>px;
    overflow:hidden;
}
#phototab {
    float:right;
    <?php
        $phototabwidth = 30;
    ?>
    width: <?php echo $phototabwidth; ?>px;
    background: <?php echo $colors[0]; ?>
    
}
#phototab a {
    text-align:center;
    display:block;
    margin-top:8px;
}
#phototab svg text {
    fill: <?php echo $colors[1]; ?>;
    font-size:24px;
    font-family:
}
#photostream {
    <?php
        $photostreamwidth = $photoswidth-$phototabwidth;
    ?>
    width: <?php echo $photostreamwidth ?>px;
    height: <?php echo $photoheight; ?>px;
    background: rgba(0, 0, 0, 0.6);
    float:left;
    display:none;
    overflow-x:auto;
    overflow-y:hidden;
}
#photostream a {
    <?php
        $imagemargin = 10;
        $imageheight = $photoheight - $imagemargin*2 -16; //-16 accounts for scrollbar height
    ?>
    height: <?php echo $imageheight; ?>px;
    width: <?php echo $imageheight; ?>px;
    margin: <?php echo $imagemargin; ?>px;
    display:block;
    float:left;
}
#photostreamscroll {
    height: <?php echo $photoheight; ?>px;
}
a.photoload {
    background:url("ajax-loader.gif") no-repeat center;
}
#address {
    display:block;
    font-size:12px;
    color: <?php echo $colors[0]; ?>;
    clear:both;
    text-align:center;
}
#contentfill {
    display:none;
}
iframe#map {
    <?php
        $mapheight = $photomargin - $h1size*4;
    ?>
    height: <?php echo $mapheight; ?>px;
    width: 100%;
}
#portalcontent iframe {
    width:650px;
}