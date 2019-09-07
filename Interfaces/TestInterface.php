<?php 
namespace App\Interfaces;
/**
 * Undocumented interface
 */
interface TestInterface 
{
    /**
     * Возвращает статус объекта
     *
     * @return bool
     */
    public function getSubmitClient();

    /**
     *  Закончен тест или нет
     *  @param bool $submit 
     *
     * @return this
     */
    public function setSubmitClient(bool $submit);

    /**
     * Посчитать сколько балов набрал пользователь
     *
     * @return int
     */
    public function getResultTest();

    /**
     * Начало теста
     *
     * @return render или response
     */
    public function viewTest();

    /**
     * Действия который считают результат по алгоритмам
     *
     * @return render или response
     */
    public function Result();

    /**
     * показать результат render или response
     *
     * @return render или response
     */
    public function viewResultTest();

}