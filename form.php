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
        <p>Please select the delivery/pickup date: <span class="subtext">My Lunchbox starts delivering after 6:00 PM</span></p>
        <input class="input-date" name="Delivery Date" type="date">
    </div>
    </div>
    <div class="d-me-flex">
    <div class="form-group">
        <input type="text" name="Package" required class="form-control contact_field" placeholder="Once($10)/Weekly($55)/Monthly($230)">
    </div>
    </div>
    <div class="d-me-flex">
    <div class="form-group">
        <label for="quantity">Quantity: &nbsp;&nbsp;</label>
        <input class="input-number" type="number" name="Quantity" min="1" value="1">
    </div>
    </div>
    <div class="d-me-flex">
    <div class="form-group">
        <p>Do you want your Lunchbox delivered?<span class="subtext"> Delivery: $2.49 per address </span></p>
    <div class="radio">
        <input type="radio" name="Delivery" required class="radio-button">
        <label for="Yes" value="Yes">Yes, please!</label>
        <input type="radio" name="Delivery" class="radio-button">
        <label for="No" value="No">No, I'll pick it up</label>
    </div>
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
    <input type="hidden" name="_cc" value="mylunchbox00@gmail.com,lipikasethi00@gmail.com,badshahsnp@gmail.com,msanjeedashaheen@gmail.com">
</form>
