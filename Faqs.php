<?php  

  $pageTitle = "FAQs";
  include 'init.php';

  include $includes . 'header.php';
  include $includes . 'navbar.php';

  ?>
<?php

$faqs = [
    ["question" => "How can I donate furniture?", "answer" => "You can donate furniture by Registering a donator account then navigating to profile."],
    ["question" => "What types of furniture can I donate?", "answer" => "We accept new or used furniture such as sofas, chairs, tables, beds, and more. Please make sure they are in good condition."],
    ["question" => "Is there a fee for furniture pickup?", "answer" => "No, our furniture pickup service is free of charge."],
    ["question" => "Can I donate furniture if it is not in perfect condition?", "answer" => "We accept furniture that is gently used."],
    ["question" => "Can I get my furniture back if i already donated it?", "answer" => "No."]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Furni FAQs</title>
    <style>
        body {
            
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f9;
        }
        main {
            padding: 20px;
            max-width: 900px;
            margin: 20px auto;
            background-color: white;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            margin-top:25vh;
        }
        h1 {
            font-size: 24px;
            color: #333;
        }
        .faq {
            margin-bottom: 15px;
            border-bottom: 1px solid #ddd;
            padding-bottom: 10px;
        }
        .faq:last-child {
            border-bottom: none;
        }
        .question {
            font-weight: bold;
            font-size: 18px;
            color: #0056b3;
        }
        .answer {
            margin-top: 5px;
            font-size: 16px;
            color: #555;
        }
    </style>
</head>
<body>



<main>
    <h1>Furni FAQs</h1>
    
    <?php foreach ($faqs as $faq): ?>
        <div class="faq">
            <div class="question"><?php echo $faq['question']; ?></div>
            <div class="answer"><?php echo $faq['answer']; ?></div>
        </div>
    <?php endforeach; ?>
</main>



</body>
</html>
