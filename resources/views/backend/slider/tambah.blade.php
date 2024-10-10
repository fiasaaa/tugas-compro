@extends('backend.layouts.master')
@section('content')

        <div id="content">

                <div class="card shadow mb-4">
                    <div class="card-body">
                        <h2>Tambah Slider</h2>
                        
            
                        <form class="user" action="" enctype="multipart/form-data" method="post">
                            
                            <div class="form-group">
                                <input type="text" name="title" class="form-control form-control-user" aria-describedby="emailHelp"
                                    placeholder="Masukan judul">
                            </div>
                            <div class="form-group">
                                <textarea name="description" class="form-control editor" placeholder="masukan deskripsi" cols="30" rows="3"></textarea>
                            </div>
                            <div class="form-group">
                                <input type="file" name="file" accept="image/.jpg, .png, .pdf, .docx" class="form-control form-control-user" placeholder="Masukan file">
                            </div>
                            <div>
                                <button type="submit" class="btn btn-primary btn-user ">
                                    Tambah
                                </button>
                            </div>
            
                        </form>
                    </div>
                </div>
                <script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>
                <script>
                    var ext_toolbar = [ 
            'heading', '|', 'bold', 'italic', 'link', 'numberedList', 'bulletedList', '|', 'outdent', 'indent', '|', 'undo', 'redo', '|', 'uploadImage', 'insertTable', 'alignment',
            ]
                ClassicEditor
                .create( document.querySelector(`.editor`), {
                alignment: {
                    options: [ 'left', 'right' ]
                },
                toolbar: ext_toolbar
                
                } )
                .then( editor => {
                window.editor = editor;
                } )
                .catch( err => {
                console.error( err.stack );
                } );
                </script>
            
        </div>

@endsection