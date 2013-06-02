<?php
  require_once('config.php');
    
?>
<?php
    /*
    $page = $facebook->api('/StLouisEliteCheerleading/insights/page_friends_of_fans','GET');
    print_r($page);
    */
    
    
            $albums = $facebook->api('/StLouisEliteCheerleading/albums','GET');
        $albums = $albums['data'];
        $album = $albums[0];
        foreach ($albums as $album) {
            $album = $facebook->api("/{$album['id']}/photos");
            $album = $album["data"];
            print_r($album);
        }
?>