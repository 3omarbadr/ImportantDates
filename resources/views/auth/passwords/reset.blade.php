@include('admin.layouts.inc.header')
@include('admin.layouts.inc.side-settings')

    <!-- start main content -->
    <div class="d-flex flex-column align-items-center justify-content-center min-vh-100">
        <div class="authForm mx-auto">
            <div class="text-center mb-2">
                <img src="{{ asset("admin/images/logo.png")}}" class="header-brand-img" alt="logo">
                <img src="{{ asset("admin/images/logo-light.png")}}" class="header-brand-img theme-logos" alt="logo">
            </div>
            <div class="card">
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <h4 class="text-center fs-20">Reset Your Password</h4>

                    <form method="POST" action="{{route('password.update')}}">
                        @csrf
                        <input type="hidden" name="token" value="{{$token}}">
                        
                        <div class="mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Email') }}</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="newPassword" class="form-label">New Password</label>
                            <input type="password" class="form-control" name="password" id="new_password" placeholder="Enter your password">
                        <span class="text-danger">@error('password'){{$message}} @enderror</span>
                        </div>
                        <div class="mb-3">
                            <label for="password_confirmation" class="form-label">Confirm Password</label>
                            <input type="password" class="form-control" name = "password_confirmation" id="password_confirmation" placeholder="Enter your password">
                            <span class="text-danger">@error('password_confirmation'){{$message}} @enderror</span>
                        </div>
                        <button type="submit" class="btn ripple btn-primary w-100">Reset Password</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- end main content -->

@include('admin.layouts.inc.footer')


