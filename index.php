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
            <div class="col-md-5">
                <label for="fname" class="form-label">First Name</label>
                <input type="text" class="form-control" id="fname">
            </div><br>
            <div class="col-md-5">
                <label for="lname" class="form-label">Last Name</label>
                <input type="text" class="form-control" id="lname">
            </div><br>
            <div class="col-md-5">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div><br>
            <div class="dropdown">
                <label for="movieShowtime" class="form-label">Movie Showtime</label>
                <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                    Choose...
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <li><a class="dropdown-item" href="#">12:00</a></li>
                    <li><a class="dropdown-item" href="#">13:00</a></li>
                    <li><a class="dropdown-item" href="#">13:30</a></li>
                    <li><a class="dropdown-item" href="#">15:30</a></li>
                    <li><a class="dropdown-item" href="#">16:15</a></li>
                    <li><a class="dropdown-item" href="#">17:00</a></li>
                    <li><a class="dropdown-item" href="#">19:00</a></li>
                    <li><a class="dropdown-item" href="#">19:45</a></li>
                    <li><a class="dropdown-item" href="#">20:15</a></li>
                    <li><a class="dropdown-item" href="#">22:15</a></li>
                    <li><a class="dropdown-item" href="#">23:00</a></li>
                    <li><a class="dropdown-item" href="#">23:30</a></li>
                </ul>
            </div><br>
            <div class="col-md-2">
            <label for="dateOfBirth" class="form-label">Date of Birth</label>
            <input type="date" class="form-select" id="dateOfBirth">
            </div><br>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">I am not a robot. I swear!</label>
            </div><br>
            <button type="button" class="btn btn-success">Submit Purchase(s)</button>
</form>
    </body>
</html>