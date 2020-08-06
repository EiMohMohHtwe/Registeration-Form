<!DOCTYPE html>
<html>

  <form action="/user" method="post">
    @csrf
   <div class="container">
    <h1>Register</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>

    <label for="name"><b>Name</b></label>
    <input type="text" placeholder="Enter Name" name="name" id="name" required><br/><br/>

    <label for="age"><b>Age</b></label>
    <input type="number" placeholder="Enter Age" name="age" id="age" required><br/><br/>

    <label for="Birthday"><b>Birthday</b></label>
    <input type="text"placeholder="Enter Birthday" name="birth" id="birth" required><br/><br/>

    <label for="Address"><b>Address</b></label>
    <input type="text"placeholder="Enter Address" name="address" id="address" required><br/><br/>


    <label for="Phone"><b>Phone</b></label>
    <input type="tel"placeholder="(Area code) Number" name="phone" id="phone" required><br/><br/>
    
    <input type="hidden" name="_token" value="{{csrf_token()}}">
   

    
    <input type="submit" value="submit" class="btn btn-primary">
     </hr>
  </div>

  <div class="container signin">
    <p>Already have an account? <a href="#">Sign in</a>.</p>
  </div>
</form> 
</html>


