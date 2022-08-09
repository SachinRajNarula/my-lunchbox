<?php
$title = "Feedback - My Lunchbox";
include "header.php";
?>
<a href="/" style="display:block; margin: 20px; position:relative; z-index:10001"><lord-icon
src="https://cdn.lordicon.com/iifryyua.json"
trigger="hover"
colors="primary:#f4791f"
state="hover-1"
style="width:32px;height:32px; -webkit-transform: scaleX(-1); transform: scaleX(-1);">
</lord-icon> Home</a>
<form action="https://formsubmit.io/send/d906c4a3-6af9-44f0-bc6f-1e3352dc5167" class="appointment-form" method="POST" style="max-width:500px; padding:100px 20px; margin:auto;">
    <div class="d-md-flex">
    <div class="form-group">
        <input type="text" name="Name" required class="form-control contact_field" placeholder="Name">
    </div>
    </div>
    <div class="d-me-flex">
    <div class="form-group">
        <input type="text" name="Phone" required class="form-control contact_field" placeholder="Phone Number">
    </div>
    </div>
    <div class="d-me-flex">
    <div class="form-group">
        <input type="text" name="Order" class="form-control contact_field" placeholder="What you ordered?">
    </div>
    </div>
    <div class="form-group">
        <textarea name="Feedback" id="" cols="30" required rows="3" class="form-control contact_field" placeholder="Feedback"></textarea>
    </div>
    <div class="form-group">
        <button type="submit" value="Send" class="btn btn-primary submit_button py-3 px-4">Send</button>
    </div>
    <input type="hidden" name="_redirect" id="name" value="https://my-lunchbox.herokuapp.com/thanks.php">
</form>

<?php include "footer.php";?>