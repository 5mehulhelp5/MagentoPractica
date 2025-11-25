define([
    'uiComponent',
    'ko',
    'jquery'
], function (Component, ko, $) {
    'use strict';

    // Variable global para el timer
    window.checkoutTimer = window.checkoutTimer || {
        startTime: new Date(),
        timerText: ko.observable('00:00'),
        isInitialized: false
    };

    return Component.extend({
        defaults: {
            template: 'Magento_Checkout/components/timer'
        },

        initialize: function () {
            this._super();
            this.timerText = window.checkoutTimer.timerText;
            
            if (!window.checkoutTimer.isInitialized) {
                window.checkoutTimer.isInitialized = true;
                this.startTimer();
            }
            
            return this;
        },

        startTimer: function () {
            const self = this;
            
            function updateTimer() {
                const currentTime = new Date();
                const elapsedTime = Math.floor((currentTime - window.checkoutTimer.startTime) / 1000);
                
                const minutes = Math.floor(elapsedTime / 60);
                const seconds = elapsedTime % 60;
                
                window.checkoutTimer.timerText(
                    minutes.toString().padStart(2, '0') + ':' + 
                    seconds.toString().padStart(2, '0')
                );
            }

            if (!window.checkoutTimer.timerInterval) {
                window.checkoutTimer.timerInterval = setInterval(updateTimer, 1000);
                updateTimer();
            }
        }
    });
});