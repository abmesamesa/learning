var reverseString = require(process.cwd() + '/src/reverseString');

describe('Reverse String suite', function() {
    it('"hello" should return "olleh"', function() {
        expect(reverseString("hello")).toEqual('olleh'); 
    });
})
