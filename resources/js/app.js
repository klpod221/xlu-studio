import $ from 'jquery';

// test jquery
$(document).ready(function () {

    let theme = localStorage.getItem('theme');

    if (theme === null) {
        if (window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches) {
            theme = 'dark';
        } else {
            theme = 'light';
        }
    }

    switchTheme(theme);
});

function switchTheme(theme) {
    localStorage.setItem('theme', theme);
    if (theme === 'dark') {
        $('body').addClass('dark-theme');
    } else {
        $('body').removeClass('dark-theme');
    }
}
