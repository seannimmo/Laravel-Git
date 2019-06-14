<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Answer 1</title>
 
    <style>
body {
    font-family: Arial;
    max-width: 1000px;
    margin: 0 auto;
}
.label {
    font-size: 0.875em;
    color: gray;
    margin-bottom: 0.5em;
}
.question {
    background-color: #efefef;
    padding: 2em;
}
.question h2 {
    margin: 0 0 0.5em;
}
.answer {
    background-color: #f7f7f7;
    padding: 2em;
}
.answer .votes {
    margin-top: 0.5em;
    display: flex;
    align-items: center;
}
.answer .votes > span {
    font-size: 0.875em;
    color: gray;
    margin-right: 0.33em;
}
.answer .votes form {
    margin: 0 0 0 0.5em;
}
    </style>
</head>
<body>
 
    <main>
 
        <div class="question">
            <div class="label">Question:</div>
 
            <h2>{{$answer->question->title}}</h2>
            {{-- Answer.phpでquestionのメソッドでanswerとquestionで関係性を作ったため参照できる 
                そのため真ん中がメソッド名Answer.phpのメソッド名--}}
 
            <div>
                {{$answer->question->text}}
            </div>
        </div>
 
        <div class="answer">
 
            <div class="label">Answer:</div>
 
            <div class="text">
               {{$answers->text}}
            </div>
 
            <div class="votes">
                <span>Rating:</span> {{$answers->rating}}
 
                <form action="" method="post">
                    @csrf
 
                    <input type="submit" name="up" value="+1">
                    <input type="submit" name="down" value="-1">
 
                </form>
            </div>
 
        </div>
 
    </div>
 
</body>
</html>