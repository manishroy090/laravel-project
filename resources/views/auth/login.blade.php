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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

  </head>
  <body>
    @if (session('msg'))
    <div class="alert alert-success" role="alert">
    {{session('msg')}}
    </div>
    @endif
    
    <section>
      <div class="formcontainer">
        <div class="img">
          <img src="/formimg/img1.webp" />
        </div>
        <form action="{{url('/')}}/login" method="POST">
          @csrf
          <div class="logo">
            <div id="logo-icon"><i class="fa-solid fa-car icon"></i></div>
            
            <h1>Typico</h1>
          </div>
          <h1 class="heading">Sign into your account</h1>
         
          
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
         
         
           <button class="subbtn" id="btn">LOGIN</button>
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
