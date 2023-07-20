@extends('layout.main')

@section('content')
<center>

    <br>

    <div class="file-edit">
        <div class="image_preview">
            <img src="/images/{{ $url }}" alt="picture" height="400" width="400">
        </div>


            <h2>Naam: {{ $img_data->file_name }}</h2>

            <h2>Beschrijving: {{ $img_data->file_description }}</h2>

            <h2>Pioriteit: {{ $img_data->file_piority }}</h2>

            <h2>Datum van de upload (en tijd): {{ $img_data->created_at }}</h2>

            <a href="/weergeven/{{ $img_data->file_name }}"><i class="material-icons">open_in_new</i></a>
            <a href="/verwijder/{{$img_data->file_name}}"><i class="material-icons">delete</i></a>
            <a href="/bewerk/{{$img_data->file_name}}"><i class="material-icons">edit</i></a>

    </div>

</center>

<style>
.file-edit {
    margin-top: 50px;
    width: 65%;
}
</style>

@stop

