<?php
namespace App\Classes;

use App\Interfaces\AlgorithmsPoolInterface;
use App\Interfaces\AlgorithmInterface;
use App\Interfaces\QuestionsPoolInterface;

abstract class AlgorithmsPool implements AlgorithmsPoolInterface
{
    private $questions_pool;
    /**
     * @param QuestionsPoolInterface $questions_pool Добавляем зависимость, для проверки заносимых вопросов
     */
    abstract public function __construct(QuestionsPoolInterface $questions_pool);
    abstract public function addAlgoritmh(AlgorithmInterface $algorithm);
}