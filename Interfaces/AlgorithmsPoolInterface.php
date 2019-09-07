<?php 
namespace App\Interfaces;

use App\Interfaces\AlgorithmInterface;
/**
 * Undocumented interface
 */
interface AlgorithmsPoolInterface 
{
    /**
     * Добавляет алгоритм в пулл
     * @param QuestionInterface $algorithm  Добавляет алгоритм в пулл
     * @return $this The $algorithm object
     */
    public function addAlgorithm(AlgorithmInterface $algorithm);
}