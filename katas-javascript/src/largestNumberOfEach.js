'use strict';

var largestNumberOfEach = function largestNumberOfEach(arr) {
    return arr.map(function(current) {
        return current.reduce(function(previous, current) {
             return previous > current ? previous : current;
        });
    });
}

module.exports = largestNumberOfEach;
