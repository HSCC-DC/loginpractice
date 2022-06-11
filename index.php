<!DOCTYPE html>
    <head>
        <title>One Piece</title>
        <?php
            require('bootstrap_script.html');
        ?>
        <style>
            body {
                background-image: url('one-piece-red.png');
                font-family: monospace;
                color: white;
            }

        </style>
    </head>
    <body >
        <!--Your code starts here-->
        <h2 style="color:white;">One Piece - Movie Ticket Purchasing</h2><br>
        <form>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <button type="button" class="btn btn-success">Submit Purchase</button>
</form>
    </body>
</html>