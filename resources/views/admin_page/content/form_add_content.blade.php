@extends('admin_page.admin')

@section('from_add_content')
    <div class="row">
        <div class="col-12">
            @if ($errors->any())
                <div class="error_list">
                    <p class="title_error">
                        Ошибка:
                    </p>
                    @error('title')
                    <p>
                        {{$message}}
                    </p>
                    @enderror

                    @error('content')
                    <p>
                        {{$message}}
                    </p>
                    @enderror
                </div>
            @endif
        </div>
        <div class="col-12">
            <form class="add_content_from" method="post" action="{{route('add_content',$id)}}">
                @csrf
                <p class="add_content_title">
                    Название
                </p>
                <input name="title" type="text"> <br>
                <p>
                    Содержимое
                </p>
                <textarea name="content" id="editor" cols="30" rows="30"></textarea>
                <input class="btn btn-primary" type="submit" value="Сохранить">
            </form>
        </div>
    </div>
@endsection