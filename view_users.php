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
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
                    <a class="navbar-brand" href="#">One Piece: Red - Movie Registration</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="view_users.php">View Users</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.php">Contact</a>
                        </li>
                    </ul>
                    <form class="d-flex" role="search">                                
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                    </div>
            </div>
        </nav><br>
        <div class="container py-4">
        <h2 style="color:white; text-align: center;">One Piece - Movie Ticket Purchasing</h2><br>
        <div class="col-md-12">
        <div class="h-100 w-100 p-5 bg-light border rounded-3" style="color: black;">
          <h4 align="center">List of Registers Users</h4>
          <table class="table table-dark table-hover">
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Showtime</th>
            <th>DOB</th>
            <th></th>

          <?php
            require("conn.php");
            //Create query to select data from registration table
            $sql="SELECT * from registration";
            $results=mysqli_query($connection, $sql);
            while($row=mysqli_fetch_assoc($results))
            {
                echo "<tr>";
                echo "<td>" . $row["first_name"]. "</td>";
                echo "<td>". $row["last_name"]. "</td> "; 
                echo "<td>" . $row["email"]. "</td>" ; 
                echo "<td>" . $row["showtime"]. "</td>";
                echo "<td>" . $row["dob"] . "</td>";
            ?>
            <td>
                <button type="button" class="btn primary" data-bs-toggle="modal" data-bs-target="#userConfirmModal">
                 <a href="#">Undo Purchase</a>
                </button>
            </td>
            
            <!-- Modal -->
                <div class="modal fade" id="userConfirmModal" tabindex="-1" aria-labelledby="userConfirmModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="userConfirmModalLabel">Are you sure?</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Are you sure you want to cancel this user's movie ticket purchase?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <a href="delete_user.php?id=<?php echo $row['user_id'];?>"><button type="button" class="btn btn-danger">Undo Purchase</button></a>
                    </div>
                    </div>
                </div>
                </div>
        <?php
            echo "</tr>"; 
             }
            ?> 
        </table>
        </div>
      </div>
     </body>
</html>