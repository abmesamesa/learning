var findLongestWordLength = require(process.cwd() + '/src/findLongestWordLength');

describe('findLongestWordLength test suite', function() {
    beforeEach(function(){
        this.sentence = 'The quick brown fox jumped over the lazy dog';
    });

    it('should return 6', function() {
        expect(findLongestWordLength(this.sentence)).toEqual(6);
    });
});
