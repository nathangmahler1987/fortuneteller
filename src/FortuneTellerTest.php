<?php
use PHPUnit\Framework\TestCase;

require __DIR__ . "/../src/FortuneTeller.php";

class FortuneTellerTest extends TestCase {

    /*
    @dataProvider ratingProvder
    */
   public function testRelationshipPrediction_WithDefaultEntries_ReturnsNotNull($relationships_array) {
       //new object creation
        $relationship_random = new FortuneTeller();
        //object needs to be put through method so it has a value
        $relationship_random = getRelationshipPrediction($relationships_array[0]);
        //checking to obser null is not returned in any of array value
        //assertEquals();
   }
    /*
    @dataProvider ratingProvder
    */
   public function testMoneyArray_WithDefaultEntires_ReturnsCountOf3() {
       $money_random = new FortuneTeller();


   }

   
}
