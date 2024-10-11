<!DOCTYPE html>
<html>
<head>
    <title>Encurtador de Links</title>
</head>
<body>
    <h1>Encurte sua URL</h1>
    <form method="POST" action="{{ route('shorten') }}">
        @csrf
        <div>
            <label for="original_url">URL Original:</label>
            <input type="text" name="original_url" id="original_url" required>
        </div>
        <button type="submit">Encurtar</button>
    </form>

    @if (session('short_link'))
        <div>
            <label for="short_link">URL Encurtada:</label>
            <input type="text" id="short_link" value="{{ session('short_link') }}" readonly>
        </div>
    @endif
</body>
</html>
