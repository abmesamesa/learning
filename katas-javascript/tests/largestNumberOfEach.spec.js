var largestNumberOfEach = require(process.cwd() + '/src/largestNumberOfEach');

describe('largestNumberOfEach tests suite', function() {
    beforeEach(function() {
        this.arrays = [[13, 27, 18, 26], [4, 5, 1, 3], [32, 35, 37, 39], [1000, 1001, 857, 1]];
    });

    it('should return an array', function() {
        var response = largestNumberOfEach(this.arrays);
        expect(Array.isArray(response)).toBe(true);
    });

    it('should return [27,5,39,1001]', function() {
        expect(largestNumberOfEach(this.arrays)).toEqual([27,5,39,1001]); 
    });
});
