@extends('layouts.app')

@section('content')
<section class="section coming-soon" style="min-height: 960px; items-align:center" data-section="section3">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
                <div class="right-content">
                  <div class="top-content">
                    <h6>Create a new Account or <a href="/login">Login to your Account</a></h6>
                  </div>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" style="color: #fff" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-8">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" style="color: #fff" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-8">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="label" for="dept" style="color: #fff" class="col-md-4 col-form-label text-md-right">{{ __('Department') }}</label>

                            <div class="col-md-8">
                                <select style="background-color: inherit; color:inherit; margin-left:20px;" name="dept" id="" class="form-control @error('dept') is-invalid @enderror" name="email" value="{{ old('dept') }}" required>
                                    <option value="" style="color:#000" selected disabled>Department</option>
                                    <option value="computer">Computer Science</option>
                                    <option value="EducationMGT">Education Management</option>
                                    <option value="artSSE">Arts and Social Sci</option>
                                    <option value="scienceEdu">Science Education</option>
                                    <option value="law">Law</option>
                                    <option value="pHealth">Physical Health</option>
                                    <option value="medLab">Medical Laboratory</option>
                                    <option value="accounting">Accounting</option>
                                    <option value="bankingF">Banking and Finance</option>
                                    <option value="bizAdmin">Business Administration</option>
                                    <option value="economics">Economics</option>
                                    <option value="biologySci">Biology Science</option>
                                    <option value="chemGeo">Chemistry Geography</option>
                                    <option value="physics">Physics</option>
                                    <option value="history">History</option>
                                    <option value="islam">Islamic Studies</option>
                                    <option value="language">Language</option>
                                    <option value="massComm">Mass Communications</option>
                                    <option value="pubAdmin">Public Administration</option>
                                    <option value="sociology">Sociology</option>
                                    <option value="agricultureword">Agriculture</option>
                                </select>
                       
                                @error('dept')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" style="color: #fff" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-8">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" style="color: #fff" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-8">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
