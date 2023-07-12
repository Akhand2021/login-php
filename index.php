<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ALgocodersmind|Remember Me</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <style>
        .container {
            width: 400px;
            height: 350px;
            display: flex;
            /* added */
            justify-content: center;
            /* added */
            align-items: center;
            /* added */
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: #f5f5f5;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5);
        }

        #login-form {
            background-color: transparent;
            padding: 10px;
            width: 300px;
            margin: auto;
            /* added */
            box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3);
            /* added */
        }
        input[type=submit] {
            background-color: blue;
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            border: none;
            cursor: pointer;
            font-size: 16px;
        }

        /* CSS for the input field */
        input {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            box-sizing: border-box;
            border: 2px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
        }
        input {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            box-sizing: border-box;
            border: 2px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
        }
    </style>
</head>

<body>
    <div class="container">
        <form id="login-form" action="login.php" method="post">
            <label for="username">Username:</label>
            <input type="text" name="username" autocomplete="off" id="username">

            <label for="password">Password:</label>
            <input type="password" name="password"  autocomplete="off" id="password">

            <label for="remember-me">Remember Me:</label>
            <input type="checkbox" name="remember_me" id="remember-me">

            <input type="submit" value="Log In">
        </form>
    </div>
    <script>
        $(document).ready(function() {
            // When page loads, check if "remember me" checkbox is checked and fill in username and password fields if there are saved credentials
            if (localStorage.checkbox && localStorage.checkbox != '') {
                $('#remember-me').prop('checked', true);
                $('#username').val(localStorage.username);
                $('#password').val(localStorage.password);
            } else {
                $('#remember-me').prop('checked', false);
                $('#username').val('');
                $('#password').val('');
            }

            // When "remember me" checkbox is clicked, save the username and password fields to local storage if it's checked
            $('#remember-me').change(function() {
                if ($(this).is(':checked')) {
                    // Save the login data to local storage
                    localStorage.username = $('#username').val();
                    localStorage.password = $('#password').val();
                    localStorage.checkbox = $(this).val();
                } else {
                    // Clear the login data from local storage
                    localStorage.username = '';
                    localStorage.password = '';
                    localStorage.checkbox = '';
                }
            });

            // Handle form submit
            $('#login-form').on('submit', function(e) {
                // Check if remember me is checked
                var username = $('#username').val();
                var password = $('#password').val();
                // Validate the login credentials
                    // If "remember me" is checked, save the login data to local storage
                    if ($('#remember-me').is(':checked')) {
                        localStorage.username = username;
                        localStorage.password = password;
                        localStorage.checkbox = $('#remember-me').val();
                    } else { // Clear the login data from local storage
                        localStorage.username = '';
                        localStorage.password = '';
                        localStorage.checkbox = '';
                    }
            });
        });
    </script>


</body>

</html>