@extends('layouts.backend')
@section('title', 'Halaman Dashboard')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Dashboard</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard v1</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <section class="content">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">{{ __('Dashboard') }}</div>
                        <div class="card-body">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif
                            {{ __('You are logged in!') }}
                            <p>This is your application dashboard.</p>
                            @canany([
                                'create-role',
                                'edit-role',
                                'delete-
                                role',
                                ])
                                <a class="btn btn-primary" href="{{ route('roles.index') }}">
                                    <i class="bi bi-person-fill-gear"></i>
                                    Manage Roles</a>
                            @endcanany
                            @canany([
                                'create-user',
                                'edit-user',
                                'delete-
                                user',
                                ])
                                <a class="btn btn-success" href="{{ route('users.index') }}">
                                    <i class="bi bi-people"></i> Manage
                                    Users</a>
                            @endcanany
                            @canany(['create-product', 'edit-product', 'delete-product'])
                                <a class="btn btn-warning" href="{{ route('products.index') }}">
                                    <i class="bi bi-bag"></i> Manage
                                    Products</a>
                            @endcanany
                            <p>&nbsp;</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
@endsection
