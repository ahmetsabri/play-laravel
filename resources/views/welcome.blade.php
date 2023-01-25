<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posts</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.2.2/axios.min.js"
        integrity="sha512-QTnb9BQkG4fBYIt9JGvYmxPpd6TBeKp6lsUrtiVQsrJ9sb33Bn9s0wMQO9qVBFbPX3xHRAsBHvXlcsrnJjExjg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<body>

    <h1>
        Home Page
    </h1>
</body>
    <script>
        document.addEventListener('alpine:init', ()=>{
            Alpine.data('app', () => ({
                posts: [],
                nextPageUrl: null,
                total : 0,
                loadedResults:0,
                init(){ //mounted vue
                    this.getPosts()
                },
                getPosts(){

                    const self = this;
                    let url = self.nextPageUrl ? self.nextPageUrl : "{{route('posts')}}"

                    axios.get(url).then((res)=>{
                        console.log(res);
                        self.posts = self.posts.concat(res.data.posts.data)
                        self.nextPageUrl = res.data.posts.next_page_url
                        self.total = res.data.posts.total

                        self.loadedResults +=2
                    }).catch((err)=>{
                        console.log(err)
                    })
                }
            }))
        })
    </script>
</html>
