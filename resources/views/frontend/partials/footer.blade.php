<!-- start site-footer -->
<footer class="site-footer">
    <div class="upper-footer">
        <div class="container">
            <div class="row">
                <div class="col col-md-3 col-sm-6">
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

                <div class="col col-md-3 col-sm-6">
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

                <div class="col col-md-3 col-sm-6">
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

                <div class="col col-md-3 col-sm-6">
                    <div class="widget twitter-feed-widget">
                        <h3>Twitter Feed</h3>
                        <ul>
                            <li>
                                <div class="text">
                                    <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit. Ed quia con sequuntur magni dolores.</p>
                                </div>
                                <div class="info-box">
                                    <i class="fa fa-twitter"></i>
                                    <strong><a href="#">@Mark Wahlberg</a></strong>
                                </div>
                            </li>
                            <li>
                                <div class="text">
                                    <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit. Ed quia con sequuntur magni dolores.</p>
                                </div>
                                <div class="info-box">
                                    <i class="fa fa-twitter"></i>
                                    <strong><a href="#">@Mark Wahlberg</a></strong>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- end upper-footer -->
    <div class="copyright-info">
        <div class="container">
            <p><a target="_blank" href="https://www.templateshub.net">Templates Hub</a></p>
        </div>
    </div>
</footer>
<!-- end site-footer -->
</div>
<!-- end of page-wrapper -->
