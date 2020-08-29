var factorialize = require(process.cwd() + '/src/factorialize');

describe('Factorialize suite', function() {
    it('5 should return 120', function() {
        expect(factorialize(5)).toEqual(120);
    });
});
