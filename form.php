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
        <input type="date" required class="form-control contact_field" name="Delivery-Date">
    </div>
    </div>
    <div class="d-me-flex">
    <div class="form-group">
        <p>How often?</p>
    <div class="radio">
        <input type="radio" name="Package" value="Once" required class="radio-button">
        <label for="Once" class="tooltip"><u>Once</u><span class="tooltiptext">$10 - Just try it, you'll love it</span></label>
        <input type="radio" name="Package" value="Weekly" class="radio-button">
        <label for="Weekly" class="tooltip"><u>Weekly</u><span class="tooltiptext">$55 - 6 days a week</span></label>
        <input type="radio" name="Package" value="Monthly" class="radio-button">
        <label for="Monthly" class="tooltip"><u>Monthly</u><span class="tooltiptext">$230 - $10 off for every referral</span></label>
    </div>
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
        <input type="radio" id="Yes" name="Delivery" value="Yes" required class="radio-button">
        <label for="Yes">Yes, please!</label>
        <input type="radio" id="No" name="Delivery" value="No" class="radio-button">
        <label for="No">No, I'll pick it up</label>
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
