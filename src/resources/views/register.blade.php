<h1>新規登録</h1>
@if ($errors->any())
<div class="login_error">
    <ul>
@foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
@endforeach
    </ul>
</div>
@endif
<form method="POST" class="form" action="/login">
    @csrf
    <input type="text" name="name" placeholder="name" value="{{ old('name') }}" required autofocus>
    <input type="email" name="email" placeholder="email" value="{{ old('email') }}" required autofocus>
    @error('email')
    {{ $message }}
    @enderror
    <input type="password" name="password" placeholder="Password" required>
    @error('email')
    {{ $message }}
    @enderror
    <button type="submit" id="login-button">登録</button>
    <a href="/login">login</a>
</form>