window.onload = function () {
    var css = document.getElementsByTagName('link');
    var version = new Date().getTime(); // 現在のタイムスタンプをバージョン番号として使用します

    for (var i = 0; i < css.length; i++) {
        if (css[i].rel.toLowerCase() == 'stylesheet' && css[i].href) {
            var href = css[i].href;
            if (href.indexOf('?') === -1) {
                css[i].href = href + '?v=' + version;
            } else {
                css[i].href = href + '&v=' + version;
            }
        }
    }
};
