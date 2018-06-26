@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Flyhjaelp</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <welcome-view inline-template v-cloak>
                        <div class="flex-center position-ref full-height">
                            <div class="content">
                                
                                <main-table></main-table>

                            </div>
                        </div>
                    </welcome-view>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
