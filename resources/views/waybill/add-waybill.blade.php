<h2>Add Waybill</h2>
<br>
@if(Session::has('messages'))
    <div>{{Session::get('messages')}}</div>
@endif
@include('partials.messages')
<form role="form" action="/waybill/add-waybill" method="POST">
    <input type="hidden" value="<?= csrf_token() ?>" name="_token">
    <div class="form-group">
        <label for="number">Number</label>
            <input type="number"
               name="number"
               class="form-control input-solid"
               placeholder="0"
               value="{{ old('number') }}">
    </div>
    <div class="form-group">
        <label for="date">Date</label>
            <input type="date"
               name="date"
               class="form-control input-solid"
               value="{{ old('date') }}">
    </div>
    <div class="form-group">
        <label for="order_no">Order No</label>
            <input type="number"
               name="order_no"
               class="form-control input-solid"
               placeholder="0"
               value="{{ old('order_no') }}">
    </div>
    <div class="form-group">
        <label for="order_date">Order date</label>
            <input type="date"
               name="order_date"
               class="form-control input-solid"
               value="{{ old('date') }}">
    </div>
     <div class="form-group">
        <label for="deliver_no">Delivery order No</label>
            <input type="number"
               name="deliveryorder_no"
               class="form-control input-solid"
               placeholder="0"
               value="{{ old('deliveryorder_no') }}">
    </div>
    <div class="form-group">
        <label for="delivery_date">Deliver Order Date</label>
            <input type="date"
               name="deliveryorder_date"
               class="form-control input-solid"
               value="{{ old('deliveryorder_date') }}">
    </div>
    <div class="form-group">
        <label for="vehicle_no">Vehicle No</label>
            <input type="number"
               name="vehicle_no"
               class="form-control input-solid"
               placeholder="0"
               value="{{ old('vehicle_no') }}">
    </div>
    <div class="form-group">
        <label for="permit_no">Permit No</label>
            <input type="number"
               name="permit_no"
               class="form-control input-solid"
               placeholder="0"
               value="{{ old('permit_no') }}">
    </div>
    <div class="form-group">
        <label for="permit_month">Permit Month</label>
            <input type="date"
               name="permit_month"
               class="form-control input-solid"
               value="{{ old('permit_month') }}">
    </div>
    <div class="form-group">
        <label for="customer_name">Customer Name</label>
            <input type="text"
               name="customer_name"
               class="form-control input-solid"
               value="{{ old('customer_name') }}">
    </div>
    <div class="form-group">
        <label for="address">Address</label>
            <textarea name="address" 
                  id="address" 
                  cols="30" 
                  rows="10"
                  class="form-control input-solid">
            </textarea>
    </div>
    <div class="form-group">
        <label for="customer_tel">Customer's Telephone No</label>
            <input type="number"
               name="customer_tel"
               class="form-control input-solid"
               value="{{ old('customer_tel') }}">
    </div>
    <div class="form-group">
        <label for="drivers_name">Driver's Name</label>
            <input type="text"
               name="drivers_name"
               class="form-control input-solid"
               value="{{ old('drivers_name') }}">
    </div>
    <div class="form-group">
        <label for="transporter">Transporter</label>
            <input type="text"
               name="transporter"
               class="form-control input-solid"
               value="{{ old('transporter') }}">
    </div>
    <div class="form-group">
        <label for="item">Item</label>
            <input type="text"
               name="item"
               class="form-control input-solid"
               value="{{ old('item') }}">
    </div>
    <div class="form-group">
        <label for="lot_no">Lot No</label>
            <input type="number"
               name="lot_no"
               class="form-control input-solid"
               value="{{ old('lot_no') }}">
    </div>
    <div class="form-group">
        <label for="no_of_bags">No of Bags</label>
            <input type="number"
               name="no_of_bags"
               class="form-control input-solid"
               value="{{ old('no_of_bags') }}">
    </div>
    <div class="form-group">
        <label for="quantity">Quantity</label>
            <input type="number"
               name="quantity"
               class="form-control input-solid"
               value="{{ old('quantity') }}">
    </div>
    <div class="form-group mt-4">
        <button type="submit" class="btn btn-primary btn-lg btn-block">
            @lang('Submit')
        </button>
    </div>
</form>
