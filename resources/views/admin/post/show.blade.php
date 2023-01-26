@extends('admin.layouts.app')
@section('content')
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
            </ul>

        </nav>
        <!-- /.navbar -->
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6 d-flex align-items-center">
                            <h1 class="m-0 mr-3">
                                {{ $data->title }}
                            </h1>
                            <a href="{{ route('admin_post_edit', $data->id) }}">
                                <i class="fas fa-light fa-pen"></i>
                            </a>
                            <form action="{{ route('admin_post_delete', $data->id) }}"
                                  method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="border-0 bg-transparent">
                                    <i class="fas fa-light fa-trash text-danger" role="button"></i>
                                </button>
                            </form>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">{{ $data->name }}</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <!-- Small boxes (Stat box) -->
                    <div class="row">
                        <div class="col-8 mb-3">
                            <div class="card">
                                <div class="card-body table-responsive p-0">
                                    <table class="table table-hover text-nowrap">
                                        <tbody>
                                        <tr>
                                            <td>ID</td>
                                            <td>{{ $data->id }}</td>
                                        </tr>
                                        <tr>
                                            <td>Title</td>
                                            <td>{{ $data->title }}</td>
                                        </tr>
                                        <tr>
                                            <td>Content</td>
                                            <td>{{ $data->content }}</td>
                                        </tr>
                                        <tr>
                                            <td>Preview_img</td>
                                            <td>{{ $data->preview_img }}</td>
                                        </tr>
                                        <tr>
                                            <td>Main_img</td>
                                            <td>{{ $data->main_img }}</td>
                                        </tr>
                                        <tr>
                                            <td>Category_id</td>
                                            <td>{{ $data->category_id }}</td>
                                        </tr>
                                        <tr>
                                            <td>Author_id</td>
                                            <td>{{ $data->author_id }}</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.row -->
                </div><!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <strong>Blog</strong>
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->
@endsection


