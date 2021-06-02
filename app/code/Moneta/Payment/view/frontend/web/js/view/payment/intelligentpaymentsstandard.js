define(
    [
        'uiComponent',
        'Magento_Checkout/js/model/payment/renderer-list'
    ],
    function (
        Component,
        rendererList
    ) {
        'use strict';
        rendererList.push(
            {
                type: 'moneta',
                component: 'Moneta_Payment/js/view/payment/method-renderer/monetastandard'
            }
        );
        /** Add view logic here if needed */
        return Component.extend({});
    }
);
