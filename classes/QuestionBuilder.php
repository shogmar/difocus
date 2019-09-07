<?php
namespace App\Classes;

use App\Interfaces\QuestionInterface;

abstract class QestionBuilder implements QuestionInterface
{
    private $question;
    private $answers = [];
    private $points = [];

    abstract public function setQuestion(string $question);
    abstract public function setAnswerAndPoint(array $answers, array $points);
    abstract public function addAnswerAndPoint(string $anwer, int $point);
    abstract public function getPoint($key);
    abstract public function createQuestion();
}