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
                <label for="fname" class="form-label">First Name</label>
                <input type="text" class="form-control" id="fname">
            </div>
            <div class="mb-3">
                <label for="lname" class="form-label">Last Name</label>
                <input type="text" class="form-control" id="lname">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="numberOfAttendees" class="form-label">Number of Tickets</label>
                <select id="numberOfAttendees" class="form-select">
                <option selected>Choose...</option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
                <option>5 or more</option>
                </select>
            </div>
            <div class="col-md-2">
            <label for="dateOfBirth" class="form-label">Date of Birth</label>
            <input type="date" class="form-select" id="dateOfBirth">
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <button type="button" class="btn btn-success">Submit Purchase</button>
</form>
    </body>
</html>