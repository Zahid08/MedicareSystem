
@extends('admin.master')

@section('AdminPanel')
  Consulting
@endsection
@section('content')
    <br>
<h2 style="text-align: center;color: #0d6aad;margin-top: 10px;">Consulting</h2><hr>
<form method="post" action="{{url('/docttor/consulting')}}">
    {{csrf_field()}}
<div class="form-group col-sm-3">
    <label for="exampleInputEmail1">Doctor Name</label>

    <select class="form-control" name="doctorid">
        <option>-------Select doctor name----</option>
        @foreach($doctors as $doctor)

        <option value="{{$doctor->id}}">{{$doctor->doctor_name}}</option>
@endforeach
    </select>
</div>
    <div class="col-sm-5 " style="margin-top: 27px; width: 200px;">
        <input id="submit" type="submit" class="btn btn-primary" value="Search">
    </div>
</form>

<br><br>

        <style>
            #customers {
                font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
                border-collapse: collapse;
                width: 100%;
            }

            #customers td, #customers th {
                border: 1px solid #ddd;
                padding: 8px;
            }

            #customers tr:nth-child(even){background-color: #f2f2f2;}

            #customers tr:hover {background-color: #ddd;}

            #customers th {
                padding-top: 12px;
                padding-bottom: 12px;
                text-align: left;
                background-color: #4CAF50;
                color: white;
            }
        </style>

    @if($data = Session::get('data'))
    <table id="customers">
        <tr>
            <th>Saturday</th>
            <th>Sunday</th>
            <th>Monday</th>
            <th>Tuesday</th>
            <th>Wednesday</th>
            <th>Thursday</th>
        </tr>
        <tr>
            <td style="color: white;background-color:#0d8ebd;text-align: center;">{{$data->saturday}}</td>
            <td style="color: darkgray;">NONE</td>
            <td style="color: darkgray;">NONE</td>
            <td style="color: darkgray;">NONE</td>
            <td style="color: darkgray;">NONE</td>
            <td style="color: darkgray;">NONE</td>

        </tr>
        <tr>
            <td style="color: darkgray;">NONE</td>
            <td style="color: white;background-color:#0d8ebd;text-align: center;">{{$data->sunday}}</td>
            <td style="color: darkgray;">NONE</td>
            <td style="color: darkgray;">NONE</td>
            <td style="color: darkgray;">NONE</td>
            <td style="color: darkgray;">NONE</td>
        </tr>
        <tr>
            <td style="color: darkgray;">NONE</td>
            <td style="color: darkgray;">NONE</td>
            <td style="color: white;background-color:#0d8ebd;text-align: center;">{{$data->monday}}</td>
            <td style="color: darkgray;">NONE</td>
            <td style="color: darkgray;">NONE</td>
            <td style="color: darkgray;">NONE</td>
            <td style="color: darkgray;">NONE</td>
        </tr>
        <tr>
            <td style="color: darkgray;">NONE</td>
            <td style="color: darkgray;">NONE</td>
            <td style="color: darkgray;">NONE</td>
            <td style="color: white;background-color:#0d8ebd;text-align: center;">{{$data->tuesday}}</td>
            <td style="color: darkgray;">NONE</td>
            <td style="color: darkgray;">NONE</td>
        </tr>
        <tr>
            <td style="color: darkgray;">NONE</td>
            <td style="color: darkgray;">NONE</td>
            <td style="color: darkgray;">NONE</td>
            <td style="color: darkgray;">NONE</td>
            <td style="color: white;background-color:#0d8ebd;text-align: center;">{{$data->wednesday}}</td>
            <td style="color: darkgray;">NONE</td>
        </tr>
        <tr>

            <td style="color: darkgray;">NONE</td>
            <td style="color: darkgray;">NONE</td>
            <td style="color: darkgray;">NONE</td>
            <td style="color: darkgray;">NONE</td>
            <td style="color: darkgray;">NONE</td>
            <td style="color: white;background-color:#0d8ebd;text-align: center;">{{$data->thursday}}</td>

        </tr>


    </table>
@endif
@endsection

