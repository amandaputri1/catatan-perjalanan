<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Log in</title>
    @include('style.css')

<body>
    <section style="margin-top: 150px;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-4">
                    {{-- card --}}
                    <div class="card">
                        <div class="card-header text-center">
                            <img src="{{ asset('img/logo-fix.png') }}" style="width: 200x; height: 40px" alt="Logo"
                                srcset="">
                            {{-- <h3>Login</h3> --}}
                        </div>
                        <div class="card-body">
                            <form action="{{ route('auth.authentication') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="form-group has-icon-left">
                                        <div class="position-relative">
                                            <input type="text"
                                                class="form-control @error('name') is-invalid @enderror"
                                                placeholder="Full Name" id="email-horizontal-icon" name="name"
                                                value="{{ old('name') }}">
                                            <div class="form-control-icon">
                                                <i class="fa fa-user"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @error('nama')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                <div class="row">
                                    <div class="form-group has-icon-left">
                                        <div class="position-relative">
                                            <input type="number"
                                                class="form-control @error('nik') is-invalid @enderror"
                                                placeholder="NIK" id="password-horizontal-icon" name="password"
                                                value="{{ old('password') }}">
                                            <div class="form-control-icon">
                                                <i class="fa fa-address-card"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @error('password')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                <div class="row mt-3">
                                    <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                                </div>
                            </form>
                            <p class="mb-0 mt-2">
                                <a href="{{ route('auth.register') }}" class="text-center">Register a new membership</a>
                            </p>
                        </div>
                    </div>
                    {{-- end card --}}
                </div>
            </div>
        </div>
    </section>
</body>
@include('style.js')

</html>
