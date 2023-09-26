<!DOCTYPE html>
<html>
<head>
    <title>Count Vowels in a Sentence</title>
</head>
<body>
    <h2>Count Vowels in a Sentence</h2>
    <form method="post" action="">
        Enter a sentence: <input type="text" name="sentence">
        <input type="submit" name="submit" value="Count Vowels">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        // Retrieve the user-entered sentence
        $sentence = $_POST['sentence'];

        // Convert the sentence to lowercase to simplify vowel counting
        $sentence = strtolower($sentence);

        // Define an array of vowels
        $vowels = ['a', 'e', 'i', 'o', 'u'];

        // Initialize a variable to store the vowel count
        $vowelCount = 0;

        // Loop through each character in the sentence
        for ($i = 0; $i < strlen($sentence); $i++) {
            $char = $sentence[$i];
            
            // Check if the character is a vowel
            if (in_array($char, $vowels)) {
                $vowelCount++;
            }
        }

        // Display the vowel count
        echo "<p>The number of vowels in the sentence is: $vowelCount</p>";
    }
    ?>
</body>
</html>
