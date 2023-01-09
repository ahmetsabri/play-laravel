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
            All Posts
        </h1>
  <div class="row">
    <div class="col s12">
      <ul class="tabs" id="tabs">
        <li class="tab col s4"><a class="active"  href="#test1">All Posts ({{$posts->total()}})</a></li>
        <li class="tab col s4"><a  href="#test2">Active Posts ({{$inactivePostsCount}})</a></li>
        <li class="tab col s4"><a  href="#test3">inActive Posts ({{$activePostsCount}})</a></li>
      </ul>
    </div>
    <div id="test1" class="col s12">
    All posts

         <table class="centered">
            <thead>
              <tr>
                  <th>Title</th>
                  <th>Created at</th>
                  <th>Action</th>
              </tr>
            </thead>

            <tbody>

        @foreach($posts as $post)
        <tr>
            <td>{{$post->title}}</td>
            <td>{{$post->created_at}}</td>
            <td>
                <a class="waves-effect red btn">Delete</a>
                <a class="waves-effect blue btn">Update</a>
                <a class="waves-effect waves btn">Show</a>
            </td>
          </tr>
        @endforeach
        </tbody>
        </table>
        </div>

    </div>
    <div id="test2" class="col s12">Active Posts</div>
    <div id="test3" class="col s12">Inactive Posts</div>
  </div>
</div>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

  <script>
    let el = document.getElementById('tabs');
    var instance = M.Tabs.init(el);
  </script>
</body>
</html>
