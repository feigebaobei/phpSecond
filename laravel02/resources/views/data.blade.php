<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
      <script src="https://cdn.jsdelivr.net/npm/jquery@3.3.1/dist/jquery.min.js"></script>
    </head>
    <body>
        <h2>title</h2>

        @foreach ($key as $item)
          <p>name: {{$item->name}}, age: {{ $item->age}}</p>
        @endforeach

        <form action="#">
          <label for="age">age</label>
          <input type="text" name="age" id="age">
          <label for="name">name</label>
          <input type="text" name="name" id="name">
        </form>
        <button id="addData">添加数据</button>
        <button id="removeData">添加数据</button>
    </body>
    <script>
      $(function () {


        $('#addData').on('click', function (event) {
          $.ajax({
            url: '/addData',
            type: 'GET',
            data: {
              age: $('#age').val(),
              name: $('#name').val()
            },
            success: function (response) {
              console.log(response)
            },
            error: function () {
              console.log(error)
            }
          })
        })
        $('#removeData').on('click', function (event) {
          $.ajax({
            url: '/removeData',
            type: 'GET',
            data: {
              age: $('#age').val()
            },
            success: function (response) {
              console.log(response)
            },
            error: function () {
              console.log(error)
            }
          })
        })


      })
    </script>
</html>
