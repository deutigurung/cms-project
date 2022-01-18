<form class="form-horizontal" method="post" action="{{ route('settings.contact') }}">
@csrf
    <div class="form-group row">
        <label for="contact_email" class="col-sm-2 col-form-label">Email</label>
        <div class="col-sm-10">
            <input type="email" class="form-control" name="contact_email" value="{{ $setting->contact_email }}" placeholder="" required>
            @if ($errors->has('contact_email'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('contact_email') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group row">
        <label for="contact_address" class="col-sm-2 col-form-label">Address</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="contact_address" value="{{ $setting->contact_address }}" placeholder="" required>
            @if ($errors->has('contact_address'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('contact_address') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group row">
        <label for="contact_landline" class="col-sm-2 col-form-label">Landline</label>
        <div class="col-sm-10">
            <input type="number" class="form-control" name="contact_landline" value="{{ $setting->contact_landline }}" placeholder="" required>
            @if ($errors->has('contact_landline'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('contact_landline') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group row">
        <label for="contact_mobile" class="col-sm-2 col-form-label">Mobile</label>
        <div class="col-sm-10">
            <input type="number" class="form-control" name="contact_mobile" value="{{ $setting->contact_mobile }}" placeholder="">
            @if ($errors->has('contact_mobile'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('contact_mobile') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group row">
        <label for="contact_hours" class="col-sm-2 col-form-label">Working Hours</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="contact_hours" value="{{ $setting->contact_hours }}" placeholder="">
            @if ($errors->has('contact_hours'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('contact_hours') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group row">
        <div class="offset-sm-2 col-sm-10">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>
