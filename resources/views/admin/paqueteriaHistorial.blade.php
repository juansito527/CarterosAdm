
@extends('adminlte::page')

@section('title', 'Carteros | Domicilios')

@section('content_header')
    <h1 class="text-info ">Paqueteria Historial</h1>
@stop
@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.7/css/responsive.bootstrap4.min.css">
@stop
@section('content')
    <div class="card">
        <div class="card-body">
            <table id="domiciliostable" class="table table-striped  " style="width:100%">

                <thead>
                <a href="{{route('paqueteriavista')}}" class="text-secondary border rounded bg-light">ACTIVOS</a><label for="" class="text-secondary mx-2"> / </label>
                <a href="{{route('paqueteriahistori')}}" class="text-secondary border rounded bg-light">HISTORIAL</a>
                <tr>
                    <th>Id servicio</th>
                    <th>Cartero</th>
                    <th>Estado</th>
                    <th>Valor</th>
                    <th>Tiempo</th>
                    <th>Dirección de entrega</th>


                </tr>
                </thead>
                <tbody>

                <tr>
                    <td>2</td>
                    <td>Juan Hernandez</td>
                    <td>Entregado</td>
                    <td>35000</td>
                    <td>1:35</td>
                    <td>calle 95a #34-25</td>


                </tr>

                </tbody>
            </table>
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
