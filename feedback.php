<form action="https://formsubmit.io/send/jerryraj40@gmail.com" class="appointment-form" method="POST">
    <div class="d-md-flex">
    <div class="form-group">
        <input type="text" name="name" required class="form-control contact_field" placeholder="Name">
    </div>
    </div>
    <div class="d-me-flex">
    <div class="form-group">
        <input type="text" name="phone" required class="form-control contact_field" placeholder="Phone Number">
    </div>
    </div>
    <div class="d-me-flex">
    <div class="form-group">
        <input type="text" name="order" required class="form-control contact_field" placeholder="Order Description">
    </div>
    </div>
    <div class="form-group">
        <textarea name="address" id="" cols="30" required rows="3" class="form-control contact_field" placeholder="Address"></textarea>
    </div>
    <div class="form-group">
        <button type="submit" value="Send" class="btn btn-primary submit_button py-3 px-4">Send</button>
    </div>
    <input type="hidden" name="_redirect" id="name" value="https://my-lunchbox.herokuapp.com/thanks.php">
    <!-- <input type="hidden" name="_subject" value="New Tiffin Order!">
    <input type="hidden" name="_captcha" value="false"> -->
</form>