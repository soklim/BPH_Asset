@extends('layouts.default')

{{-- Page title --}}
@section('title')
    Requested Licenses
@stop

{{-- Account page content --}}
@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="box box-default">
                <div class="box-body">
                    <form>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>License</label>
                                <input type="text" class="form-control" id="licenses">
                            </div>
                            <div class="form-group">
                                <label>Note</label>
                                <textarea  class="form-control" id="licenses"></textarea>
                            </div>
                        </div>

                    </form>


                </div> <!-- .box-body -->
            </div> <!-- .box-default -->
        </div> <!-- .col-md-9 -->
    </div> <!-- .row-->

@stop
@section('moar_scripts')
    @include ('partials.bootstrap-table')
@stop
