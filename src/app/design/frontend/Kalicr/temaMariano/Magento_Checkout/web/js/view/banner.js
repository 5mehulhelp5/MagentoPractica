define([
    'uiComponent'
], function (Component) {
    'use strict';

    return Component.extend({
        defaults: {
            template: 'Magento_Checkout/components/banner'
        },

        initialize: function () {
            this._super();
            return this;
        },

        getBannerUrl: function () {
            return require.toUrl('Magento_Checkout/images/banner.jpg');
        }
    });
});