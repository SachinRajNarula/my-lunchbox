<?php
$title = "Menu - My Lunchbox";
include "header.php";
?>
<a href="/" style="display:block; margin: 20px; position:relative; z-index:10001"><lord-icon
    src="https://cdn.lordicon.com/iifryyua.json"
    trigger="loop"
    colors="primary:#f4791f"
    state="hover-1"
    style="width:32px;height:32px; -webkit-transform: scaleX(-1); transform: scaleX(-1);">
</lord-icon> Back</a>
<div class="calendar">
<div data-tockify-component="calendar" data-tockify-view="monthly" data-tockify-calendar="lunchboxmenu"></div>
<script data-cfasync="false" data-tockify-script="embed" src="https://public.tockify.com/browser/embed.js"></script>
</div>
<?php include "footer.php";?>