
@extends('adminlte::page')

@section('title', 'Carteros | Domicilios')

@section('content_header')
    <div>
        <h1 class="text-info  text-left">Balance Domicilios</h1>
    </div>

@stop
@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.7/css/responsive.bootstrap4.min.css">
@stop
@section('content')

    <div class="row">
            <div class="col-8 card">
                <div class="card-body">
                    <table id="domiciliostable" class="table table-striped" style="width:100%">

                        <thead>
                        <tr>
                            <th>Mes</th>
                            <th>Cantidad</th>
                            <th>Dinero total</th>
                        </tr>
                        </thead>
                        <tbody>

                        <tr>
                            <td>Octubre</td>
                            <td>153</td>
                            <td>6.598.3256 </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-3 ml-4">
               <div class="row">
                   <h1 class="text-secondary">Total</h1>
               </div>
                <div class="row">
                    <h4 class="text-info">Cantidad :<label class="border-bottom text-dark">136</label></h4>
                </div>
                <div class="row">
                    <h4 class="text-info">Dinero Total :<label class=" border-bottom text-dark">9721349</label></h4>
                </div>
            </div>
    </div>
@stop



@section('js')
    <script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.7/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.7/js/responsive.bootstrap4.min.js"></script>
    <script>
        $('#domiciliostable').DataTable({
            responsive:true,
            autoWidth: false,
            "language": {
                "lengthMenu": "Mostrar "+
                    `<select class='custom-select custom-select-sm form-control form-control-sm'>
                             <option value='10'>10</option>
                             <option value="25">25</option>
                             <option value='50'>50</option>
                             <option value="100">100</option>
                             <option value="-1">ALL</option>
                        </select>` +
                    " registros por página",
                "zeroRecords": "Nada encontrado - Disculpa",
                "info": "Mostrando la página  _PAGE_ de _PAGES_",
                "infoEmpty": "No records available",
                "infoFiltered": "(Filtrado de _MAX_  registros totales)",
                "search":'Buscar:',
                "paginate":{
                    'next':'siguiente',
                    "previous":'anterior'
                }
            }

        });
    </script>
@stop
