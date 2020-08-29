'use strict';

var palindrome = function(str) {
    var cleanStr = str.replace(/[^0-9a-z]/gi, '').toLowerCase();
    var reverseStr = cleanStr.split("").reverse().join("");
    return reverseStr === cleanStr;
};

module.exports = palindrome;
