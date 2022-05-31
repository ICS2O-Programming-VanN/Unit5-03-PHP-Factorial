<?php
  
  // If Button clicked
  if(isset($_POST['submit'])) {
    // If user entered an input
    if ($_POST["user-integer"] != "") {

      // Variables
      $userInt = intval($_POST["user-integer"]);
      
      // Initializes Variables
      $counter = 1;
      $message = "";
			$factorialAnswer = 1;

      // If the inputted integer is not 0 or 1
      if ($userInt != 0 and $userInt != 1) {
         // DO WHILE loop to calculate the factorial
        do {
					$factorialAnswer *= $counter;
          $counter++;
        } while ($counter <= $userInt);
        $message = "<h3>The factorial of this number: " . $factorialAnswer . "</h3>";
        // If the inputted integer was 0 or 1
      } else {
        $message = "<h3>The factorial of this number: " . $factorialAnswer . "</h3>";
      }
      // If the user did not give an input
    } else {
      $message = "<h3>Please enter a valid number in the input box!</h3>";
    }

    // Displays factorial of number inputted (or error message)
    echo $message;
  }
?>
