<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posts</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.2.2/axios.min.js" integrity="sha512-QTnb9BQkG4fBYIt9JGvYmxPpd6TBeKp6lsUrtiVQsrJ9sb33Bn9s0wMQO9qVBFbPX3xHRAsBHvXlcsrnJjExjg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>
<body>

    <div class="container">
        <table>
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>

                @php
                    $redirectTo = $posts->url($posts->currentPage());
                    if (!$posts->hasMorePages() && $posts->count() == 1){
                        $redirectTo = $posts->previousPageUrl();
                    }
                @endphp
                @foreach($posts as $post)
                <tr>
                    <td>{{$post->title}}</td>
                    <td>
                        <a class="waves-effect waves-light btn info darken-2" href="{{route('delete',[$post,'redirect_to'=>$redirectTo])}}">
                        delete
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {{$posts->links()}}
    </div>
</body>
</html>
