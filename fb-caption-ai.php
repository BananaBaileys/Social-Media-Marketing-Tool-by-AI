<?php


require __DIR__ . '/vendor/autoload.php';  // remove this line if you use a PHP Framework.

use Orhanerday\OpenAi\OpenAi;

$open_ai_key = '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';
$open_ai = new OpenAi($open_ai_key);
$prompt = $_POST['prompt'];

$complete = $open_ai->completion([
    'model' => 'text-davinci-003',
    'prompt' => 'Writing a marketing Facebook caption for '. $prompt,
    'temperature' => 0.9,  // increase more random
    'max_tokens' => 50,   // how long the text output
    'frequency_penalty' => 0,   // increase will increase word repetition
    'presence_penalty' => 0.6,       // topic repetition
 ]);


 $response = json_decode($complete, true);
 $response = $response["choices"][0]["text"];    //in choice, array 0, the text

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Output</title>
    <style>
        .output-text{
            white-space: break-spaces;
        }
    </style>
</head>
<body>
    <h1>Output of 3 Facebook Marketing Captions for <?= $prompt?></h1>
    <div class="output-text">
        <?= $response?>
    </div>
</body>
</html>
