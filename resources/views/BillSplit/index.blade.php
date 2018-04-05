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
    <form method='get' action='/p3/public/Test/store'>
        <fieldset>
            <label for='searchTerm'>Split how many ways?</label>
            <input type='text' name='manyWays' id='manyWays' value='{{ $manyWays }}' >
            <br/>
            <br/>
            <label for='searchTerm'>How much was the tab?</label>
            <input type='text' name='tabNum' id='tabNum' value='{{ $tabNum  }}' >
            <br/>
            <br/>
            How was the service?
            <select name='serviceQuality' >
                <option value="5"
                    @if( $serviceQuality == 5 )
                        selected ="selected"
                    @endif
                >Fine</option>
                <option value="10"
                    @if( $serviceQuality == 10 )
                        selected ="selected"
                    @endif
                >Good</option>
                <option value="18"
                    @if( $serviceQuality == 18 )
                        selected ="selected"
                    @endif
                >Amazing</option>
            </select>
            </label>
            <br/>
            <br/>
            <input type='checkbox' name='round'
                @if ( $round == 1)
                checked = 'checked'
                @endif>
            <label>Round Up?</label>
            <br/>
            <br/>
            <input type='submit' value='Calculate' class='btn btn-primary btn-small'>
        </fieldset>
        @if($results)
            <h2>Everyone Owes: <em>{{ $results }}</em></h2>
        @endif

        @if(count($errors) > 0)
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif

    </form>

</section>
<footer>
    &copy; {{ date('Y') }}
</footer>
</body>
</html>