<link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css') }}">
<div class="container">
    <h1>Formulario para agregar archivos por formato</h1>
    <br>

    <form action="{{ route('files.store')}}" enctype="multipart/form-data" method="post">
        @csrf

    <div class="mb-3 row">
        <label class="col-sm-2 col-form-label d-grid gap-2 d-md-flex justify-content-md-end">Imágenes</label>
        <div class="col-sm-10">
            <input accept=".jpg, .jpeg, .bmp, .png, .gif" type="file" class="form-control" nome="img_file">
        </div>
    </div>
    <div class="mb-3 row">
        <label class="col-sm-2 col-form-label d-grid gap-2 d-md-flex justify-content-md-end">PDF's</label>
        <div class="col-sm-10">
            <input accept="application/pdf" type="file" class="form-control" nome="pdf_file">
        </div>
    </div>
    <div class="mb-3 row">
        <label class="col-sm-2 col-form-label d-grid gap-2 d-md-flex justify-content-md-end">audio</label>
        <div class="col-sm-10">
            <input accept=".mp3, .m4a, .ogg" type="file" class="form-control" nome="audio_file">
        </div>
    </div>
    <div class="mb-3 row">
        <label class="col-sm-2 col-form-label d-grid gap-2 d-md-flex justify-content-md-end">Archivo de office</label>
        <div class="col-sm-10">
            <input accept=".doc, .docx, .xls, .xlsx, .ppt, .pptx" type="file" class="form-control" nome="office_file">
        </div>
    </div>
    <div class="mb-3 row">
        <label class="col-sm-2 col-form-label d-grid gap-2 d-md-flex justify-content-md-end">Videos</label>
        <div class="col-sm-10">
            <input accept=".mkv, .mp4, .wmv" type="file" class="form-control" nome="video_file">
        </div>
    </div>

        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <button class="btn btn-info me-md-2" type="reset">Restablecer</button>
            <input class="btn btn-primary" type="submit" value="Cargar archivos">
        </div>

    </form>

</div class>