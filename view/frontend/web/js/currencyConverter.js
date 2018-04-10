define([
        'mage/storage'
    ], function (storage) {
        'use strict';

        return function (amount) {
            return storage.get(
                'rest/V1/currencyconverter/RUB/PLN/'+amount,
                [],
                false
            ).done(
                function (response) {
                }
            ).fail(
                function (response) {
                }
            );
        };
    }
);