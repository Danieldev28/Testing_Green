
<?php
if (($_SERVER['REQUEST_METHOD'] == 'POST') && (!empty($_POST['action']))):
// Form validation

        
  $first_name = $_POST['fname'];
  $last_name = $_POST['lname'];
  $email = $_POST['email'];
  $phone_number = $_POST['phone'];
  $city = $_POST['city'];
  $postal_code = $_POST['pcode'];
  $size= $_POST['size'];
  $heard = $_POST['heard'];
  $price = $_POST['price'];
  $inlineRadioOptions = $_POST['inlineRadioOptions'];
 

  if (isset($_POST['fname'])){
      $fname = filter_var($_POST['fname'],FILTER_SANITIZE_STRING);
  } 
  if (isset($_POST['lname'])){
      $lname = filter_var($_POST['lname'],FILTER_SANITIZE_STRING);
  }
  if (isset($_POST['email'])){$email = $_POST['email'];}
  if (isset($_POST['phone'])){$phone = $_POST['phone'];}
  if (isset($_POST['city'])){$city = $_POST['city'];}
  if (isset($_POST['pcode'])){$pcode = $_POST['pcode'];}
  if (isset($_POST['size'])){$size = $_POST['size'];}
  if (isset($_POST['heard'])){$heard = $_POST['heard'];}                           
  if (isset($_POST['price'])){$price = $_POST['price'];}                          
  if (isset($_POST['inlineRadioOptions'])){$inlineRadioOptions = $_POST['inlineRadioOptions'];}                           
  $success = '';

if($fname === '') :
   $err_fname = '<div class= "error"> Sorry, your first name is a required field</div>';
endif; //input field empty

     if($lname === '') :
    $err_lname = '<div class="error"> Sorry, your last name is a required field</div>';
endif; //input field empty

   if($email === '') :
    $err_email = '<div class="error"> Sorry, your email is a required field</div>';
endif; //input field empty

  if($phone === '') :
    $err_phone = '<div class="error"> Sorry, your phone number is a required field</div>';
endif; //input field empty
if($city === '') :
    $err_city = '<div class="error"> Sorry, your city is a required field</div>';
endif; //input field empty
if($pcode === '') :
    $err_pcode = '<div class="error"> Sorry, your postal code is a required field</div>';
endif; //input field empty
 
    // Upon Success.
        if ($fname != '' && $lname != '' && $email != '' && $phone != '' && $city != '' && $pcode != '') {
            // Change $success variable from an empty string.
            $success = 'success';

            // Insert whatever you want to do upon success.

        } else {
            // Upon Failure.
            echo '<p class="error">Fill in all fields.</p>';

            // Set $success variable to an empty string.
            $success = '';
        }
 
?>
<?php
 // Connect to the database
  $dbc = mysqli_connect('localhost', 'danieldev28', 'Z1dUUEA8dz28B03Q', 'registration_db')
      or die('Error connecting to MySQL server.'); 


// Update the data in the database
  $query = "INSERT INTO signup_record  (first_name, last_name, email, phone_number, " .
    "city, postal_code, size, heard, price, inlineRadioOptions) " .
    "VALUES ('$first_name', '$last_name', '$email', '$phone_number','$city', '$postal_code', " .
    "'$size', '$heard','$price','$inlineRadioOptions')";

// Query the database
 
  $result = mysqli_query($dbc, $query)
    or die('Error querying database.');

// Close connection string
  mysqli_close($dbc);

endif; //form submitted
?>

