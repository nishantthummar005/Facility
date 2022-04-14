<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <script type="text/javascript" src="language.js"></script>
    <script type="text/javascript" src="https://www.google.com/jsapi">
    </script>
    <link href="transliteration.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript">

      // Load the Google Transliterate API
      google.load("elements", "1", {
            packages: "transliteration"
          });

      function onLoad() {
        var options = {
          sourceLanguage: 'en',
          destinationLanguage: ['hi','kn','ml','ta','te','gu','sa'],
          shortcutKey: 'ctrl+g',
          transliterationEnabled: true
        };

        // Create an instance on TransliterationControl with the required
        // options.
        var control =
            new google.elements.transliteration.TransliterationControl(options);

        // Enable transliteration in the textfields with the given ids.
        
        // var ids = [ "transl1", "transl2" ]; ek thi vadhre textbox sathe kam krvu hoy tyre id pass kri devana
        var ids = [ "transl2"];
        control.makeTransliteratable(ids);

        // Show the transliteration control which can be used to toggle between
        // English and Hindi and also choose other destination language.
        control.showControl('translControl');
      }
      google.setOnLoadCallback(onLoad);

    </script>
    <style>
        body{
            background: #dfdfdf;
        }
        textarea{
            padding: 10px;
            width: 50%;
            resize:none;
            height: 200px;
            font-size: 25px !important;
            color: green;
        }
        select{
            padding: 10px;
        }
    </style>
  </head>
  <body>
<!--      var google.elements.transliteration.LanguageCode = {
    ENGLISH: 'en',
    AMHARIC: 'am',
    ARABIC: 'ar',
    BENGALI: 'bn',
    CHINESE: 'zh',
    GREEK: 'el',
    GUJARATI: 'gu',
    HINDI: 'hi',
    KANNADA: 'kn',
    MALAYALAM: 'ml',
    MARATHI: 'mr',
    NEPALI: 'ne',
    ORIYA: 'or',
    PERSIAN: 'fa',
    PUNJABI: 'pa',
    RUSSIAN: 'ru',
    SANSKRIT: 'sa',
    SINHALESE: 'si',
    SERBIAN: 'sr',
    TAMIL: 'ta',
    TELUGU: 'te',
    TIGRINYA: 'ti',
    URDU: 'ur'
};-->
  <center>
      <br>
      <h1>Multi language Textarea</h1>
      <hr width="30%">
      <br>
      <font size="4" color="#444"><b>Choose language :</b></font>
      <div id='translControl'></div>
      <br>
      <textarea id="transl2" style="width:600px;height:200px" placeholder="Enter text"></textarea>
  </center>
  </body>
</html> 