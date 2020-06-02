
require('./bootstrap');
import Vue from 'vue';
import tippy from 'tippy.js';
import PopperTooltip from 'tooltip.js';
Window.Vue = require('vue');
Window.tippy = require('tippy');
Window.PopperTooltip = require('tooltip');


new Vue({
    el: '#app',

    mounted() {
        document.querySelectorAll('[data-tooltip]').forEach(elem => {
            new PopperTooltip(elem, {
                placement: elem.dataset.tooltipPlacement || 'top',
                title: elem.dataset.tooltip
            });
        });
    }
});