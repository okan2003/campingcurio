@extends('layouts.app')

@section('content')
<div class="container">
    <h3>Dashboard camping curio</h3>
    <div class="col-12">
{{--        <div class="card">--}}
{{--            <div class="card-header">--}}
{{--                <a href="{{url('gasten')}}" class="btn btn-primary float-start">Gasten</a>--}}
{{--                <a href="{{url('reserveringen')}}" class="btn btn-primary float-start">Reserveringen</a>--}}
{{--            </div>--}}
{{--        </div>--}}
        <div class="card-body">
            <table class="table">
                <thead>
                <th>Gasten naam</th>
                <th>Reservering naam</th>
                </thead>
                <tbody>
                <tr>
                    <td>test</td>
                    <td>test 2</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
