
	<marquee>
		<?php
        //Feed URLs
        $feeds = array(
            "https://ec.europa.eu/environment/integration/research/newsalert/rss/air_pollution.xml"
        );
        
        //Read each feed's items
        $entries = array();
        foreach($feeds as $feed) {
            $xml = simplexml_load_file($feed);
            $entries = array_merge($entries, $xml->xpath("//item"));
        }
        
        //Print all the entries
        foreach($entries as $entry){
            ?>
            <a href="<?= $entry->link ?>"><?= $entry->title ?></a> |
            <?php
        }
        ?>
	</marquee>
