@extends('layouts.app')
@section('content')
<div class="d-flex align-items-center min-vh-150">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6">
                <div class="card border-0 shadow">
                <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <h4 class="card-header text-center">กรอกข้อมูลเพื่อสมัครสมาชิก</h4>
                        <div class="card-body px-4">
                            <div class="row g-2">
                                <div class="col-md-6">
                                    <label for="name" class="col-form-label">ชื่อ-นามสกุล:</label>
                                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" placeholder="name" required autocomplete="name">
                                </div>
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                                <div class="col-md-6">
                                    <label for="phone" class="col-form-label">เบอร์โทรศัพท์:</label>
                                    <input type="text" class="form-control @error('phone') is-invalid @enderror" id="phone" name="phone" placeholder="phone" required autocomplete="phone">
                                </div>
                                @error('phone')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                                <div class="col-md-12">
                                    <label for="address" class="col-form-label">ที่อยู่:</label>
                                    <input type="text" class="form-control @error('address') is-invalid @enderror" id="address" name="address" placeholder="address" required autocomplete="address">
                                </div>
                                @error('address')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                                <div class="col-12">
                                    <label for="email" class="col-form-label">อีเมลล์:</label>
                                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="email" required autocomplete="email">
                                </div>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                                <div class="col-md-12">
                                    <label for="username" class="col-form-label">ชื่อผู้ใช้งาน:</label>
                                    <input type="text" class="form-control @error('username') is-invalid @enderror" id="username" name="username" placeholder="username" required autocomplete="username">
                                </div>
                                @error('username')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                                <div class="col-md-6">
                                    <label for="password" class="col-form-label">รหัสผ่าน:</label>
                                    <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" placeholder="password" required autocomplete="new-password">
                                </div>
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                                <div class="col-md-6">
                                    <label for="password-confirm" class="col-form-label">ยืนยันรหัสผ่าน:</label>
                                    <input type="password" class="form-control" id="password-confirm" name="password_confirmation" placeholder="password confirm" required autocomplete="new-password">
                                </div>
                                @error('password-confirm')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                                <div class="col-12 text-center py-3">
                                    <input type="submit" name="submit" class="btn btn-primary d-grid mx-auto w-75" value="สมัครสมาชิก">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
