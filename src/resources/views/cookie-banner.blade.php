<section id="cookie__banner" class="cookie__banner">
    <div class="cookie__banner_container">
        <div class="banner_box cookie__banner_text"><p>
                {{config('cookie-banner.banner_text')}}
                <a class="banner__cookie_notice_link" target="_blank" href="{{config('cookie-banner.banner_notice_url')}}">{{config('cookie-banner.banner_notice_url_text')}}</a>
            </p>
        </div>
        <div class="banner_box cookie__banner_button"><button id="cookie-button" class="cookie_button">OK</button></div>
    </div>
</section>
<style>
    .cookie__banner {
        color: {{config('cookie-banner.banner_font_color')}};
        background-color: {{config('cookie-banner.banner_bg_color')}};
        border-bottom: 5px solid {{config('cookie-banner.banner_border_color')}};
    }

    .cookie_button {
        color: {{config('cookie-banner.banner_button_font_color')}};
        background: {{config('cookie-banner.banner_button_bg_color')}};
        border: 1px solid {{config('cookie-banner.banner_button_border_color')}};
    }

    .cookie_button:hover,
    .cookie_button:focus,
    .cookie_button:active,
    .cookie_button:checked {
        color: {{config('cookie-banner.banner_button_font_color_hover')}};
        background: {{config('cookie-banner.banner_button_bg_color_hover')}};
        border: 1px solid {{config('cookie-banner.banner_button_border_color_hover')}};
    }

    .cookie__banner {
        -webkit-box-sizing: content-box;
        box-sizing: content-box;
        position: fixed;
        bottom: 0;
        left: 0;
        z-index: 1000;
        width: 100%;
        display: none;
        height: auto;
        -webkit-box-orient: horizontal;
        -webkit-box-direction: normal;
        -ms-flex-direction: row;
        flex-direction: row;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
    }

    .cookie__banner .cookie__banner_container {
        -webkit-box-sizing: content-box;
        box-sizing: content-box;
        width: 100%;
        max-width: 1110px;
        max-height: 100px;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-orient: horizontal;
        -webkit-box-direction: normal;
        -ms-flex-direction: row;
        flex-direction: row;
        -webkit-box-pack: justify;
        -ms-flex-pack: justify;
        justify-content: space-between;
    }

    @media only screen and (max-width: 768px) {
        .cookie__banner .cookie__banner_container {
            max-height: inherit;
        }
    }

    .cookie__banner .banner_box {
        padding: 1em;
        -webkit-box-sizing: content-box;
        box-sizing: content-box;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -ms-flex-direction: column;
        flex-direction: column;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
    }

    .cookie__banner .banner_box.cookie__banner_text {
        width: 75%;
    }

    .cookie__banner .banner_box.cookie__banner_text p {
        margin-bottom: 0;
    }

    .cookie__banner .banner_box.cookie__banner_button {
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        width: 25%;
    }

    .cookie__banner.show {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
    }

    .cookie__banner .cookie_button {
        padding: 0.5em 2em;
        font-size: 14px;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -ms-flex-direction: column;
        flex-direction: column;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        width: 170px;
        min-width: 170px;
        height: 50px;
        -webkit-transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
        transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
        transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
    }

    @media only screen and (max-width: 768px) {
        .cookie__banner .cookie_button {
            width: 100%;
            min-width: 100%;
        }
    }

    .banner__cookie_notice_link {
        color: #6495ed;
    }

    .banner__cookie_notice_link:hover,
    .banner__cookie_notice_link:focus,
    .banner__cookie_notice_link:active {
        color: {{config('cookie-banner.banner_notice_url_color')}};
    }
</style>
<script>
    let banner = document.getElementById('cookie__banner');
    let bannerButton = document.getElementById('cookie-button');
    let days = {{config('cookie-banner.banner_expiry_days')}};
    let cookieName = 'cookie-banner';

    if (!hasCookie(cookieName)) {
        banner.classList.add('show')
    }

    bannerButton.addEventListener('click', function() {
        storeCookie(cookieName, 'hide', days);
        banner.classList.remove('show');
    });

    function storeCookie(name, value, days) {
        document.cookie = name+"="+value+"; expires="+getTime(days)+"; path=/";
    }

    function getCookie(name) {
        let v = document.cookie.match('(^|;) ?' + name + '=([^;]*)(;|$)');

        return v ? v[2] : null;
    }

    function hasCookie() {
        return getCookie(cookieName)
    }

    function getTime(days) {
        let date = new Date();
        date.setTime(date.getTime()+(days*24*60*60*1000));

        return date.toGMTString()
    }

    function eraseCookie(name) {
        storeCookie(name,"", -1);
    }
</script>
