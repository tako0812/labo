@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">試作版ランキングシステム</div>
                    <div class="card-body">
                        @foreach ($user_hiyari_ranking as $inside)
                            <p>{{ $loop->iteration }}位
                                ユーザー名:{{ $inside->user_id }}さん
                                投稿数：{{ $inside->user_id_count }}</p>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
