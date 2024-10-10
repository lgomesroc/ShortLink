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
</body>
</html>
