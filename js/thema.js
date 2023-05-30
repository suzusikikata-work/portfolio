$(function () {
    var themeToggle = document.getElementById('themeToggle');

    // ページの読み込み時に保存されたテーマを適用
    var savedTheme = localStorage.getItem('theme');
    if (savedTheme) {
        document.body.className = savedTheme;
    }

    // ボタンがクリックされたときにテーマを切り替え
    themeToggle.addEventListener('click', function () {
        if (document.body.className === 'dark-thema') {
            document.body.className = '';
            localStorage.setItem('theme', '');
        } else {
            document.body.className = 'dark-thema';
            localStorage.setItem('theme', 'dark-thema');
        }
    });
});
