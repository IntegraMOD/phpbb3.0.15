(function() {
    var COLOR_COOKIE = 'style_color';
    var MODE_COOKIE = 'style_mode';

    function readCookie(name) {
        var nameEQ = name + '=';
        var ca = document.cookie.split(';');
        for (var i = 0; i < ca.length; i++) {
            var c = ca[i];
            while (c.charAt(0) === ' ') {
                c = c.substring(1, c.length);
            }
            if (c.indexOf(nameEQ) === 0) {
                return c.substring(nameEQ.length, c.length);
            }
        }
        return null;
    }

    function writeCookie(name, value) {
        var date = new Date();
        date.setTime(date.getTime() + (365 * 24 * 60 * 60 * 1000));
        document.cookie = name + '=' + value + '; expires=' + date.toUTCString() + '; path=/';
    }

    function normalizeColor(color) {
        return color === 'orange' ? 'orange' : 'blue';
    }

    function normalizeMode(mode) {
        return mode === 'dark' ? 'dark' : 'light';
    }

    function applyTheme(color, mode) {
        color = normalizeColor(color);
        mode = normalizeMode(mode);

        document.documentElement.setAttribute('data-style-color', color);
        document.documentElement.setAttribute('data-bs-theme', mode);

        if (document.body) {
            document.body.setAttribute('data-style-color', color);
            document.body.setAttribute('data-bs-theme', mode);
        }

        var choices = document.querySelectorAll('.theme-choice');
        for (var i = 0; i < choices.length; i++) {
            var choice = choices[i];
            var isActive = normalizeColor(choice.getAttribute('data-style-color')) === color
                && normalizeMode(choice.getAttribute('data-theme-mode')) === mode;
            if (isActive) {
                choice.classList.add('is-active');
            } else {
                choice.classList.remove('is-active');
            }
        }
    }

    function inlineLogo() {
        var logo = document.getElementById('logo');
        if (!logo) {
            return;
        }

        var img = logo.querySelector('img');
        if (!img || !img.src || logo.querySelector('svg.site-logo')) {
            return;
        }

        var request = new XMLHttpRequest();
        request.open('GET', img.src, true);
        request.onreadystatechange = function() {
            if (request.readyState !== 4 || request.status !== 200) {
                return;
            }

            var parser = new DOMParser();
            var doc = parser.parseFromString(request.responseText, 'image/svg+xml');
            var svg = doc.documentElement;
            if (!svg || svg.nodeName.toLowerCase() !== 'svg') {
                return;
            }

            svg.setAttribute('class', 'site-logo');
            svg.setAttribute('width', img.getAttribute('width') || '180');
            svg.setAttribute('height', img.getAttribute('height') || '67');
            svg.setAttribute('fill', 'currentColor');
            svg.setAttribute('aria-hidden', 'true');
            svg.setAttribute('focusable', 'false');
            logo.replaceChild(svg, img);
        };
        request.send();
    }

    applyTheme(readCookie(COLOR_COOKIE), readCookie(MODE_COOKIE));

    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', inlineLogo);
    } else {
        inlineLogo();
    }

    document.addEventListener('click', function(event) {
        var choice = event.target.closest ? event.target.closest('.theme-choice') : null;
        if (!choice) {
            return;
        }

        event.preventDefault();

        var color = normalizeColor(choice.getAttribute('data-style-color'));
        var mode = normalizeMode(choice.getAttribute('data-theme-mode'));

        writeCookie(COLOR_COOKIE, color);
        writeCookie(MODE_COOKIE, mode);
        applyTheme(color, mode);
    });
})();
