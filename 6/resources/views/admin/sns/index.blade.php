@extends('layouts.admin')
@section('title', 'ホーム')

{{-- admin.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>ホーム</h2>
                <form action="{{ action('Admin\SnsController@index') }}" method="post" enctype="multipart/form-data">
                   @if (count($errors) > 0)
                   <ul>
                       @foreach($errors->all() as $e)
                       <li>{{ $e }}</li>
                    @endforeach
                   </ul>
                   @endif
                   <div class="form-group row">
                <div class="col-md-10">
                <input type="text" class="form-control" name="body" value="{{ old('body') }}">
            </div>
            
            <input type="hidden" value="{{ Auth::user()->id }}" name="user_id">

            {{ csrf_field() }}
                    <input type="submit" class="button" value="つぶやく">
                </form>

                <div style="margin: 50px 0;" class="kakumaru yohaku">
                <table cellpadding="10" cellspacing="10" class="tbl_yoko">
                    <thead>
                        <tr style="text-align: center; color:#fff;">
                            <th class="name_waku">なまえ</th>
                            <th>つぶやき</th>
                            <th>じかん</th>
                            <th class="delete_waku"></th>
                        </tr>
                    </thead>
                    </div>
                @foreach($posts as $post)
                @foreach($users as $user)
                @if(empty($post->deleted_at))
                    <tbody>
                        <tr>
                            @if($user -> id == $post->user_id)
                                <th>{{ $user->name }}</th>
                                <td>{{ $post->body }}</td>
                                <td>{{ $post->created_at->format('Y/m/d G:i') }}</td>
                                @if(Auth::user()->id === $post->user_id)

                                    <td> <a href="{{ action('Admin\SnsController@delete', ['id'=>$post->id]) }}">消す</a></td>
                                    @else
                                    <td></td>

                                @endif
                            @endif
                        </tr>
                   </tbody>
                @endif
                @endforeach
                @endforeach
                </table>
                </div>
            </div>
        </div>
    </div>
    
@endsection