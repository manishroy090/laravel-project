<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
 
   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.18/css/bootstrap-select.min.css" integrity="sha512-ARJR74swou2y0Q2V9k0GbzQ/5vJ2RBSoCWokg4zkfM29Fb3vZEQyv0iWBMW/yvKgyHSR/7D64pFMmU8nYmbRkg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/1.1.2/js/bootstrap-multiselect.min.js" integrity="sha512-lxQ4VnKKW7foGFV6L9zlSe+6QppP9B2t+tMMaV4s4iqAv4iHIyXED7O+fke1VeLNaRdoVkVt8Hw/jmZ+XocsXQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    

    
</head>

<body>
  @include('layout.nav')
  <div class="alert alert-success" role="alert">
 {{$msg}}
  </div>
  <div class="container">
  
    <form class="row g-3" action="{{url('/')}}/storeproduct" method="post" enctype="multipart/form-data">
        @csrf
       
          <h1 class="text-center text-primary ">{{$title}} </h1>
        
      
            
    
        <div class="col-md-4">
            <label for="inputtitle" class="form-label">Email:</label>
            <input type="email" class="form-control" id="inputtitle" name="email">
          </div>
          <span class="text-danger">
            @error('email')
            {{$message}}
            @enderror
          </span>
        <div class="col-md-4">
          <label for="inputtitle" class="form-label">Title:</label>
          <input type="text" class="form-control" id="inputtitle" name="title" value="">
        </div>
        
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Summary:</label>
            <textarea class="form-control" id="summary" rows="3" name="summary"></textarea>
          </div>
        <div class="form-group">
            <label for="description"> Description:</label>
            <textarea class="form-control" id="description" rows="3" name="Description"></textarea>
        </div>
        <div class="col-md-9">
        <fieldset class="row mb-3">
            <legend class="col-form-label col-sm-2 pt-0">Quality:</legend>
            <div >
              <div class="form-check">
                <input class="form-check-input" type="radio" name="quality" id="gridRadios1" value="option1" checked>
                <label class="form-check-label" for="gridRadios1">
                  Standard
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="quality" id="gridRadios2" value="option2">
                <label class="form-check-label" for="gridRadios2">
                    premium 
                </label>
              </div>
              
            </div>
          </fieldset>
        </div>
        <div class="multi_select_box">
       
          <select  class="multi_select" multiple name="category[]" >
            <option value="" selected disabled >Category</option>
            <option value="Winter">Winter</option>
            <option value="summer">Summer</option>
            <option value="men wear">Men wear</option>
            <option value="women wear">Women Wear</option>
          </select>
          </div>
            <div class="col-md-6">
                <label for="inputimage" class="form-label">Product_img:</label>
                <input type="file" class="form-control" id="inputimage" name="img">
              </div>
              <div class="col-md-4 mt-2">
                <label for="date" class=" col-form-label">Expiry Date</label>
                <div class="col-sm-8">
                    <div class="input-group date" id="datepicker">
                        <input type="text" class="form-control" name="expiry">
                        
                        <span class="input-group-append ">
                            <span class="input-group-text bg-white h-100">
                                <i class="fa fa-calendar"></i> 
                            </span>
                        </span>
                    </div>
                </div>
            </div>
             
              <div class="d-grid gap-2 mt-4 mb-4">
 
                <button class="btn btn-primary" type="submit">Add</button>
              </div>
      </form>
</div>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.18/js/bootstrap-select.min.js" integrity="sha512-yDlE7vpGDP7o2eftkCiPZ+yuUyEcaBwoJoIhdXv71KZWugFqEphIS3PU60lEkFaz8RxaVsMpSvQxMBaKVwA5xg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.ckeditor.com/ckeditor5/35.4.0/classic/ckeditor.js"></script>
<script>
  ClassicEditor
      .create( document.querySelector( '#description' ) )
      .catch( error => {
          console.error( error );
      } );
</script>
<script type="text/javascript">
//datepicker//
  $(function(){
   $('#datepicker').datepicker({
    format: 'yy/mm/dd',
            autoclose: true,
            todayHighlight: true
   });
 })
//category//
</script>

 <script type="text/javascript">
  $(document).ready(function(){
  $('.multi_select').selectpicker();
  })

  </script>
@yield('con')


  
</body>

</html>