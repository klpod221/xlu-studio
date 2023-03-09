window.$ = window.jQuery = require('jquery');

// make the function available globally
window.showToast = showToast;

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
        $('body').attr('data-theme', 'dark');
    } else {
        $('body').attr('data-theme', 'light');
    }
}

/**
 * Show a toast notification
 * Default settings for simple-notify
 *
 * @param {string} title
 * @param {string} message
 * @param {string} type
 * @param {number} duration
 */
function showToast(title, message, type, duration = 3000) {
    const toast = new Notify({
        status: type,
        title: title,
        text: message,
        effect: 'slide',
        speed: 400,
        customClass: '',
        customIcon: '',
        showIcon: true,
        showCloseButton: true,
        autoclose: true,
        autotimeout: duration,
        gap: 20,
        distance: 20,
        type: 1,
        position: 'right top'
    })
}
