<div class="row">
    <div class="col">
        <div class="col-md-12">
            <p class="h5 text-center">Shipping Information</p>
        </div>
        <br>
        <form method="post">
            <input type="hidden" name="last_action" value="order_shipping">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="shipping_first_name">First name</label>
                    <input type="text" class="form-control" id="shipping_first_name" placeholder="First name" name="shipping_first_name">
                </div>
                <div class="form-group col-md-6">
                    <label for="shipping_last_name">Last name</label>
                    <input type="text" class="form-control" id="shipping_last_name" placeholder="Password" name="shipping_last_name">
                </div>
            </div>
            <div class="form-group">
                <label for="shipping_address_1">Street address</label>
                <input type="text" class="form-control" id="shipping_address_1" placeholder="Street address" name="shipping_address_1">
            </div>
            <div class="form-group">
                <label for="shipping_address_2">Address 2</label>
                <input type="text" class="form-control" id="shipping_address_2" placeholder="Apartment, suite, unit etc. (optional)" name="shipping_address_2">
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="shipping_city">City</label>
                    <input type="text" class="form-control" id="shipping_city" name="shipping_city" placeholder="City">
                </div>
                <div class="form-group col-md-6">
                    <label for="shipping_state">State</label>
                    <input type="text" class="form-control" id="shipping_state" placeholder="State" name="shipping_state">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="shipping_postcode">Postcode / ZIP</label>
                    <input type="text" class="form-control" id="shipping_postcode" name="shipping_postcode" placeholder="Postcode / ZIP">
                </div>
                <div class="form-group col-md-6">
                    <label for="shipping_country">Country</label>
                    <input type="text" class="form-control" id="shipping_postcode" name="shipping_country" placeholder="Country">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputEmail4">Email</label>
                    <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                </div>
                <div class="form-group col-md-6">
                    <label for="shipping_phone">Phone</label>
                    <input type="tel" class="form-control" id="shipping_phone" placeholder="Phone" name="shipping_phone">
                </div>
            </div>
            <br>
            <div class="form-row btn-group-vertical text-center float-right">
                <div class="form-group col-md-12 ">
                    <button type="submit" class="btn btn-primary" name="continue_to_add_items">Continue to Add Items</button>
                </div>
            </div>
    </div>
</form>
</div>
<style>
    .pt50 {
        padding-top: 25px;
    }

</style>