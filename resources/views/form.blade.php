<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Event</title>
    <style>
        input[type=text], select {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type=submit] {
            width: 100%;
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type=submit]:hover {
            background-color: #45a049;
        }

        div {
            border-radius: 5px;
            background-color: #f2f2f2;
            padding: 20px;
        }
    </style>
</head>
<body>
<h3>
    Enter event information
</h3>

<div>
    <form action="/form" method="post">
        <input type="hidden" name="_token" value="p8oFfGAej2IyjoDCu3gn3BRkwd7WOrUxH3Z6JKmn">
        <label>Event name</label>
        <input type="text" id="ename" name="eventname" placeholder="Event name...">

        <label>Band name</label>
        <input type="text" id="bname" name="bandname" placeholder="Band name...">

        <labelư>Start date</labelư>
        <input type="date" id="sdate" name="startdate">
        <input type="submit" value="Submit">
    </form>
</div>
</body>
</html>
