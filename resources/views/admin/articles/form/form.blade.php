<div class="form-group">
    <label for="title">Назва статті</label>
    <input class="form-control" type="text" name="title" id="title" value="{{ $article->title ?? '' }}">
</div>
<div class="form-group">
    <label for="">Статус</label>
    <select class="form-control" name="status" id="status">
        <option value="0">Не активний</option>
        <option value="1">Активний</option>
    </select>
</div>
<div class="form-group">
    <label for="description">Стаття</label>
    <textarea class="form-control" name="description" id="description">{{ $article->description ?? '' }}</textarea>
</div>
<div class="form-group">
    <label for="">Оберіть авторів</label>
    <select class="form-control" multiple name="user_id[]" id="user_id">
        @foreach($users as $user)
            <option value="{{ $user->id }}">{{ $user->name }}</option>
        @endforeach
    </select>
</div>


<input type="submit" class="btn btn-success">
