<?php
// Конфигурационные данные для стрима - URL и ключ
$streamUrl = "rtmp://your-stream-url";
$streamKey = "your-stream-key";

// Функция для генерации RTMP плеера
function generateRtmpPlayer($url, $key) {
    ob_start();
    ?>
    <object type="application/x-shockwave-flash" data="player.swf" width="640" height="360">
        <param name="movie" value="player.swf" />
        <param name="flashvars" value="autostart=true&amp;streamer=<?= $url ?>&amp;file=<?= $key ?>.flv" />
        <param name="allowFullScreen" value="true" />
        <param name="allowscriptaccess" value="always" />
        <param name="wmode" value="transparent" />
        <embed src="player.swf" width="640" height="360" flashvars="loop=false&amp;autoplay=true&amp;file=<?= $key ?>.flv" allowFullScreen="true" allowscriptaccess="always" wmode="transparent" />
    </object>
    <?php
    return ob_get_clean();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Показ стрима RTMP</title>
</head>
<body>
    <div>
        <?php echo generateRtmpPlayer($streamUrl, $streamKey); ?>
    </div>
    <!-- Остальной код вашего сайта -->
</body>
</html>
