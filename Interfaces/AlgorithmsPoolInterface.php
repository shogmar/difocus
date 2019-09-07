<?php 
namespace App\Interfaces;

use App\Interfaces\AlgorithmInterface;
/**
 * Undocumented interface
 */
interface AlgorithmsPoolInterface 
{
    /**
     * @param QuestionInterface $qustion  Добавляет алгоритм в пулл
     * @return $this The question object
     */
    public function addAlgorithm(AlgorithmInterface $algorithm);
}