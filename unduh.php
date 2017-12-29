<?php

echo $videoId = $_POST['videoId'];

?>
<iframe class="button-api-frame" src="https://youtubemp3api.com/@api/button/mp3/<?=$videoId?>" width="100%" height="100%" allowtransparency="true" scrolling="no" style="border:none"></iframe>

<!-- Optional script that automatically makes iframe content responsive. -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/iframe-resizer/3.5.14/iframeResizer.min.js"></script>
<script>iFrameResize({}, '.button-api-frame');</script>