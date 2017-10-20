<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Mobile browser viewport -->
    <meta name="viewport"
          content="width=device-width, initial-scale=1, maximum-scale=1">
    @include ('favicon')
    <link rel="stylesheet" href="/fonts/firacode/fira_code.css">
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="/css/app.css">
    <!-- Page title -->
    <title>Fredesk - Custom Web Development in Berlin. Webseiten, Anwendungen,
        programmieren lassen.</title>
    <meta name="Description"
          content="Custom Web Development in Berlin. Advanced Web & Mobile Solutions. Enterprise Apps & Portals. HTML5, CSS3, PHP, Javascript, Vuejs, CLI Applications, Laravel, Java, MySQL, JTL Wawi, JTL Shop, Templates, Wordpress">
    <meta name="Keywords"
          content="HTML5, CSS3, Javascript, Vuejs, CLI Applications, Laravel, Java, MySQL, JTL Wawi, JTL Shop, Templates, Wordpress, Berlin, Web developer, App Development, TDD">
    <META NAME="Language" CONTENT="english, german, french, spanish">
    <META NAME="Publisher" CONTENT="Frederic Brüning">
    <META NAME="distribution" CONTENT="Global">
    <META NAME="Robots" CONTENT="INDEX,FOLLOW">
    <META NAME="city" CONTENT="Berlin">
    <META NAME="author" CONTENT="Frederic Brüning, Fredesk">
    <META NAME="subject" CONTENT="Business">

    <!-- Global Site Tag (gtag.js) - Google Analytics -->
    <script async
            src="https://www.googletagmanager.com/gtag/js?id=UA-106859815-1"></script>
    <!-- Google Tag Manager -->
    <script>
        (function ( w, d, s, l, i ) {
                    w[ l ] = w[ l ] || [];
                    w[ l ].push({
                        'gtm.start': new Date().getTime(), event: 'gtm.js'
                    });
                    var f = d.getElementsByTagName(s)[ 0 ],
                            j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l:'';
                    j.async = true;
                    j.src = 'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
                    f.parentNode.insertBefore(j, f);
                })(window, document, 'script', 'dataLayer', 'GTM-NQ93HB7');
    </script>
    <!-- End Google Tag Manager -->
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments)
        };

        gtag('js', new Date());

        gtag('config', 'UA-106859815-1');
    </script>

</head>
<body>
<div id="app">
    <pacman-loader :loading="loading" color="#00d1b2" size="25px"
                   style="position:absolute;top:50%;left:45%;z-index:9999;background:#fff cover;"></pacman-loader>
    @include ('layouts.header')
    <router-view></router-view>
    @include ('layouts.footer')
</div>
<!-- Hotjar Tracking Code for fredesk.com -->
<script>
    (function(h,o,t,j,a,r){
        h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
        h._hjSettings={hjid:663033,hjsv:6};
        a=o.getElementsByTagName('head')[0];
        r=o.createElement('script');r.async=1;
        r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
        a.appendChild(r);
    })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
</script>
<script src="/js/app.js"></script>
</body>
</html>
