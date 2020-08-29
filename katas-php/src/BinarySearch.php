<?php

namespace Katas;

class BinarySearch
{

    public function chop (int $search, array $haystack)
    {
        return $this->search(0, count($haystack) - 1, $search, $haystack);
    }
    
    private function search ($left, $right, &$search, &$haystack)
    {
        $key = -1;
        $middle = floor($left + $right / 2);
        if ($left <= $right && isset($haystack[$middle])) {
            if ($haystack[$middle] < $search) {
                $key = $this->search($middle + 1, $right, $search, $haystack);
            } else if ($haystack[$middle] > $search) {
                $key = $this->search($left, $middle - 1, $search, $haystack);
            } else if ($haystack[$middle] == $search) {
                $key = $middle;
            }
        }
	return $key;
    }

}
