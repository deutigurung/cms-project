<!-- start site-footer -->
<footer class="site-footer">
    <div class="upper-footer">
        <div class="container">
            <div class="row">
                <div class="col col-md-4 col-sm-6">
                    <div class="widget about-widget">
                        <div class="footer-logo">
                            <img src="{{ asset('uploads/settings/'.@Helper::GeneralSiteSettings("style_logo")) }}" alt>
                        </div>
                        <ul class="contact-info">
                            <li><i class="fa fa-home"></i> {{ @Helper::GeneralSiteSettings("contact_address") }}</li>
                            <li><i class="fa fa-phone"></i> {{ @Helper::GeneralSiteSettings("contact_landline") }} /
                                {{ @Helper::GeneralSiteSettings("contact_mobile") }}</li>
                            <li><i class="fa fa-clock-o"></i> Working Hours: <br>{{ @Helper::GeneralSiteSettings("contact_hours") }}</li>
                        </ul>
                    </div>
                </div>

                <div class="col col-md-4 col-sm-6">
                    <div class="widget service-links-widget">
                        <h3>Services</h3>
                        <?php
                        $services = @Helper::ServicesList();
                        ?>
                        <ul>
                            @foreach($services as $service)
                            <li><a href="{{ route('front.serviceBySlug',$service->slug) }}">{{ $service->title }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>

                <div class="col col-md-4 col-sm-6">
                    <div class="widget quick-links-widget">
                        <h3>Navigation</h3>
                        <ul>
                            <?php
                            $menus = @Helper::menusList();
                            ?>
                            @foreach($menus as $menu)
                                <li><a href="{{ url('/'.$menu->url) }}">{{ $menu->title }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div> <!-- end upper-footer -->
    <div class="copyright-info">
        <div class="container">
            <p><a target="_blank" href="https://www.cite.edu.np">&copy; {{ date('Y') }} All Right Reserved By CITE</a></p>
        </div>
    </div>
</footer>
<!-- end site-footer -->
</div>
<!-- end of page-wrapper -->
