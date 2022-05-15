@extends('layouts.app')

@section('content')
    <div class="container">
        <h3>Beschikbaarheid checken</h3>
        <div class="col-12">
            <form>
                <div class="row form-group">
                    <label for="date" class="col-sm-1 col-form-label">Startdatum</label>
                    <div class="col-sm-4">
                        <div class="input-group date" id="datepicker">
                            <input type="text" class="form-control">
                            <span class="input-group-append">
                            <span class="input-group-text bg-white">
                                <i class="fa fa-calendar"></i>
                            </span>
                        </span>
                        </div>
                    </div>
                </div>
                <div class="row form-group">
                    <label for="date" class="col-sm-1 col-form-label">Einddatum</label>
                    <div class="col-sm-4">
                        <div class="input-group date" id="datepicker">
                            <input type="text" class="form-control">
                            <span class="input-group-append">
                            <span class="input-group-text bg-white">
                                <i class="fa fa-calendar"></i>
                            </span>
                        </span>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="">Plaatsnummer</label>
                    <select multiple class="form-control" name="plaats_id">

                        @foreach($plaatsen as $plaats)
                            <option value="{{$plaats->plaatstypen_id}}">{{$plaats->code}}&nbsp;{{$plaats->type}}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Check beschikbaarheid</button>
            </form>
        </div>
    </div>

    <script type="text/javascript">
        $(function() {
            $('#datepicker').datepicker();
        });
    </script>
@endsection
