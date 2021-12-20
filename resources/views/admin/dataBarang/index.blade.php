@extends('layouts.app')

@section('breadcrumbs')
<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Dashboard</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li><a href="{{ route('pesanan-masuk')}}">Pesanan Masuk</a></li>
                    <li class="active">Data Barang</li>
                </ol>
            </div>
        </div>
    </div>
</div>  
@endsection

@section('content')
<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Data Barang</strong>
                            <div class="pull-right">
                            <a href="{{ route('tambah-barang')}}" class="btn btn-success btn-sm">
                                <i class="fa fa-plus">Tambah Barang</i>
                            </a>
                            </div>
                        </div>
                        <div class="card-body">
                <table id="bootstrap-data-table" class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Barang</th>
                        <th>Stok</th>
                        <th>Harga</th>
                        <th>aksi</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>1</td>
                        <td>Batu</td>
                        <td>Stok</td>
                        <td>Rp 3000</td>
                        <td class="text-center">
                        <a href="{{ route('tambah-varian')}}" class="btn btn-success btn-sm">
                        <i class="fa fa-plus"></i></a>
                        <a href="" class="btn btn-warning btn-sm">
                        <i class="fa fa-edit"></i></a>
                        <a href="detail_barang.html" class="btn btn-primary btn-sm">
                        <i class="fa fa-eye"></i></a>
                        <a href="" class="btn btn-danger btn-sm">
                        <i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        </div>
    </div>
</div>
@endsection