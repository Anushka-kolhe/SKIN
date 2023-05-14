<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registration form</title>
  <link rel="stylesheet" href="sk.css">
</head>

<body style="background-color:#02AAB0;">
  <div class="container">
    <!-- user login form -->
    <div>
      <h1>SkinExpertise</h1>
    </div>
    <form>
      <fieldset>
        <div class="image">
          <!-- <img src="https://thumbs.dreamstime.com/z/find-doctor-icon-beautiful-meticulously-designed-93543562.jpg" -->
            <!-- alt="doctor">
          <h2 style="text-decoration: underline;">SkinExpertise</h2> -->
        </div>
        <!-- Name-->
        <div class="name">
        <label for="un">First Name</label>&nbsp
          <input type="text" name="username" id="un" placeholder="" autocomplete="off"><br>
          <br><label for="uno">Last Name</label>&nbsp
          <input type="text" name="username" id="uno" placeholder="" autocomplete="off">
        </div>
        <!-- gender -->
        <div class="hey">
        &nbsp &nbsp <br><label for="Gender" style="padding-right:10px;padding-top: 20px;">Gender:
          </label>
          <div class="section">
            <!-- skills-1 -->
            <input type="radio" name="gender" id="male">
         <label for="male">Male</label>
          </div>
          <div class="section">
            <!-- skills-2 -->
            <input type="radio" name="gender" id="female">
            <label for="female">Female</label>
          </div>
          <div class="section">
            <!-- skills-3 -->
            <input type="radio" name="gender" id="Other">
            <label for="Other">Other</label><br><br>
          </div>
          <div class="Blood">
            <label for="Blood"> Blood group</label> &nbsp 
            <input type="text" name="Blood" id="un" placeholder="" autocomplete="off">
          </div>
        </div>
        <!-- D-O-B -->
        <div class="section2">
          <div class="dobb">
            <br><label for="dob">D-O-B</label> &nbsp
            <input type="date" name="dob" id="dob">
          </div>
          <!-- Contact -->
          <div class="contact">
            <br><label for="Contact">Contact</label>&nbsp
            <input type="number" name="Contact" id="Contact">
          </div>
          <div class="Age">
           <br><label for="Age">Age</label>&nbsp
            <input type="number" name="Age" id="Age">
          </div>
        </div>
        <!-- email -->
        <div class="section3">
          <div class="email">
            <br><label for="email">Email</label>&nbsp
            <input type="email" name="email" id="email">
          </div>
          <!-- user state -->
          <div class="state">
           <br> <label for="state">State</label>&nbsp
            <input type="text" name="state" id="un" placeholder="" autocomplete="off">
          </div>
          <div class="Pin code">
            <br><label for="Pin code">Pin code</label>&nbsp
            <input type="number" name="Pin code" id="Pin code">
          </div>
        </div>
        <div class="section4">
          <div class="Guardian">
           <br> <label for="un">Marital Status</label>&nbsp
            <input type="text" name="username" id="un" placeholder="" autocomplete="off">
          </div>
          <div class="Fees">
           <br> <label for="Fees">Taking any medications,currently</label>&nbsp
            <input type="number" name="Fees" id="Fees">
          </div>
        </div>
        <!-- user Past Medical History -->
        <div class="fb">
          <br><label for="fb">Past Medical History</label>&nbsp
          <textarea name="Past Medical History" id="fb" rows="4"></textarea>
        </div>
        <!-- submit button -->
        <div>
          <br><button type="submit">Register</button>&nbsp
        </div>
      </fieldset>
    </form>
  </div>
</body>
