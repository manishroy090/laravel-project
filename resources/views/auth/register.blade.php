
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('cssfile/auth.css')}}" />
    <script
      src="https://kit.fontawesome.com/c7de1c6b77.js"
      crossorigin="anonymous"
    ></script>
  </head>
  <body>
   
    <section>
      <div class="formcontainer">
        <div class="img">
          <img src="/formimg/img1.webp" />
        </div>
        <form action="{{url('/')}}/register" method="POST">
          @csrf
          <div class="logo">
            <div class="logo-icon"><i class="fa-solid fa-car icon"></i></div>
            
            <h1>Typico</h1>
          </div>
          <h1 class="heading">SignUP your account</h1>
          <div class="input-field">
            <i class="fa-solid fa-user"></i>
            <input type="text" placeholder="username"  id="user" name="name" value="{{old('name')}}"/>
            <span class="text-danger"> @error('name')
              {{$message}}
               @enderror</span>
            
         
          </div>
         
           
     
          <div class="input-field">
            <i class="fa-solid fa-envelope"></i>
            <input type="email" placeholder="Email" id="email" name="email" value="{{old('email')}}"/>
            <span class="text-danger"> @error('email')
              {{$message}}
               @enderror</span>
          </div>
          <div class="input-field">
            <i class="fa-solid fa-lock"></i>
            <input type="password" placeholder="password" id="password" autocomplete="" name="password"/>
            <span class="text-danger"> @error('password')
              {{$message}}
               @enderror</span>
          </div>
          <div class="input-field re-password">
            <i class="fa-solid fa-lock" id="rp"></i>
            <input type="password" placeholder="Re-type password" id="repassword" name="conpass" autocomplete="" />
            <span class="text-danger"> @error('conpass')
              {{$message}}
               @enderror</span>        
                </div>
         
           <button class="subbtn" id="btn">SignUP</button>
           <a href=""><p>Forgot password?</p></a>
           <div class="alreadyac">
            <p>Don't have an account? <a href="">Register here</a></p>
           </div>
          
        </form>
      </div>
    </section>
    <script src="./form.js"></script>
  </body>
</html>
