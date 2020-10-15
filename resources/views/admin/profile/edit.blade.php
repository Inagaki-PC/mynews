@extends('layouts.profile')
@section('title', 'My プロフィールの編集')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>My プロフィールの編集</h2>
                <p>※編集画面</p>
                <form action="{{ action('Admin\ProfileController@update') }}" method="post" enctype="multipart/form-data">
                    @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif
                    <div class="form-group row">
                        <label class="col-md-2" for="name">氏名(name)</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="name" value="{{ $profile_form->name }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="gender">性別(gender)</label>
                        <div class="col-md-10">
                            <label>男性<input type="radio" class="radio" name="gender" value="男性"></label>
                            <label>　女性<input  type="radio" class="radio" name="gender" value="女性"></label>
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-md-2" for="age">年齢(age)</label>
                        <div class="col-md-10">
                            <label><input type="number" name="age" min="7" max="100" value="歳">歳</label>
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-md-2" for="hobby">趣味(hobby)</label>
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
                    <label class="col-md-2" for="other">その他</label>
                        <div class="col-md-10">
                            <label>その他の場合、以下に入力してください</label>
                            <input type="text" class="form-control" name="other" value="{{ $profile_form->other }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <lebel class="col-md-2" for="introduction">自己紹介欄(introduction)</lebel>
                        <div class="col-md-10">
                            <textarea class="form-control" id="introduction" name="introduction" rows="20">{{ $profile_form->introduction }}</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-10">
                            <input type="hidden" name="id" value="{{ $profile_form->id }}">
                            {{ csrf_field() }}
                            <input type="submit" class="btn btn-primary" value="更新">
                        </div>
                    </div>
                </form>
                {{-- 以下を追記 --}}
                <div class="row mt-5">
                    <div class="col-md4 mx-auto">
                        <h2>プロフィール編集履歴</h2>
                        <ul class="list-group">
                            @if ($profile_form->histories2 != NULL)
                                @foreach ($profile_form->histories2 as $history)
                                    <li class="list-group-item">{{ $history->edited_at }}</li>
                                @endforeach
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection