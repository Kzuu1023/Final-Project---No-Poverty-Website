<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Login</title>
  <link rel="stylesheet" href="{{ asset('css/admin.css') }}"/>
</head>
<body>
   <main class="viewport">
      <section class="admin__login-container">
        <div class="form__container">
          <form action="" method ="POST">
          @csrf
              <h1>Admin Login</h1>
               <div class="email-container">
                   <label>Email</label>
                    <input type="text"  id="email"  name="email" placeholder="Email:"/>            
                </div>   
                
                <div class="password-container">
                   <label>Password</label>
                   <input type="password" id="password" name="password"  />
                 </div>    
                 
                 <div class="button__container">
                    <button class="submit">Log In</button>
                 </div>
                

            </div>
          </form>
      </section>
   </main>
</body>
</html>