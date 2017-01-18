@extends('layout.navigation')

@section('content')

<div class="container">
    @if(session()->has('message'))
        <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            {{ session()->get('message') }}
        </div>
    @endif
    <div class="panel panel-default">
        <div class="panel-heading">
            <span>Subscribe with us</span>
        </div>
        <div class="panel-body">
            <form action="{{ route('subscriber.subscribe')}}" method="POST">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="row">
                    <div class="col-lg-6 col-lg-offset-3">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="your@email.com" name="email" id="email">
							<span class="input-group-btn">
								<button class="btn btn-default" type="submit">Subscribe</button>
							</span>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection