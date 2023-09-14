<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body>

     <div class="container my-5">
        <h4> create category </h4>
        @include('parts.errors')
     
      <form method="post" action= "{{ route ('category.store') }}">
      @csrf




      <div class="mb-3">
        <label for="">Category name</label>
        <input type="text" name="name" class="form-control">
   
     </div>


     
     <div class="mb-3">
        <label for="">Category description</label>
        <textarea name="description" class="form-control"> </textarea>
   
     </div>

     <div class="mb-3">
        <button class="btn btn-success w-100">submit</button>
     </div>







      </form>
     </div>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>
