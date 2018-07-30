<?php

function isVowel($str)
{
	if(in_array($str, str_split('aiueo'))) return true;
	return false;
}

function isVowels2x2($collections, $row, $col)
{
	if( !isVowel($collections[$row][$col])) return false;
	if( !isVowel($collections[$row+1][$col])) return false;
	if( !isVowel($collections[$row][$col+1])) return false;
	if( !isVowel($collections[$row+1][$col+1])) return false;

	return true;
}

function VowelSquare(array $items = [])
{
	foreach($items as $key => $value){
		$items[$key] = str_split($value);
	}

	for($row =0; $row < count($items)-1; $row++)
	{		
		for($col =0; $col < count($items[$row])-1; $col++)
		{
			if(isVowels2x2($items, $row, $col))		
			{
				return sprintf("%s - %s", $row, $col);
			}
		}	
	}
	return 'not found';
}

echo VowelSquare(["aqrst", "ukaei", "ffooo"]);
echo "\n";
echo VowelSquare(["gg","ff"]);