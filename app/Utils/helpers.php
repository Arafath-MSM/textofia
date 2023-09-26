<?php

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

if (! function_exists('setting')) {

    function setting($key, $default = null)
    {
        if (is_null($key)) {
            return new \App\Models\Setting();
        }

        if (is_array($key)) {
            return \App\Models\Setting::set($key[0], $key[1]);
        }

        $value = \App\Models\Setting::get($key);

        return is_null($value) ? value($default) : $value;
    }
}

    function url_exists($url) {
        $headers=get_headers($url);
        return stripos($headers[0],"200 OK")?true:false;
    }

    if (!function_exists('carbon')) {
        function carbon($time = null, $tz = null)
        {
            return new \Carbon\Carbon($time, $tz);
        }
    }

    function google_analytics_script()
    {
        $google_analytics_code = setting('google_analytics');

        if ($google_analytics_code !== '') {

            // If the google analytics code starts with UA then it is a Universal Analytics Property and the script stays
            // the legacy one
            if (substr($google_analytics_code, 0, 2) === "UA") {
                echo '
            <script>
                (function(i,s,o,g,r,a,m){i["GoogleAnalyticsObject"]=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
                })(window,document,"script","//www.google-analytics.com/analytics.js","ga");
                ga("create", "' . $google_analytics_code . '", "auto");
                ga("send", "pageview");
            </script>
        ';
            }

            // If the google analytics code starts with a G then it is a Google Analytics 4-Property and the script
            // to inject it looks different.
            if (substr($google_analytics_code, 0, 2) === "G-") {
                echo '
                    <script async src="https://www.googletagmanager.com/gtag/js?id=' . $google_analytics_code . '"></script>
                    <script>
                    window.dataLayer = window.dataLayer || [];
                    function gtag(){dataLayer.push(arguments);}
                    gtag("js", new Date());
                    gtag("config", "' . $google_analytics_code . '");
                    </script>
                ';
            }
        }
    }

