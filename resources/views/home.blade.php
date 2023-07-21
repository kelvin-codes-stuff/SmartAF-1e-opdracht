@extends('layout.main')

@section('content')
<center>

    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <h1> Home pagina! </h1>

    @if (session('error'))
            <div class="alert alert-danger" role="alert">
                {{ session('error') }}
            </div>
    @endif
    
    @if (session('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif

    <div class="upload-button">
        <a href="/upload-file" class="btn btn-primary btn-lg active" role="button">Upload een bestand</a>
    </div>

    <br>

    <div class="files-table">
        <table class="table">
        <thead>
            <tr>
                <th scope="col">Datum</th>
                <th scope="col">Beschrijving</th>
                <th scope="col">Pioriteit</th>
                <th scope="col">Bestandsnaam</th>
                <th scope="col">Open</th>
                <th scope="col">Verwijder</th>
                <th scope="col">Bewerk</th>
                <th scope="col">Download</th>

            </tr>
        </thead>

        @foreach ($data as $file)

        <tbody>
            <tr>
            <th scope="row">{{ $file->created_at }}</th>
            <td>{{ $file->file_description }}</td>
            <td>{{ $file->file_piority }}</td>
            <td>{{ $file->file_name }}</td>
            <td><a href="/weergeven/{{ $file->file_name }}"><i class="material-icons">open_in_new</i></a></td>
            <td><a href="/verwijder/{{ $file->file_name }}"><i class="material-icons">delete</i></a></td>
            <td><a href="/bewerk/{{ $file->file_name }}"><i class="material-icons">edit</i></a></td>
            <td><a href="/images/{{ $file->file_name }}" download="{{ $file->file_name }}"><i class="material-icons">download</i></a></td>

            </tr>

        </tbody>

        @endforeach

    
        </table>
    </div>
</center>

<style>
.files-table {
    margin-top: 50px;
    width: 65%;
}

.upload-button {
    position: absolute;
    right: 0;
    padding: 5px;
}

</style>

@stop

