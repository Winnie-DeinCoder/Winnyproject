<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>






    <style>
   
     body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background-color: #f7f7f7;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    height: 100%; 
   }


        form {
            background-color: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.1);
            width: 50%;
            max-width: 800px;
            color: #333;
        }

        h1 {
            text-align: center;
            color: #3f3f3f;
            margin-bottom: 20px;
        }

        p {
            text-align: center;
            color: #777;
            margin-bottom: 30px;
        }

        .header {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }

        .header img {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            margin-right: 15px;
            border: 2px solid #ddd;
        }

        fieldset {
            border: none;
            margin-bottom: 20px;
        }

        label {
            display: block;
            font-size: 14px;
            margin-bottom: 8px;
            color: #444;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"],
        input[type="tel"],
        input[type="date"],
        select,
        input[type="search"] {
            width: 100%;
            padding: 10px;
            border-radius: 5px;
            border: 2px solid #ccc;
            background-color: #f7f7f7;
            margin-bottom: 15px;
            font-size: 14px;
            color: #333;
        }

        input[type="text"]:focus,
        input[type="email"]:focus,
        input[type="password"]:focus,
        input[type="tel"]:focus,
        input[type="date"]:focus,
        select:focus,
        input[type="search"]:focus {
            border-color: #4CAF50;
            outline: none;
            box-shadow: 0 0 8px rgba(76, 175, 80, 0.5);
        }

        button {
            background-color: #4CAF50;
            color: white;
            padding: 12px;
            border: none;
            border-radius: 5px;
            width: 100%;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #45a049;
        }

        legend {
            font-size: 1.1rem;
            color: #4CAF50;
            font-weight: bold;
        }

        table {
            width: 100%;
            margin-top: 30px;
            border-collapse: collapse;
            background-color: #fafafa;
        }

        table th,
        table td {
            padding: 12px;
            text-align: left;
            border: 1px solid #ddd;
        }

        table th {
            background-color: #4CAF50;
            color: white;
        }

        table td {
            background-color: #f9f9f9;
        }

        table tr:nth-child(even) td {
            background-color: #f1f1f1;
        }

        .footer {
            text-align: center;
            margin-top: 30px;
            font-size: 0.9rem;
            color: #777;
        }

        
        @media (max-width: 768px) {
            form {
                width: 90%;
                padding: 20px;
                align-items: center;
            }

            h1 {
                font-size: 1.6rem;
            }

            button {
                font-size: 14px;
            }

            table {
                font-size: 0.9rem;
            }
        }

    </style>

</head>
<body>

    <form action="#" method="post">
    <h1>Worker's registration form</h1>
        <p>Fill in this to put in the company's workers</p>
        <fieldset class="f1"><header class="header"><img src="account.png"alt="Personal Info"><h2>Worker's personal info</h2></header><br>
    
            <label>Enter your first name:  <input type="text"name="first-name" required></label><br>
            <label>Enter your second name:  <input type="text" name="second-name"required></label><br>
            <label>Enter your Email:  <input type="text" name="Email" placeholder="worker's@gmail.com" required></label><br>
            <label>Enter your password:  <input type="password" name="password"required></label><br>
            <label>Enter phone number:<input type="tel" name="telephone" max="10" min="10"></label><br>
            <label>Date<input type="date"name="date"></label><br>
            
            <select id="citizenship" name="citizenship" required>
                <option value="" disabled selected>Select your citizenship</option>
                <option value="USA" >United States</option>
                <option value="UK" >United Kingdom</option>
                <option value="Canada">Canada</option>
                <option value="India">India</option>
                <option value="Australia">Australia</option>
                <option value="Rwanda">Rwanda</option>
                <option value="Uganda">Uganda</option>
                <option value="Egypt">Egypt</option>
                <option value="Ethiopia">Ethiopia</option>
                <option value="Ghana">Ghana</option>
                <option value="Winny">South Africa</option>
            </select>
        </fieldset>
        <fieldset class="f2"><legend>Gender</legend>
           <select name="gender" value="gender">
            <option value="" disabled selected>--Select your gender</option>
            <option>Female</option>
            <option>Male</option>
            <option>Non_gender based</option><br>
            <label>Search for another gender<input type="search"></label>
            <button type="submit" value="this">I choose this</button>
           </select></fieldset>

           <fieldset>
  <legend>Field of Working</legend>
  <label>
    <input type="radio" name="field" value="software_development"> Software Development<br>
  </label>
  <label>
    <input type="radio" name="field" value="embedded_systems"> Embedded Systems<br>
  </label>
  <label>
    <input type="radio" name="field" value="networking"> Networking<br>
  </label>
  <label>
    <input type="radio" name="field" value="cyber_security"> Cyber Security<br>
  </label>
  <label>
    <input type="radio" name="field" value="robotics"> Robotics<br>
  </label>
  <label>
    <input type="radio" name="field" value="backend_developer"> Backend Developer<br>
  </label>
  <label>
    <input type="radio" name="field" value="web_designer"> Web Designer<br>
  </label>
  <label for="bioInput">Write your bio here:</label><br>
  <textarea id="bioInput" name="bio" placeholder="Write your bio here..." rows="4" required></textarea><br><br>
</fieldset>
    <fieldset><legend>Location</legend>
       <select name="province">
       <option value="" disabled selected>---Select your province</option>
        <option  name="province">Northern</option>
        <option  name="province">Western</option>

        <option  name="province">Eouthern</option>

        <option  name="province">Eastern</option>

        <option  name="province">Kigali city</option>

       </select>
       <label>District<input type="text" name="district"></label>
    
    </fieldset>
    <fieldset>
        <label>Time:<input type="time" name="timeSee" id></label>
        <div class="form-group">
        <label for="rating">Rate My Website (1-5):</label>
        <input type="range" id="rating" name="rating" min="1" max="5" step="1" value="2">
        
      </div> 
        
</div>

        
    </fieldset>
    <div class="g-recaptcha" data-sitekey="6LfFB4cqAAAAAA_5OkpPBfQ9OzCF5PS_NoGTRNrL"></div>


        <button value="submit">Submit Form</button>
        
        </form>
      
    <?php
   if($_SERVER["REQUEST_METHOD"]==="POST"){
    $firstname=$_POST["first-name"];
    $secondname=$_POST["second-name"];
    $email=$_POST["Email"];
    $password=$_POST["password"] ;
    $date=$_POST["date"];
    $genderOption=$_POST["gender"];
    $field=$_POST["field"] ;
    $citizenshipOption=$_POST["citizenship"];
    $province=$_POST["province"];
    $district=$_POST["district"];
    $tel=$_POST["telephone"];
    $rating=$_POST["rating"];
    $bio=$_POST["bio"];
    $time=$_POST["timeSee"];

  echo "<table>";
    echo "<tr>
    <th>First Name</th>
    <th>Second Name</th>
    <th>Citizenship</th>
    <th>Email</th>
    <th>Password</th>
    <th>Province</th>
    <th>District</th>

    <th>Gender</th>
    <th>Field of working</th>
    <th>Date</th>
    <th>Rating</th>
    <th>Bio</th>
    <th>Time</th>
    </tr>";
    echo "<tr>
        <td> $firstname</td>
        <td> $secondname</td>
        
        <td> $citizenshipOption</td>
       
        <td> $email</td>
        <td> $password</td>
        <td> $province</td>
        <td> $district</td>
        <td> $genderOption</td>
        <td> $field</td>
        <td> $date</td>
        <td> $rating</td>
        <td> $bio</td>
        <td> $time</td>
        </tr>";
    
echo "</table>";
$recaptcha_response = $_POST['g-recaptcha-response'];
$secret_key = '6LfFB4cqAAAAAESC8CpYI_kCyeyJvEtUeUp9BeH_'; 

// Verify the reCAPTCHA response with Google
$verify_url = 'https://www.google.com/recaptcha/api/siteverify';
$response = file_get_contents($verify_url . "?secret=" . $secret_key . "&response=" . $recaptcha_response);
$response_keys = json_decode($response, true);

if ($response_keys["success"]) {
    echo 'CAPTCHA verified successfully!';
    
} else {
    echo 'Please verify that you are not a robot.';
}
    }
   


?>

    
    
</body>
</html>