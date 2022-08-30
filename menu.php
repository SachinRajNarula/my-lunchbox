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
<!-- <div class="calendar">
<div data-tockify-component="calendar" data-tockify-view="monthly" data-tockify-calendar="lunchboxmenu"></div>
<script data-cfasync="false" data-tockify-script="embed" src="https://public.tockify.com/browser/embed.js"></script> -->
<div class="calendar">
    <iframe src="https://calendar.google.com/calendar/embed?height=600&wkst=1&bgcolor=%23f47910&ctz=America%2FToronto&showTitle=1&showNav=1&showDate=1&showPrint=0&showTabs=1&showTz=1&src=OTZlamFwb3V0cTYxOTRnajlqYmxxODZpYW9AZ3JvdXAuY2FsZW5kYXIuZ29vZ2xlLmNvbQ&color=%23f47910" style="border-width:0" width="800" height="600" frameborder="0" scrolling="no"></iframe>
</div>
</div>
<?php include "footer.php";?>