<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Notifications from cart</title>

    <style>

        #alert_popover{
            display: block;
            position: absolute;
            bottom: 50px;
            left: 50px;
        }
        .wrapper{
            display: table-cell;
            vertical-align: auto;
            height: auto;
            width: 200px;
        }
        .alert_default{
            color: #333333;
            background-color: #f2f2f2;
            border-color: #cccccc;
        }


    </style>
</head>

<body>

<form action="" method="post">
    <div class="form-group">
        <label>Enter Article name</label>
        <input type="text" class="form-control">
    </div>

    <div class="form-group">
        <label>Enter Comments on Article</label>
        <textarea name="comment" class="form-control" cols="30" rows="10"></textarea>
    </div>

    <div class="form-group">
        <input type="submit" class="btn btn-info" value="post">
    </div>
</form>

<div id="alert_popover">
<div class="wrapper">
    <div class="content">

    </div>
</div>
</div>

</body>
</html>

<script>
    $(document).ready(function (){
        function load_last_notification(){
            $.ajax({
                url:"fetch.php",
                method:"POST",
                success:function (data)
                {
                    $('.content').html(data);
                }
            })
        }
    })
</script>
