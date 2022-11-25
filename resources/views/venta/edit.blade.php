@include('layouts.header')
@include('layouts.menu')


@section('header')

@endsection


<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">venta Editar</h1>
   </div>


<!-- Content Row -->



<!-- Content Row -->
<div class="row">

    <!-- Content Column -->
    <div class="col-lg-12 mb-4">

        <!-- Project Card Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Editar venta</h6>
            </div>
            <div class="card-body">
                
            <form action="{{url('venta/' .$venta->id) }}" method="post">
                {!! csrf_field() !!}
                @method("PATCH")
                <input class="form-control" type="text" value="{{$venta->id}}" aria-label="Disabled input example" disabled>
                <label for=""> Fecha:</label>
                <input class="form-control" type="date" id="fecha" name="fecha" value="{{$venta->fecha}}">
                <label for=""> Subtotal:</label>
                <input class="form-control" type="number" id="subtotal" name="subtotal" value="{{$venta->subtotal}}">
                <label for=""> Total:</label>
                <input class="form-control" type="number" id="total" name="total" value="{{$venta->total}}">
            
                <div class="row">
                    <a class="btn btn-danger m-3"  href="/venta" >Cancelar</a>
                    <button type="submit" class="btn btn-primary m-3" value="update">Guadar</button>
                </div>
            </form>
            </div>
        </div>

       

    </div>

  
</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

@include('layouts.footer')

