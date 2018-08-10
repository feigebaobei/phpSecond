<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>testusers</title>

      <script src="https://cdn.jsdelivr.net/npm/jquery@3.3.1/dist/jquery.min.js"></script>
  <script>
    $(function () {


        $('#addData').on('click', function (event) {
          $.ajax({
            url: '/testUsersAdd',
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
</head>
<body>
  <h2>test users</h2>
  @foreach ($users as $item)
    <p>name: {{ $item->name }}, age: {{ $item->age }}</p>
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
</html>