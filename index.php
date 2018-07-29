<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Ajax-Demo</title>
</head>
<body>
  <h1>Welcome to the Demo</h1>
  <div style="display: flex; flex-direction: row; width: 50%;">
    <div style="width: 50%;">
      <br />
      <form action="submit_student.php" method="post">
        <label for="name">Enter Name</label>
        <input type="text" name="name" required />
        <br />
        <label for="class">Enter Class</label>
        <input type="text" name="class" required />
        <br />
        <input type="submit" value="Good to Go!">
      </form>
    </div>
    <div style="width: 50%;">
      <p>Your Name: </p> 
      <p>Your Classroom: </p> 
    </div>
  </div>
</body>
</html>