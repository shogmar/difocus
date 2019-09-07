<?php 
namespace App\Interfaces;
/**
 * Undocumented interface
 */
interface AlgorithmInterface 
{
    /**
     * Устанавливает имя алгоритма
     * @param string $name_algorithm 
     * @return $this The question object
     */
    public function setNameAlgorithm(string $name_algorithm);

    /**
     * Возвращает имя алгоритма
     * @return string or NUUL
     */
    public function getNameAlgorithm();

    /**
     * Добавление алгоритма
     * @param string $algorithm  Алгоритм
     * @return $this The question object
     */
    public function setAlgorithm(string $algorithm);

    /**
     * Возвращает результат Алгоритма
     * @param string $algorithm  Алгоритм
     * @return $this The question object
     */
    public function calculationResult();
}