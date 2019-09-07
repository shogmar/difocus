<?php
namespace App\Classes;

use App\AlgorithmInterface;

abstract class AlgorithmBuilder implements AlgorithmInterface
{
    private $name_algorithm;
    abstract public function __construct(QuestionsPoolInterface $questions_pool);
    abstract public function setNameAlgorithm(string $name_algorithm);
    abstract public function getNameAlgorithm();
    abstract public function setAlgorithm(string $algorithm);
    abstract public function calculationResult();
}