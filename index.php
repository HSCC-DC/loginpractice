<!DOCTYPE html>
    <head>
        <title>One Piece</title>
        <?php
            require('bootstrap_script.html');
            require('insert_user.php');
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
        <h2 style="color:white; text-align: center;">One Piece - Movie Ticket Purchasing</h2><br>
            <div class="d-flex justify-content-center align-items-center">
                <form>
                    <div class="col-md-8 ">
                        <label for="fname" class="form-label">First Name</label>
                        <input type="text" class="form-control" id="fname" name="fname">
                    </div><br>
                    <div class="col-md-8 ">
                        <label for="lname" class="form-label">Last Name</label>
                        <input type="text" class="form-control" id="lname" name="lname">
                    </div><br>
                    <div class="col-md-8 ">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
                        <div id="emailHelp" class="form-text" style="color: white;">We'll never share your email with anyone else.</div>
                    </div><br>
                    <div class="dropdown">
                        <label for="movieShowtime" class="form-label">Movie Showtime</label>
                     
                        <select name="showtime"  aria-labelledby="dropdownMenuButton1">
                            <option value="12:00" href="#">12:00</option>
                            <option value="13:00" href="#">13:00</option>
                            <option value="13:30" href="#">13:30</option>
                            <option value="15:30" href="#">15:30</option>
                            <option value="16:15" href="#">16:15</option>
                            <option value="17:00" href="#">17:00</option>
                            <option value="19:00" href="#">19:00</option>
                            <option value="19:45" href="#">19:45</option>
                            <option value="20:15" href="#">20:15</option>
                            <option value="22:15" href="#">22:15</option>
                            <option value="23:00" href="#">23:00</option>
                            <option value="23:30" href="#">23:30</option>
                     </select>
                    </div><br>
                    <div class="col-md-5">
                    <label for="dateOfBirth" class="form-label">Date of Birth</label>
                    <input type="date" class="form-select" id="dateOfBirth" name="dob">
                    </div><br>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">I am not a robot. I swear!</label>
                    </div><br>
                    <button type="submit" class="btn btn-success" name="submit">Submit Purchase(s)</button>
             </form>
        </div>
    </body>
</html>