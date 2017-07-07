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
    }

?>
