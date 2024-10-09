@extends('backend.layouts.master')
@section('content')
    
<div id="content">
                    
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
                        </div>
                        <div class="card-body">
                            <a href="tambah_blog.html" class="btn btn-primary mb-2">Tambah blog</a>
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Judul</th>
                                            <th>File</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                       
                                        <tr>
                                            <td>1</td>
                                            <td>Content 1</td>
                                            <td><img src="" width="200" alt="images"></td>
                                            <td>
                                                <a href="" class="btn btn-warning">Edit</a>
                                                    <form action="" method="post" >
                                                        
                                                        <button class="btn btn-danger">Hapus</button>
                                                    </form>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Content 2</td>
                                            <td><img src="" width="200" alt="images"></td>
                                            <td>
                                                <a href="" class="btn btn-warning">Edit</a>
                                                    <form action="" method="post" >
                                                        
                                                        <button class="btn btn-danger">Hapus</button>
                                                    </form>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Content 3</td>
                                            <td><img src="" width="200" alt="images"></td>
                                            <td>
                                                <a href="" class="btn btn-warning">Edit</a>
                                                    <form action="" method="post" >
                                                        
                                                        <button class="btn btn-danger">Hapus</button>
                                                    </form>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Content 4</td>
                                            <td><img src="" width="200" alt="images"></td>
                                            <td>
                                                <a href="" class="btn btn-warning">Edit</a>
                                                    <form action="" method="post" >
                                                        
                                                        <button class="btn btn-danger">Hapus</button>
                                                    </form>
                                            </td>
                                        </tr>
                                    </tbody>
                                    
                                </table>
                            </div>
                        </div>
                    </div>

</div>

@endsection