@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-mb-6">
        @if($errors->any())
        @foreach($errors->all as $err)
        <p class="alert alert-danger">{{$err}}</p>
        @endforeach
        @endif
    </div>
</div>
<form method="POST" action="{{ route('pencatatan.update', $data->id) }}">
    @csrf
    @method('PUT')

    <div class="row">
        <div class="col-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                </div>
                <div class="card-body">        
                        <label>Dinas</label>
                        <input type="text" class="form-control" nama="Dinas" required value="{{old('Dinas')}}">
                    </div>    
                    <div class="card-body">
                        <label>Alamat</label>
                        <input type="text" class="form-control" nama="Alamat" required value="{{old('Alamat')}}">
                    </div>
                    <div class="card-body">
                        <label>Data</label>
                        <input type="text" class="form-control" nama="Data" required value="{{old('Data')}}">
                    </div>
                    </form>
                </div>
                <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </div>
    </div>
    
</form>
@endsection