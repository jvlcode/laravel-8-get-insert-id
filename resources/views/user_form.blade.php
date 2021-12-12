<html>
    <head>
        <title>Getting Insert ID</title>
    </head>
    <body>
        <form method="post" action="/" >
            <label for="">Name <input type="text" name="name" ></label>
            <input type="submit" value="Create User">
            @csrf
        </form>
        @if ($insert_id = Session::get('insert_id'))
            <p>Success! Last Insert ID is {{$insert_id}}</p>
        @endif
    </body>
</html>
