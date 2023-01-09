<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posts</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
</head>

<body>

    <div class="container">
        <h1 class="center">
            Scoreboard
        </h1>
        <div class="row">
            <div id="test1" class="col s12">

                <table class="centered">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Score</th>
                            <th>Rank</th>
                        </tr>
                    </thead>
                    @foreach($students as $index=>$student)

                    <tr>
                        <td>{{$student->name}}</td>
                        <td>{{$student->score}}</td>
                        <td>{{$student->position}}</td>
                    </tr>

                    @endforeach
                    <tbody>
            </div>
        </div>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

        <script>
            let el = document.getElementById('tabs');
            var instance = M.Tabs.init(el);
        </script>
</body>

</html>
