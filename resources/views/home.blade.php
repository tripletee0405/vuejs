@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    <div>
                        <a href="/usermanagement">Quản lý người dùng</a>
                    </div>
                    <hr>
                    <div>
                        <a href="/rolemanagement">Quản lý quyền</a>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
