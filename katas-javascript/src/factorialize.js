'use strict';

var factorialize = function(num) {
    var factor = 1,
        response = 1;

    while(factor <= num) {
        response *= factor;
        factor++;
    }

    return response;
};

module.exports = factorialize;
