var palindrome = require(process.cwd() + '/src/palindrome.js');

describe('Palindrome test suite', function() {
    it('"eye" should return true', function() {
        expect(palindrome('eye')).toBe(true);
    });

    it('"_eye" should return true', function() {
        expect(palindrome('_eye')).toBe(true);
    });
   
    it('"race car" should return true', function() {
        expect(palindrome('race car')).toBe(true);
    });
    
    it('"not a palindrome" should return false', function() {
        expect(palindrome('not a palindrome')).toBe(false);
    });

});
