@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb mb-3">
            <div class="pull-left">
                <h2>Phones</h2>
            </div>
            <div class="pull-right">
                @can('phone-create')
                <a class="btn btn-success" href="{{ route('phones.create') }}"> Create New Phone</a>
                @endcan
            </div>
        </div>
    </div>


    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif


    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Price</th>
            <th width="280px">Action</th>
        </tr>
	    @foreach ($phones as $phone)
	    <tr>
	        <td>{{ ++$i }}</td>
	        <td>{{ $phone->name }}</td>
	        <td>Rp.{{ number_format($phone->price, 2) }}</td>
	        <td>
                <form action="{{ route('phones.destroy',$phone->id) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('phones.show',$phone->id) }}">Show</a>
                    @can('phone-edit')
                    <a class="btn btn-primary" href="{{ route('phones.edit',$phone->id) }}">Edit</a>
                    @endcan


                    @csrf
                    @method('DELETE')
                    @can('phone-delete')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    @endcan
                </form>
	        </td>
	    </tr>
	    @endforeach
    </table>

    {!! $phones->links() !!}


@endsection