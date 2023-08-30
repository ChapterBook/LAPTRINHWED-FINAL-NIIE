<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect to login page
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true){
    header('location: login.php');
    exit;
}
 
// Include config file
require_once 'config/config.php';
 
// Define variables and initialize with empty values
$new_password = $confirm_password = '';
$new_password_err = $confirm_password_err = '';
$current_password_err = ''; // Initialize this variable

// Processing form data when form is submitted
if($_SERVER['REQUEST_METHOD'] == 'POST'){

    // Validate new password
    if(empty(trim($_POST['new_password']))){
        $new_password_err = 'Please enter the new password.';     
    } elseif(strlen(trim($_POST['new_password'])) < 6){
        $new_password_err = 'Password must have at least 6 characters.';
    } else{
        $new_password = trim($_POST['new_password']);
    }
    
    // Validate confirm password
    if(empty(trim($_POST['confirm_password']))){
        $confirm_password_err = 'Please confirm the password.';
    } else{
        $confirm_password = trim($_POST['confirm_password']);
        if(empty($new_password_err) && ($new_password != $confirm_password)){
            $confirm_password_err = 'Password did not match.';
        }
    }

    // Additional validation for current password
    $current_password = trim($_POST['current_password']);
    if(empty($current_password)){
        $current_password_err = 'Please enter your current password.';
    } else{
        // Prepare a select statement to check current password
        $sql = 'SELECT password FROM users WHERE id = ?';

        if($stmt = $mysql_db->prepare($sql)){
            $stmt->bind_param('i', $_SESSION['id']);
            if($stmt->execute()){
                $stmt->store_result();
                if($stmt->num_rows == 1){
                    $stmt->bind_result($hashed_password);
                    if($stmt->fetch()){
                        if(password_verify($current_password, $hashed_password)){
                            // Current password is correct, proceed with reset
                        } else{
                            $current_password_err = 'Invalid current password.';
                        }
                    }
                }
            }
            $stmt->close();
        }
    }
    
    // Check input errors before updating the database
    if(empty($new_password_err) && empty($confirm_password_err) && empty($current_password_err)){
        // Prepare an update statement
        $sql = 'UPDATE users SET password = ? WHERE id = ?';
        
        if($stmt = $mysql_db->prepare($sql)){
            // Set parameters
            $param_password = password_hash($new_password, PASSWORD_DEFAULT);
            $param_id = $_SESSION['id'];

            // Bind variables to the prepared statement as parameters
            $stmt->bind_param('si', $param_password, $param_id);

            // Attempt to execute the prepared statement
            if($stmt->execute()){
                // Password updated successfully. Destroy the session, and redirect to login page
                session_destroy();
                header('location: login.php');
                exit();
            } else{
                echo 'Oops! Something went wrong. Please try again later.';
            }

            // Close statement
            $stmt->close();
        }

        // Close connection
        $mysql_db->close();
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Reset Password</title>
    <link href="https://stackpath.bootstrapcdn.com/bootswatch/4.4.1/cosmo/bootstrap.min.css" rel="stylesheet" integrity="sha384-qdQEsAI45WFCO5QwXBelBe1rR9Nwiss4rGEqiszC+9olH1ScrLrMQr1KmDR964uZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style type="text/css">
        body {
            margin: 0;
            padding: 0;
            overflow: hidden;
        }
        video {
            width: 100vw;
            height: 100vh;
            position: fixed;
            top: 0;
            left: 0;
            object-fit: cover;
            z-index: -1;
        }
        .overlay {
            width: 100%;
            height: 100%;
            position: fixed;
            top: 0;
            left: 0;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: -1;
        }
        .wrapper {
            width: 500px;
            padding: 20px;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: rgba(255, 255, 255, 0.4);
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5);
        }
        .wrapper h2 {
            text-align: center;
            color: white;
        }
        .wrapper form .form-group span {
            color: red;
        }
        .login-button {
            animation: rainbow 3s linear infinite;
        }
        @keyframes rainbow {
            0% {
                color: red;
            }
            20% {
                color: orange;
            }
            40% {
                color: yellow;
            }
            60% {
                color: green;
            }
            80% {
                color: blue;
            }
            100% {
                color: violet;
            }
        }
        .form-group {
            margin-bottom: 15px;
        }
        label {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <video playsinline autoplay muted loop>
        <source src="polina.webm" type="video/webm">
        <source src="./video english.mp4" type="video/mp4">
    </video>
    <div class="overlay"></div>
    <main class="container wrapper">
        <section>
            <h2>Reset Password</h2>
            <p>Please fill out this form to reset your password.</p>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post"> 
                <div class="form-group <?php echo (!empty($current_password_err)) ? 'has-error' : ''; ?>">
                    <label>Current Password</label>
                    <input type="password" name="current_password" class="form-control">
                    <span class="help-block"><?php echo $current_password_err; ?></span>
                </div>
                <div class="form-group <?php echo (!empty($new_password_err)) ? 'has-error' : ''; ?>">
                    <label>New Password</label>
                    <div class="input-group">
                        <input type="password" name="new_password" id="new_password" class="form-control" value="<?php echo $new_password; ?>">
                        <div class="input-group-append">
                            <span class="input-group-text" id="toggleNewPassword">
                                <i class="fa fa-eye-slash" aria-hidden="true"></i>
                            </span>
                        </div>
                    </div>
                    <span class="help-block"><?php echo $new_password_err; ?></span>
                </div>

                <div class="form-group <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>">
                    <label>Confirm Password</label>
                    <div class="input-group">
                        <input type="password" name="confirm_password" id="confirm_password" class="form-control">
                        <div class="input-group-append">
                            <span class="input-group-text" id="toggleConfirmPassword">
                                <i class="fa fa-eye-slash" aria-hidden="true"></i>
                            </span>
                        </div>
                    </div>
                    <span class="help-block"><?php echo $confirm_password_err; ?></span>
                </div>

                <div class="form-group">
                    <input type="submit" class="btn btn-block btn-primary login-button" value="Submit">
                    <a class="btn btn-block btn-link bg-light" href="Kindergarten\home.php">Cancel</a>
                </div>
            </form>
        </section>
    </main> 
    <script>
        const newPasswordInput = document.getElementById('new_password');
        const confirmPasswordInput = document.getElementById('confirm_password');
        const toggleNewPassword = document.getElementById('toggleNewPassword');
        const toggleConfirmPassword = document.getElementById('toggleConfirmPassword');

        toggleNewPassword.addEventListener('click', function () {
            const type = newPasswordInput.getAttribute('type') === 'password' ? 'text' : 'password';
            newPasswordInput.setAttribute('type', type);

            // Toggle eye icon
            if (type === 'password') {
            toggleNewPassword.innerHTML = '<i class="fa fa-eye-slash" aria-hidden="true"></i>';
            } else {
            toggleNewPassword.innerHTML = '<i class="fa fa-eye" aria-hidden="true"></i>';
            }
        });

        toggleConfirmPassword.addEventListener('click', function () {
            const type = confirmPasswordInput.getAttribute('type') === 'password' ? 'text' : 'password';
            confirmPasswordInput.setAttribute('type', type);

            // Toggle eye icon
            if (type === 'password') {
            toggleConfirmPassword.innerHTML = '<i class="fa fa-eye-slash" aria-hidden="true"></i>';
            } else {
            toggleConfirmPassword.innerHTML = '<i class="fa fa-eye" aria-hidden="true"></i>';
            }
        });
    </script>
   
</body>
</html>
