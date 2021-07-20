<form action="" method="post">
    @csrf
    <div class="field">
        <label>Name *</label>
        <input type="text" name="name" id="name" value="" palceholder="" class="vl_empty" />
    </div>
    <div class="field">
        <label>Your city *</label>
        <select class="vl_empty" name="city" id="city">
            <option class="plh"></option>
            <option>Kharkiv</option>
            <option>London</option>
            <option>Paris</option>
            <option>Berlin</option>
        </select>
    </div>
    <div class="field">
        <label>Your area *</label>
        <select name="area" id="area">
            <option class="plh"></option>
            <option>Area 1</option>
            <option>Area 2</option>
        </select>
    </div>

    <div class="field">
        <label>Street</label>
        <input type="text" name="street" id="street" value="" palceholder="" class="vl_empty" />
    </div>
    <div class="field">
        <label>House # </label>
        <input type="text" name="house" id="house" value="" palceholder="House Name / Number" />
    </div>

    <div class="field">
        <label class="pos_top">Additional information</label>
        <textarea name="info" id="info"></textarea>
    </div>

    <div class="field">
        <input type="submit" value="@yield('form-title')" class="green_btn" />
    </div>
</form>
