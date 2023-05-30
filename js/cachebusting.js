window.onload = function () {
    var images = document.getElementsByTagName('img');
    var version = '1.0.0'; // 任意のバージョン番号を設定します

    for (var i = 0; i < images.length; i++) {
        var src = images[i].src;
        if (src.indexOf('?') === -1) {
            images[i].src = src + '?v=' + version;
        } else {
            images[i].src = src + '&v=' + version;
        }
    }
};
