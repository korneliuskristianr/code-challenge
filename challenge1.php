<?php

function QuestionsMarks($str = '')
{
	$stringLength = strlen($str) - 1;
	$parseStr = str_split($str);
	$exist10 = false;

	for($i =0; $i < $stringLength; $i++)  {		

		if(is_numeric($parseStr[$i])) {
			$first = (int) $parseStr[$i];						
			$n = $i +1;

			foreach(range($n, $stringLength) as $item) {				
				if(is_numeric($parseStr[$item])) {
					$second = (int) $parseStr[$item];
					$count = $first + $second;
										
					if($count == 10) {
						$exist10 = true;

						$marks= 0;
						$a=$i;
						foreach(range($i, $item) as $mark) {
							if($parseStr[$mark] == '?') $marks++;
						}

						if($marks !== 3) return false;
					}
				}
			}

		}
	}

	return $exist10;
}
// Test Case 1
echo QuestionsMarks('aa6?9')?'True': 'False';
echo "\n";
echo QuestionsMarks('6???4')?'True': 'False';
echo "\n";
echo QuestionsMarks('acc?7??sss?3rr1??????5')?'True': 'False';
echo "\n";