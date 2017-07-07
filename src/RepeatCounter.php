<?php
    class RepeatCounter
    {
        function countRepeats($input_term, $input_target)
        {
            $count = 0;
            $target_array = explode(" ", $input_target);
            foreach ($target_array as $target)
            {
                if ($target == $input_term) {
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
