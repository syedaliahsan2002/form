<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<center>
<form class="form" action="connect.php" method="POST">
    <p class="title">form </p>
    <p class="message">please fill out this form  </p>
        <div class="flex">
        <label>
            <input required="" placeholder="" type="text" class="input" name=first>
            <span>Firstname</span>
        </label>

        <label>
            <input required="" placeholder="" type="text" class="input" name=last>
            <span>Lastname</span>
        </label>
    </div>  
    <label class=gender>
    <span>gender</span>
        <input required="" placeholder="" type="radio" class="input" name="gender" value='male'>male
        <input required="" placeholder="" type="radio" class="input" name="gender"value='female'>female
        <input required="" placeholder="" type="radio" class="input" name="gender"value='other'>other
       </label>
    <label>
        <input required="" placeholder="" type="email" class="input" name="email">
        <span>Email</span>
    </label> 
        
    <label>
        <input required="" placeholder="" type="text" class="input" name="mobile">
        <span>mobile number</span>
    </label>
   
     <button class="submit">Submit</button>
        
</form></center>
</body>
</html>