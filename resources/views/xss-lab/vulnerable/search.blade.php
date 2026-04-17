<!DOCTYPE html>
<html>
<head>
    <title>Vulnerable Search</title>
</head>
<body>
    <h1>Search Page</h1>

    <form method="GET" action="/xss-lab/vulnerable/search">
        <input type="text" name="q" placeholder="Cari sesuatu...">
        <button type="submit">Search</button>
    </form>

    @if($query)
        <h3>Hasil pencarian untuk:</h3>
        {!! $query !!}
    @endif

</body>
</html>
