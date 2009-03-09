<?php
$now = date('D, d M Y H:i:s T');

echo '<?xml version="1.0" encoding="UTF-8"?>'; 

header('Content-Type: text/xml');
?>
<!-- generator="Recovery" -->
<rss version="2.0" 
        xmlns:content="http://purl.org/rss/1.0/modules/content/"
        xmlns:dc="http://purl.org/dc/elements/1.1/"
        >

    <channel>
            <title><?php echo $syndication_name; ?> - Recovery Feed</title>
            <?php if(isset($recovery['sitename'])) { ?>
                <link>http://<?php echo $recovery['sitename']; ?></link>
            <?php } ?>
            <description><?php echo $syndication_name; ?> - sitedomain Feed</description>
            <pubDate><?php echo $now; ?></pubDate>
            <generator>http://sitedomain.com/</generator>
            <language>en</language>
            <?php $num_items = 0; ?>
            <?php foreach($data as $item) { ?>
                <item>
                        <title><?php echo $item['title']; ?></title>
                        <link><?php echo $item['url']; ?></link>
                        <pubDate><?php echo date('D, d M Y H:i:s T', strtotime($item['datetime'])); ?></pubDate>
                        <dc:creator>http://<?php echo $item['username']; ?></dc:creator>
                <description><![CDATA[<?php echo substr($item['content'], 0, 255); ?><?php echo strlen($item['content']) > 255 ? ' [...]' : ''; ?>]]></description>
                <content:encoded><![CDATA[<?php echo $item['content']; ?>]]></content:encoded>
                    </item>
                    <?php 
                        $num_items++;
                        if($num_items > 50) {
                            break;
                        }
                    ?>
        <?php } ?>
        </channel>
</rss>

