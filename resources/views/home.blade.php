@extends('layouts.app')

@section('content')

<script type="text/javascript">
    var hostname=window.location.hostname;
    var protocolo=window.location.protocol;
    var puerto=window.location.port;
    var url=protocolo+"//"+hostname+":"+puerto+"/products";

    console.log(hostname);
    console.log(protocolo);
    console.log(url);
    window.location.replace(url);
</script>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>

                    @endif

                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
