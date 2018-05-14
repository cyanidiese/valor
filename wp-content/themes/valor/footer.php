<div id="footer">
    <div class="info">
        <div class="contacts">
            <ul>
                <li>
                    <a target="_blank" href="https://www.google.com/maps/place/2880+W+12th+St,+Brooklyn,+NY+11224,+USA/@40.5771466,-73.9826803,18z/data=!4m5!3m4!1s0x89c2444a89863367:0xa24ba02cb9b5e1a8!8m2!3d40.5774287!4d-73.9803859">
                    <img src="<?php echo get_template_directory_uri() ?>/images/location.png" alt=""/>
                    <p><span>2880 W 12th St<br>suite #5<br>Brooklyn, NY 11224</span></p>
                    </a>
                </li>
                <li>
                    <a target="_blank" href="mailto:info@valorservice.com">
                    <img src="<?php echo get_template_directory_uri() ?>/images/mail.png" alt=""/>
                    <p><span>info@valorservice.com</span></p>
                    </a>
                </li>
                <li>
                    <a href="tel:+1 (718) 484-8122">
                    <img src="<?php echo get_template_directory_uri() ?>/images/tel.png" alt=""/>
                    <p><span>+1 (718) 484-8122</span></p>
                    </a>
                </li>
                <li>
                    <a target="_blank" href="skype:ValorConsulting">
                    <img src="<?php echo get_template_directory_uri() ?>/images/skype.png" alt=""/>
                    <p><span>ValorConsulting</span></p>
                    </a>
                </li>
            </ul>
        </div>
        <div class="add_info">
            <div class="question_caption">
	            <?php _e( '[:en]Have a question?[:es]¿Tiene alguna pregunta?[:ua]Маєте запитання?[:ru]Возник вопрос?[:]' ); ?>
                <br>
                <?php _e( '[:en]Ask a specialist[:es]Pregunte a un especialista[:ua]Запитайте спеціаліста[:ru]Спросите специалиста[:]' ); ?>
                </div>
            <div class="tel_caption">+1 (718) 484-8122<br>+1 (646) 966-8223</div>
            <div class="time_caption">
	            <?php _e( '[:en]24 hours[:es]24 horas[:ua]24 години[:ru]24 часа[:]' ); ?>
                <br>
                <?php _e( '[:en]7 days a week[:es]7 días a la semana[:ua]7 днів на тиждень[:ru]7 дней в неделю[:]' ); ?>
            </div>
        </div>
    </div>
    <div id="footer_bottom">
        <ul class="social">
            <li><a class="in" target="_blank" href="https://www.linkedin.com/in/valor-consulting/"></a></li>
            <li><a class="fb" target="_blank" href="https://www.facebook.com/nycvalor/ "></a></li>
            <li><a class="tw" target="_blank" href="https://twitter.com/ValorSecInv"></a></li>
            <li><a class="inst" target="_blank" href="https://www.instagram.com/valorservice/"></a></li>
            <li><a class="yt" target="_blank" href="https://www.youtube.com/channel/UCl4P7PjRvnXDLjeqlE6YAsA"></a></li>
        </ul>
        <div class="copyrights">valor security &amp; investigations inc. &copy; 2018                        <br>Licensed and Bonded Security Guard Company.
            <br>This business is licensed by The New York State Department Of State division of licensing services.</div>
        <ul class="external">
            <li><a class="bbb" target="_blank" href="https://www.bbb.org/new-york-city/business-reviews/investigator/valor-security-investigations-inc-in-brooklyn-ny-169738"></a></li>
            <li><a class="nypd" target="_blank" href="http://www1.nyc.gov/site/nypd/index.page"></a></li>
            <li><a class="dcjs" target="_blank" href="http://www.criminaljustice.ny.gov/"></a></li>
            <li><a class="aldonys" target="_blank" href="http://www.aldonys.org/"></a></li>
            <li><a class="dos" target="_blank" href="https://www.dos.ny.gov/"></a></li>
        </ul>
    </div>
    <a class="to_top_btn" href="/"></a>
</div>

<div id="banner" class="hide">
    <a class="banner_close" href="/"></a>
    <a class="banner_link" href="/"></a>
</div>

</div>
<div id="modal">
    <div id="modal_message"></div>
    <a id="modal_close" href="/" rel="modal:close">ok</a>
</div>

<script type="text/javascript">
    function initMap() {

        var uluru = {lat: 40.5775029, lng: -73.9802664};

        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 17,
            center: uluru
        });

        var marker = new google.maps.Marker({
            position: uluru,
            map: map
        });
    }
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCaW3OlBEWcT35fItrkphXlm-6RxwwLkNg&callback=initMap" async
        defer></script>

<?php wp_footer(); ?>

</body>
</html>
