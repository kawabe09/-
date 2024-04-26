<h1>ログイン</h1>
@if ($errors->any())  {{-- 1 --}}
<div class="login_error">
    <ul>
@foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
@endforeach
    </ul>
</div>
@endif {{-- 1 --}}
<form method="POST" class="form" action="/admin"> {{-- 2 --}}
    @csrf {{-- 3 --}}
    <input type="email" name="email" placeholder="test@example.com" value="{{ old('email') }}" required autofocus>
    <input type="password" name="password" placeholder="Password" required>
    <button type="submit" id="login-button">ログイン</button>
    <a href="/register">register</a>
</form>