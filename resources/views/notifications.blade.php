@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    <example-component></example-component>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif





                    <div class="container">
                        @if (count($notifications) > 0)
                            @foreach ($notifications as $notification)

                                <a href="  {{route('markNotification', $notification->id)}} "
                                    onclick="return confirm('Marcar como lida')"
                                    ><i class="fas fa-trash btn btn-danger">Limpar Notificacao</i>
                                </a>


                                    <div>
                                        <div class="titulo">
                                            <span>Titulo: {{$notification->data['title']}}</span>
                                        </div>
                                        <div class="body">
                                            <span>Descricao:{{$notification->data['body']}}</span>
                                        </div>
                                    </div><hr>

                            @endforeach
                        @else
                                    <p>nao aha nada </p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
