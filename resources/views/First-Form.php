<!DOCTYPE html>
<html>
<head>
<title>First Form</title>
</head>
<body>
    <div class ="section">

    <h1>Enter your full name<h1>
    <form action ="enter-full-name" method ="POST">
    
    @for($i = 1; $i <= 5; $i++)    
    <div class="section2">
    <label>Student {{ i }} Full Name:</label>
    <input type="text" name="studentname" required>
    <small class="error"></small>
    </div>
    @endfor 

    <hr>
    <div class="section3">
    </div>
    
    <button type = "button">Submit</button>
</body>
</html>