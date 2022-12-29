<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
        <link rel="stylesheet" href="//cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">

    </head>
    <body>
        @include('layout.nav')
        <div class="alert alert-success" role="alert">
            {{$msg}}
             </div>
      
        <div class="container">
            <table class="table table-primary" id="producttable">
      
        
                <h1 class="text-center">PRODUCTS</h1>
                <thead>
                    <tr>
                        <th scope="col">SN</th>
                        <th scope="col">image</th>
                        <th scope="col">Title</th>
                        <th scope="col">Summery</th>
                        <th scope="col"> Expiry Date</th>
                        <th scope="col"> Description</th>
                        <th scope="col"> Quality</th>
                        <th scope="col"> Category</th>
                        <th scope="col"> Action</th>
                    </tr>
                </thead>
                <tbody> 
                    @foreach ($products as $product)
                    <tr>
                        <td>SN</td>
                        <td><img src="{{asset('/storage/uploads/'.$product->img)}}" style="width: 100px; height: 100px"/></td>
                        <td>{{$product->title}}</td>
                        <td>{{$product->summary}}</td>
                        <td>{{$product->expiry}}</td>
                        <td>{{$product->Description}}</td>
                        <td> @if ($product->quality=="option1")
                            {{"Standard"}}
                            @else
                            {{"premium"}}
                            
                        @endif
                    </td>
                    
                        <td>  {{$product->category}}</td>
                      
                        <td>
                            <a href="{{route('delete',['id'=>$product->Product_id])}}">
                                <button class="btn btn-danger">Delete</button>
                              </a>
                               <a href="{{route('edit',['id'=>$product->Product_id])}}">
                                <button class="btn btn-primary">Edit</button>
                               </a>
                        </td>

                    </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
      
   

<script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
<script src="//cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>

   <script>
    $(document).ready( function () {
    $('#producttable').DataTable();
} );
    </script>

    </body>
</html>




