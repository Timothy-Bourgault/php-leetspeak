<?php
    require_once "src/LeetspeakTranslator.php";

    class LeetspeakTranslatorTest extends PHPUnit_Framework_TestCase
    {
        function test_insert_e_oneWord()
        {
            //Arrange
            $test_LeetspeakTranslator = new LeetspeakTranslator;
            $input = "leetspeak";

            //Act
            $result = $test_LeetspeakTranslator->makeLeetspeak($input);

            //Assert
            $this->assertEquals("l33tzp3ak", $result);
        }
        function test_insert_o_oneWord()
        {
            //Arrange
            $test_LeetspeakTranslator = new LeetspeakTranslator;
            $input = "cobra";

            //Act
            $result = $test_LeetspeakTranslator->makeLeetspeak($input);

            //Assert
            $this->assertEquals("c0bra", $result);
        }
        function test_insert_I_oneWord()
        {
            //Arrange
            $test_LeetspeakTranslator = new LeetspeakTranslator;
            $input = "Ingrid";

            //Act
            $result = $test_LeetspeakTranslator->makeLeetspeak($input);

            //Assert
            $this->assertEquals("1ngrid", $result);
        }
        function test_insert_s_oneWord()
        {
            //Arrange
            $test_LeetspeakTranslator = new LeetspeakTranslator;
            $input = "sustain";

            //Act
            $result = $test_LeetspeakTranslator->makeLeetspeak($input);

            //Assert
            $this->assertEquals("suztain", $result);
        }
    }
 ?>
