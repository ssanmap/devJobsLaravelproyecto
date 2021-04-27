@extends('layouts.app')

@section('content')
    <div class="container mx-auto">
        <div class="flex flex-wrap justify-center">
            <div class="w-full max-w-sm">
                <div class="flex flex-col break-words bg-white border border-2 shadow-md mt-20">
                    <div class="bg-gray-300 text-gray-700 uppercase text-center py-3 px-6 mb-0">{{ __('Reset Password') }}
                    </div>

                    <div class="card-body">


                        <form method="POST" class="py-4 px-6" action="{{ route('password.email') }}" novalidate>
                            @csrf

                            @if (session('status'))
                                <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 w-full mt-5 text-sm mx-3"
                                    role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif

                            <div class="flex flex-wrap mb-6">
                                <label for="email"
                                    class="block text-gray-700 text-sm mb-2">{{ __('E-Mail Address') }}</label>


                                <input id="email" type="email"
                                    class="p-3 rounded w-full bg-gray-200 @error('email') is-invalid @enderror" name="email"
                                    value="{{ old('email') }}" autocomplete="email" autofocus>

                                @error('email')
                                    <span class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 w-full mt-5 text-sm"
                                        role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>

                            <div class="form-group row mb-0 mt-3">

                                <button type="submit"
                                    class="bg-teal-500 w-full hover:bg-teal-900 text-gray-100 p-3 focus:outline-none mb-3 rounded">
                                    {{ __('Send Password Reset Link') }}
                                </button>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
