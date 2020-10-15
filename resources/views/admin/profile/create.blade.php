{{-- layots/admin.blade.phpを読み込む --}}
@extends('layouts.admin')


{{-- admin.blade.phpの@yield('title')に'ニュースの新規作成'を埋め込む --}}
@section('title', 'My プロフィール')

{{-- admin.blade.phpの@tield('content')に以下のタグを埋め込む --}}
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>My プロフィールの新規作成</h2>
                <p>※作成画面</p>
                <form action="{{ action('Admin\ProfileController@create') }}" method="post" enctype="multipart/form-data">
                　　@if (count($errors) > 0)
                    　　<ul>
                           @foreach($errors->all() as $e)
                               <li>{{ $e }}</li>
                           @endforeach 
                    　　</ul>
                　　@endif
                    <div class="form-group row">
                        <label class="col-md-2">氏名(name)</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">性別(gender)</label>
                        <div class="col-md-10">
                            <label>男性<input type="radio" class="radio" name="gender" value="男性"></label>
                            <label>　女性<input  type="radio" class="radio" name="gender" value="女性"></label>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">趣味(hobby)</label>
                        <div class="col-md-10">
                            <select class="form-control" name="hobby">
                                <option value="">--未選択--</option>
                                <option value="サッカー">サッカー</option>
                                <option value="野球">野球</option>
                                <option value="バスケ">バスケ</option>
                                <option value="テニス">テニス</option>
                                <option value="陸上">陸上</option>
                                <option value="卓球">卓球</option>
                                <option value="バレーボール">バレーボール</option>
                                <option value="その他">その他</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                    <label class="col-md-2"></label>
                        <div class="col-md-10">
                            <label>その他の場合、以下に入力してください</label>
                            <input type="text" class="form-control" name="other" value="{{ old('other') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">自己紹介欄(introduction)</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="introduction" rows="20">{{ old('introduction') }}</textarea>
                        </div>
                    </div>
                    {{ csrf_field() }}
                    <input type="submit" class="btn-primary" value="更新">
                </form>
            </div>
        </div>
    </div>
@endsection