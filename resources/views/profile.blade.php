<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
</head>
<body>

    <div class="container">

    <form class="col s12 center" method="post" action="{{route('profile.update')}}">
        @csrf
      <div class="row">
        <div class="input-field col s6 offset-s3">
          <input placeholder="Password" name="password" type="text" autocomplete="off">
          @error('password')
            <p class="red-text">{{$message}}</p>
          @enderror
        </div>
      </div>
      <button class="btn waves-effect waves-light" type="submit" name="action">Update
    </button>


    </form>

</body>
</html>
