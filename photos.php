<?php
    header( "Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT" );
    header( "Cache-Control: no-cache, must-revalidate" );
    header( "Pragma: no-cache" );
    header( "Content-Type: application/xml" );

    $xml = file_get_contents("photos.xml");
    ignore_user_abort();
    $contentLength = strlen($xml);
    header( "Connection: close" );
    header( "Content-Length: $contentLength" );
    flush();
    echo $xml;
    
    preg_match("/<time>/",$xml,$matches,PREG_OFFSET_CAPTURE);
    $offset = $matches[0][1] + 6;
    preg_match("/<\/time>/",$xml,$matches,PREG_OFFSET_CAPTURE);
    $length = $matches[0][1] - $offset;
    $xmltime = substr($xml,$offset,$length);
    $time = time();
    if ( ($time - $xmltime)>3600*12 ) {
        require_once('config.php');
        ignore_user_abort();
        $response = "<xml>\n";
        $time = time();
        $response .= "<time>$time</time>\n"; 
        $albums = $facebook->api('/StLouisEliteCheerleading/albums','GET');
        $albums = $albums['data'];
        $album = $albums[0];
        foreach ($albums as $album) {
            $album = $facebook->api("/{$album['id']}/photos");
            $album = $album["data"];
            foreach ($album as $photo) {
                $thumb = htmlentities($photo["picture"],ENT_QUOTES);
                $full = htmlentities($photo["source"],ENT_QUOTES);
                $name = htmlentities($photo["name"],ENT_QUOTES);
                $response .= "<photo>\n";
                $response .= "<thumb>" . $thumb . "</thumb>\n";
                $response .= "<full>" . $full . "</full>\n";
                $response .= "<name>" . $name . "</name>\n";
                $response .= "</photo>\n";
            }
            unset($photo);
        }
        unset($album);
        $response .= "</xml>";
        file_put_contents("photos.xml",$response);
    }
?>