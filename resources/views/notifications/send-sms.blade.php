@extends('layouts.layouts')

@section('title','Send SMS')


@section('content')
    <!-- Basic Horizontal form layout section start -->
    <section id="basic-horizontal-layouts">
        <div class="row">
            <div class="col-md-6 col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">@lang('notification.send_sms')</h4>
                    </div>
                    <div class="card-body">
                        @if(session('success'))
                            <div class="alert alert-success" role="alert">
                                <div class="alert-body">
                                    {{session('success')}}
                                </div>
                            </div>
                        @endif

                        @if(session('failed'))
                        <div class="alert alert-danger" role="alert">
                            <div class="alert-body">
                                {{session('failed')}}
                            </div>
                        </div>
                        @endif
                        <form class="form form-horizontal" action="{{route('notification.send.email')}}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="user">@lang('notification.users')</label>
                                        <select class="form-control" id="user" name="user">
                                            @foreach($users as $user)
                                                <option value="{{$user->id}}">{{$user->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-label-group mb-0">
                                        <textarea data-length="80" class="form-control char-textarea" id="textarea-counter" name="text" rows="3" placeholder="Counter"></textarea>
                                        <label for="textarea-counter">پیام شما...</label>
                                    </div>
                                    <small class="textarea-counter-value float-right"><span class="char-count">0</span> / 20 </small>
                                </div>

                                @if($errors->any())
                                    @foreach($errors->all() as $error)
                                        <div class="col-12">
                                            <div class="alert alert-primary alert-dismissible fade show" role="alert">
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                                <div class="alert-body">
                                                    {{$error}}
                                                </div>
                                            </div>
                                        </div>
                                @endforeach
                                @endif

                                <div class="col-sm-9 offset-sm-3">
                                    <button type="submit" class="btn btn-primary mr-1">@lang('notification.send')</button>
                                    <button type="reset" class="btn btn-outline-secondary">@lang('notification.reset')</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Basic Horizontal form layout section end -->
@endsection
