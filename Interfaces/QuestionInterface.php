<?php 
namespace App\Interfaces;
/**
 * Undocumented объекта вопрос
 */
interface QuestionInterface 
{
    /**
     * Добавляет вопрос
     * @param string $question Вопрос
     * @return $this The question object
     */
    public function setQuestion(string $question);

    /**
     * Добавляет сразу массивом, ответы и баллы
     *
     * @param array $answers Ответы
     * @param array $points_answers Баллы за ответы
     * @return $this The question object
     */
    public function setAnswerAndPoint(array $answers, array $points);

    /**
     * Добавляет вопрос и ответ в массив
     *
     * @param array $answer Ответ
     * @param array $points_answers Балл за ответ
     * @return $this The question object
     */
    public function addAnswerAndPoint(string $anwer, int $point);

    /**
     * Возвращает балл по ключу вопроса
     *
     * @return int балл за ответ
     */
    public function getPoint($key);

    /**
     * Создаёт объект Question
     *
     * @return new obj Question
     */
    public function createQuestion();
}