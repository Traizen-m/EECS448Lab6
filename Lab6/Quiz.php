<?php 
    $q1_ans = $_POST["capybara_age"];
    $q2_ans = $_POST["capybara_speed"];
    $q3_ans = $_POST["capybara_pups"];
    $q4_ans = $_POST["capybara_env"];
    $q5_ans = $_POST["capybara_lbs"]; 

    $score = 0;

    if($q1_ans == "8-10 years")
    {
        $q1_correct = true;
        $score += 20;
    }
    else
    {
        $q1_correct = false;
    }

    if($q2_ans == "21mph")
    {
        $q2_correct = true;
        $score += 20;
    }
    else
    {
        $q2_correct = false;
    }

    if($q3_ans == "Pups")
    {
        $q3_correct = true;
        $score += 20;
    }
    else
    {
        $q3_correct = false;
    }

    if($q4_ans == "Wet environments")
    {
        $q4_correct = true;
        $score += 20;
    }
    else
    {
        $q4_correct = false;
    }

    if($q5_ans == "201 pounds")
    {
        $q5_correct = true;
        $score += 20;
    }
    else
    {
        $q5_correct = false;
    }

    $num_correct = $score/20;

    echo "<body style='background-color:powderblue'>";
    echo"
        <center>
        <h1>Capybara Quiz</h1>

        <p> <strong>Question 1: What is the average life expectancy of a Capybara? </strong><br>
        &emsp; You answered: ".$q1_ans." <br>
        &emsp; Correct answer: 8-10 years
        <p>

        <p> <strong>Question 2: What is the top speed of a capybara? </strong><br>
        &emsp; You answered: ".$q2_ans." <br>
        &emsp; Correct answer: 21mph
        <p>

        <p> <strong>Question 3: What are baby Capybaras called? </strong><br>
        &emsp; You answered: ".$q3_ans." <br>
        &emsp; Correct answer: Pups
        <p>

        <p> <strong>Question 4: What kind of environment do capybaras live in? </strong><br>
        &emsp; You answered: ".$q4_ans." <br>
        &emsp; Correct answer: Wet environments
        <p>

        <p> <strong>Question 5: How much did the largest capybara ever recorded weigh? </strong><br>
        &emsp; You answered: ".$q5_ans." <br>
        &emsp; Correct answer: 201 pounds
        <p>
        <br>

        <p> Answers Correct: ".$num_correct."/5 <br>
        Score: ".$score."% <br>
    </center>
    ";
    echo "</body>";
?> 