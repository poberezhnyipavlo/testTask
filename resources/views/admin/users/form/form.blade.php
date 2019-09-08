<div class="form-group">
    <label for="name">Імя</label>
    <input class="form-control" type="text" name="name" id="name" value="{{ $user->name ?? '' }}">
</div>
<div class="form-group">
    <labelfor="name">Email</label>
    <input class="form-control" type="email" name="email" id="email" value="{{ $user->email ?? '' }}">
</div>
<div class="form-group">
    <label for="password">Пароль</label>
    <input class="form-control" type="password" name="password" id="password" value="{{ $user->password ?? '' }}">
</div>
<div class="form-group">
    <label for="">Повторіть пароль</label>
    <input class="form-control" type="password" name="сonfirmation_password" id="сonfirmation_password">
</div>
<div class="form-group">
    <label for="">Статус</label>
    <select class="form-control" name="status" id="status">
        <option value="0">Не активний</option>
        <option value="1">Активний</option>
    </select>
</div>
<div class="form-group">
    <label  for="">Аватар</label>
    <input class="form-control" type="file" name="avatar_file">
</div>

<input type="submit" class="btn btn-success">

