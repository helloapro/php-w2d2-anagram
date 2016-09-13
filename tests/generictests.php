<?php
    require_once "src/Leetspeak.php";
    class leetspeaktests extends PHPUnit_Framework_TestCase
    {
        function test_convert_e()
        {
            $test_leetspeak = new Leetspeak;
            $input = "Hell";
            $output = $test_leetspeak->convertSentence($input);
            $this->assertEquals("H3ll", $output);
        }

    }
?>
