<!doctype html>
<html>
<head>
    <title>Bill Splitter</title>
    <meta charset='utf-8'>
    <link href='/css/foobooks.css' type='text/css' rel='stylesheet'>
</head>
<body>
<header>
    Bill Splitter Application
</header>
<section>


    <form method='POST' action='/p3/public/post/store'>
        <fieldset>
            <label for='searchTerm'>Split how many ways?</label>
            <input type='text' name='title' id='title' >
            <br/>
            <input type='submit' value='Calculate' class='btn btn-primary btn-small'>
        </fieldset>
    </form>

</section>
<footer>
    &copy; {{ date('Y') }}
</footer>
</body>
</html>