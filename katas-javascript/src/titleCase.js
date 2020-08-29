'use strict';

var titleCase = function(str) {
    var titleWords = str.split(" ").map(function(word){
        var titleWord = "";
        for(var i = 0; i < word.length; i++) {
            titleWord += i === 0 
                ? word[i].toUpperCase() 
                : word[i].toLowerCase();
        }
        return titleWord;
    });
    return titleWords.join(" ");
};

module.exports = titleCase;
