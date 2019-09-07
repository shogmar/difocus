<?php 
namespace App;
require_once "bootstrap.php";
/**
 * Создаётся Пулл вопросов и Пулл Алгоритмов зависящих от Пула вопросов, проверяется объектом Test
*/
//Создаём сущность вопрос
$qustion = new QestionBuilder();
$qustion->setQuestion("Любите ли вы выпекать пироги?");
$qustion->setAnswerAndPoint(["Люблю", "Думаю только об этом, не могу спать."], [1, 2]);

//Можно и по 1
$qustion->addAnswerAndPoint("Нет.", 3);
$qustion->setQuestion("Любите ли вы выпекать пироги?");

///2 вопрос
$qustion2 = new QestionBuilder();
$qustion2->setQuestion("Как вы относитесь к еде?");
$qustion2->setAnswerAndPoint(["Очень люблю вкусно поесть.", "Отношусь спокойно.", "Я - дизайнер блюд в ресторане."], [3, 2, 1]);

//Добавляем в пулл совместных вопросов
$qustions_pool = new QuestionsPool();
$qustions_pool->addQuestion($qustion);
$qustions_pool->addQuestion($qustion2);

/**
 * Создаём алгоритмы которые должны считать результат исходя из вапросов
 */
$algorithm_povar = new AlgorithmBuilder($qustions_pool);
$algorithm_povar->setNameAlgorithm("Повар");
$algorithm_povar->setAlgorithm("Некий алгоритм или внутренняя реализация");
$algorithm_gurman = new AlgorithmBuilder($qustions_pool);
$algorithm_gurman->setNameAlgorithm("Гурман");
$algorithm_gurman->setAlgorithm("Некий алгоритм2 или внутренняя реализация2");
//Создаём пул для алгоритмов, внутри сравниваем пулл вопросов, они должны быть одинаковые
$algorithm_pool = new AlgorithmsPool($qustions_pool);
$algorithm_pool->addAlgoritmh($algorithm_povar);
$algorithm_pool->addAlgoritmh($algorithm_gurman);

/**
 * Создаём тест который будет всё контраливароть
 */
$test = new Test($qustions_pool, $algorithm_pool);
$test->setSubmitClient(FALSE);
//Если нажата кнопка. Проверять?
if ($test->getSubmitClient === TRUE) {
    //считаем результат
    $test->Result();
    $test->viewResultTest();
} else {
    // Отображает вопросы, ошибки и т.д
    $test->viewTest();
}
