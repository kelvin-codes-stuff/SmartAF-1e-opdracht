@extends('layout.main')

@section('content')
<center>

    <h1>Upload een bestand! </h1>

    <br>

    <div class="file-upload">
        
        <div>
        <form action="/post-upload-file" method="POST" enctype="multipart/form-data">
            
            @csrf

            <label for="picture" class="form-label">Upload een bestand</label>
            <input class="form-control form-control-lg" id="picture" name="picture" type="file">

            <br>

            <input class="form-control" type="text" placeholder="Beschrijving" name="description">

            <br>

            <select class="form-select" aria-label="Default select example" name="piority">
                <option selected>Prioriteit</option>
                <option value="Laag">Laag</option>
                <option value="Middel">Middel</option>
                <option value="Hoog">Hoog</option>
            </select>

            <br>
            <br>
            
            <button type="submit" class="btn btn-primary">
                Sla je bestand op
            </button>

        </form>
        </div>
    </div>

</center>

<style>
.file-upload {
    margin-top: 50px;
    width: 65%;
}
</style>

@stop

