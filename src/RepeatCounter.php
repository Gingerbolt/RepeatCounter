<?php
    class RepeatCounter
    {
        function countRepeats($input_term, $input_target)
        {
            $count = 0;
            $removal_targets = [",", ".", "<", ">", "?", "/", ";", ":", "{", "}", "[", "]", "|", "`", "~", "!", "@", "#", "$", "%", "^", "&", "*", "1", "2", "3", "4", "5", "6", "7", "8", "9", "0", "-", "_", "+", "="];
            $input_target_filtered = strtoupper($input_target);
            $input_term_filtered = strtoupper($input_term);
            $target_split_array = str_split($input_target_filtered);
            foreach ($target_split_array as $target_piece)
            {
                for($x = 0; $x <= 37; $x++) {
                preg_replace('/$removal_targets[$x]/', '', $target_piece);
                }
            }
            $input_target_distilled = implode($target_split_array);
            $target_array = explode(' ', $input_target_distilled);
            foreach ($target_array as $target)
            {
                if ($target == $input_term_filtered) {
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
