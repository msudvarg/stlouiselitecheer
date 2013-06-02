<?php
  require_once('config.php');
    
                    $events = $facebook->api('/StLouisEliteCheerleading/events','GET');
                    $events = $events['data'];
                    if (sizeof($events) == 0) {
                        echo "<h3>No Upcoming Events</h3>";
                    }
                    else {
                        foreach ($events as $event) {
                            /* Allows a link to Google Maps for the location of each event, but this is time-consuming so it is not active in the script
                            $eventdetails = $facebook->api("/{$event['id']}/",'GET');
                            $venue = $eventdetails['venue']['id'];
                            $venue = $facebook->api("/$venue/",'GET');
                            $gmaps = "https://maps.google.com/maps?q=" . urlencode($venue["location"]["street"] . " " . $venue["location"]["zip"]); */
                            echo "<h3>" . $event['name'] . "</h3>";
                            echo "<ul>";
                            echo "<li>Date: " . $event['start_time'] . "</li>";
                            //echo "<li>Location: <a href='$gmaps' title='View on Google Maps'>" . $event['location'] . "</a></li>";
                            echo "<li>Location: " . $event['location'] . "</li>";
                            echo "<li><a href='https://facebook.com/events/" . $event['id'] . "' target='_blank'>View on Facebook</a></li>";
                            echo "</ul>";
                        }
                            unset($eventdetails);
                            unset($venue);
                            unset($gmaps);
                            unset($event);
                    }
?>