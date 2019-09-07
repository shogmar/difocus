<?php 
namespace App\Interfaces;

use App\Interfaces\QuestionInterface;
/**
 * Undocumented interface
 */
interface QuestionsPoolInterface 
{
    /**
     * @param QuestionInterface $qustion  Добавляет объект вопрос с ответами и балламми в массив
     * @return $this The question object
     */
    public function addQuestion(QuestionInterface $qustion);
}