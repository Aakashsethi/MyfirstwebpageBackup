@extends('layouts.default')

@section('content')
    <div class="card mt-4 pl-3 pr-3 ">
        <div class="card-title"><h1>Contact</h1></div>
        <div class="card-body">


            <form role="form" id="contact-form" class="contact-form"method="POST" action="{{route('contact.store')}}" >
                {{csrf_field()}}
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" class="form-control" name="name" autocomplete="off" id="name" placeholder="Name">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="email" class="form-control" name="E-mail" autocomplete="off" id="E-mail" placeholder="E-mail">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <textarea class="form-control textarea" rows="3" name="Message" id="Message" placeholder="Message"></textarea>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <button type="submit" class="btn main-btn pull-right">Send a message</button>
                    </div>
                </div>
            </form>
        </div>
    </div>



@endsection
