import './bootstrap';
import $ from 'jquery';
window.$ = window.jQuery = $;

import flatpickr from 'flatpickr';
import 'flatpickr/dist/flatpickr.css';

document.addEventListener('DOMContentLoaded', function() {
    console.log('DOM fully loaded and parsed');
    document.querySelectorAll('.datepicker').forEach(function(item) {
        flatpickr(item, {
            mode: 'range'
        });
    });
});
