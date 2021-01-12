@extends('med.pages.master')

@section('content')

    <div class="container">

    
        <div style="margin-top:120px">
            <h3 class="text-center">Booking List</h3>
            @foreach ($note as $data)
            <div style="border-top: 2px solid blue; border-bottom: 2px solid blue;" class="text-center">
            
                <b>Booking ID:  </b> {{ $data->id }}<br>
                <b>Ambulance ID:  </b> {{ $data->amb_id }}<br>
                <b>Date:  </b>  {{ $data->date }}<br>
                <b>Time:  </b>  {{ $data->time }}<br>
                 
                @if($data->status == '1')
                    <button class="btn btn-success">Accepted</button>
                @elseif($data->status == '0')
                    <button class="btn btn-warning">Denied</button>
                @else
                    <button class="btn btn-warning">Waiting</button>
                @endif
            </div>
            @endforeach
        </div>
    </div>

@endsection