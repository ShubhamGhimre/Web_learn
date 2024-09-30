 <!-- Sessions and cookies are crucial for maintaining state and user data in server-side applications, especially in web applications where HTTP is stateless. They help manage user authentication, preferences, and track user behavior across multiple requests. Here’s an overview of both concepts and how session handling is done in PHP.  -->

 <!-- sessions -->

 <!--  Sessions are server-side data storage mechanisms that allow web applications to store user-specific data across multiple requests. They are typically used for user authentication, tracking user activity, and maintaining user preferences. -->

 <!-- role -->
    <!-- 
        User Authentication: 
             Sessions are commonly used to keep track of whether a user is logged in or not.
    -->
    <!-- 
        Temporary Data Storage: 
            Sessions allow you to store temporary data that is specific to a user’s session, such as shopping cart contents or form data.       
    -->
    <!-- 
        Security: 
            Since session data is stored on the server, it’s generally more secure than cookies, which can be manipulated on the client side. 
    -->

 <!-- example -->
 <?php
    // Start the session
    session_start();
    ?>
 <?php
    // storing data in session variables
    $_SESSION['username'] = 'Shubham'; // Store username in session
    $_SESSION['loggedin'] = true;       // Store login status
    ?>
 <?php
    // Accessing session variables
    if (isset($_SESSION['username'])) {
        echo "Welcome, " . $_SESSION['username'] . "!";
    } else {
        echo "Please log in.";
    }
    ?>
 <?php
    session_start();

    // Unset all session variables
    $_SESSION = array();

    // Destroy the session
    session_destroy();

    echo "You have been logged out.";

    ?>