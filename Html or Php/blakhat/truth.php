<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Truth</title>
        <script>
            (function(i, s, o, g, r, a, m) {
                i['GoogleAnalyticsObject'] = r;
                i[r] = i[r] || function() {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
                a = s.createElement(o),
                        m = s.getElementsByTagName(o)[0];
                a.async = 1;
                a.src = g;
                m.parentNode.insertBefore(a, m)
            })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

            ga('create', 'UA-46263336-1', 'blakhat.tv');
            ga('send', 'pageview');

        </script>
    </head>

    <body>
        <?php
        $access_token = "377649516.4e6e722.579010aa92ee4545bc847adfbe3cbef4";
        $api = "https://api.instagram.com/v1/users/self/feed?count={$count}&access_token={$access_token}";

        function fetch_data($url) {
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_TIMEOUT, 20);
            $result = curl_exec($ch);
            curl_close($ch);
            return $result;
        }

        $count = 100000; // the number of photos you want to fetch
        $access_token = "377649516.4e6e722.579010aa92ee4545bc847adfbe3cbef4";
        $display_size = "thumbnail"; // you can choose between "low_resolution", "thumbnail" and "standard_resolution"
        #$result = fetch_data($api);
        #$result = fetch_data("https://api.instagram.com/v1/users/self/feed?access_token={$access_token}");
        #$result = json_decode($result);

        echo '<div>';
        /*
          foreach ($result->data as $photo) {
          $img = $photo->images->{$display_size};
          echo "<a href='{$photo->link}' target='_blank'  style='float:left; padding:5px'><img src='{$img->url}' /></a>";
          } */
        while ($api !== NULL) {
            $response = fetch_data($api);
            foreach (json_decode($response)->data as $item) {
                $src = $item->images->standard_resolution->url;
                $thumb = $item->images->thumbnail->url;
                $url = $item->link;

                $images[] = array(
                    "src" => htmlspecialchars($src),
                    "thumb" => htmlspecialchars($thumb),
                    "url" => htmlspecialchars($url)
                );
                echo "<a href='" . $src . "' target='_blank' style='float:left; padding:5px'><img src='" . $thumb . "'></a> ";
            }
            $api = json_decode($response)->pagination->next_url;
        }
        echo "</div>";
        ?>
    </body>
</html>
