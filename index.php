<?
  require_once('config.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:php="http://php.net/xsl" lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="shortcut icon" href="favicon.ico" />
    <link rel="stylesheet" type="text/css" href="styles.php" />
    <link href="lightbox/css/lightbox.css" type="text/css" rel="stylesheet" />
    <script src="lightbox/js/jquery-1.7.2.min.js" type="text/javascript"></script>
    <script src="lightbox/js/lightbox.js" type="text/javascript"></script>
    <script src="tabs.js" type="text/javascript"></script>  
    <script src="contact.js" type="text/javascript"></script>
    <script type="text/javascript">
        function submitlogin() {
            if (window.XMLHttpRequest) {
                var cxn=new XMLHttpRequest();
            }
            else {
                var cxn=new ActiveXObject("Microsoft.XMLHTTP");
            }
            var form = document.forms["login"].elements;
            var cxnurl = "parents.php";
            form["submit"].value = "Loading ...";
            params = "username=" + encodeURIComponent(form["username"].value);
            params += "&password=" + encodeURIComponent(form["password"].value);
            cxn.open("POST",cxnurl,true);
            cxn.setRequestHeader("Content-type","application/x-www-form-urlencoded");
            cxn.setRequestHeader("Content-length",params.length);
            cxn.setRequestHeader("connection","close");
            cxn.send(params);
            cxn.onreadystatechange=function() {
                if (cxn.readyState == 4 && cxn.status == 200) {
                    document.getElementById("portalcontent").innerHTML = cxn.responseText;
                }
            }
            return false;
        }
    </script>
    <title>St. Louis Elite Cheerleading</title>  
  </head>
  <body> 
    <div id="content">
        <div id="navigation">
            <ul>
                <li id="eventspacer" style="display:block;">&nbsp;</li>
                <li class="nav">Events</li>
                <li id="events">
                    <h3><img src='ajax-loader.gif' alt='Events Loading ...' /></h3>
                </li>
                <li class="nav">About</li>
                <li class="nav">Directions</li>
                <li class="nav">Contact</li>
                <li class="nav">Parent Portal</li>
            </ul>
        </div>
        <div id="right">
            <div id="text"></div>
            <div id="photos">
                <div id="photostream"><div id="photostreamscroll" style="width: <?php print(($photoheight-16)*$psn); ?>px;">
                    <?php
                        for ($i=0;$i<$psn;$i++) { echo "<a class='photoload'></a>"; }
                    ?>
                </div>
                </div>
                <div id="phototab">
                    <a href="https://www.facebook.com/StLouisEliteCheerleading"><img src="facebook.png" alt="Facebook" /></a>
                    <svg xmlns='http://www.w3.org/2000/svg'><text x='-101' y='24' font-family="verdana" transform='rotate(-90)' text-rendering='optimizeSpeed'>Photos</text></svg>
                </div>
            </div>
        </div>
        <div id="address">
            Kids World Gymnastics | 8701 Dunn Road | Hazelwood, MO | 63042 | (314) 838-5867 | Site design by <a href="http://www.sudvarg.com">Sudvarg Digital Solutions</a>
        </div>
    </div>
    
    <div id="contentfill">
        <div>
            <h1>About Us</h1>
            <p>St. Louis Elite Cheerleading was created in 2007 as a competitive team of <a href="http://www.kidsworldgymnastics.com" target="_blank">Kids World Gymnastics</a>. St. Louis Elite Cheerleading trains at the Kids World Gymnastics facility located in Hazelwood Missouri and is owned by Gene Kohler. This program began when Gene noticed a need in the cheerleading community for tumbling to be taught in a format that was safe and recognized world wide. By following USA Gymnastics safety guidelines we provide a comprehensive and progressive program for your athlete. Following these time tested techniques allows more opportunities for your athlete to succeed.  </p>
            <p>Not only does St. Louis Elite offer a competitive All Star Cheerleading program, we also have a nationally recognized Trampoline and Tumbling team. Kids World Gymnastics offers classes in trampoline and tumbling, gymnastics and preschool gymnastics. In addition to our classes we offer Day Camps over the summer and when schools are on break, Open Gyms, Flipping Friday Teen Night and a variety of other camps and clinics.</p>
            <h2>About Kids World Gymnastics</h2>
            <p>Gene formed St. Louis Elite Tramp and Tumble in June of 2003 with the intent to establish a nationally recognized Trampoline and Tumbling team. Space was rented in a 4,500 square foot area in the back of Vetta Sports Manchester. After 2 ½ years of growth and learning a new facility was needed to cater to a wide variety of life enhancing activities.		  </p>
            <p>Kids World was formed in June 2005 with the acquisition of our current facility. The business progressed naturally into activities beyond Trampoline and Tumbling, to include, Cheerleading classes, Gymnastics, Preschool gymnastics, birthday parties, and Discovery Day Camp. Then in May of 2007 Competitive Cheerleading was added to Kids World. </p>
            <p>Through acquisition of his current facility, his business progressed naturally into activities beyond Trampoline and Tumbling, to include gymnastics, preschool gymnastics, cheerleading, and more.</p>
            <p>He has been coaching trampoline and tumbling teams for the past 20 years and has continued to train athletes to upper levels of achievement. He has a PRO rating with USA Gymnastics and is safety certified.</p>
            <p>His experience also includes coaching a prominent Division I University diving team (Saint Louis University), as well as himself being a Conference Champion two years in a row. Kohler held school records in both one-meter and three-meter diving.</p>
            <p>He graduated from the University in 1997 with a <strong>Bachelor of Science in Marketing</strong>. Prior to returning to St. Louis, Kohler was a stunt man in California, working for Universal Studios and the Extreme Air Stunt Team. His hobbies include skydiving, skateboarding, snowboarding, waterskiing, scuba diving, diving, trampoline, and riding his motorcycle. Gene loves to spend quality time with his family.</p>
        </div>
        <div>
            <h1>Directions</h1>
            <iframe id="map" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Kids+World+Gymnastics&amp;sll=37.0625,-95.677068&amp;sspn=48.421237,78.222656&amp;ie=UTF8&amp;cid=6748892779713472295&amp;s=AARTsJoRo0AM5VYgqiz1Ph7xebvO_1UGBg&amp;ll=38.863771,-90.304184&amp;spn=0.267325,0.343323&amp;z=11&amp;iwloc=A&amp;output=embed"></iframe><br /><p> <a href="http://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Kids+World+Gymnastics&amp;sll=37.0625,-95.677068&amp;sspn=48.421237,78.222656&amp;ie=UTF8&amp;cid=6748892779713472295&amp;ll=38.863771,-90.304184&amp;spn=0.267325,0.343323&amp;z=11&amp;iwloc=A" target="_blank">View Larger Map</a></p>
        </div>
        <div>
            <h1>Contact Us</h1>
            <div id="contactcontent">
            <form id="contact" onsubmit="return contactform()">
                <p>Name<br /><input type='text' name='name' /></p>
                <p>Email<br /><input type='text' name='email' /></p>
                <p>Phone<br /><input type='text' name='phone' /></p>
                <p>Message<br /><textarea name='message'></textarea></p>
                <p><input type='submit' value='Submit' /> <input type='reset' value='Reset' /></p>
            </form>
            </div>
        </div>
        <div>
            <h1>Parent Portal</h1>
            <div id="portalcontent"><?php include("parents.php"); ?></div>
        </div>
    </div>
    <script type='text/javascript'>
        function loadnextphoto(a,p,i) {
            if (i>=<?php echo $psn; ?>) {
                document.getElementById("photostreamscroll").innerHTML += "<a class='photoload'></a>";
                document.getElementById("photostreamscroll").style.width = parseInt(document.getElementById("photostreamscroll").style.width) + <?php print($photoheight-16); ?> + "px";
            }
            if (p[i].childNodes.length<5) { x=0;y=1;z=2; }
            else { x=1;y=3;z=5; }
            var thumb = p[i].childNodes[x].childNodes[0].nodeValue;
            var full = p[i].childNodes[y].childNodes[0].nodeValue;
            var name = p[i].childNodes[z].childNodes[0];
            if ((typeof name !== 'undefined') && (name != null)) {
                var name = name.nodeValue;
                a[i].title = name;
            }
            a[i].href = full;
            a[i].style.background = "url('" + thumb + "') no-repeat center";
            a[i].rel = "lightbox[photostream]";
            if (i<(p.length-1)) { a[i].onload = loadnextphoto(a,p,i+1); }                        
        }
            
        (function () {
            if (window.XMLHttpRequest) {
                var cxn=new XMLHttpRequest();
            }
            else {
                var cxn=new ActiveXObject("Microsoft.XMLHTTP");
            }
            var cxnurl = "events.php";
            cxn.open("GET",cxnurl,true);
            cxn.send();
            cxn.onreadystatechange=function() {
                if (cxn.readyState == 4 && cxn.status == 200) {
                    document.getElementById("events").innerHTML = cxn.responseText;
                }
            }
        }) ();
        (function () {
            if (window.XMLHttpRequest) {
                var cxn=new XMLHttpRequest();
            }
            else {
                var cxn=new ActiveXObject("Microsoft.XMLHTTP");
            }
            var cxnurl = "photos.php";
            cxn.open("GET",cxnurl,true);
            cxn.send();
            cxn.onreadystatechange=function() {
                if (cxn.readyState == 4 && cxn.status == 200) {
                    var p = cxn.responseXML.getElementsByTagName('photo');
                    var a = document.getElementById("photostreamscroll").getElementsByTagName('a');
                    loadnextphoto(a,p,0);
                }
            }
        }) ();
    </script>
  </body>
</html>