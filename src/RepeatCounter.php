<?php
    class RepeatCounter
    {
        function countRepeats($input_term, $input_target)
        {
            $count = 0;
            $empty_array = array('');
            $removal_targets = array(",", ".", "<", ">", "?", "/", ";", ":", "{", "}", "[", "]", "|", "`", "~", "!", "@", "#", "$", "%", "^", "&", "*", "1", "2", "3", "4", "5", "6", "7", "8", "9", "0", "-", "_", "+", "=");
            
            $input_target_capped = strtoupper($input_target);
            $input_term_capped = strtoupper($input_term);
            $target_split_array = str_split($input_target_capped);

            $target_split_array_filtered = str_ireplace($removal_targets, $empty_array, $target_split_array);

            $input_target_distilled = implode($target_split_array_filtered);

            $target_array = explode(' ', $input_target_distilled);
            foreach ($target_array as $target)
            {
                if ($target == $input_term_capped) {
                    ++$count;
                }
            }
            $final_count = ' MATCH COUNT = '.$count;
            if ($count != 0) {
                $result = $input_term.':'.$input_target.$final_count;
          } else {
                $result = $input_term.':'.$input_target;
          }
            return $result;
        }
    }
?>
