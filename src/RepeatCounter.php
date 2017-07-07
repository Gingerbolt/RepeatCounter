<?php
    class RepeatCounter
    {
        function countRepeats($input_term, $input_target)
        {
            $count = 0;
            $input_target_filtered = strtoupper($input_target);
            $input_term_filtered = strtoupper($input_term);
            $target_array = explode(" ", $input_target_filtered);
            foreach ($target_array as $target)
            {
                if ($target == $input_term_filtered) {
                    ++$count;
                }
            }
            $final_count = " MATCH COUNT = ".$count;
            if ($count != 0) {
            $result = $input_term.":".$input_target.$final_count;
          } else {
            $result = $input_term.":".$input_target;
          }
            return $result;
        }
    }
?>
