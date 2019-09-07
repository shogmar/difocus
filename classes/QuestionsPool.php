<?php
namespace App\Classes;

use App\Interfaces\QuestionsPoolInterface;
use App\Interfaces\QuestionInterface;

abstract class QestionsPool implements QuestionsPoolInterface
{
    private $questions_pool;
    abstract public function addQuestion(QuestionInterface $question);
}