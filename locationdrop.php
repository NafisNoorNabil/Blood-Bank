<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>

        <!-- Popper JS -->
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
        <meta charset="UTF-8" />
        <title>Info</title>
        <link
            href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;900&display=swap"
            rel="stylesheet"
        />
        <link rel="stylesheet" href="receivedonorinfo.css?v=<?php echo time(); ?>">
    </head>
    <body>

        <header>
            <div class="wrapper">




                <ul class="nav-area">
                    <li><a href="homepage.php"> Home </a></li>
                    <li><a href="#"> Donor </a></li>
                    <li><a href="receiver.php"> Receiver </a></li>
                    <li><a href="#"> Blood Bank </a></li>
                    <li><a href="#"> Logout </a></li>
                </ul>
                    <form action="" method="GET">


                            <option value="loc" <?php if(isset ($_GET['sort_alphabet']) && $_GET['sort_alphabet'] =="loc") {echo "selected";} ?>>Nearby Location</option>
                        </select>
                          
                
                        <form action="bookingdata.php" method="GET">
                        <div class="input-box">

                            <label for="bloodgroup">Choose Your Blood Group:</label>
                                <select type="text" name="bloodgroup">
                                    <option value="A+">A+</option>
                                    <option value="A-">A-</option>
                                    <option value="B+">B+</option>
                                    <option value="B-">B-</option>
                                    <option value="O+">O+</option>
                                    <option value="O-">O-</option>
                                    <option value="AB+">AB+</option>
                                    <option value="AB-">AB-</option>
                                </select>
                        <div class="input-box">
                            <label for="location">Enter Location:</label>
                                <select type="text" name="location">
                                    <option value="Adabor">Adabor</option>
                                    <option value="Badda">Badda</option>
                                    <option value="Bangsal">Bangsal</option>
                                    <option value="Bimanbandar">Bimanbandar</option>
                                    <option value="Cantonment">Cantonment</option>
                                    <option value="Chowkbazar">Chowkbazar</option>
                                    <option value="Darus Salam">Darus Salam</option>
                                    <option value="Demra">Demra</option>
                                    <option value="Dhanmondi">Dhanmondi</option>
                                    <option value="Gendaria">Gendaria</option>
                                    <option value="Gulshan">Gulshan</option>
                                    <option value="Hazaribagh">Hazaribagh</option>
                                    <option value="Jatrabari">Jatrabari</option>
                                    <option value="Kadamtali">Kadamtali</option>
                                    <option value="Kafrul">Kafrul</option>
                                    <option value="Kalabagan">Kalabagan</option>
                                    <option value="Kamrangirchar">Kamrangirchar</option>
                                    <option value="Khilgaon">Khilgaon</option>
                                    <option value="Khilkhet">Khilkhet</option>
                                    <option value="Kotwali">Kotwali</option>
                                    <option value="Lalbagh">Lalbagh</option>
                                    <option value="Mirpur">Mirpur</option>
                                    <option value="Mohammadpur">Mohammadpur</option>
                                    <option value="Motijheel">Motijheel</option>
                                    <option value="New Market">New Market</option>
                                    <option value="Pallabi">Pallabi</option>
                                    <option value="Paltan">Paltan</option>
                                    <option value="Panthapath">Panthapath</option>
                                    <option value="Ramna">Ramna</option>
                                    <option value="Rampura">Rampura</option>
                                    <option value="Sabujbagh">Sabujbagh</option>
                                    <option value="Shah Ali">Shah Ali</option>
                                    <option value="Shahbag">Shahbag</option>
                                    <option value="Sher-e-Bangla Nagar">Sher-e-Bangla Nagar</option>
                                    <option value="Shyampur">Shyampur</option>
                                    <option value="Sutrapur">Sutrapur</option>
                                    <option value="Tejgaon Industrial Area">Tejgaon Industrial Area</option>
                                    <option value="Tejgaon">Tejgaon</option>
                                    <option value="Turag">Turag</option>
                                    <option value="Uttar Khan">Uttar Khan</option>
                                    <option value="Vatara">Vatara</option>
                                    <option value="Wari">Wari</option>
                                </select>
                                <button type="submit" class="input-group-text" id="basic-addon2">Sort</button>

                                    </div>

                    </form>
                        </form>
                        <br>
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Donors</th>
                                        <th>Blood Group</th>
                                        <th>Location</th>
                                        <th>Phone</th>

                                    </tr>
                                </thead>
                            
                                <tbody>
                                    <?php

                                        $con = mysqli_connect("localhost","root","","blood");
                                        $sort_option= "";
                                        if(isset($_GET['submit']))
                                        {
                                            
                                        $bloodgroup= $_GET['bloodgroup'];
                                        $location= $_GET['location'];{
                                        }

                                        $query="SELECT latitude FROM location  WHERE location_name= $location limit 8" ;

                                        if(mysqli_num_rows($query_run)>0)
                                        {
                                            foreach($query_run as $row)
                                            {
                                                ?>
                                                <tr>
                                                    <td><?php echo $row['name'];?></td>
                                                    <td><?php echo $row['bloodgroup'];?></td>
                                                    <td><?php echo $row['location'];?></td>
                                                    <td><?php echo $row['phone'];?></td>
                                                    <td><input class= "contact" type="submit" name="donate" value="Contact"/></td>
                                                </tr>
                                                <?php 
                                            }
                                        }
                                        else
                                        {
                                            ?>
                                                <tr>
                                                    <td colspan="3">No Record Found</td>
                                                </tr>
                                            <?php
                                        }
                        
                                    ?>
                    
                                </tbody>

                    </table>
                <h2>Booking</h2>
                    <form action="bookingdata.php" method="POST">
                        <div class="input-box">

                            <label for="bloodgroup">Choose Your Blood Group:</label>
                                <select type="text" name="bloodgroup">
                                    <option value="A+">A+</option>
                                    <option value="A-">A-</option>
                                    <option value="B+">B+</option>
                                    <option value="B-">B-</option>
                                    <option value="O+">O+</option>
                                    <option value="O-">O-</option>
                                    <option value="AB+">AB+</option>
                                    <option value="AB-">AB-</option>
                                </select>

                        <div class="input-box">
                            <input
                                type="date"
                                name="date"
                                required
                            />
                        </div>
                        <div class="input-box">
                            <label for="location">Enter Location:</label>
                                <select type="text" name="location">
                                    <option value="Adabor">Adabor</option>
                                    <option value="Badda">Badda</option>
                                    <option value="Bangsal">Bangsal</option>
                                    <option value="Bimanbandar">Bimanbandar</option>
                                    <option value="Cantonment">Cantonment</option>
                                    <option value="Chowkbazar">Chowkbazar</option>
                                    <option value="Darus Salam">Darus Salam</option>
                                    <option value="Demra">Demra</option>
                                    <option value="Dhanmondi">Dhanmondi</option>
                                    <option value="Gendaria">Gendaria</option>
                                    <option value="Gulshan">Gulshan</option>
                                    <option value="Hazaribagh">Hazaribagh</option>
                                    <option value="Jatrabari">Jatrabari</option>
                                    <option value="Kadamtali">Kadamtali</option>
                                    <option value="Kafrul">Kafrul</option>
                                    <option value="Kalabagan">Kalabagan</option>
                                    <option value="Kamrangirchar">Kamrangirchar</option>
                                    <option value="Khilgaon">Khilgaon</option>
                                    <option value="Khilkhet">Khilkhet</option>
                                    <option value="Kotwali">Kotwali</option>
                                    <option value="Lalbagh">Lalbagh</option>
                                    <option value="Mirpur">Mirpur</option>
                                    <option value="Mohammadpur">Mohammadpur</option>
                                    <option value="Motijheel">Motijheel</option>
                                    <option value="New Market">New Market</option>
                                    <option value="Pallabi">Pallabi</option>
                                    <option value="Paltan">Paltan</option>
                                    <option value="Panthapath">Panthapath</option>
                                    <option value="Ramna">Ramna</option>
                                    <option value="Rampura">Rampura</option>
                                    <option value="Sabujbagh">Sabujbagh</option>
                                    <option value="Shah Ali">Shah Ali</option>
                                    <option value="Shahbag">Shahbag</option>
                                    <option value="Sher-e-Bangla Nagar">Sher-e-Bangla Nagar</option>
                                    <option value="Shyampur">Shyampur</option>
                                    <option value="Sutrapur">Sutrapur</option>
                                    <option value="Tejgaon Industrial Area">Tejgaon Industrial Area</option>
                                    <option value="Tejgaon">Tejgaon</option>
                                    <option value="Turag">Turag</option>
                                    <option value="Uttar Khan">Uttar Khan</option>
                                    <option value="Vatara">Vatara</option>
                                    <option value="Wari">Wari</option>
                                </select>

                                    </div>
                        <div class="input-box button">

                            <input type="Submit" name="submit" value="Confirm Booking" />
                        </div>
                    </form>
                    </div>
            </div>

        </header>
    </body>
</html>
