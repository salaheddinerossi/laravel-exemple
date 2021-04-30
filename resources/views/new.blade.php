<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        form{
            width: 60%;
            margin: auto;
            padding-top: 100px;

        }
    </style>
</head>
<body>
    <form action="/" class="mb-3" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="" class="form-label" >titre</label>
        <input name="titre" type="text" class="form-control" id="exampleFormControlInput1"  placeholder="titre">
        <label for="" class="form-label" >content</label>
        <input name="content" type="text"  class="form-control" id="exampleFormControlTextarea1" rows="3">
        <label for=""  class="form-label">image</label>
        <input name="image" type="file" name="" id="formFileMultiple" class="form-control">
        <button type="submit" class="btn btn-primary">submit</button>
    </form>


</body>
</html>
