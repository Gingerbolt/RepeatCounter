<?php

    require_once "src/RepeatCounter.php";

    class RepeatCounterTest extends PHPUnit_Framework_TestCase
    {

        function testCountRepeatsReturn()
        {
            //Arrange
            $testRepeatCounter = new RepeatCounter;
            $input_term = "count";
            $input_target = "The first time through.";

            //Act
            $result = $testRepeatCounter->countRepeats($input_term, $input_target);

            //Assert
            $this->assertEquals("count:The first time through.", $result);
        }

        function testCountRepeatsLoneLetter()
        {
          //Arrange
          $testRepeatCounter = new RepeatCounter;
          $input_term = "T";
          $input_target = "Hey bart, I'm mr T";

          //Act
          $result = $testRepeatCounter->countRepeats($input_term, $input_target);

          //Assert
          $this->assertEquals("T:Hey bart, I'm mr T MATCH COUNT = 1", $result);
        }

        function testCountRepeatsLoneWord()
        {
          //Arrange
          $testRepeatCounter = new RepeatCounter;
          $input_term = "Marcia";
          $input_target = "It is only Marcia";

          //Act
          $result = $testRepeatCounter->countRepeats($input_term, $input_target);

          //Assert
          $this->assertEquals("Marcia:It is only Marcia MATCH COUNT = 1", $result);
        }

        function testCountRepeatsMulticapWords()
        {
          //Arrange
          $testRepeatCounter = new RepeatCounter;
          $input_term = "Marcia";
          $input_target = "It is only Marcia or marcia";

          //Act
          $result = $testRepeatCounter->countRepeats($input_term, $input_target);

          //Assert
          $this->assertEquals("Marcia:It is only Marcia or marcia MATCH COUNT = 2", $result);
        }
    }

?>
