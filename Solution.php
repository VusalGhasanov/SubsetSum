<?php

class Solution {
    /**
     * @var array
     */
    private $result = [];

    /**
     * @var array
     */
    private $currentCombination = [];

    /**
     * combination sum
     *
     * @param array $candidates
     * @param int $target
     * @return array
     */
    public function combinationSum(array $candidates, int $target)
    {
        $this->backtrack(0, 0, $candidates, $target);

        return $this->result;
    }

    /**
     * back track
     *
     * @param int $start
     * @param int $currentSum
     * @param array $candidates
     * @param int $target
     * @return void
     */
    private function backtrack(int $start, int $currentSum, array $candidates, int $target)
    {
        if ($currentSum === $target) {
            $this->result[] = $this->currentCombination;
            return;
        }

        for ($i = $start; $i < count($candidates); $i++) {
            if ($currentSum + $candidates[$i] <= $target) {
                $this->currentCombination[] = $candidates[$i];
                $this->backtrack($i, $currentSum + $candidates[$i], $candidates, $target);
                array_pop($this->currentCombination);
            }
        }
    }
}
