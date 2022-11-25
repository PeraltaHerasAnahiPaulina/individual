@include('layouts.header')
@include('layouts.menu')


@section('header')

@endsection


<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">venta</h1>
</div>


<!-- Content Row -->



<!-- Content Row -->
<div class="row">

    <!-- Content Column -->
    <div class="col-lg-12 mb-4">

        <!-- Project Card Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Alta producto</h6>
            </div>
            <div class="card-body">
                    
            <form action="{{ url('venta') }}" method="post">
            {!! csrf_field() !!}
                <label > fecha:</label>
                <input class="form-control" type="date" id="fecha" name="fecha">
                <label for=""> subtotal:</label>
                <input class="form-control" type="number" id="subtotal" name="subtotal">
                <label for=""> Total:</label>
                <input class="form-control" type="number" id="total" name="total">
                
                <div class="row">
                    <button type="submit" class="btn btn-primary m-3" value="save">Guadar</button>

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