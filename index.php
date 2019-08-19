<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
</head>
<body>

<?php 

$Questions = array(
    1 => array(
        'Question' => 'CSS stands for',
        'Answers' => array(
            'A' => 'Computer Styled Sections',
            'B' => 'Cascading Style Sheets',
            'C' => 'Crazy Solid Shapes'
        ),
        'CorrectAnswer' => 'A'
    ),
    2 => array(
        'Question' => 'Second question',
        'Answers' => array(
            'A' => 'First answer of Second question',
            'B' => 'Second answer Second question',
            'C' => 'Third answer Second question'
        ),
        'CorrectAnswer' => 'C'
    )
);
3 => array(
    'Question' => 'Second question',
    'Answers' => array(
        'A' => 'First answer of Second question',
        'B' => 'Second answer Second question',
        'C' => 'Third answer Second question'
    ),
    'CorrectAnswer' => 'C'
)
);
4 => array(
    'Question' => 'Second question',
    'Answers' => array(
        'A' => 'First answer of Second question',
        'B' => 'Second answer Second question',
        'C' => 'Third answer Second question'
    ),
    'CorrectAnswer' => 'C'
)
);
5 => array(
    'Question' => 'Second question',
    'Answers' => array(
        'A' => 'First answer of Second question',
        'B' => 'Second answer Second question',
        'C' => 'Third answer Second question'
    ),
    'CorrectAnswer' => 'C'
)
);
6 => array(
    'Question' => 'Second question',
    'Answers' => array(
        'A' => 'First answer of Second question',
        'B' => 'Second answer Second question',
        'C' => 'Third answer Second question'
    ),
    'CorrectAnswer' => 'C'
)
);
7 => array(
    'Question' => 'Second question',
    'Answers' => array(
        'A' => 'First answer of Second question',
        'B' => 'Second answer Second question',
        'C' => 'Third answer Second question'
    ),
    'CorrectAnswer' => 'C'
)
);
7 => array(
    'Question' => 'Second question',
    'Answers' => array(
        'A' => 'First answer of Second question',
        'B' => 'Second answer Second question',
        'C' => 'Third answer Second question'
    ),
    'CorrectAnswer' => 'C'
)
);
8 => array(
    'Question' => 'Second question',
    'Answers' => array(
        'A' => 'First answer of Second question',
        'B' => 'Second answer Second question',
        'C' => 'Third answer Second question'
    ),
    'CorrectAnswer' => 'C'
)
);
9 => array(
    'Question' => 'Second question',
    'Answers' => array(
        'A' => 'First answer of Second question',
        'B' => 'Second answer Second question',
        'C' => 'Third answer Second question'
    ),
    'CorrectAnswer' => 'C'
)
);
10 => array(
    'Question' => 'CSS stands for',
    'Answers' => array(
        'A' => 'Computer Styled Sections',
        'B' => 'Cascading Style Sheets',
        'C' => 'Crazy Solid Shapes'
    ),
    'CorrectAnswer' => 'A'
),
 11=> array(
    'Question' => 'Second question',
    'Answers' => array(
        'A' => 'First answer of Second question',
        'B' => 'Second answer Second question',
        'C' => 'Third answer Second question'
    ),
    'CorrectAnswer' => 'C'
)
);
12 => array(
'Question' => 'Second question',
'Answers' => array(
    'A' => 'First answer of Second question',
    'B' => 'Second answer Second question',
    'C' => 'Third answer Second question'
),
'CorrectAnswer' => 'C'
)
);
13 => array(
'Question' => 'Second question',
'Answers' => array(
    'A' => 'First answer of Second question',
    'B' => 'Second answer Second question',
    'C' => 'Third answer Second question'
),
'CorrectAnswer' => 'C'
)
);
14 => array(
'Question' => 'Second question',
'Answers' => array(
    'A' => 'First answer of Second question',
    'B' => 'Second answer Second question',
    'C' => 'Third answer Second question'
),
'CorrectAnswer' => 'C'
)
);
15 => array(
'Question' => 'Second question',
'Answers' => array(
    'A' => 'First answer of Second question',
    'B' => 'Second answer Second question',
    'C' => 'Third answer Second question'
),
'CorrectAnswer' => 'C'
)
);
16 => array(
'Question' => 'Second question',
'Answers' => array(
    'A' => 'First answer of Second question',
    'B' => 'Second answer Second question',
    'C' => 'Third answer Second question'
),
'CorrectAnswer' => 'C'
)
);
17 => array(
'Question' => 'Second question',
'Answers' => array(
    'A' => 'First answer of Second question',
    'B' => 'Second answer Second question',
    'C' => 'Third answer Second question'
),
'CorrectAnswer' => 'C'
)
);
18 => array(
'Question' => 'Second question',
'Answers' => array(
    'A' => 'First answer of Second question',
    'B' => 'Second answer Second question',
    'C' => 'Third answer Second question'
),
'CorrectAnswer' => 'C'
)
);
19 => array(
'Question' => 'Second question',
'Answers' => array(
    'A' => 'First answer of Second question',
    'B' => 'Second answer Second question',
    'C' => 'Third answer Second question'
),
'CorrectAnswer' => 'C'
)
);
20 => array(
    'Question' => 'Second question',
    'Answers' => array(
        'A' => 'First answer of Second question',
        'B' => 'Second answer Second question',
        'C' => 'Third answer Second question'
    ),
    'CorrectAnswer' => 'C'
    )
    );

if (isset($_POST['answers'])){
    $Answers = $_POST['answers']; // Get submitted answers.

    // Now this is fun, automated question checking! ;)

    foreach ($Questions as $QuestionNo => $Value){
        // Echo the question
        echo $Value['Question'].'<br />';

        if ($Answers[$QuestionNo] != $Value['CorrectAnswer']){
            echo '<span style="color: red;">'.$Value['Answers'][$Answers[$QuestionNo]].'</span>'; // Replace style with a class
        } else {
            echo '<span style="color: green;">'.$Value['Answers'][$Answers[$QuestionNo]].'</span>'; // Replace style with a class
        }
        echo '<br /><hr>';
    }
} else {
?>
    <form action="grade.php" method="post" id="quiz">
    <?php foreach ($Questions as $QuestionNo => $Value){ ?>
    <li>
        <h3><?php echo $Value['Question']; ?></h3>
        <?php 
            foreach ($Value['Answers'] as $Letter => $Answer){ 
            $Label = 'question-'.$QuestionNo.'-answers-'.$Letter;
        ?>
        <div>
            <input type="radio" name="answers[<?php echo $QuestionNo; ?>]" id="<?php echo $Label; ?>" value="<?php echo $Letter; ?>" />
            <label for="<?php echo $Label; ?>"><?php echo $Letter; ?>) <?php echo $Answer; ?> </label>
        </div>
        <?php } ?>
    </li>
    <?php } ?>
    <input type="submit" value="Submit Quiz" />
    </form>
<?php 
}
?>

<?php



?>
<h1>My First Heading</h1>
<p>My first paragraph.</p>

</body>
</html>