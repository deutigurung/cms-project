<form class="form-horizontal" method="post" action="{{ route('settings.style') }}" enctype="multipart/form-data">
    @csrf
    <div class="form-group row">
        <label for="style_logo" class="col-sm-2 col-form-label">Site Logo</label>
        <div class="col-sm-10">
            <input type="file" class="form-control" name="style_logo">
            @if(isset($setting->style_logo))
                <img class="" height="100" width="100"
                     src="{{ asset('uploads/settings/'.$setting->style_logo) }}"
                     alt="logo">
            @endif
        </div>
    </div>

    <div class="form-group row">
        <label for="style_fav" class="col-sm-2 col-form-label">Site Favicon</label>
        <div class="col-sm-10">
            <input type="file" class="form-control" name="style_fav">
            @if(isset($setting->style_fav))
                <img class="" height="100" width="100"
                     src="{{ asset('uploads/settings/'.$setting->style_fav) }}"
                     alt="fav">
            @endif
        </div>
    </div>

    <div class="form-group row">
        <label for="style_preload" class="col-sm-2 col-form-label">Site Favicon</label>
        <div class="col-sm-10">
            <input type="file" class="form-control" name="style_preload">
            @if(isset($setting->style_preload))
                <img class="" height="100" width="100"
                     src="{{ asset('uploads/settings/'.$setting->style_preload) }}"
                     alt="preloader">
            @endif
        </div>
    </div>

    <div class="form-group row">
        <div class="offset-sm-2 col-sm-10">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>
