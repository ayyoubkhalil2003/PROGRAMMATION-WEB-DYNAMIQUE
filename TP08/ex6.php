<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Mini Quiz</title>
</head>
<body>
    <h1>Quiz de connaissance</h1>

    <?php
    // Questions et réponses
    $questions = [
        [
            "question" => "Quelle est la capitale de la France ?",
            "options" => ["Paris", "Lyon", "Marseille", "Nice"],
            "correct" => 0  // La première option (Paris) est la correcte
        ],
        [
            "question" => "Combien de continents existe-t-il ?",
            "options" => ["5", "6", "7", "8"],
            "correct" => 2  // La troisième option (7) est la correcte
        ],
        [
            "question" => "Qui a écrit 'Les Misérables' ?",
            "options" => ["Victor Hugo", "Émile Zola", "Gustave Flaubert", "Albert Camus"],
            "correct" => 0  // La première option (Victor Hugo) est la correcte
        ]
    ];

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $score = 0;
        foreach ($questions as $index => $question) {
            if (isset($_POST["question$index"]) && $_POST["question$index"] == $question["correct"]) {
                $score++;
                echo "<p>Question " . ($index + 1) . " : <span style='color:green;'>Bonne réponse</span></p>";
            } else {
                echo "<p>Question " . ($index + 1) . " : <span style='color:red;'>Mauvaise réponse</span></p>";
            }
        }
        echo "<h2>Votre score final est : $score / " . count($questions) . "</h2>";
    } else {
        echo "<form method='POST'>";
        foreach ($questions as $index => $question) {
            echo "<fieldset><legend>" . $question['question'] . "</legend>";
            foreach ($question['options'] as $optIndex => $option) {
                echo "<label>
                        <input type='radio' name='question$index' value='$optIndex'> $option
                      </label><br>";
            }
            echo "</fieldset><br>";
        }
        echo "<button type='submit'>Valider</button>";
        echo "</form>";
    }
    ?>

</body>
</html>

