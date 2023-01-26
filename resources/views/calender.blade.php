@extends('app')
@section('title','Event')
@section('content-title','Event')
@section('content')
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.js"></script>
</head>
<body>
    <div class="container-fluid py-4">
        <div class="row">
            <div class = "row">
                <div class = "col-lg-12">
                    <div class = "card shadow mb-4">
                        <div class = "card-body">
                            <div class="container">
                                <div class="position-relative">
                                <a href="/full-calender/list" class="position-absolute top-0 start-0">List acara</a><br>
                                <a href="user/register" class="position-absolute top-0 end-0">Register</a><br>
                                </div>
                                <div id="calendar"></div>
                                <ul>
                                    <li>Ketuk pada tanggal untuk menambahkan Acara</li>
                                    <li>Seret pada acara untuk memperpanjang/memperpendek durasi acara, pindahkan acara untuk memindahkan ke hari lainnya</li>
                                    <li>Acara hanya dapat dihapus dan diganti penggunanya oleh admin</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="calendarModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambahkan Jadwal</h5>
                  </div>
                <div id="modalBody" class="modal-body">
                <form action="/full-calender/save" method="POST" enctype="multipart/form-data">
                    @csrf
                        <label for="title">Acara</label>
                        <input type="text" placeholder="Acara" name="title" id="title" class="form-control" value="{{old('title')}}">
                        <label for="id_ruangan">Ruangan</label>
                        <select type="text" name="id_ruangan" id="id_ruangan" class="form-control">
                            <option selected value="">Pilih Ruangan</option>
                            @foreach($ruangan as $item)
                            <option value="{{$item->id}}">{{$item->Namaruangan}}</option>
                            @endforeach
                        </select>
                        <label for="id_user">Token User</label>
                        <input type="text" name="id_user" id="id_user" placeholder="Token User" class="form-control" value="{{old('id_user')}}">
                        <label for="start">Start Time</label>
                        <input type="datetime-local" class="form-control" name="start" id="start" value="{{old('start')}}">
                        <label for="end">End Time</label>
                        <input type="datetime-local" class="form-control" name="end" id="end" value="{{old('end')}}">
                        @if (count($errors) > 0)
                            <ul class="text-danger">
                                @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                    @endif
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
            </div>
        </div>
        </div>
<script>

$(document).ready(function () {

    $.ajaxSetup({
        headers:{
            'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content')
        }
    });

    var calendar = $('#calendar').fullCalendar({
        editable:true,
        header:{
            left:'prev,next today',
            center:'title',
            right:'month,agendaWeek,agendaDay'},
        events:'/full-calender',
        selectable:true,
        selectHelper: true,
        select:function(start, end, allDay)
        {
            $("#calendarModal").modal("show");
            // var title = prompt('Event Title:');
            // var id_ruangan = prompt('Ruangan:');
            // var id_user = prompt('Token User:');
            

            // if(id_user)
            // {
            //     var start = $.fullCalendar.formatDate(start, 'Y-MM-DD HH:mm:ss');

            //     var end = $.fullCalendar.formatDate(end, 'Y-MM-DD HH:mm:ss');

            //     $.ajax({
            //         url:"/full-calender/action",
            //         type:"POST",
            //         data:{
            //             title: title,
            //             id_ruangan: id_ruangan,
            //             id_user: id_user,
            //             start: start,
            //             end: end,
            //             type: 'add'
            //         },
            //         success:function(data)
            //         {
            //             calendar.fullCalendar('refetchEvents');
            //             alert("Event Created Successfully");
            //         }
            //     })
            // }
        },
        editable:true,
        eventResize: function(event, delta)
        {
            var start = $.fullCalendar.formatDate(event.start, 'Y-MM-DD HH:mm:ss');
            var end = $.fullCalendar.formatDate(event.end, 'Y-MM-DD HH:mm:ss');
            var title = event.title;
            var id = event.id;
            $.ajax({
                url:"/full-calender/save",
                type:"POST",
                data:{
                    title: title,
                    start: start,
                    end: end,
                    id: id,
                    type: 'update'
                },
                success:function(response)
                {
                    calendar.fullCalendar('refetchEvents');
                    alert("Acara berhasil diperbarui");
                }
            })
        },
        eventDrop: function(event, delta)
        {
            var start = $.fullCalendar.formatDate(event.start, 'Y-MM-DD HH:mm:ss');
            var end = $.fullCalendar.formatDate(event.end, 'Y-MM-DD HH:mm:ss');
            var title = event.title;
            var id = event.id;
            $.ajax({
                url:"/full-calender/save",
                type:"POST",
                data:{
                    title: title,
                    start: start,
                    end: end,
                    id: id,
                    type: 'update'
                },
                success:function(response)
                {
                    calendar.fullCalendar('refetchEvents');
                    alert("Acara berhasil diperbarui");
                }
            })
        },

        // eventClick:function(event)
        // {
        //     if(confirm("Are you sure you want to remove it?"))
        //     {
        //         var id = event.id;
        //         $.ajax({
        //             url:"/full-calender/show",
        //             type:"GET",
        //             data:{
        //                 id:id,
        //                 type:"show"
        //             },
        //             success:function(response)
        //             {
        //                 calendar.fullCalendar('refetchEvents');
        //                 alert("Event Deleted Successfully");
        //             }
        //         })
        //     }
        // }
    });

});
  
</script>
@endsection