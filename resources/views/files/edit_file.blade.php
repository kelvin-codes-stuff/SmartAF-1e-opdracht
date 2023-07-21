@extends('layout.main')

@section('content')
<center>

    <h1>Bewerk een bestand! </h1>

    <br>

    <div class="file-edit">
        <div class="image_preview">
            <img src="/images/{{ $url }}" alt="picture" height="400" width="400">
        </div>

        <form action="/post-bewerk/{{ $url }}" method="POST" enctype="multipart/form-data">
            
            @csrf

            <p>Bewerk de naam</p>
            <input class="form-control" type="text" placeholder="Naam" name="name" value={{ $img_data->file_name }}>

            <p>Bewerk de beschijving</p>
            <input class="form-control" type="text" placeholder="Beschrijving" name="description" value={{ $img_data->file_description }}>

            <br>

            <select class="form-select" aria-label="Default select example" name="piority">
                <option selected>{{ $img_data->file_piority }}</option>
                <option value="Laag">Laag</option>
                <option value="Middel">Middel</option>
                <option value="Hoog">Hoog</option>
            </select>

            <br>
            <br>
            
            <button type="submit" class="btn btn-primary">
                Sla je bestand op
            </button>

            <a href="/images/{{ $url }}" download="{{ $url }}">Download</a>

        </form>
    </div>

</center>

<style>
.file-edit {
    margin-top: 50px;
    width: 65%;
}
</style>

@stop

