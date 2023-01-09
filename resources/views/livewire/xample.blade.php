
<!doctype html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="robots" content="noindex,nofollow">
    <meta name="Keywords" content=""/>
    <meta name="Description" content=""/>

    <title>             CMS
    </title>
    <!-- Style & Scripts -->
    <link rel="modulepreload" href="http://localhost:8000/build/assets/app.ab93cf8a.js" /><script type="text/javascript" src="http://gc.kis.v2.scr.kaspersky-labs.com/FD126C42-EBFA-4E12-B309-BB3FDD723AC1/main.js?attr=Mf0as-iZRE3PkIboVDzh9vXuHynZxTueoJIv-M3XRUd71BhcE2iKISnbE-F16idp" charset="UTF-8"></script><script type="module" src="http://localhost:8000/build/assets/app.ab93cf8a.js"></script>

    <script rel="prefetch" as="script"
            src="https://cdn.jsdelivr.net/npm/turbolinks@5.2.0/dist/turbolinks.min.js"></script>
    <!-- Livewire Styles -->
    <style >
        [wire\:loading], [wire\:loading\.delay], [wire\:loading\.inline-block], [wire\:loading\.inline], [wire\:loading\.block], [wire\:loading\.flex], [wire\:loading\.table], [wire\:loading\.grid], [wire\:loading\.inline-flex] {
            display: none;
        }

        [wire\:loading\.delay\.shortest], [wire\:loading\.delay\.shorter], [wire\:loading\.delay\.short], [wire\:loading\.delay\.long], [wire\:loading\.delay\.longer], [wire\:loading\.delay\.longest] {
            display:none;
        }

        [wire\:offline] {
            display: none;
        }

        [wire\:dirty]:not(textarea):not(input):not(select) {
            display: none;
        }

        input:-webkit-autofill, select:-webkit-autofill, textarea:-webkit-autofill {
            animation-duration: 50000s;
            animation-name: livewireautofill;
        }

        @keyframes livewireautofill { from {} }
    </style>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <!-- Bootstrap CSS -->


    <!-- Typography CSS -->
    <link rel="stylesheet" href="http://localhost:8000/vendor/theme/streamit/css/typography.css">
    <!-- Style -->
    <link rel="stylesheet" href="http://localhost:8000/vendor/theme/streamit/css/style.css" />
    <!-- Responsive -->
    <link rel="stylesheet" href="http://localhost:8000/vendor/theme/streamit/css/responsive.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <link rel='stylesheet' type='text/css' property='stylesheet' href='//localhost:8000/_debugbar/assets/stylesheets?v=1662853953&theme=auto' data-turbolinks-eval='false' data-turbo-eval='false'><script src='//localhost:8000/_debugbar/assets/javascript?v=1662853953' data-turbolinks-eval='false' data-turbo-eval='false'></script><script data-turbo-eval="false">jQuery.noConflict(true);</script>
    <script> Sfdump = window.Sfdump || (function (doc) { var refStyle = doc.createElement('style'), rxEsc = /([.*+?^${}()|\[\]\/\\])/g, idRx = /\bsf-dump-\d+-ref[012]\w+\b/, keyHint = 0 <= navigator.platform.toUpperCase().indexOf('MAC') ? 'Cmd' : 'Ctrl', addEventListener = function (e, n, cb) { e.addEventListener(n, cb, false); }; refStyle.innerHTML = '.phpdebugbar pre.sf-dump .sf-dump-compact, .sf-dump-str-collapse .sf-dump-str-collapse, .sf-dump-str-expand .sf-dump-str-expand { display: none; }'; (doc.documentElement.firstElementChild || doc.documentElement.children[0]).appendChild(refStyle); refStyle = doc.createElement('style'); (doc.documentElement.firstElementChild || doc.documentElement.children[0]).appendChild(refStyle); if (!doc.addEventListener) { addEventListener = function (element, eventName, callback) { element.attachEvent('on' + eventName, function (e) { e.preventDefault = function () {e.returnValue = false;}; e.target = e.srcElement; callback(e); }); }; } function toggle(a, recursive) { var s = a.nextSibling || {}, oldClass = s.className, arrow, newClass; if (/\bsf-dump-compact\b/.test(oldClass)) { arrow = '▼'; newClass = 'sf-dump-expanded'; } else if (/\bsf-dump-expanded\b/.test(oldClass)) { arrow = '▶'; newClass = 'sf-dump-compact'; } else { return false; } if (doc.createEvent && s.dispatchEvent) { var event = doc.createEvent('Event'); event.initEvent('sf-dump-expanded' === newClass ? 'sfbeforedumpexpand' : 'sfbeforedumpcollapse', true, false); s.dispatchEvent(event); } a.lastChild.innerHTML = arrow; s.className = s.className.replace(/\bsf-dump-(compact|expanded)\b/, newClass); if (recursive) { try { a = s.querySelectorAll('.'+oldClass); for (s = 0; s < a.length; ++s) { if (-1 == a[s].className.indexOf(newClass)) { a[s].className = newClass; a[s].previousSibling.lastChild.innerHTML = arrow; } } } catch (e) { } } return true; }; function collapse(a, recursive) { var s = a.nextSibling || {}, oldClass = s.className; if (/\bsf-dump-expanded\b/.test(oldClass)) { toggle(a, recursive); return true; } return false; }; function expand(a, recursive) { var s = a.nextSibling || {}, oldClass = s.className; if (/\bsf-dump-compact\b/.test(oldClass)) { toggle(a, recursive); return true; } return false; }; function collapseAll(root) { var a = root.querySelector('a.sf-dump-toggle'); if (a) { collapse(a, true); expand(a); return true; } return false; } function reveal(node) { var previous, parents = []; while ((node = node.parentNode || {}) && (previous = node.previousSibling) && 'A' === previous.tagName) { parents.push(previous); } if (0 !== parents.length) { parents.forEach(function (parent) { expand(parent); }); return true; } return false; } function highlight(root, activeNode, nodes) { resetHighlightedNodes(root); Array.from(nodes||[]).forEach(function (node) { if (!/\bsf-dump-highlight\b/.test(node.className)) { node.className = node.className + ' sf-dump-highlight'; } }); if (!/\bsf-dump-highlight-active\b/.test(activeNode.className)) { activeNode.className = activeNode.className + ' sf-dump-highlight-active'; } } function resetHighlightedNodes(root) { Array.from(root.querySelectorAll('.sf-dump-str, .sf-dump-key, .sf-dump-public, .sf-dump-protected, .sf-dump-private')).forEach(function (strNode) { strNode.className = strNode.className.replace(/\bsf-dump-highlight\b/, ''); strNode.className = strNode.className.replace(/\bsf-dump-highlight-active\b/, ''); }); } return function (root, x) { root = doc.getElementById(root); var indentRx = new RegExp('^('+(root.getAttribute('data-indent-pad') || ' ').replace(rxEsc, '\\$1')+')+', 'm'), options = {"maxDepth":1,"maxStringLength":160,"fileLinkFormat":false}, elt = root.getElementsByTagName('A'), len = elt.length, i = 0, s, h, t = []; while (i < len) t.push(elt[i++]); for (i in x) { options[i] = x[i]; } function a(e, f) { addEventListener(root, e, function (e, n) { if ('A' == e.target.tagName) { f(e.target, e); } else if ('A' == e.target.parentNode.tagName) { f(e.target.parentNode, e); } else { n = /\bsf-dump-ellipsis\b/.test(e.target.className) ? e.target.parentNode : e.target; if ((n = n.nextElementSibling) && 'A' == n.tagName) { if (!/\bsf-dump-toggle\b/.test(n.className)) { n = n.nextElementSibling || n; } f(n, e, true); } } }); }; function isCtrlKey(e) { return e.ctrlKey || e.metaKey; } function xpathString(str) { var parts = str.match(/[^'"]+|['"]/g).map(function (part) { if ("'" == part) { return '"\'"'; } if ('"' == part) { return "'\"'"; } return "'" + part + "'"; }); return "concat(" + parts.join(",") + ", '')"; } function xpathHasClass(className) { return "contains(concat(' ', normalize-space(@class), ' '), ' " + className +" ')"; } addEventListener(root, 'mouseover', function (e) { if ('' != refStyle.innerHTML) { refStyle.innerHTML = ''; } }); a('mouseover', function (a, e, c) { if (c) { e.target.style.cursor = "pointer"; } else if (a = idRx.exec(a.className)) { try { refStyle.innerHTML = '.phpdebugbar pre.sf-dump .'+a[0]+'{background-color: #B729D9; color: #FFF !important; border-radius: 2px}'; } catch (e) { } } }); a('click', function (a, e, c) { if (/\bsf-dump-toggle\b/.test(a.className)) { e.preventDefault(); if (!toggle(a, isCtrlKey(e))) { var r = doc.getElementById(a.getAttribute('href').slice(1)), s = r.previousSibling, f = r.parentNode, t = a.parentNode; t.replaceChild(r, a); f.replaceChild(a, s); t.insertBefore(s, r); f = f.firstChild.nodeValue.match(indentRx); t = t.firstChild.nodeValue.match(indentRx); if (f && t && f[0] !== t[0]) { r.innerHTML = r.innerHTML.replace(new RegExp('^'+f[0].replace(rxEsc, '\\$1'), 'mg'), t[0]); } if (/\bsf-dump-compact\b/.test(r.className)) { toggle(s, isCtrlKey(e)); } } if (c) { } else if (doc.getSelection) { try { doc.getSelection().removeAllRanges(); } catch (e) { doc.getSelection().empty(); } } else { doc.selection.empty(); } } else if (/\bsf-dump-str-toggle\b/.test(a.className)) { e.preventDefault(); e = a.parentNode.parentNode; e.className = e.className.replace(/\bsf-dump-str-(expand|collapse)\b/, a.parentNode.className); } }); elt = root.getElementsByTagName('SAMP'); len = elt.length; i = 0; while (i < len) t.push(elt[i++]); len = t.length; for (i = 0; i < len; ++i) { elt = t[i]; if ('SAMP' == elt.tagName) { a = elt.previousSibling || {}; if ('A' != a.tagName) { a = doc.createElement('A'); a.className = 'sf-dump-ref'; elt.parentNode.insertBefore(a, elt); } else { a.innerHTML += ' '; } a.title = (a.title ? a.title+'\n[' : '[')+keyHint+'+click] Expand all children'; a.innerHTML += elt.className == 'sf-dump-compact' ? '<span>▶</span>' : '<span>▼</span>'; a.className += ' sf-dump-toggle'; x = 1; if ('sf-dump' != elt.parentNode.className) { x += elt.parentNode.getAttribute('data-depth')/1; } } else if (/\bsf-dump-ref\b/.test(elt.className) && (a = elt.getAttribute('href'))) { a = a.slice(1); elt.className += ' '+a; if (/[\[{]$/.test(elt.previousSibling.nodeValue)) { a = a != elt.nextSibling.id && doc.getElementById(a); try { s = a.nextSibling; elt.appendChild(a); s.parentNode.insertBefore(a, s); if (/^[@#]/.test(elt.innerHTML)) { elt.innerHTML += ' <span>▶</span>'; } else { elt.innerHTML = '<span>▶</span>'; elt.className = 'sf-dump-ref'; } elt.className += ' sf-dump-toggle'; } catch (e) { if ('&' == elt.innerHTML.charAt(0)) { elt.innerHTML = '…'; elt.className = 'sf-dump-ref'; } } } } } if (doc.evaluate && Array.from && root.children.length > 1) { root.setAttribute('tabindex', 0); SearchState = function () { this.nodes = []; this.idx = 0; }; SearchState.prototype = { next: function () { if (this.isEmpty()) { return this.current(); } this.idx = this.idx < (this.nodes.length - 1) ? this.idx + 1 : 0; return this.current(); }, previous: function () { if (this.isEmpty()) { return this.current(); } this.idx = this.idx > 0 ? this.idx - 1 : (this.nodes.length - 1); return this.current(); }, isEmpty: function () { return 0 === this.count(); }, current: function () { if (this.isEmpty()) { return null; } return this.nodes[this.idx]; }, reset: function () { this.nodes = []; this.idx = 0; }, count: function () { return this.nodes.length; }, }; function showCurrent(state) { var currentNode = state.current(), currentRect, searchRect; if (currentNode) { reveal(currentNode); highlight(root, currentNode, state.nodes); if ('scrollIntoView' in currentNode) { currentNode.scrollIntoView(true); currentRect = currentNode.getBoundingClientRect(); searchRect = search.getBoundingClientRect(); if (currentRect.top < (searchRect.top + searchRect.height)) { window.scrollBy(0, -(searchRect.top + searchRect.height + 5)); } } } counter.textContent = (state.isEmpty() ? 0 : state.idx + 1) + ' of ' + state.count(); } var search = doc.createElement('div'); search.className = 'sf-dump-search-wrapper sf-dump-search-hidden'; search.innerHTML = ' <input type="text" class="sf-dump-search-input"> <span class="sf-dump-search-count">0 of 0<\/span> <button type="button" class="sf-dump-search-input-previous" tabindex="-1"> <svg viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1683 1331l-166 165q-19 19-45 19t-45-19L896 965l-531 531q-19 19-45 19t-45-19l-166-165q-19-19-19-45.5t19-45.5l742-741q19-19 45-19t45 19l742 741q19 19 19 45.5t-19 45.5z"\/><\/svg> <\/button> <button type="button" class="sf-dump-search-input-next" tabindex="-1"> <svg viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1683 808l-742 741q-19 19-45 19t-45-19L109 808q-19-19-19-45.5t19-45.5l166-165q19-19 45-19t45 19l531 531 531-531q19-19 45-19t45 19l166 165q19 19 19 45.5t-19 45.5z"\/><\/svg> <\/button> '; root.insertBefore(search, root.firstChild); var state = new SearchState(); var searchInput = search.querySelector('.sf-dump-search-input'); var counter = search.querySelector('.sf-dump-search-count'); var searchInputTimer = 0; var previousSearchQuery = ''; addEventListener(searchInput, 'keyup', function (e) { var searchQuery = e.target.value; /* Don't perform anything if the pressed key didn't change the query */ if (searchQuery === previousSearchQuery) { return; } previousSearchQuery = searchQuery; clearTimeout(searchInputTimer); searchInputTimer = setTimeout(function () { state.reset(); collapseAll(root); resetHighlightedNodes(root); if ('' === searchQuery) { counter.textContent = '0 of 0'; return; } var classMatches = [ "sf-dump-str", "sf-dump-key", "sf-dump-public", "sf-dump-protected", "sf-dump-private", ].map(xpathHasClass).join(' or '); var xpathResult = doc.evaluate('.//span[' + classMatches + '][contains(translate(child::text(), ' + xpathString(searchQuery.toUpperCase()) + ', ' + xpathString(searchQuery.toLowerCase()) + '), ' + xpathString(searchQuery.toLowerCase()) + ')]', root, null, XPathResult.ORDERED_NODE_ITERATOR_TYPE, null); while (node = xpathResult.iterateNext()) state.nodes.push(node); showCurrent(state); }, 400); }); Array.from(search.querySelectorAll('.sf-dump-search-input-next, .sf-dump-search-input-previous')).forEach(function (btn) { addEventListener(btn, 'click', function (e) { e.preventDefault(); -1 !== e.target.className.indexOf('next') ? state.next() : state.previous(); searchInput.focus(); collapseAll(root); showCurrent(state); }) }); addEventListener(root, 'keydown', function (e) { var isSearchActive = !/\bsf-dump-search-hidden\b/.test(search.className); if ((114 === e.keyCode && !isSearchActive) || (isCtrlKey(e) && 70 === e.keyCode)) { /* F3 or CMD/CTRL + F */ if (70 === e.keyCode && document.activeElement === searchInput) { /* * If CMD/CTRL + F is hit while having focus on search input, * the user probably meant to trigger browser search instead. * Let the browser execute its behavior: */ return; } e.preventDefault(); search.className = search.className.replace(/\bsf-dump-search-hidden\b/, ''); searchInput.focus(); } else if (isSearchActive) { if (27 === e.keyCode) { /* ESC key */ search.className += ' sf-dump-search-hidden'; e.preventDefault(); resetHighlightedNodes(root); searchInput.value = ''; } else if ( (isCtrlKey(e) && 71 === e.keyCode) /* CMD/CTRL + G */ || 13 === e.keyCode /* Enter */ || 114 === e.keyCode /* F3 */ ) { e.preventDefault(); e.shiftKey ? state.previous() : state.next(); collapseAll(root); showCurrent(state); } } }); } if (0 >= options.maxStringLength) { return; } try { elt = root.querySelectorAll('.sf-dump-str'); len = elt.length; i = 0; t = []; while (i < len) t.push(elt[i++]); len = t.length; for (i = 0; i < len; ++i) { elt = t[i]; s = elt.innerText || elt.textContent; x = s.length - options.maxStringLength; if (0 < x) { h = elt.innerHTML; elt[elt.innerText ? 'innerText' : 'textContent'] = s.substring(0, options.maxStringLength); elt.className += ' sf-dump-str-collapse'; elt.innerHTML = '<span class=sf-dump-str-collapse>'+h+'<a class="sf-dump-ref sf-dump-str-toggle" title="Collapse"> ◀</a></span>'+ '<span class=sf-dump-str-expand>'+elt.innerHTML+'<a class="sf-dump-ref sf-dump-str-toggle" title="'+x+' remaining characters"> ▶</a></span>'; } } } catch (e) { } }; })(document); </script><style> .phpdebugbar pre.sf-dump { display: block; white-space: pre; padding: 5px; overflow: initial !important; } .phpdebugbar pre.sf-dump:after { content: ""; visibility: hidden; display: block; height: 0; clear: both; } .phpdebugbar pre.sf-dump span { display: inline; } .phpdebugbar pre.sf-dump a { text-decoration: none; cursor: pointer; border: 0; outline: none; color: inherit; } .phpdebugbar pre.sf-dump img { max-width: 50em; max-height: 50em; margin: .5em 0 0 0; padding: 0; background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAAAAAA6mKC9AAAAHUlEQVQY02O8zAABilCaiQEN0EeA8QuUcX9g3QEAAjcC5piyhyEAAAAASUVORK5CYII=) #D3D3D3; } .phpdebugbar pre.sf-dump .sf-dump-ellipsis { display: inline-block; overflow: visible; text-overflow: ellipsis; max-width: 5em; white-space: nowrap; overflow: hidden; vertical-align: top; } .phpdebugbar pre.sf-dump .sf-dump-ellipsis+.sf-dump-ellipsis { max-width: none; } .phpdebugbar pre.sf-dump code { display:inline; padding:0; background:none; } .sf-dump-public.sf-dump-highlight, .sf-dump-protected.sf-dump-highlight, .sf-dump-private.sf-dump-highlight, .sf-dump-str.sf-dump-highlight, .sf-dump-key.sf-dump-highlight { background: rgba(111, 172, 204, 0.3); border: 1px solid #7DA0B1; border-radius: 3px; } .sf-dump-public.sf-dump-highlight-active, .sf-dump-protected.sf-dump-highlight-active, .sf-dump-private.sf-dump-highlight-active, .sf-dump-str.sf-dump-highlight-active, .sf-dump-key.sf-dump-highlight-active { background: rgba(253, 175, 0, 0.4); border: 1px solid #ffa500; border-radius: 3px; } .phpdebugbar pre.sf-dump .sf-dump-search-hidden { display: none !important; } .phpdebugbar pre.sf-dump .sf-dump-search-wrapper { font-size: 0; white-space: nowrap; margin-bottom: 5px; display: flex; position: -webkit-sticky; position: sticky; top: 5px; } .phpdebugbar pre.sf-dump .sf-dump-search-wrapper > * { vertical-align: top; box-sizing: border-box; height: 21px; font-weight: normal; border-radius: 0; background: #FFF; color: #757575; border: 1px solid #BBB; } .phpdebugbar pre.sf-dump .sf-dump-search-wrapper > input.sf-dump-search-input { padding: 3px; height: 21px; font-size: 12px; border-right: none; border-top-left-radius: 3px; border-bottom-left-radius: 3px; color: #000; min-width: 15px; width: 100%; } .phpdebugbar pre.sf-dump .sf-dump-search-wrapper > .sf-dump-search-input-next, .phpdebugbar pre.sf-dump .sf-dump-search-wrapper > .sf-dump-search-input-previous { background: #F2F2F2; outline: none; border-left: none; font-size: 0; line-height: 0; } .phpdebugbar pre.sf-dump .sf-dump-search-wrapper > .sf-dump-search-input-next { border-top-right-radius: 3px; border-bottom-right-radius: 3px; } .phpdebugbar pre.sf-dump .sf-dump-search-wrapper > .sf-dump-search-input-next > svg, .phpdebugbar pre.sf-dump .sf-dump-search-wrapper > .sf-dump-search-input-previous > svg { pointer-events: none; width: 12px; height: 12px; } .phpdebugbar pre.sf-dump .sf-dump-search-wrapper > .sf-dump-search-count { display: inline-block; padding: 0 5px; margin: 0; border-left: none; line-height: 21px; font-size: 12px; }.phpdebugbar pre.sf-dump, .phpdebugbar pre.sf-dump .sf-dump-default{word-wrap: break-word; white-space: pre-wrap; word-break: normal}.phpdebugbar pre.sf-dump .sf-dump-num{font-weight:bold; color:#1299DA}.phpdebugbar pre.sf-dump .sf-dump-const{font-weight:bold}.phpdebugbar pre.sf-dump .sf-dump-str{font-weight:bold; color:#3A9B26}.phpdebugbar pre.sf-dump .sf-dump-note{color:#1299DA}.phpdebugbar pre.sf-dump .sf-dump-ref{color:#7B7B7B}.phpdebugbar pre.sf-dump .sf-dump-public{color:#000000}.phpdebugbar pre.sf-dump .sf-dump-protected{color:#000000}.phpdebugbar pre.sf-dump .sf-dump-private{color:#000000}.phpdebugbar pre.sf-dump .sf-dump-meta{color:#B729D9}.phpdebugbar pre.sf-dump .sf-dump-key{color:#3A9B26}.phpdebugbar pre.sf-dump .sf-dump-index{color:#1299DA}.phpdebugbar pre.sf-dump .sf-dump-ellipsis{color:#A0A000}.phpdebugbar pre.sf-dump .sf-dump-ns{user-select:none;}.phpdebugbar pre.sf-dump .sf-dump-ellipsis-note{color:#1299DA}</style>
</head>
<body
>
<header id="main-header" class="">

    <div class="main-header bg-success">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <nav class="navbar navbar-expand-lg navbar-light p-0">


                        <a href="#" class="navbar-toggler c-toggler" data-toggle="collapse"
                           data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                           aria-expanded="false" aria-label="Toggle navigation">
                            <div class="navbar-toggler-icon" data-toggle="collapse">
                                <span class="navbar-menu-icon navbar-menu-icon--top"></span>
                                <span class="navbar-menu-icon navbar-menu-icon--middle"></span>
                                <span class="navbar-menu-icon navbar-menu-icon--bottom"></span>
                            </div>
                        </a>

                        <a class="navbar-brand" href="http://localhost:8000">
                        </a>


                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <div class="menu-main-menu-container">
                                <ul id="top-menu" class="navbar-nav ml-auto">
                                    <li class="menu-item">
                                        <a href="http://localhost:8000">Home</a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="http://localhost:8000/videos">Videos</a>
                                    </li>

                                    <li class="menu-item">
                                        <a href="http://localhost:8000/stories">Stories</a>
                                    </li>
                                </ul>
                            </div>
                        </div>



                        <div class="navbar-right menu-right">
                            <ul class="d-flex align-items-center list-inline m-0 ">
                                <li class="nav-item nav-icon">
                                    <a href="#" class="iq-user-dropdown search-toggle p-0 d-flex align-items-center"
                                       data-toggle="search-toggle">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"  class=" text-white " width="30px" height="30px">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z" />
                                        </svg>
                                    </a>
                                    <div class="iq-sub-dropdown iq-user-dropdown">
                                        <div class="iq-card shadow-none m-0">


                                            <div class="iq-card-body p-0 pl-3 pr-3">
                                                <a href="http://localhost:8000/login" class="iq-sub-card setting-dropdown">
                                                    Login
                                                </a>


                                            </div>

                                        </div>
                                    </div>
                                </li>

                            </ul>
                        </div>




                        <div class="mobile-more-menu">
                            <a href="javascript:void(0);" class="more-toggle" id="dropdownMenuButton"
                               data-toggle="more-toggle" aria-haspopup="true" aria-expanded="false">
                                <i class="ri-more-line"></i>
                            </a>
                            <div class="more-menu right-0" aria-labelledby="dropdownMenuButton">
                                <ul class=" list-styled m-1">
                                    <li class="text-right"><a>Login</a></li>

                                </ul>
                            </div>
                        </div>


                    </nav>
                    <div class="nav-overlay"></div>
                </div>
            </div>
        </div>
    </div>
</header>


<div wire:id="null" wire:initial-data="{&quot;fingerprint&quot;:{&quot;id&quot;:null,&quot;name&quot;:&quot;mintreu.pages.index-page&quot;,&quot;locale&quot;:&quot;en&quot;,&quot;path&quot;:&quot;\/&quot;,&quot;method&quot;:&quot;GET&quot;,&quot;v&quot;:&quot;acj&quot;},&quot;effects&quot;:{&quot;listeners&quot;:[]},&quot;serverMemo&quot;:{&quot;children&quot;:[],&quot;errors&quot;:[],&quot;htmlHash&quot;:&quot;66453e53&quot;,&quot;data&quot;:[],&quot;dataMeta&quot;:[],&quot;checksum&quot;:&quot;5367843817cc28f530effe23962e679575a0bb63ea660e3849081b4c2e8aa24b&quot;}}" class="col-12">

    <!-- Slider Start -->
    <section id="home" class="iq-main-slider p-0 mb-2">
        <div id="home-slider" class="slider m-0 p-0">
            <div class="slide slick-bg s-bg-1 ">
                <div class="container-fluid position-relative h-100" >
                    <div class="slider-inner h-100" >
                        <div class="row align-items-center h-100"  >
                            <div class="col-xl-6 col-lg-12 col-md-12 "  >






                                <h1 class="d-none d-md-block  title text-uppercase text-white" data-animation-in="fadeInLeft"  data-delay-in="0.6">Pushpa: Saami Saami - Full Video Song | Allu Arjun, Rashmika Mandanna | Sunidhi C | DSP | Sukumar</h1>
                                <h3 class="d-none d-sm-block d-md-none  title text-uppercase text-white" data-animation-in="fadeInLeft"  data-delay-in="0.6">Pushpa: Saami Saami - Full Video Song | Allu Arjun, Rashmika Mandanna | Sunidhi C | DSP | Sukumar</h3>
                                <small class="d-xs-block d-sm-none  title text-uppercase text-white" data-animation-in="fadeInLeft"  data-delay-in="0.6">Pushpa: Saami Saami - Full Video Song | Allu Arjun, Rashmika Mandanna | Sunidhi C | DSP | Sukumar</small>
                                <div class="d-flex align-items-center" data-animation-in="fadeInUp" data-delay-in="1"> </div>
                                <p data-animation-in="fadeInUp" data-delay-in="1.2" class="text-truncate"></p>
                                <div class="d-flex align-items-center r-mb-23" data-animation-in="fadeInUp" data-delay-in="1.2">
                                    <a href="http://localhost:8000/video/vdY5SFZBgnk" class="btn btn-hover"><i class="fa fa-play mr-2"
                                                                                                               aria-hidden="true"></i>Play Now</a>
                                    <a href="http://localhost:8000/video/vdY5SFZBgnk" class="btn btn-link">More details</a>
                                </div>
                            </div>
                        </div>

                    </div>


                </div>
            </div>
            <div class="slide slick-bg s-bg-1 ">
                <div class="container-fluid position-relative h-100" >
                    <div class="slider-inner h-100" >
                        <div class="row align-items-center h-100"  >
                            <div class="col-xl-6 col-lg-12 col-md-12 "  >






                                <h1 class="d-none d-md-block  title text-uppercase text-white" data-animation-in="fadeInLeft"  data-delay-in="0.6">Valley Of The Lanterns | Full Movie | Family Fantasy Adventure Animation Movie | Family Central</h1>
                                <h3 class="d-none d-sm-block d-md-none  title text-uppercase text-white" data-animation-in="fadeInLeft"  data-delay-in="0.6">Valley Of The Lanterns | Full Movie | Family Fantasy Adventure Animation Movie | Family Central</h3>
                                <small class="d-xs-block d-sm-none  title text-uppercase text-white" data-animation-in="fadeInLeft"  data-delay-in="0.6">Valley Of The Lanterns | Full Movie | Family Fantasy Adventure Animation Movie | Family Central</small>
                                <div class="d-flex align-items-center" data-animation-in="fadeInUp" data-delay-in="1"> </div>
                                <p data-animation-in="fadeInUp" data-delay-in="1.2" class="text-truncate"></p>
                                <div class="d-flex align-items-center r-mb-23" data-animation-in="fadeInUp" data-delay-in="1.2">
                                    <a href="http://localhost:8000/video/UTAvGzCK6ok" class="btn btn-hover"><i class="fa fa-play mr-2"
                                                                                                               aria-hidden="true"></i>Play Now</a>
                                    <a href="http://localhost:8000/video/UTAvGzCK6ok" class="btn btn-link">More details</a>
                                </div>
                            </div>
                        </div>

                    </div>


                </div>
            </div>
            <div class="slide slick-bg s-bg-1 ">
                <div class="container-fluid position-relative h-100" >
                    <div class="slider-inner h-100" >
                        <div class="row align-items-center h-100"  >
                            <div class="col-xl-6 col-lg-12 col-md-12 "  >






                                <h1 class="d-none d-md-block  title text-uppercase text-white" data-animation-in="fadeInLeft"  data-delay-in="0.6">HOPE (2020)</h1>
                                <h3 class="d-none d-sm-block d-md-none  title text-uppercase text-white" data-animation-in="fadeInLeft"  data-delay-in="0.6">HOPE (2020)</h3>
                                <small class="d-xs-block d-sm-none  title text-uppercase text-white" data-animation-in="fadeInLeft"  data-delay-in="0.6">HOPE (2020)</small>
                                <div class="d-flex align-items-center" data-animation-in="fadeInUp" data-delay-in="1"> </div>
                                <p data-animation-in="fadeInUp" data-delay-in="1.2" class="text-truncate"></p>
                                <div class="d-flex align-items-center r-mb-23" data-animation-in="fadeInUp" data-delay-in="1.2">
                                    <a href="http://localhost:8000/video/1P3ZgLOy-w8" class="btn btn-hover"><i class="fa fa-play mr-2"
                                                                                                               aria-hidden="true"></i>Play Now</a>
                                    <a href="http://localhost:8000/video/1P3ZgLOy-w8" class="btn btn-link">More details</a>
                                </div>
                            </div>
                        </div>

                    </div>


                </div>
            </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
            <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 44 44" width="44px" height="44px" id="circle"
                    fill="none" stroke="currentColor">
                <circle r="20" cy="22" cx="22" id="test"></circle>
            </symbol>
        </svg>
    </section>
    <!-- Slider End -->


</div>




<div class="col-12">

    <!-- Slider Start -->
    <section id="home" class="iq-main-slider p-0 mb-2">
        <div id="home-slider" class="slider m-0 p-0">
            <div class="slide slick-bg s-bg-1 ">
                <div class="container-fluid position-relative h-100" >
                    <div class="slider-inner h-100" >
                        <div class="row align-items-center h-100"  >
                            <div class="col-xl-6 col-lg-12 col-md-12 "  >






                                <h1 class="d-none d-md-block  title text-uppercase text-white" data-animation-in="fadeInLeft"  data-delay-in="0.6">Mr. Majnu (2020) New Released Hindi Dubbed Full Movie | Akhil Akkineni, Nidhhi Agerwal, Rao Ramesh</h1>
                                <h3 class="d-none d-sm-block d-md-none  title text-uppercase text-white" data-animation-in="fadeInLeft"  data-delay-in="0.6">Mr. Majnu (2020) New Released Hindi Dubbed Full Movie | Akhil Akkineni, Nidhhi Agerwal, Rao Ramesh</h3>
                                <small class="d-xs-block d-sm-none  title text-uppercase text-white" data-animation-in="fadeInLeft"  data-delay-in="0.6">Mr. Majnu (2020) New Released Hindi Dubbed Full Movie | Akhil Akkineni, Nidhhi Agerwal, Rao Ramesh</small>
                                <div class="d-flex align-items-center" data-animation-in="fadeInUp" data-delay-in="1"> </div>
                                <p data-animation-in="fadeInUp" data-delay-in="1.2" class="text-truncate"></p>
                                <div class="d-flex align-items-center r-mb-23" data-animation-in="fadeInUp" data-delay-in="1.2">
                                    <a href="http://localhost:8000/video/zR52MgYhm_Q" class="btn btn-hover"><i class="fa fa-play mr-2"
                                                                                                               aria-hidden="true"></i>Play Now</a>
                                    <a href="http://localhost:8000/video/zR52MgYhm_Q" class="btn btn-link">More details</a>
                                </div>
                            </div>
                        </div>

                    </div>


                </div>
            </div>
            <div class="slide slick-bg s-bg-1 ">
                <div class="container-fluid position-relative h-100" >
                    <div class="slider-inner h-100" >
                        <div class="row align-items-center h-100"  >
                            <div class="col-xl-6 col-lg-12 col-md-12 "  >






                                <h1 class="d-none d-md-block  title text-uppercase text-white" data-animation-in="fadeInLeft"  data-delay-in="0.6">Valley Of The Lanterns | Full Movie | Family Fantasy Adventure Animation Movie | Family Central</h1>
                                <h3 class="d-none d-sm-block d-md-none  title text-uppercase text-white" data-animation-in="fadeInLeft"  data-delay-in="0.6">Valley Of The Lanterns | Full Movie | Family Fantasy Adventure Animation Movie | Family Central</h3>
                                <small class="d-xs-block d-sm-none  title text-uppercase text-white" data-animation-in="fadeInLeft"  data-delay-in="0.6">Valley Of The Lanterns | Full Movie | Family Fantasy Adventure Animation Movie | Family Central</small>
                                <div class="d-flex align-items-center" data-animation-in="fadeInUp" data-delay-in="1"> </div>
                                <p data-animation-in="fadeInUp" data-delay-in="1.2" class="text-truncate"></p>
                                <div class="d-flex align-items-center r-mb-23" data-animation-in="fadeInUp" data-delay-in="1.2">
                                    <a href="http://localhost:8000/video/UTAvGzCK6ok" class="btn btn-hover"><i class="fa fa-play mr-2"
                                                                                                               aria-hidden="true"></i>Play Now</a>
                                    <a href="http://localhost:8000/video/UTAvGzCK6ok" class="btn btn-link">More details</a>
                                </div>
                            </div>
                        </div>

                    </div>


                </div>
            </div>
            <div class="slide slick-bg s-bg-1 ">
                <div class="container-fluid position-relative h-100" >
                    <div class="slider-inner h-100" >
                        <div class="row align-items-center h-100"  >
                            <div class="col-xl-6 col-lg-12 col-md-12 "  >






                                <h1 class="d-none d-md-block  title text-uppercase text-white" data-animation-in="fadeInLeft"  data-delay-in="0.6">HOPE (2020)</h1>
                                <h3 class="d-none d-sm-block d-md-none  title text-uppercase text-white" data-animation-in="fadeInLeft"  data-delay-in="0.6">HOPE (2020)</h3>
                                <small class="d-xs-block d-sm-none  title text-uppercase text-white" data-animation-in="fadeInLeft"  data-delay-in="0.6">HOPE (2020)</small>
                                <div class="d-flex align-items-center" data-animation-in="fadeInUp" data-delay-in="1"> </div>
                                <p data-animation-in="fadeInUp" data-delay-in="1.2" class="text-truncate"></p>
                                <div class="d-flex align-items-center r-mb-23" data-animation-in="fadeInUp" data-delay-in="1.2">
                                    <a href="http://localhost:8000/video/1P3ZgLOy-w8" class="btn btn-hover"><i class="fa fa-play mr-2"
                                                                                                               aria-hidden="true"></i>Play Now</a>
                                    <a href="http://localhost:8000/video/1P3ZgLOy-w8" class="btn btn-link">More details</a>
                                </div>
                            </div>
                        </div>

                    </div>


                </div>
            </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
            <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 44 44" width="44px" height="44px" id="circle"
                    fill="none" stroke="currentColor">
                <circle r="20" cy="22" cx="22" id="test"></circle>
            </symbol>
        </svg>
    </section>
    <!-- Slider End -->


</div>





















































<!-- Livewire Component wire-end: -->
<div class="">



    <footer class="text-center fixed-bottom m-0 align-items-center py-2 d-sm-block d-md-none" style="background-color: black; width: 100%">
        <a class="text-white  float-left ml-3 mt-2" href="http://localhost:8000/videos"><i class="fas fa-play fa-2x"></i></a>
        <a class="text-white " href="http://localhost:8000"> <i class="fa fa-home fa-3x"></i> </a>
        <a class="text-white float-right mr-3 mt-2" href="http://localhost:8000/stories"><i class="fas fa-book-open fa-2x"></i></a>

    </footer>


    <footer class="fixed-bottom">

        <div class="row">
            <div class="col-4">

            </div>

            <div class="col-4">

            </div>

            <div class="col-4">

            </div>

        </div>

        <div class="copyright py-2">
            <div class="container-fluid">
                <p class="mb-0 text-center font-size-14 text-body">CMS - 2023 All Rights Reserved |  <i class="text-white">Powered By <a href="https://mintreu.com">Mintreu Services</a></i></p>
            </div>
        </div>
    </footer>











































































    <!-- MainContent End-->
    <!-- back-to-top -->
    <div id="back-to-top">
        <a class="top" href="#top" id="top"> <i class="fa fa-angle-up"></i> </a>
    </div>






</div>
<!-- Scripts -->
<!-- Livewire Scripts -->

<script src="/livewire/livewire.js?id=de3fca26689cb5a39af4" data-turbo-eval="false" data-turbolinks-eval="false" ></script>
<script data-turbo-eval="false" data-turbolinks-eval="false" >
    if (window.livewire) {
        console.warn('Livewire: It looks like Livewire\'s @livewireScripts JavaScript assets have already been loaded. Make sure you aren\'t loading them twice.')
    }

    window.livewire = new Livewire();
    window.livewire.devTools(true);
    window.Livewire = window.livewire;
    window.livewire_app_url = '';
    window.livewire_token = 'iP8Ef1QPdXXR40KT4PxSkK7NohbyssSttLnHyxHY';

    /* Make sure Livewire loads first. */
    if (window.Alpine) {
        /* Defer showing the warning so it doesn't get buried under downstream errors. */
        document.addEventListener("DOMContentLoaded", function () {
            setTimeout(function() {
                console.warn("Livewire: It looks like AlpineJS has already been loaded. Make sure Livewire\'s scripts are loaded before Alpine.\\n\\n Reference docs for more info: http://laravel-livewire.com/docs/alpine-js")
            })
        });
    }

    /* Make Alpine wait until Livewire is finished rendering to do its thing. */
    window.deferLoadingAlpine = function (callback) {
        window.addEventListener('livewire:load', function () {
            callback();
        });
    };

    let started = false;

    window.addEventListener('alpine:initializing', function () {
        if (! started) {
            window.livewire.start();

            started = true;
        }
    });

    document.addEventListener("DOMContentLoaded", function () {
        if (! started) {
            window.livewire.start();

            started = true;
        }
    });
</script>
<script src="https://cdn.jsdelivr.net/gh/livewire/turbolinks@v0.1.x/dist/livewire-turbolinks.js"
        data-turbolinks-eval="false" data-turbo-eval="false"></script>
<!-- jQuery v3.5.x and Bootstrap v4.6.x Bundle (includes Popper) -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
<!-- jQuery, Popper JS -->







<!-- Slick JS -->
<script src="http://localhost:8000/vendor/theme/streamit/js/slick.min.js"></script>
<!-- owl carousel Js -->
<script src="http://localhost:8000/vendor/theme/streamit/js/owl.carousel.min.js"></script>
<!-- select2 Js -->
<script src="http://localhost:8000/vendor/theme/streamit/js/select2.min.js"></script>
<!-- Magnific Popup-->
<script src="http://localhost:8000/vendor/theme/streamit/js/jquery.magnific-popup.min.js"></script>
<!-- Slick Animation-->
<script src="http://localhost:8000/vendor/theme/streamit/js/slick-animation.min.js"></script>
<!-- Custom JS-->
<script src="http://localhost:8000/vendor/theme/streamit/js/custom.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js" integrity="sha512-Tn2m0TIpgVyTzzvmxLNuqbSJH3JP8jm+Cy3hvHrW7ndTDcJ1w5mBiksqDBb8GpE2ksktFvDB/ykZ0mDpsZj20w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script type="text/javascript">
    var phpdebugbar = new PhpDebugBar.DebugBar();
    phpdebugbar.addIndicator("php_version", new PhpDebugBar.DebugBar.Indicator({"icon":"code","tooltip":"PHP Version"}), "right");
    phpdebugbar.addTab("messages", new PhpDebugBar.DebugBar.Tab({"icon":"list-alt","title":"Messages", "widget": new PhpDebugBar.Widgets.MessagesWidget()}));
    phpdebugbar.addIndicator("time", new PhpDebugBar.DebugBar.Indicator({"icon":"clock-o","tooltip":"Request Duration"}), "right");
    phpdebugbar.addTab("timeline", new PhpDebugBar.DebugBar.Tab({"icon":"tasks","title":"Timeline", "widget": new PhpDebugBar.Widgets.TimelineWidget()}));
    phpdebugbar.addIndicator("memory", new PhpDebugBar.DebugBar.Indicator({"icon":"cogs","tooltip":"Memory Usage"}), "right");
    phpdebugbar.addTab("exceptions", new PhpDebugBar.DebugBar.Tab({"icon":"bug","title":"Exceptions", "widget": new PhpDebugBar.Widgets.ExceptionsWidget()}));
    phpdebugbar.addTab("views", new PhpDebugBar.DebugBar.Tab({"icon":"leaf","title":"Views", "widget": new PhpDebugBar.Widgets.TemplatesWidget()}));
    phpdebugbar.addTab("route", new PhpDebugBar.DebugBar.Tab({"icon":"share","title":"Route", "widget": new PhpDebugBar.Widgets.HtmlVariableListWidget()}));
    phpdebugbar.addIndicator("currentroute", new PhpDebugBar.DebugBar.Indicator({"icon":"share","tooltip":"Route"}), "right");
    phpdebugbar.addTab("queries", new PhpDebugBar.DebugBar.Tab({"icon":"database","title":"Queries", "widget": new PhpDebugBar.Widgets.LaravelSQLQueriesWidget()}));
    phpdebugbar.addTab("models", new PhpDebugBar.DebugBar.Tab({"icon":"cubes","title":"Models", "widget": new PhpDebugBar.Widgets.HtmlVariableListWidget()}));
    phpdebugbar.addTab("livewire", new PhpDebugBar.DebugBar.Tab({"icon":"bolt","title":"Livewire", "widget": new PhpDebugBar.Widgets.VariableListWidget()}));
    phpdebugbar.addTab("gate", new PhpDebugBar.DebugBar.Tab({"icon":"list-alt","title":"Gate", "widget": new PhpDebugBar.Widgets.MessagesWidget()}));
    phpdebugbar.addTab("session", new PhpDebugBar.DebugBar.Tab({"icon":"archive","title":"Session", "widget": new PhpDebugBar.Widgets.VariableListWidget()}));
    phpdebugbar.addTab("request", new PhpDebugBar.DebugBar.Tab({"icon":"tags","title":"Request", "widget": new PhpDebugBar.Widgets.HtmlVariableListWidget()}));
    phpdebugbar.setDataMap({
        "php_version": ["php.version", ],
        "messages": ["messages.messages", []],
        "messages:badge": ["messages.count", null],
        "time": ["time.duration_str", '0ms'],
        "timeline": ["time", {}],
        "memory": ["memory.peak_usage_str", '0B'],
        "exceptions": ["exceptions.exceptions", []],
        "exceptions:badge": ["exceptions.count", null],
        "views": ["views", []],
        "views:badge": ["views.nb_templates", 0],
        "route": ["route", {}],
        "currentroute": ["route.uri", ],
        "queries": ["queries", []],
        "queries:badge": ["queries.nb_statements", 0],
        "models": ["models.data", {}],
        "models:badge": ["models.count", 0],
        "livewire": ["livewire.data", {}],
        "livewire:badge": ["livewire.count", 0],
        "gate": ["gate.messages", []],
        "gate:badge": ["gate.count", null],
        "session": ["session", {}],
        "request": ["request", {}]
    });
    phpdebugbar.restoreState();
    phpdebugbar.ajaxHandler = new PhpDebugBar.AjaxHandler(phpdebugbar, undefined, true);
    phpdebugbar.ajaxHandler.bindToFetch();
    phpdebugbar.ajaxHandler.bindToXHR();
    phpdebugbar.setOpenHandler(new PhpDebugBar.OpenHandler({"url":"http:\/\/localhost:8000\/_debugbar\/open"}));
    phpdebugbar.addDataSet({"__meta":{"id":"X85c30c02c6af639e597105070f22512d","datetime":"2023-01-07 20:37:50","utime":1673123870.959436,"method":"GET","uri":"\/","ip":"127.0.0.1"},"php":{"version":"8.1.6","interface":"cli-server"},"messages":{"count":0,"messages":[]},"time":{"start":1673123868.822436,"end":1673123870.959458,"duration":2.137022018432617,"duration_str":"2.14s","measures":[{"label":"Booting","start":1673123868.822436,"relative_start":0,"end":1673123869.615612,"relative_end":1673123869.615612,"duration":0.7931759357452393,"duration_str":"793ms","params":[],"collector":null},{"label":"Application","start":1673123869.616576,"relative_start":0.7941398620605469,"end":1673123870.959462,"relative_end":3.814697265625e-6,"duration":1.342885971069336,"duration_str":"1.34s","params":[],"collector":null}]},"memory":{"peak_usage":29697704,"peak_usage_str":"28MB"},"exceptions":{"count":0,"exceptions":[]},"views":{"nb_templates":9,"templates":[{"name":"C:\\xampp\\htdocs\\Github\\Krishzzi\\video-cms\\vendor\\livewire\\livewire\\src\/Macros\/livewire-view-component.blade.php (\\vendor\\livewire\\livewire\\src\\Macros\\livewire-view-component.blade.php)","param_count":4,"params":["view","params","slotOrSection","manager"],"type":"blade"},{"name":"livewire.mintreu.pages.index-page (\\resources\\views\\livewire\\mintreu\\pages\\index-page.blade.php)","param_count":4,"params":["widgets","livewireLayout","errors","_instance"],"type":"blade"},{"name":"livewire.mintreu.widgets.full-width-slider (\\resources\\views\\livewire\\mintreu\\widgets\\full-width-slider.blade.php)","param_count":3,"params":["records","title","type"],"type":"blade"},{"name":"livewire.mintreu.widgets.full-width-slider (\\resources\\views\\livewire\\mintreu\\widgets\\full-width-slider.blade.php)","param_count":3,"params":["records","title","type"],"type":"blade"},{"name":"components.mintreu.themes.thirdparty.stream-it.stream-it (\\resources\\views\\components\\mintreu\\themes\\thirdparty\\stream-it\\stream-it.blade.php)","param_count":11,"params":["componentName","attributes","supportedWidgets","getSupportedWidgetsAttribute","resolve","flushCache","forgetFactory","forgetComponentsResolver","resolveComponentsUsing","slot","__laravel_slots"],"type":"blade"},{"name":"components.mintreu.themes.thirdparty.stream-it.blocks.header-block (\\resources\\views\\components\\mintreu\\themes\\thirdparty\\stream-it\\blocks\\header-block.blade.php)","param_count":10,"params":["showContent","componentName","attributes","resolve","flushCache","forgetFactory","forgetComponentsResolver","resolveComponentsUsing","slot","__laravel_slots"],"type":"blade"},{"name":"components.mintreu.themes.thirdparty.stream-it.blocks.footer-block (\\resources\\views\\components\\mintreu\\themes\\thirdparty\\stream-it\\blocks\\footer-block.blade.php)","param_count":10,"params":["showContent","componentName","attributes","resolve","flushCache","forgetFactory","forgetComponentsResolver","resolveComponentsUsing","slot","__laravel_slots"],"type":"blade"},{"name":"layout::layouts.themes.bootstrap (\\vendor\\mintreu\\laravel-layout\\resources\\views\\layouts\\themes\\bootstrap.blade.php)","param_count":18,"params":["title","keyword","description","favicon","favicon_type","support","componentName","attributes","resolve","flushCache","forgetFactory","forgetComponentsResolver","resolveComponentsUsing","resolveSupport","slot","style","script","__laravel_slots"],"type":"blade"},{"name":"layout::layouts.app (\\vendor\\mintreu\\laravel-layout\\resources\\views\\layouts\\app.blade.php)","param_count":21,"params":["title","keyword","description","favicon","favicon_type","support","componentName","attributes","resolve","flushCache","forgetFactory","forgetComponentsResolver","resolveComponentsUsing","resolveSupport","slot","meta","style","header","script","footer","__laravel_slots"],"type":"blade"}]},"route":{"uri":"GET \/","middleware":"web, App\\Http\\Middleware\\CheckApplicationMiddleware","uses":"App\\Http\\Livewire\\Mintreu\\Pages\\IndexPage@__invoke","controller":"App\\Http\\Livewire\\Mintreu\\Pages\\IndexPage","namespace":null,"prefix":"\/","where":[],"as":"home"},"queries":{"nb_statements":11,"nb_failed_statements":0,"accumulated_duration":0.010159999999999999,"accumulated_duration_str":"10.16ms","statements":[{"sql":"select * from `themes` where `is_active` = 1 limit 1","type":"query","params":[],"bindings":["1"],"hints":null,"show_copy":false,"backtrace":[{"index":19,"namespace":null,"name":"\\app\\Http\\Livewire\\Mintreu\\Pages\\Page.php","line":27},{"index":21,"namespace":null,"name":"\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php","line":915},{"index":22,"namespace":null,"name":"\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php","line":756},{"index":23,"namespace":null,"name":"\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Application.php","line":860},{"index":24,"namespace":null,"name":"\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php","line":692}],"duration":0.00138,"duration_str":"1.38ms","stmt_id":"\\app\\Http\\Livewire\\Mintreu\\Pages\\Page.php:27","connection":"cms","start_percent":0,"width_percent":13.583},{"sql":"select * from `theme_pages` where `theme_pages`.`theme_id` = 1 and `theme_pages`.`theme_id` is not null and `type` = 'index_page' limit 1","type":"query","params":[],"bindings":["1","index_page"],"hints":null,"show_copy":false,"backtrace":[{"index":19,"namespace":null,"name":"\\app\\Http\\Livewire\\Mintreu\\Pages\\Page.php","line":30},{"index":21,"namespace":null,"name":"\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php","line":915},{"index":22,"namespace":null,"name":"\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php","line":756},{"index":23,"namespace":null,"name":"\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Application.php","line":860},{"index":24,"namespace":null,"name":"\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php","line":692}],"duration":0.00091,"duration_str":"910\u03bcs","stmt_id":"\\app\\Http\\Livewire\\Mintreu\\Pages\\Page.php:30","connection":"cms","start_percent":13.583,"width_percent":8.957},{"sql":"select * from `widgets` where `widgets`.`theme_page_id` = 1 and `widgets`.`theme_page_id` is not null and `status` = 1 order by `priority` asc","type":"query","params":[],"bindings":["1","1"],"hints":null,"show_copy":false,"backtrace":[{"index":15,"namespace":null,"name":"\\app\\Http\\Livewire\\Mintreu\\Pages\\Page.php","line":34},{"index":17,"namespace":null,"name":"\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php","line":915},{"index":18,"namespace":null,"name":"\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php","line":756},{"index":19,"namespace":null,"name":"\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Application.php","line":860},{"index":20,"namespace":null,"name":"\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php","line":692}],"duration":0.00098,"duration_str":"980\u03bcs","stmt_id":"\\app\\Http\\Livewire\\Mintreu\\Pages\\Page.php:34","connection":"cms","start_percent":22.539,"width_percent":9.646},{"sql":"select * from `videos` where `status` = 1 and `is_slider` = 1 order by `created_at` desc limit 12","type":"query","params":[],"bindings":["1","1"],"hints":null,"show_copy":false,"backtrace":[{"index":14,"namespace":null,"name":"\\app\\Http\\Livewire\\Mintreu\\Widgets\\FullWidthSlider.php","line":74},{"index":15,"namespace":null,"name":"\\app\\Http\\Livewire\\Mintreu\\Widgets\\FullWidthSlider.php","line":20},{"index":16,"namespace":null,"name":"\\app\\Http\\Livewire\\Mintreu\\Pages\\Page.php","line":51},{"index":17,"namespace":null,"name":"\\app\\Http\\Livewire\\Mintreu\\Pages\\Page.php","line":35},{"index":19,"namespace":null,"name":"\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php","line":915}],"duration":0.0009,"duration_str":"900\u03bcs","stmt_id":"\\app\\Http\\Livewire\\Mintreu\\Widgets\\FullWidthSlider.php:74","connection":"cms","start_percent":32.185,"width_percent":8.858},{"sql":"select * from `videos` where `status` = 1 and `is_upcoming` = 1 order by `created_at` desc limit 12","type":"query","params":[],"bindings":["1","1"],"hints":null,"show_copy":false,"backtrace":[{"index":14,"namespace":null,"name":"\\app\\Http\\Livewire\\Mintreu\\Widgets\\FullWidthSlider.php","line":74},{"index":15,"namespace":null,"name":"\\app\\Http\\Livewire\\Mintreu\\Widgets\\FullWidthSlider.php","line":20},{"index":16,"namespace":null,"name":"\\app\\Http\\Livewire\\Mintreu\\Pages\\Page.php","line":51},{"index":17,"namespace":null,"name":"\\app\\Http\\Livewire\\Mintreu\\Pages\\Page.php","line":35},{"index":19,"namespace":null,"name":"\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php","line":915}],"duration":0.00091,"duration_str":"910\u03bcs","stmt_id":"\\app\\Http\\Livewire\\Mintreu\\Widgets\\FullWidthSlider.php:74","connection":"cms","start_percent":41.043,"width_percent":8.957},{"sql":"select * from `themes` where `is_active` = 1 limit 1","type":"query","params":[],"bindings":["1"],"hints":null,"show_copy":false,"backtrace":[{"index":19,"namespace":null,"name":"\\app\\Http\\Livewire\\Mintreu\\Pages\\Page.php","line":27},{"index":20,"namespace":null,"name":"\\vendor\\livewire\\livewire\\src\\Component.php","line":50},{"index":21,"namespace":null,"name":"\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\ControllerDispatcher.php","line":46},{"index":22,"namespace":null,"name":"\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Route.php","line":260},{"index":23,"namespace":null,"name":"\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Route.php","line":205}],"duration":0.00073,"duration_str":"730\u03bcs","stmt_id":"\\app\\Http\\Livewire\\Mintreu\\Pages\\Page.php:27","connection":"cms","start_percent":50,"width_percent":7.185},{"sql":"select * from `theme_pages` where `theme_pages`.`theme_id` = 1 and `theme_pages`.`theme_id` is not null and `type` = 'index_page' limit 1","type":"query","params":[],"bindings":["1","index_page"],"hints":null,"show_copy":false,"backtrace":[{"index":19,"namespace":null,"name":"\\app\\Http\\Livewire\\Mintreu\\Pages\\Page.php","line":30},{"index":20,"namespace":null,"name":"\\vendor\\livewire\\livewire\\src\\Component.php","line":50},{"index":21,"namespace":null,"name":"\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\ControllerDispatcher.php","line":46},{"index":22,"namespace":null,"name":"\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Route.php","line":260},{"index":23,"namespace":null,"name":"\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Route.php","line":205}],"duration":0.00074,"duration_str":"740\u03bcs","stmt_id":"\\app\\Http\\Livewire\\Mintreu\\Pages\\Page.php:30","connection":"cms","start_percent":57.185,"width_percent":7.283},{"sql":"select * from `widgets` where `widgets`.`theme_page_id` = 1 and `widgets`.`theme_page_id` is not null and `status` = 1 order by `priority` asc","type":"query","params":[],"bindings":["1","1"],"hints":null,"show_copy":false,"backtrace":[{"index":15,"namespace":null,"name":"\\app\\Http\\Livewire\\Mintreu\\Pages\\Page.php","line":34},{"index":16,"namespace":null,"name":"\\vendor\\livewire\\livewire\\src\\Component.php","line":50},{"index":17,"namespace":null,"name":"\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\ControllerDispatcher.php","line":46},{"index":18,"namespace":null,"name":"\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Route.php","line":260},{"index":19,"namespace":null,"name":"\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Route.php","line":205}],"duration":0.00086,"duration_str":"860\u03bcs","stmt_id":"\\app\\Http\\Livewire\\Mintreu\\Pages\\Page.php:34","connection":"cms","start_percent":64.469,"width_percent":8.465},{"sql":"select * from `videos` where `status` = 1 and `is_slider` = 1 order by `created_at` desc limit 12","type":"query","params":[],"bindings":["1","1"],"hints":null,"show_copy":false,"backtrace":[{"index":14,"namespace":null,"name":"\\app\\Http\\Livewire\\Mintreu\\Widgets\\FullWidthSlider.php","line":74},{"index":15,"namespace":null,"name":"\\app\\Http\\Livewire\\Mintreu\\Widgets\\FullWidthSlider.php","line":20},{"index":16,"namespace":null,"name":"\\app\\Http\\Livewire\\Mintreu\\Pages\\Page.php","line":51},{"index":17,"namespace":null,"name":"\\app\\Http\\Livewire\\Mintreu\\Pages\\Page.php","line":35},{"index":18,"namespace":null,"name":"\\vendor\\livewire\\livewire\\src\\Component.php","line":50}],"duration":0.00088,"duration_str":"880\u03bcs","stmt_id":"\\app\\Http\\Livewire\\Mintreu\\Widgets\\FullWidthSlider.php:74","connection":"cms","start_percent":72.933,"width_percent":8.661},{"sql":"select * from `videos` where `status` = 1 and `is_upcoming` = 1 order by `created_at` desc limit 12","type":"query","params":[],"bindings":["1","1"],"hints":null,"show_copy":false,"backtrace":[{"index":14,"namespace":null,"name":"\\app\\Http\\Livewire\\Mintreu\\Widgets\\FullWidthSlider.php","line":74},{"index":15,"namespace":null,"name":"\\app\\Http\\Livewire\\Mintreu\\Widgets\\FullWidthSlider.php","line":20},{"index":16,"namespace":null,"name":"\\app\\Http\\Livewire\\Mintreu\\Pages\\Page.php","line":51},{"index":17,"namespace":null,"name":"\\app\\Http\\Livewire\\Mintreu\\Pages\\Page.php","line":35},{"index":18,"namespace":null,"name":"\\vendor\\livewire\\livewire\\src\\Component.php","line":50}],"duration":0.00083,"duration_str":"830\u03bcs","stmt_id":"\\app\\Http\\Livewire\\Mintreu\\Widgets\\FullWidthSlider.php:74","connection":"cms","start_percent":81.594,"width_percent":8.169},{"sql":"select * from `users` where `id` = 1 limit 1","type":"query","params":[],"bindings":["1"],"hints":null,"show_copy":false,"backtrace":[{"index":15,"namespace":null,"name":"\\vendor\\laravel\\framework\\src\\Illuminate\\Auth\\EloquentUserProvider.php","line":59},{"index":16,"namespace":null,"name":"\\vendor\\laravel\\framework\\src\\Illuminate\\Auth\\SessionGuard.php","line":159},{"index":17,"namespace":null,"name":"\\vendor\\laravel\\framework\\src\\Illuminate\\Auth\\GuardHelpers.php","line":60},{"index":18,"namespace":"view","name":"4a9b4e381a792ef9e4f4fdce23386165827a09fc","line":64},{"index":20,"namespace":null,"name":"\\vendor\\laravel\\framework\\src\\Illuminate\\Filesystem\\Filesystem.php","line":110}],"duration":0.0010400000000000001,"duration_str":"1.04ms","stmt_id":"\\vendor\\laravel\\framework\\src\\Illuminate\\Auth\\EloquentUserProvider.php:59","connection":"cms","start_percent":89.764,"width_percent":10.236}]},"models":{"data":{"App\\Models\\User":1,"App\\Models\\Video":12,"App\\Models\\System\\Theme\\Widget":4,"App\\Models\\System\\Theme\\ThemePage":2,"App\\Models\\System\\Theme\\Theme":2},"count":21},"livewire":{"data":{"mintreu.pages.index-page #":"array:7 [\n  \"data\" => []\n  \"oldData\" => null\n  \"actionQueue\" => null\n  \"name\" => \"mintreu.pages.index-page\"\n  \"view\" => \"livewire.mintreu.pages.index-page\"\n  \"component\" => \"App\\Http\\Livewire\\Mintreu\\Pages\\IndexPage\"\n  \"id\" => null\n]"},"count":1},"gate":{"count":0,"messages":[]},"session":{"url":"[]","_previous":"array:1 [\n  \"url\" => \"http:\/\/localhost:8000\"\n]","_flash":"array:2 [\n  \"old\" => []\n  \"new\" => []\n]","_token":"iP8Ef1QPdXXR40KT4PxSkK7NohbyssSttLnHyxHY","login_web_59ba36addc2b2f9401580f014c7f58ea4e30989d":"1","password_hash_web":"$2y$10$QY7TB.5QnkZO7IJM9JjXz.BIX9ky2WhmR8gEWdWJOBKnPZduyLV7m","filament":"[]","tables":"array:1 [\n  \"ListVideos_toggled_columns\" => array:11 [\n    \"thumbnail\" => true\n    \"display\" => false\n    \"title\" => true\n    \"slug\" => false\n    \"activity_count\" => false\n    \"comments_count\" => false\n    \"is_slider\" => true\n    \"is_suggestion\" => true\n    \"is_upcoming\" => true\n    \"priority\" => true\n    \"updated_at\" => true\n  ]\n]","PHPDEBUGBAR_STACK_DATA":"[]"},"request":{"path_info":"\/","status_code":"<pre class=sf-dump id=sf-dump-591896354 data-indent-pad=\"  \"><span class=sf-dump-num>200<\/span>\n<\/pre><script>Sfdump(\"sf-dump-591896354\", {\"maxDepth\":0})<\/script>\n","status_text":"OK","format":"html","content_type":"text\/html; charset=UTF-8","request_query":"<pre class=sf-dump id=sf-dump-1366329727 data-indent-pad=\"  \">[]\n<\/pre><script>Sfdump(\"sf-dump-1366329727\", {\"maxDepth\":0})<\/script>\n","request_request":"<pre class=sf-dump id=sf-dump-1756256280 data-indent-pad=\"  \">[]\n<\/pre><script>Sfdump(\"sf-dump-1756256280\", {\"maxDepth\":0})<\/script>\n","request_headers":"<pre class=sf-dump id=sf-dump-403047756 data-indent-pad=\"  \"><span class=sf-dump-note>array:16<\/span> [<samp data-depth=1 class=sf-dump-expanded>\n  \"<span class=sf-dump-key>host<\/span>\" => <span class=sf-dump-note>array:1<\/span> [<samp data-depth=2 class=sf-dump-compact>\n    <span class=sf-dump-index>0<\/span> => \"<span class=sf-dump-str title=\"14 characters\">localhost:8000<\/span>\"\n  <\/samp>]\n  \"<span class=sf-dump-key>connection<\/span>\" => <span class=sf-dump-note>array:1<\/span> [<samp data-depth=2 class=sf-dump-compact>\n    <span class=sf-dump-index>0<\/span> => \"<span class=sf-dump-str title=\"10 characters\">keep-alive<\/span>\"\n  <\/samp>]\n  \"<span class=sf-dump-key>cache-control<\/span>\" => <span class=sf-dump-note>array:1<\/span> [<samp data-depth=2 class=sf-dump-compact>\n    <span class=sf-dump-index>0<\/span> => \"<span class=sf-dump-str title=\"9 characters\">max-age=0<\/span>\"\n  <\/samp>]\n  \"<span class=sf-dump-key>sec-ch-ua<\/span>\" => <span class=sf-dump-note>array:1<\/span> [<samp data-depth=2 class=sf-dump-compact>\n    <span class=sf-dump-index>0<\/span> => \"<span class=sf-dump-str title=\"64 characters\">&quot;Not?A_Brand&quot;;v=&quot;8&quot;, &quot;Chromium&quot;;v=&quot;108&quot;, &quot;Google Chrome&quot;;v=&quot;108&quot;<\/span>\"\n  <\/samp>]\n  \"<span class=sf-dump-key>sec-ch-ua-mobile<\/span>\" => <span class=sf-dump-note>array:1<\/span> [<samp data-depth=2 class=sf-dump-compact>\n    <span class=sf-dump-index>0<\/span> => \"<span class=sf-dump-str title=\"2 characters\">?0<\/span>\"\n  <\/samp>]\n  \"<span class=sf-dump-key>sec-ch-ua-platform<\/span>\" => <span class=sf-dump-note>array:1<\/span> [<samp data-depth=2 class=sf-dump-compact>\n    <span class=sf-dump-index>0<\/span> => \"<span class=sf-dump-str title=\"9 characters\">&quot;Windows&quot;<\/span>\"\n  <\/samp>]\n  \"<span class=sf-dump-key>upgrade-insecure-requests<\/span>\" => <span class=sf-dump-note>array:1<\/span> [<samp data-depth=2 class=sf-dump-compact>\n    <span class=sf-dump-index>0<\/span> => \"<span class=sf-dump-str>1<\/span>\"\n  <\/samp>]\n  \"<span class=sf-dump-key>user-agent<\/span>\" => <span class=sf-dump-note>array:1<\/span> [<samp data-depth=2 class=sf-dump-compact>\n    <span class=sf-dump-index>0<\/span> => \"<span class=sf-dump-str title=\"111 characters\">Mozilla\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\/537.36 (KHTML, like Gecko) Chrome\/108.0.0.0 Safari\/537.36<\/span>\"\n  <\/samp>]\n  \"<span class=sf-dump-key>accept<\/span>\" => <span class=sf-dump-note>array:1<\/span> [<samp data-depth=2 class=sf-dump-compact>\n    <span class=sf-dump-index>0<\/span> => \"<span class=sf-dump-str title=\"135 characters\">text\/html,application\/xhtml+xml,application\/xml;q=0.9,image\/avif,image\/webp,image\/apng,*\/*;q=0.8,application\/signed-exchange;v=b3;q=0.9<\/span>\"\n  <\/samp>]\n  \"<span class=sf-dump-key>sec-fetch-site<\/span>\" => <span class=sf-dump-note>array:1<\/span> [<samp data-depth=2 class=sf-dump-compact>\n    <span class=sf-dump-index>0<\/span> => \"<span class=sf-dump-str title=\"4 characters\">none<\/span>\"\n  <\/samp>]\n  \"<span class=sf-dump-key>sec-fetch-mode<\/span>\" => <span class=sf-dump-note>array:1<\/span> [<samp data-depth=2 class=sf-dump-compact>\n    <span class=sf-dump-index>0<\/span> => \"<span class=sf-dump-str title=\"8 characters\">navigate<\/span>\"\n  <\/samp>]\n  \"<span class=sf-dump-key>sec-fetch-user<\/span>\" => <span class=sf-dump-note>array:1<\/span> [<samp data-depth=2 class=sf-dump-compact>\n    <span class=sf-dump-index>0<\/span> => \"<span class=sf-dump-str title=\"2 characters\">?1<\/span>\"\n  <\/samp>]\n  \"<span class=sf-dump-key>sec-fetch-dest<\/span>\" => <span class=sf-dump-note>array:1<\/span> [<samp data-depth=2 class=sf-dump-compact>\n    <span class=sf-dump-index>0<\/span> => \"<span class=sf-dump-str title=\"8 characters\">document<\/span>\"\n  <\/samp>]\n  \"<span class=sf-dump-key>accept-encoding<\/span>\" => <span class=sf-dump-note>array:1<\/span> [<samp data-depth=2 class=sf-dump-compact>\n    <span class=sf-dump-index>0<\/span> => \"<span class=sf-dump-str title=\"17 characters\">gzip, deflate, br<\/span>\"\n  <\/samp>]\n  \"<span class=sf-dump-key>accept-language<\/span>\" => <span class=sf-dump-note>array:1<\/span> [<samp data-depth=2 class=sf-dump-compact>\n    <span class=sf-dump-index>0<\/span> => \"<span class=sf-dump-str title=\"14 characters\">en-US,en;q=0.9<\/span>\"\n  <\/samp>]\n  \"<span class=sf-dump-key>cookie<\/span>\" => <span class=sf-dump-note>array:1<\/span> [<samp data-depth=2 class=sf-dump-compact>\n    <span class=sf-dump-index>0<\/span> => \"<span class=sf-dump-str title=\"1157 characters\">_ga=GA1.1.1808506548.1671470237; _ga_TP8CWVTPY0=GS1.1.1672656712.8.1.1672656922.0.0.0; cloudcom_session=eyJpdiI6IlZCS0pGblhNZXdFUVdyTEZJK3dsNVE9PSIsInZhbHVlIjoiblk1MlUxMUlLdHJ3TEIwaFlPKzhMWmtySXJSR2RwTUVkaGlFZmlqblJCOGdSMllzNEJHQ29RWHZYcGt1VTErdTVIZWR2K1NaVVNUNFByS1E2QldVSTlGZkpBRXE3TEpNSUp6SFQwWGhNcEViaUxVZWFMVUZsNjNlMWpKWjRqR2giLCJtYWMiOiJiZTkwMGY5ZTU2MGNjNWQ0NzIwODQwYzkyNjcwNzcxMDY5YjlhY2FhZjExOGMxMDZjZTYyY2RlMGQyMWUwNzk5IiwidGFnIjoiIn0%3D; XSRF-TOKEN=eyJpdiI6Ilc5OHk1K1F2TDJRMGZnWlIvMUdXSFE9PSIsInZhbHVlIjoibDhMRGd0WXdSQmZXdklQSVNPZWxNaHN6UmNWT2MyY3pXanQza1lwYnRUUjdJQndGbEdzU1A0b0pBdzNUVFBQY1VSd2ZqTzZXMTlpcFdzZTZmWHNQeDBjQ1RhWFZzcjZDMkJTVk9TUGpiOGQvbFo5T2tMYm5nald5ZU1FWm1tY3AiLCJtYWMiOiJkMzc2YTI2MDcxNWJhMDFmZTI1MWZmNzlhMTljMmVkN2I1MDMyZGQ5ZjE1MzYyMTRmZjZhZDY5MzA0YWQ0YzkyIiwidGFnIjoiIn0%3D; cms_session=eyJpdiI6IlhxU0xVMnpnK0F5SythTFNuZ0d1Q1E9PSIsInZhbHVlIjoiaUV6bHZkWm5ocTFWc24reldCbHNEdEdnblBhZGJheEl6WFMxamY1czl6UkZoTGdsZCtkQ3RGVFpFN0FrdWt4ZU5FVmJGVU9HU1E0TWoxeXpsMnB0YXkvT3VxcnRNTFNBT29zd2hSZGpMSjZsclBEcWExNXNRMHZZdmk2RHlzdUEiLCJtYWMiOiJkZDcyZTA2Zjg4NmFlNDY0ZWIwNzFlYjNjNDZmYTNlMzRlYzg4M2M1ZTFlYzhkZDBhOTk0ZmM3YjNjMzk3YzdmIiwidGFnIjoiIn0%3D<\/span>\"\n  <\/samp>]\n<\/samp>]\n<\/pre><script>Sfdump(\"sf-dump-403047756\", {\"maxDepth\":0})<\/script>\n","request_server":"<pre class=sf-dump id=sf-dump-324138705 data-indent-pad=\"  \"><span class=sf-dump-note>array:30<\/span> [<samp data-depth=1 class=sf-dump-expanded>\n  \"<span class=sf-dump-key>DOCUMENT_ROOT<\/span>\" => \"<span class=sf-dump-str title=\"48 characters\">C:\\xampp\\htdocs\\Github\\Krishzzi\\video-cms\\public<\/span>\"\n  \"<span class=sf-dump-key>REMOTE_ADDR<\/span>\" => \"<span class=sf-dump-str title=\"9 characters\">127.0.0.1<\/span>\"\n  \"<span class=sf-dump-key>REMOTE_PORT<\/span>\" => \"<span class=sf-dump-str title=\"5 characters\">65245<\/span>\"\n  \"<span class=sf-dump-key>SERVER_SOFTWARE<\/span>\" => \"<span class=sf-dump-str title=\"28 characters\">PHP 8.1.6 Development Server<\/span>\"\n  \"<span class=sf-dump-key>SERVER_PROTOCOL<\/span>\" => \"<span class=sf-dump-str title=\"8 characters\">HTTP\/1.1<\/span>\"\n  \"<span class=sf-dump-key>SERVER_NAME<\/span>\" => \"<span class=sf-dump-str title=\"9 characters\">127.0.0.1<\/span>\"\n  \"<span class=sf-dump-key>SERVER_PORT<\/span>\" => \"<span class=sf-dump-str title=\"4 characters\">8000<\/span>\"\n  \"<span class=sf-dump-key>REQUEST_URI<\/span>\" => \"<span class=sf-dump-str>\/<\/span>\"\n  \"<span class=sf-dump-key>REQUEST_METHOD<\/span>\" => \"<span class=sf-dump-str title=\"3 characters\">GET<\/span>\"\n  \"<span class=sf-dump-key>SCRIPT_NAME<\/span>\" => \"<span class=sf-dump-str title=\"10 characters\">\/index.php<\/span>\"\n  \"<span class=sf-dump-key>SCRIPT_FILENAME<\/span>\" => \"<span class=sf-dump-str title=\"58 characters\">C:\\xampp\\htdocs\\Github\\Krishzzi\\video-cms\\public\\index.php<\/span>\"\n  \"<span class=sf-dump-key>PHP_SELF<\/span>\" => \"<span class=sf-dump-str title=\"10 characters\">\/index.php<\/span>\"\n  \"<span class=sf-dump-key>HTTP_HOST<\/span>\" => \"<span class=sf-dump-str title=\"14 characters\">localhost:8000<\/span>\"\n  \"<span class=sf-dump-key>HTTP_CONNECTION<\/span>\" => \"<span class=sf-dump-str title=\"10 characters\">keep-alive<\/span>\"\n  \"<span class=sf-dump-key>HTTP_CACHE_CONTROL<\/span>\" => \"<span class=sf-dump-str title=\"9 characters\">max-age=0<\/span>\"\n  \"<span class=sf-dump-key>HTTP_SEC_CH_UA<\/span>\" => \"<span class=sf-dump-str title=\"64 characters\">&quot;Not?A_Brand&quot;;v=&quot;8&quot;, &quot;Chromium&quot;;v=&quot;108&quot;, &quot;Google Chrome&quot;;v=&quot;108&quot;<\/span>\"\n  \"<span class=sf-dump-key>HTTP_SEC_CH_UA_MOBILE<\/span>\" => \"<span class=sf-dump-str title=\"2 characters\">?0<\/span>\"\n  \"<span class=sf-dump-key>HTTP_SEC_CH_UA_PLATFORM<\/span>\" => \"<span class=sf-dump-str title=\"9 characters\">&quot;Windows&quot;<\/span>\"\n  \"<span class=sf-dump-key>HTTP_UPGRADE_INSECURE_REQUESTS<\/span>\" => \"<span class=sf-dump-str>1<\/span>\"\n  \"<span class=sf-dump-key>HTTP_USER_AGENT<\/span>\" => \"<span class=sf-dump-str title=\"111 characters\">Mozilla\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\/537.36 (KHTML, like Gecko) Chrome\/108.0.0.0 Safari\/537.36<\/span>\"\n  \"<span class=sf-dump-key>HTTP_ACCEPT<\/span>\" => \"<span class=sf-dump-str title=\"135 characters\">text\/html,application\/xhtml+xml,application\/xml;q=0.9,image\/avif,image\/webp,image\/apng,*\/*;q=0.8,application\/signed-exchange;v=b3;q=0.9<\/span>\"\n  \"<span class=sf-dump-key>HTTP_SEC_FETCH_SITE<\/span>\" => \"<span class=sf-dump-str title=\"4 characters\">none<\/span>\"\n  \"<span class=sf-dump-key>HTTP_SEC_FETCH_MODE<\/span>\" => \"<span class=sf-dump-str title=\"8 characters\">navigate<\/span>\"\n  \"<span class=sf-dump-key>HTTP_SEC_FETCH_USER<\/span>\" => \"<span class=sf-dump-str title=\"2 characters\">?1<\/span>\"\n  \"<span class=sf-dump-key>HTTP_SEC_FETCH_DEST<\/span>\" => \"<span class=sf-dump-str title=\"8 characters\">document<\/span>\"\n  \"<span class=sf-dump-key>HTTP_ACCEPT_ENCODING<\/span>\" => \"<span class=sf-dump-str title=\"17 characters\">gzip, deflate, br<\/span>\"\n  \"<span class=sf-dump-key>HTTP_ACCEPT_LANGUAGE<\/span>\" => \"<span class=sf-dump-str title=\"14 characters\">en-US,en;q=0.9<\/span>\"\n  \"<span class=sf-dump-key>HTTP_COOKIE<\/span>\" => \"<span class=sf-dump-str title=\"1157 characters\">_ga=GA1.1.1808506548.1671470237; _ga_TP8CWVTPY0=GS1.1.1672656712.8.1.1672656922.0.0.0; cloudcom_session=eyJpdiI6IlZCS0pGblhNZXdFUVdyTEZJK3dsNVE9PSIsInZhbHVlIjoiblk1MlUxMUlLdHJ3TEIwaFlPKzhMWmtySXJSR2RwTUVkaGlFZmlqblJCOGdSMllzNEJHQ29RWHZYcGt1VTErdTVIZWR2K1NaVVNUNFByS1E2QldVSTlGZkpBRXE3TEpNSUp6SFQwWGhNcEViaUxVZWFMVUZsNjNlMWpKWjRqR2giLCJtYWMiOiJiZTkwMGY5ZTU2MGNjNWQ0NzIwODQwYzkyNjcwNzcxMDY5YjlhY2FhZjExOGMxMDZjZTYyY2RlMGQyMWUwNzk5IiwidGFnIjoiIn0%3D; XSRF-TOKEN=eyJpdiI6Ilc5OHk1K1F2TDJRMGZnWlIvMUdXSFE9PSIsInZhbHVlIjoibDhMRGd0WXdSQmZXdklQSVNPZWxNaHN6UmNWT2MyY3pXanQza1lwYnRUUjdJQndGbEdzU1A0b0pBdzNUVFBQY1VSd2ZqTzZXMTlpcFdzZTZmWHNQeDBjQ1RhWFZzcjZDMkJTVk9TUGpiOGQvbFo5T2tMYm5nald5ZU1FWm1tY3AiLCJtYWMiOiJkMzc2YTI2MDcxNWJhMDFmZTI1MWZmNzlhMTljMmVkN2I1MDMyZGQ5ZjE1MzYyMTRmZjZhZDY5MzA0YWQ0YzkyIiwidGFnIjoiIn0%3D; cms_session=eyJpdiI6IlhxU0xVMnpnK0F5SythTFNuZ0d1Q1E9PSIsInZhbHVlIjoiaUV6bHZkWm5ocTFWc24reldCbHNEdEdnblBhZGJheEl6WFMxamY1czl6UkZoTGdsZCtkQ3RGVFpFN0FrdWt4ZU5FVmJGVU9HU1E0TWoxeXpsMnB0YXkvT3VxcnRNTFNBT29zd2hSZGpMSjZsclBEcWExNXNRMHZZdmk2RHlzdUEiLCJtYWMiOiJkZDcyZTA2Zjg4NmFlNDY0ZWIwNzFlYjNjNDZmYTNlMzRlYzg4M2M1ZTFlYzhkZDBhOTk0ZmM3YjNjMzk3YzdmIiwidGFnIjoiIn0%3D<\/span>\"\n  \"<span class=sf-dump-key>REQUEST_TIME_FLOAT<\/span>\" => <span class=sf-dump-num>1673123868.8224<\/span>\n  \"<span class=sf-dump-key>REQUEST_TIME<\/span>\" => <span class=sf-dump-num>1673123868<\/span>\n<\/samp>]\n<\/pre><script>Sfdump(\"sf-dump-324138705\", {\"maxDepth\":0})<\/script>\n","request_cookies":"<pre class=sf-dump id=sf-dump-505247661 data-indent-pad=\"  \"><span class=sf-dump-note>array:5<\/span> [<samp data-depth=1 class=sf-dump-expanded>\n  \"<span class=sf-dump-key>_ga<\/span>\" => <span class=sf-dump-const>null<\/span>\n  \"<span class=sf-dump-key>_ga_TP8CWVTPY0<\/span>\" => <span class=sf-dump-const>null<\/span>\n  \"<span class=sf-dump-key>cloudcom_session<\/span>\" => <span class=sf-dump-const>null<\/span>\n  \"<span class=sf-dump-key>XSRF-TOKEN<\/span>\" => \"<span class=sf-dump-str title=\"40 characters\">iP8Ef1QPdXXR40KT4PxSkK7NohbyssSttLnHyxHY<\/span>\"\n  \"<span class=sf-dump-key>cms_session<\/span>\" => \"<span class=sf-dump-str title=\"40 characters\">lES5tGFf5m2l8Sj3NihyuKxk0cVxR9cUfy1RQ2tq<\/span>\"\n<\/samp>]\n<\/pre><script>Sfdump(\"sf-dump-505247661\", {\"maxDepth\":0})<\/script>\n","response_headers":"<pre class=sf-dump id=sf-dump-1479094301 data-indent-pad=\"  \"><span class=sf-dump-note>array:7<\/span> [<samp data-depth=1 class=sf-dump-expanded>\n  \"<span class=sf-dump-key>content-type<\/span>\" => <span class=sf-dump-note>array:1<\/span> [<samp data-depth=2 class=sf-dump-compact>\n    <span class=sf-dump-index>0<\/span> => \"<span class=sf-dump-str title=\"24 characters\">text\/html; charset=UTF-8<\/span>\"\n  <\/samp>]\n  \"<span class=sf-dump-key>cache-control<\/span>\" => <span class=sf-dump-note>array:1<\/span> [<samp data-depth=2 class=sf-dump-compact>\n    <span class=sf-dump-index>0<\/span> => \"<span class=sf-dump-str title=\"55 characters\">max-age=0, must-revalidate, no-cache, no-store, private<\/span>\"\n  <\/samp>]\n  \"<span class=sf-dump-key>date<\/span>\" => <span class=sf-dump-note>array:1<\/span> [<samp data-depth=2 class=sf-dump-compact>\n    <span class=sf-dump-index>0<\/span> => \"<span class=sf-dump-str title=\"29 characters\">Sat, 07 Jan 2023 20:37:50 GMT<\/span>\"\n  <\/samp>]\n  \"<span class=sf-dump-key>pragma<\/span>\" => <span class=sf-dump-note>array:1<\/span> [<samp data-depth=2 class=sf-dump-compact>\n    <span class=sf-dump-index>0<\/span> => \"<span class=sf-dump-str title=\"8 characters\">no-cache<\/span>\"\n  <\/samp>]\n  \"<span class=sf-dump-key>expires<\/span>\" => <span class=sf-dump-note>array:1<\/span> [<samp data-depth=2 class=sf-dump-compact>\n    <span class=sf-dump-index>0<\/span> => \"<span class=sf-dump-str title=\"29 characters\">Fri, 01 Jan 1990 00:00:00 GMT<\/span>\"\n  <\/samp>]\n  \"<span class=sf-dump-key>set-cookie<\/span>\" => <span class=sf-dump-note>array:2<\/span> [<samp data-depth=2 class=sf-dump-compact>\n    <span class=sf-dump-index>0<\/span> => \"<span class=sf-dump-str title=\"428 characters\">XSRF-TOKEN=eyJpdiI6IkVmaWhDS1RoRXk1M3BDUzVpZldxdnc9PSIsInZhbHVlIjoiQjZ4UWpYMUhHSHRkU1d3dzdqdWJCbWw4c1FaSjBhOW5uQjdQSUZpRWdvaGtNdU1TZDR2U2FlSDN1K0t0R05wQjNsMjluMUY4MjZNTjdPOWZTSlZKOU5aQTRJQ25MNCtrd3VKelp5dWRoeGZ1d2h0cWZCaDlnYnlQdVRTQ0hHOE0iLCJtYWMiOiJkNjQ2NTM1YTQ3YTQzZmMwN2Q4NjIzZDM1YzViYTc3NjljZTRhNWE4NmNjODI2MDg5MjZjMDJhMGE2MmQ0ZDM0IiwidGFnIjoiIn0%3D; expires=Sat, 07 Jan 2023 22:37:50 GMT; Max-Age=7200; path=\/; samesite=lax<\/span>\"\n    <span class=sf-dump-index>1<\/span> => \"<span class=sf-dump-str title=\"439 characters\">cms_session=eyJpdiI6Ik5NMHF2akZmZUxuaXQ4NzVkUkZoN2c9PSIsInZhbHVlIjoiMzB3SEcvZGFYc3pVaFd0WTZqaUcvRFdXSFZudlQ2d2JOZkpCb2RTK1NucEZSUloyNmxyazRsVnl0cll5bWVOWk9PdE5vS3B5aHpnZnFNV3RuYWg1MzlKdUswb2hTdHFoSG5vcW16bVdGK1p1SFFicmFpY0ZtY2lYeXoyYmdPSkIiLCJtYWMiOiI4ZGI2YzM0MzdmNjYzZDEzZDFkN2I2Mjg0NmQzY2RhNDZiN2JhNmFmYTY4ZTA5MWE3OGFjNjQwZDY4YTJmMTFiIiwidGFnIjoiIn0%3D; expires=Sat, 07 Jan 2023 22:37:50 GMT; Max-Age=7200; path=\/; httponly; samesite=lax<\/span>\"\n  <\/samp>]\n  \"<span class=sf-dump-key>Set-Cookie<\/span>\" => <span class=sf-dump-note>array:2<\/span> [<samp data-depth=2 class=sf-dump-compact>\n    <span class=sf-dump-index>0<\/span> => \"<span class=sf-dump-str title=\"400 characters\">XSRF-TOKEN=eyJpdiI6IkVmaWhDS1RoRXk1M3BDUzVpZldxdnc9PSIsInZhbHVlIjoiQjZ4UWpYMUhHSHRkU1d3dzdqdWJCbWw4c1FaSjBhOW5uQjdQSUZpRWdvaGtNdU1TZDR2U2FlSDN1K0t0R05wQjNsMjluMUY4MjZNTjdPOWZTSlZKOU5aQTRJQ25MNCtrd3VKelp5dWRoeGZ1d2h0cWZCaDlnYnlQdVRTQ0hHOE0iLCJtYWMiOiJkNjQ2NTM1YTQ3YTQzZmMwN2Q4NjIzZDM1YzViYTc3NjljZTRhNWE4NmNjODI2MDg5MjZjMDJhMGE2MmQ0ZDM0IiwidGFnIjoiIn0%3D; expires=Sat, 07-Jan-2023 22:37:50 GMT; path=\/<\/span>\"\n    <span class=sf-dump-index>1<\/span> => \"<span class=sf-dump-str title=\"411 characters\">cms_session=eyJpdiI6Ik5NMHF2akZmZUxuaXQ4NzVkUkZoN2c9PSIsInZhbHVlIjoiMzB3SEcvZGFYc3pVaFd0WTZqaUcvRFdXSFZudlQ2d2JOZkpCb2RTK1NucEZSUloyNmxyazRsVnl0cll5bWVOWk9PdE5vS3B5aHpnZnFNV3RuYWg1MzlKdUswb2hTdHFoSG5vcW16bVdGK1p1SFFicmFpY0ZtY2lYeXoyYmdPSkIiLCJtYWMiOiI4ZGI2YzM0MzdmNjYzZDEzZDFkN2I2Mjg0NmQzY2RhNDZiN2JhNmFmYTY4ZTA5MWE3OGFjNjQwZDY4YTJmMTFiIiwidGFnIjoiIn0%3D; expires=Sat, 07-Jan-2023 22:37:50 GMT; path=\/; httponly<\/span>\"\n  <\/samp>]\n<\/samp>]\n<\/pre><script>Sfdump(\"sf-dump-1479094301\", {\"maxDepth\":0})<\/script>\n","session_attributes":"<pre class=sf-dump id=sf-dump-982234040 data-indent-pad=\"  \"><span class=sf-dump-note>array:9<\/span> [<samp data-depth=1 class=sf-dump-expanded>\n  \"<span class=sf-dump-key>url<\/span>\" => []\n  \"<span class=sf-dump-key>_previous<\/span>\" => <span class=sf-dump-note>array:1<\/span> [<samp data-depth=2 class=sf-dump-compact>\n    \"<span class=sf-dump-key>url<\/span>\" => \"<span class=sf-dump-str title=\"21 characters\">http:\/\/localhost:8000<\/span>\"\n  <\/samp>]\n  \"<span class=sf-dump-key>_flash<\/span>\" => <span class=sf-dump-note>array:2<\/span> [<samp data-depth=2 class=sf-dump-compact>\n    \"<span class=sf-dump-key>old<\/span>\" => []\n    \"<span class=sf-dump-key>new<\/span>\" => []\n  <\/samp>]\n  \"<span class=sf-dump-key>_token<\/span>\" => \"<span class=sf-dump-str title=\"40 characters\">iP8Ef1QPdXXR40KT4PxSkK7NohbyssSttLnHyxHY<\/span>\"\n  \"<span class=sf-dump-key>login_web_59ba36addc2b2f9401580f014c7f58ea4e30989d<\/span>\" => <span class=sf-dump-num>1<\/span>\n  \"<span class=sf-dump-key>password_hash_web<\/span>\" => \"<span class=sf-dump-str title=\"60 characters\">$2y$10$QY7TB.5QnkZO7IJM9JjXz.BIX9ky2WhmR8gEWdWJOBKnPZduyLV7m<\/span>\"\n  \"<span class=sf-dump-key>filament<\/span>\" => []\n  \"<span class=sf-dump-key>tables<\/span>\" => <span class=sf-dump-note>array:1<\/span> [<samp data-depth=2 class=sf-dump-compact>\n    \"<span class=sf-dump-key>ListVideos_toggled_columns<\/span>\" => <span class=sf-dump-note>array:11<\/span> [<samp data-depth=3 class=sf-dump-compact>\n      \"<span class=sf-dump-key>thumbnail<\/span>\" => <span class=sf-dump-const>true<\/span>\n      \"<span class=sf-dump-key>display<\/span>\" => <span class=sf-dump-const>false<\/span>\n      \"<span class=sf-dump-key>title<\/span>\" => <span class=sf-dump-const>true<\/span>\n      \"<span class=sf-dump-key>slug<\/span>\" => <span class=sf-dump-const>false<\/span>\n      \"<span class=sf-dump-key>activity_count<\/span>\" => <span class=sf-dump-const>false<\/span>\n      \"<span class=sf-dump-key>comments_count<\/span>\" => <span class=sf-dump-const>false<\/span>\n      \"<span class=sf-dump-key>is_slider<\/span>\" => <span class=sf-dump-const>true<\/span>\n      \"<span class=sf-dump-key>is_suggestion<\/span>\" => <span class=sf-dump-const>true<\/span>\n      \"<span class=sf-dump-key>is_upcoming<\/span>\" => <span class=sf-dump-const>true<\/span>\n      \"<span class=sf-dump-key>priority<\/span>\" => <span class=sf-dump-const>true<\/span>\n      \"<span class=sf-dump-key>updated_at<\/span>\" => <span class=sf-dump-const>true<\/span>\n    <\/samp>]\n  <\/samp>]\n  \"<span class=sf-dump-key>PHPDEBUGBAR_STACK_DATA<\/span>\" => []\n<\/samp>]\n<\/pre><script>Sfdump(\"sf-dump-982234040\", {\"maxDepth\":0})<\/script>\n"}}, "X85c30c02c6af639e597105070f22512d");

</script>
</body>
</html>
