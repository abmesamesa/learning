var titleCase = require(process.cwd() + '/src/titleCase');

describe('titleCase test suite', function() {
    beforeEach(function() {
        this.sentence = "I'm a little tea pot"; 
    });

    it('should return "I\'m A Little Tea Pot"', function() {
        expect(titleCase(this.sentence)).toEqual("I'm A Little Tea Pot"); 
    });
});
