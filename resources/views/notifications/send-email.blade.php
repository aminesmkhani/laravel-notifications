@extends('layouts.layouts')

@section('title','Send Email')


@section('content')
    <!-- Basic Horizontal form layout section start -->
    <section id="basic-horizontal-layouts">
        <div class="row">
            <div class="col-md-6 col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">@lang('notification.send_email')</h4>
                    </div>
                    <div class="card-body">
                        <form class="form form-horizontal">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="basicSelect">@lang('notification.users')</label>
                                        <select class="form-control" id="users">
                                            @foreach($users as $user)
                                                <option value="{{$user->id}}">{{$user->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
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
