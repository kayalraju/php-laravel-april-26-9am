<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AJAX CRUD</title>
</head>
<body>

<form id="form">

    Name :
    <input type="text" name="name" id="name"><br><br>

    Email :
    <input type="email" name="email" id="email"><br><br>

    Phone :
    <input type="text" name="phone" id="phone"><br><br>

    <button type="submit" id="save">Save</button>

</form>

<br>

<table border="1" cellpadding="10">
    <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
        </tr>
    </thead>

    <tbody id="tbody"></tbody>

</table>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>

$(document).ready(function(){

    loadData();

    function loadData(){

        $.ajax({

            url:"./fetch.php",
            type:"GET",

            success:function(data){

                $("#tbody").html(data);

            }

        });

    }

    $("#form").submit(function(e){

        e.preventDefault();

        $.ajax({

            url:"./insert.php",

            type:"POST",

            data:$(this).serialize(),

            success:function(response){

                //alert(response);

                $("#form")[0].reset();

                loadData();

            }

        });

    });

});

</script>

</body>
</html>