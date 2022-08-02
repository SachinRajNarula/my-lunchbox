<form action="https://formsubmit.co/c17b049f39d5242a9eca5a2c3526521e" class="appointment-form" method="POST">
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
    <div class="d-me-flex">
    <div class="form-group">
        <label for="quantity">Quantity:</label>
        <input type="number" name="Quantity" min="1" value="1">
    </div>
    </div>
    <div class="d-me-flex">
    <div class="form-group">
        <p>Do you want your Lunchbox delivered?<span>Delivery: $2.49 per address</span></p>
        <input type="radio" name="Delivery" required class="form-control contact_field">
        <label for="Yes">Yes</label>
        <input type="radio" name="Delivery" class="form-control contact_field">
        <label for="No">No</label>
    </div>
    </div>
    <div class="form-group">
        <textarea name="address" id="" cols="30" rows="3" class="form-control contact_field" placeholder="Address"></textarea>
    </div>
    <div class="form-group">
        <button type="submit" value="Send" class="btn btn-primary submit_button py-3 px-4">Send</button>
    </div>
    <input type="hidden" name="_next" value="https://my-lunchbox.herokuapp.com/thanks.php">
    <input type="hidden" name="_subject" value="New Tiffin Order!">
    <input type="hidden" name="_captcha" value="false">
</form>