@extends('app')
@section('title','Event')
@section('content-title','Event')
@section('content')
<div class="container-fluid py-4">
    <div class="row">
        <div class = "row">
            <div class = "col-lg-12">
                <div class = "card shadow mb-4">
                    <div class = "card-body">
                        <table class="table text-center table-borderless">
                            <thead>
                                <th></th>
                                <th>Acara</th>
                                <th>Start Date</th>
                                <th>End Date</th>
                                <th>Action</th>
                            </thead>
                            <tbody>
                                <tr>
                                    @foreach ($event as $item)
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$item->title}}</td>
                                    <td>{{$item->start}}</td>
                                    <td>{{$item->end}}</td>
                                    <td>
                                        <a class="btn btn-primary " href="#" onclick="show('{{ $item->id }}', event)" data-toggle="modal" data-target="#eventModal"><i class="ni ni-air-baloon"></i></a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal modal-event" id="eventModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">

</div>
<script>
    function show(id){
        $.get('/full-calender/list/'+id, function(data){
            $('.modal-event').html(data);
        })
    }
</script>
@endsection