<form role="form" action="/company/store" method="post">
    <input type="hidden" value="<?= csrf_token() ?>" name="_token">
    <div class="form-group">
        <label for="name">Company Name</label>
            <input type="text"
               name="company_name"
               class="form-control input-solid"
               placeholder="Enter name here"
               value="{{ old('company_name') }}">
    </div>
    <div class="form-group">
        <label for="name">Address</label>
            <input type="text"
                name="address"
                class="form-control input-solid"
                placeholder="Enter here"
                value="{{ old('address') }}">
    </div>
    <div class="form-group">
        <label for="name">Telephone No</label>
            <input type="number"
               name="phone_no"
               class="form-control input-solid"
               placeholder="0"
               value="{{ old('phone_no') }}">
    </div>
     <div class="form-group">
        <label for="name">Driver's Name</label>
            <input type="text"
               name="driver_name"
               class="form-control input-solid"
               placeholder="Enter here"
               value="{{ old('driver_name') }}">
    </div>
    <div class="form-group">
        <label for="name">Truck No</label>
            <input type="number"
               name="truck_no"
               class="form-control input-solid"
               placeholder="0"
               value="{{ old('truck_no') }}">
    </div>

    <div class="form-group mt-4">
        <button type="submit" class="btn btn-primary btn-lg btn-block">
            @lang('Register')
        </button>
    </div>
</form>