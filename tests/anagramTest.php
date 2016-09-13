<?php
    require_once "src/anagram.php";
    class anagramtest extends PHPUnit_Framework_TestCase
    {
        function test_checkAnagram_oneWord()
        {
            $test_anagram = new Anagram;
            $input1 = "bread";
            $input2 = "beard";
            $output = $test_anagram->checkAnagram($input1, $input2);
            $this->assertEquals(true, $output);
        }

        function test_checkAnagram_multipleWords()
        {
            $test_anagram = new Anagram;
            $input1 = "bread";
            $input2 = array("beard", "bob", "loaf", "Debra");
            $output = $test_anagram->checkWords($input1, $input2);
            $this->assertEquals("beard Debra", $output);
        }

        function test_checkAnagram_partialWord()
        {
            $test_anagram = new Anagram;
            $input1 = "read";
            $input2 = array("beard", "bob", "loaf", "Debra");
            $output = $test_anagram->checkWords($input1, $input2);
            $this->assertEquals("beard Debra", $output);
        }

    }
?>
