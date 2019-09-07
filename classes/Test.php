<?php
namespace App\Test;

use App\Interfaces\TestInterface;
use App\Interfaces\QuestionsPoolInterface;

abstract class Test implements TestInterface
{
    /**
     * Нажал ли кнопку отправить пользователь
     *
     * @var boolean $submit_client
     */
    private $submit_client = FALSE;
    private $pool_questions;
    private $pool_algorithms;
    private $errors;
    abstract function __construct(QuestionsPoolInterface $pool_questions, AlgorithmPoolInterface $pool_algorithms);
    abstract public function getSubmitClient();
    abstract public function setSubmitClient(bool $submit);
    abstract public function getResultTest();
    abstract public function viewTest();
    abstract public function Result();
    abstract public function viewResultTest();
}