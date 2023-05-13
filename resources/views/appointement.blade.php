<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="POST" class="appointement-form">
    @csrf
    <h2 class="form-title">Make an Appointment</h2>
    <div class="form-group">
        <input type="text" class="form-control" id="name" name="first_name" value="{{$donor->first_name}}" required>
    </div>
    <div class="form-group">
        <input type="text" class="form-control" id="name" name="last_name" value="{{$donor->last_name}}" required>
    </div>
    <div class="form-group">
        <input type="email" class="form-control" id="email" name="email" value="{{$donor->email}}" required>
    </div>
    <div class="form-group">
        <input type="tel" class="form-control" id="phone" name="phone" placeholder="Phone" required>
    </div>
    <div class="form-group">
        <input type="text" class="form-control" id="hospital" name="center" placeholder="Center name" required>
    </div>
    <div class="form-group">
        <input type="date" class="form-control" id="appointment_date" name="appointment_date" required>
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-primary btn-block">Submit</button>
    </div>
</form>
<style>
.appointement-form {
  max-width: 400px;
  margin: 0 auto;
  padding: 30px;
  border: 1px solid #ddd;
  border-radius: 5px;
  background-color: #fff;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.form-title {
  margin-bottom: 30px;
  text-align: center;
  font-size: 24px;
  font-weight: bold;
  color: #ddd;
}

.form-group {
  margin-bottom: 20px;
}

.form-control {
  display: block;
  width: 100%;
  height: 40px;
  padding: 10px;
  font-size: 16px;
  line-height: 1.5;
  color: #19A7CE;
  background-color: #fff;
  border: 1px solid #ddd;
  border-radius: 5px;
}

.form-control:focus {
  border-color: #2d7ae5;
  box-shadow: none;
}

.btn-primary {
  display: block;
  width: 100%;
  height: 40px;
  padding: 10px;
  font-size: 16px;
  font-weight: bold;
  color: #fff;
  background-color: #2d7ae5;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  transition: background-color 0.3s ease;
}

.btn-primary:hover {
  background-color: #1d5cad;
}

</style>

<script>
 // Get the form elements
const phoneInput = document.getElementById('phone');

// Add an event listener to the phone input
phoneInput.addEventListener('input', () => {
    const phoneRegex = /^(07|06|05)\d{8}$/;
    const phoneValue = phoneInput.value;
    
    // Check if the phone number matches the regex
    if (!phoneRegex.test(phoneValue)) {
        phoneInput.setCustomValidity('Phone number must start with 07, 06, or 05 and have 10 digits');
    } else {
        phoneInput.setCustomValidity('');
    }
});

// Get the form elements
const dateInput = document.getElementById('appointment_date');

// Add an event listener to the date input
dateInput.addEventListener('input', () => {
    const dateValue = new Date(dateInput.value);
    
    // Check if the date is not a Friday
    if (dateValue.getDay() === 5) {
        dateInput.setCustomValidity('Date cannot be a Friday');
    } else {
        dateInput.setCustomValidity('');
    }
});


</script>
    
</body>
</html>