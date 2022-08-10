<form class="form-horizontal" method="post" action="{{ route('settings.social') }}">
@csrf
    <div class="form-group row">
        <label for="fb_link" class="col-sm-2 col-form-label">Facebook Link</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="fb_link" value="{{ $setting->fb_link }}">
        </div>
    </div>

    <div class="form-group row">
        <label for="youtube_link" class="col-sm-2 col-form-label">Youtube Link</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="youtube_link" value="{{ $setting->youtube_link }}">
        </div>
    </div>

    <div class="form-group row">
        <label for="twitter_link" class="col-sm-2 col-form-label">Twitter Link</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="twitter_link" value="{{ $setting->twitter_link }}">
        </div>
    </div>

    <div class="form-group row">
        <label for="linkedin_link" class="col-sm-2 col-form-label">Linkedin Link</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="linkedin_link" value="{{ $setting->linkedin_link }}">
        </div>
    </div>

    <div class="form-group row">
        <label for="google_link" class="col-sm-2 col-form-label">Google Link</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="google_link" value="{{ $setting->google_link }}">
        </div>
    </div>

    <div class="form-group row">
        <div class="offset-sm-2 col-sm-10">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>
