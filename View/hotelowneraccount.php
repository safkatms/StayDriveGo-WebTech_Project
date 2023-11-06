

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account</title>
</head>

<body>
    <?php include_once('header.php'); ?>
    <section style="display: flex;">
        <div style="width: 20%; display: flex; height: auto;">
            <?php include_once('hotelownermenu.php') ?>
        </div>
       
        <div style="width: 80%;display: flex;height: auto;">
            <fieldset style="width: 100%;">
            <section style="display:flex;">
            <div style="width: 30%;display:flex;  height: auto;">
                    <fieldset style="width: 100%; justify-content: center;">
                        <img src="../Asset/profilePic.jpg" alt="" height="150px" width="150px" >
                        <br>
                        <a href="">Change Profile Picture</a>
                    </fieldset>
                </div>
                <div style="width: 70%;display: flex;height: auto;  ">
                    <fieldset style="width: 100%;">
                        <table>
                            <tr>
                                <td>
                                    Firstname:
                                </td>
                                <td>
                                    <?php echo $usersinfo[0]['firstname']; ?>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Lastname:
                                </td>
                                <td>
                                    <?php echo $usersinfo[0]['lastname']; ?>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Username:
                                </td>
                                <td>
                                    <?php echo $usersinfo[0]['username']; ?>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Email:
                                </td>
                                <td>
                                    <?php echo $usersinfo[0]['email']; ?>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Mobile:
                                </td>
                                <td>
                                    <?php echo $usersinfo[0]['mobile']; ?>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Date of Birth:
                                </td>
                                <td>
                                    <?php echo $usersinfo[0]['dob']; ?>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Gender:
                                </td>
                                <td>
                                    <?php echo $usersinfo[0]['gender']; ?>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="hotelowneredit.php">Edit Profile</a>
                                </td>
                                <td>
                                    <a href="hotelownerpassword.php">Change password</a>
                                </td>
                            </tr>
                        </table>
                    </fieldset>

                </div>
            </section>
                

            </fieldset>

        </div>
    </section>
    <?php include_once('footerpublic.php'); ?>
</body>

</html>