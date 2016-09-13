<?php

    class Anagram
    {

        function checkAnagram($input1, $input2)
        {
            $inputArray1 = str_split(strtolower($input1));
            $inputArray2 = str_split(strtolower($input2));
            sort($inputArray1);
            sort($inputArray2);
            if ($inputArray1 == $inputArray2)
            {
                return true;
            } else {
                return false;
            }
        }

        function checkPartialAnagram($input1, $input2)
        {
            $inputArray1 = str_split(strtolower($input1));
            $inputArray2 = str_split(strtolower($input2));
            $result = array_intersect($inputArray1, $inputArray2);
            if ($result == $inputArray1) {
                return true;
            } else {
                return false;
            }
        }

        function checkWords($input1, $input2)
        {
            $matchingWords = array();
            foreach ($input2 as $word)
            {
                if (strlen($input1) == strlen($word))
                {
                    if($this->checkAnagram($input1, $word))
                    {
                        array_push($matchingWords, $word);
                    }
                } elseif (strlen($input1) < strlen($word))
                {
                    if($this->checkPartialAnagram($input1, $word))
                    {
                        array_push($matchingWords, $word);
                    }
                }
            }
            return implode(" ", $matchingWords);
        }

    }


?>
