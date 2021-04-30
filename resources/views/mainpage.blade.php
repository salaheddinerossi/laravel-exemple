<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>home</title>
</head>
<body>
    <div class="salam">
        <p> POST PAGE </p>
    </div>
    <a href="/create"><h3>add article</h3></a>
    @foreach ($var as $post)


    <article>
        <div class="img" style="    background-image: url('{{$post->image}}');
        "></div>
        <div class="all">
            <div class="ktaba"><p>{{$post->content}}</p></div>
            <a href="#"><h3>{{$post->titre}}</h3></a>
        </div>
    </article>
    @endforeach

</body>
</html>
