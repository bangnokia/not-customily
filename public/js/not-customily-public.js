(function ($) {
    'use strict';

    injectScripts('https://customily-injector.pages.dev/assets/index-33685fc9.js');
    injectStyles('https://customily-injector.pages.dev/assets/index-c2841f45.css');

    function injectScripts(url) {
        var script = document.createElement('script');
        script.src = url;
        script.async = true;
        document.head.appendChild(script);
    }

    function injectStyles(url) {
        var link = document.createElement('link');
        link.rel = 'stylesheet';
        link.href = url;
        document.head.appendChild(link);
    }
})(jQuery);
