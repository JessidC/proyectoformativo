@extends('layouts.app')

@section('titulo')
Compra Segura
@endsection

@section('css')

@endsection

@section('content')


<!-- Modal -->
<div class="d-flex justify-content-center">
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">

                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <input type="text" class="modal-title form-control" id="tituloP" aria-describedby="basic-addon1" readonly>
                        </div>

                        <div class="modal-body">

                            <img class="input-group" src="" id="imagenP">

                            <div class="input-group">
                                <span class="input-group-text">$</span>
                                <input type="text" class="modal-title form-control" id="valor" aria-describedby="basic-addon1" readonly>
                            </div>
                            <div class="input-group">
                                <span class="input-group-text">Cantidad existente</span>
                                <input type="text" class="modal-title form-control" id="cantidad" aria-describedby="basic-addon1" readonly>
                            </div>
                            <div class="input-group">
                                <span class="input-group-text">Descripción</span>
                                <textarea id="descripcionP" class="form-control" aria-label="With textarea" readonly></textarea>
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>

            </div>
        </div>

@endsection

@section('js')

@stop