'use strict';

var findLongestWordLength = function(str) {
    return str.split(" ").reduce( function(previous, current){
        return previous.length > current.length ? previous : current;     
    }).length;
};

module.exports = findLongestWordLength;
