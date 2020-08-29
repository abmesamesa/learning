var truncateString = require(process.cwd() + '/src/truncateString'); 

describe("Truncate string suite", function() { 
    beforeEach(function() {
        this.tisket = 'A-tisket a-tasket A green and yellow basket';
        this.peppers = 'Peter Piper picked a peck of pickled peppers';
        this.longer = 'Absolutly longer';
    });

    it(this.tisket + ' with length "11" should return "A-tisket..."', function() {
        expect(truncateString(this.tisket,11)).toEqual("A-tisket...");
    });
 
    it(this.peppers + ' with length "14" should return "Peter Piper..."', function() {
        expect(truncateString(this.peppers,14)).toEqual("Peter Piper...");
    });
  
    it(this.tisket + ' with its length should return the same string', function() {
        expect(truncateString(this.tisket,this.tisket.length)).toEqual(this.tisket);
    });

    it(this.tisket + ' with its length plus 2 should return the same string', function() {
        expect(truncateString(this.tisket, this.tisket.length + 2)).toEqual(this.tisket);
    });

    it('"A-" with length "1" should return "A..."', function() {
        var str = "A-";
        expect(truncateString(str, 1)).toEqual("A...");
    }); 

    it(this.longer + ' with length "2" should return "Ab..."', function() {
        expect(truncateString(this.longer, 2)).toEqual('Ab...');
    });

});
