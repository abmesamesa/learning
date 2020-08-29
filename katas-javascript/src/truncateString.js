'use strict';

var truncateString = function (str, num) {
  var end = "...";
  var num_chars = str.slice(0, num);
  if(num < end.length) {
    return num_chars+end;
  } if(num == str.length) {
    return str;
  } if(num < (str.length + end.length) && (num > str.length)) {
    return str;
  } else {
    return num_chars.substring(0, num_chars.length - end.length) + end;
  }
}

module.exports = truncateString;
