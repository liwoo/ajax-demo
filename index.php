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
      <form id="myForm">
        <label for="name">Enter Name</label>
        <input type="text" name="name" required />
        <br />
        <label for="class">Enter Class</label>
        <input type="text" name="class" required />
        <br />
        <input type="submit" id="submit" value="Good to Go!">
      </form>
    </div>
    <div style="width: 50%;">
      <p>Your Name: <span id="name"></span></p> 
      <p>Your Classroom: <span id="classroom"></span></p> 
    </div>
  </div>
</body>
<script>

  //1. Grab the submit button element
  const submitBtn = document.getElementById('submit');

  //2. Bind an event when a user clicks the submit button
  submitBtn.addEventListener('click', function(e) {
    e.preventDefault(); //3. Make sure to prevent default behaviour which will submit the form using php
    //4. Grab the Form element
    const form = document.getElementById('myForm');
    //5. Create an instance of FormData and pass the HTML Form element in the constructor
    const formData = new FormData(form);
    ajaxCall(formData)
  })

  const ajaxCall = (formData) => {
    //6. Create an instance of XHR
    const ajax = new XMLHttpRequest();
    //8. When the state has changed, check for some things...
    ajax.onreadystatechange = () => {
      //9. If successful and loaded...
      if(ajax.status === 200 && ajax.readyState === 4) {
        //10. Do whatever you want to do with the returned responseText
        document.getElementById('name').innerText =  JSON.parse(ajax.responseText).name
        document.getElementById('classroom').innerText =  JSON.parse(ajax.responseText).class
      }
    }
    //7. Establish the XHR Connection, always set asynchrhonous to TRUE
    ajax.open('POST', 'submit_student.php', true);
    //8. Send the formData to the open XHR Connection
    ajax.send(formData);
  }
</script>
</html>