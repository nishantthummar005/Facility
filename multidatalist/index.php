<!DOCTYPE html>
<html>
    <head>
        <title>Flexdatalist Minimalist</title>
        <link href="newcss.css" rel="stylesheet" type="text/css">
    </head>
    <body>

        <input type="text" placeholder="Choose a fruit"
               class="flexdatalist form-control"
               data-min-length="1"
               data-searchContain="true"
               multiple="multiple"
               list="fruit" name="my-fruit">
        <datalist id="fruit">
            <option value="Apples">Apples</option>
            <option value="Apples">Appy</option>
            <option value="Bananas">Bananas</option>
            <option value="Bananas">Bear</option>
            <option value="Cherries">Cherries</option>
            <option value="Kiwi">Kiwi</option>
            <option value="Pineapple">Pineapple</option>
            <option value="Zucchini">Zucchini</option>
        </datalist>

        <script src="http://code.jquery.com/jquery-1.8.3.min.js"></script>
        <script src="jquery.flexdatalist.min.js"></script>
        <script>
            $('.flexdatalist-json').flexdatalist({
                searchContain: false,
                valueProperty: 'iso2',
                minLength: 1,
                focusFirstResult: true,
                selectionRequired: true,
            });
        </script>

    </body>
</html>