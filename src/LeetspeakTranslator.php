<?php
    class LeetspeakTranslator
    {
        function makeLeetspeak($input)
        {
            $input_array_of_words = explode(" ", $input);
            $e_translated_array = array();
            $o_translated_array = array();
            $I_translated_array = array();
            $s_translated_array = array();
            if ( (preg_match('/\s/',$input))===1) {
                foreach ($input_array_of_words as $word) {
                    for ($i=0; $i <strlen($word) ; $i++) {
                        if (($word[$i]==="s")&&($i!=0)) {
                            array_push($s_translated_array, "z");
                        } else {
                            array_push($s_translated_array, $word[$i]);
                        }
                    }
                    array_push($s_translated_array, " ");
                }
                $s_translated_array = implode("", $s_translated_array);
            } else if (((preg_match('/\s/',$input))===0)&&((preg_match('/s/',$input))===1)) {
                for ($i=0; $i <strlen($input) ; $i++) {
                    if (($input[$i]==="s")&&($i!=0)) {
                        array_push($s_translated_array, "z");
                    } else {
                        array_push($s_translated_array, $input[$i]);
                    }
                }
                $s_translated_array = implode("", $s_translated_array);
            } else {
                $s_translated_array = $input;
            }
            $input_array = str_split($s_translated_array);
            foreach ($input_array as $letter) {
                if ($letter==="e") {
                    array_push($e_translated_array, "3");
                } else {
                    array_push($e_translated_array, $letter);
                }
            }
            foreach ($e_translated_array as $letter) {
                if ($letter==="o") {
                    array_push($o_translated_array, "0");
                } else {
                    array_push($o_translated_array, $letter);
                }
            }
            foreach ($o_translated_array as $letter) {
                if ($letter==="I") {
                    array_push($I_translated_array, "1");
                } else {
                    array_push($I_translated_array, $letter);
                }
            }
            return implode("", $I_translated_array);
        }
    }
 ?>
