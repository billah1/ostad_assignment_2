<?php

$questions = [

    ['question' => 'What is 2 + 2?', 'correct' => '4'],

    ['question' => 'What is the capital of France?', 'correct' => 'Paris'],

    ['question' => 'Who wrote "Hamlet"?','correct' => 'Shakespeare'],

];

$answers = [];

foreach ($questions as $index => $question) {
  echo ($index + 1) ." . ".  $question['question'] . "\n" ;
  $answers[] = trim(readline("your answer : "));
}

function evaluateQuiz(array $questions, array $answers) {
     $score = 0;
     foreach ($questions as $index => $question) {
       if($answers[$index] === $question['correct']){
         $score++;                   
     }

   } 
   return $score;
}

$score = evaluateQuiz($questions, $answers);

echo "\n your scored  $score out of " . count($question). ".\n";


if($score  === count($questions)) {
    echo "Excelent job! \n";
} elseif($score > 1) {
    echo "good effort! \n";

} else {
    echo "Better luck next time ! \n";
}
