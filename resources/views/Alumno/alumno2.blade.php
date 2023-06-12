@extends('layouts.app')

@section('content')

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                {{-- <div class="card-header">{{ __('Parcial3') }} --}}
                    <img src="../img/logoITCA.PNG" class="logo" style="width: 100%;">
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <center><h1 style="color: rgb(0, 0, 0)"><b>Practico III</h1></b></center>
                    <center><h1 class="pt-4 pb-2" style="color: hsl(232, 91%, 35%)">Carlos Jonathan Rodriguez Tobar TDSV11C</h1></center><br>
                    <center><h1 class="pt-2 pb-2" style="color: hsl(232, 91%, 35%)">142722</h1></center>


                
                </div>
            </div>
        </div>
    </div>
</div>
 <!-- Importamos los scripts de bootstrap -->
 <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
@endsection