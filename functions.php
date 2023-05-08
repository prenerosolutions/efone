<?php
include('config.php');
session_start(); // start or resume the session

// Connect to the database using mysqli or PDO

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['signup_user'])) { // check if the form has been submitted

    // Validate and sanitize the input data using filter_var, trim, and stripslashes functions
    
    $first_name = $_POST['first-name'];
    $last_name = $_POST['last-name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $company = $_POST['company'];
    $address = $_POST['street-address'];
    $city = $_POST['city'];
    $postal_code = $_POST['postal-code'];
    $state = $_POST['state'];
    $country = $_POST['country'];
    $password = $_POST['password'];
    $user_role = $_POST['user-type'];
    $date_added = date('Y-m-d H:i:s');

    $cpassword = md5($password); // Hash the password using the built-in md5 function
    
    // Check if the email already exists in the database
    $stmt = $connect->prepare("SELECT COUNT(*) FROM customers WHERE email = ?");
    $stmt->execute([$email]);
    $count = $stmt->fetchColumn();

    if ($count > 0) { // email already exists, redirect to login page
        $_SESSION['success_msg'] = "Email already exists. Please log in.";
        header('Location: register.php');
        exit();
    } else { // email does not exist, register new account
        // Prepare the SQL statement using placeholders to prevent SQL injection attacks
        $sql = "INSERT INTO customers (first_name, last_name, email, password, phone, company, street_address, city, postal_code, state, country, user_role, date_added)
                VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        
        $stmt = $connect->prepare($sql);
        
        if ($stmt) {
            // Bind the parameters to the placeholders in the SQL statement
            $stmt->bindParam(1, $first_name);
            $stmt->bindParam(2, $last_name);
            $stmt->bindParam(3, $email);
            $stmt->bindParam(4, $cpassword);
            $stmt->bindParam(5, $phone);
            $stmt->bindParam(6, $company);
            $stmt->bindParam(7, $address);
            $stmt->bindParam(8, $city);
            $stmt->bindParam(9, $postal_code);
            $stmt->bindParam(10, $state);
            $stmt->bindParam(11, $country);
            $stmt->bindParam(12, $user_role);
            $stmt->bindParam(13, $date_added);
            
            // Execute the prepared statement
            if ($stmt->execute()) {
                $_SESSION['email'] = $email;
                $_SESSION['success'] = "Registered Successfully....";
                header('Location: login.php');
                exit();
            } else {
                $_SESSION['success_msg'] = "Something went wrong. Please try again.";
                header('Location: register.php');
                exit();
            }
        } else {
            $_SESSION['success_msg'] = "Something went wrong. Please try again.";
            header('Location: register.php');
            exit();
        }
    }
}

// Close


// LOGIN USER
if (isset($_POST['login_user'])) {
    $email = mysqli_real_escape_string($connect, $_POST['email']);
    $password = mysqli_real_escape_string($connect, $_POST['password']);
	
    if (empty($email)) {
        array_push($errors, "Email is required");
    }
    if (empty($password)) {
        array_push($errors, "Password is required");
    }

    $password = md5($password);

    // Check if email exists in database
    $query = "SELECT * FROM customers WHERE email='$email'";
    $result = mysqli_query($connect, $query);
    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        // Email exists, now check password
        if ($password == $row['password']) {
            // Password is correct, log in the user
            $_SESSION['first_name'] = $row['first_name'];
            $_SESSION['last_name'] = $row['last_name'];
            $_SESSION['email'] = $row['email'];
            $_SESSION['cus_id'] = $row['cus_id'];
            $_SESSION['user_role'] = $row['user_role'];
            $_SESSION['success'] = "You are now logged in";
            header('location: dashboard.php');
            echo "<script>alert('Login Successfully....')</script>";
        } else {
            // Password is incorrect
            array_push($errors, "Wrong username/password combination");
            echo "<script>alert('Invalid Email or Password. Try again')</script>";
            header('location: login.php');
        }
    } else {
        // Email does not exist in database
        array_push($errors, "Email does not exist in the database. Please register first.");
        header('location: signup.php');
    }
}


