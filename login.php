<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ __('login.title') }}</title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
<div class="form-container">
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <h2>{{ __('login.header') }}</h2>
        <div class="input-group">
            <label for="email">{{ __('login.email') }}</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div class="input-group">
            <label for="password">{{ __('login.password') }}</label>
            <input type="password" id="password" name="password" required>
        </div>
        <button type="submit">{{ __('login.submit') }}</button>
    </form>
</div>
<script src="/js/script.js"></script>
</body>
</html>
