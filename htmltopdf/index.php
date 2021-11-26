<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>

        <button onclick="getPDF();">Convert to PDF</button>
        <button onclick="printDiv();">Print </button>

        <div class="canvas_div_pdf" id="DivIdToPrint">
            <div style="background-image: url(chamunda.jpg);">
                <hr /> 
                <br/>
                <h1>Hello world</h1>
                <p style="font-size: 20px;">this is demo project which is help you to convert div into pdf in canvas using pdf and also how to print div using jquery.</p>
                <!--<img src="chamunda.jpg" height="200px"  width="200px" title="helo" alt="hello" />-->
                <mark>Author : Nishant Thummar</mark>
                <hr />

                <h3 style="color: red">html to pdf convert using canvas jquery</h3>
                <h3 style="color: red">print div using jquery</h3>

            </div>
        </div>




        <script src="jquery-1.12.4.js"></script>
        <script src="jspdf.min.js"></script>
        <script src="html2canvas.js"></script>
        <script type="text/javascript">
            function getPDF() {

                var HTML_Width = $(".canvas_div_pdf").width();
                var HTML_Height = $(".canvas_div_pdf").height();
                var top_left_margin = 15;
                var PDF_Width = HTML_Width + (top_left_margin * 2);
                var PDF_Height = (PDF_Width * 1.5) + (top_left_margin * 2);
                var canvas_image_width = HTML_Width;
                var canvas_image_height = HTML_Height;

                var totalPDFPages = Math.ceil(HTML_Height / PDF_Height) - 1;


                html2canvas($(".canvas_div_pdf")[0], {allowTaint: true}).then(function (canvas) {
                    canvas.getContext('2d');

                    console.log(canvas.height + "  " + canvas.width);


                    var imgData = canvas.toDataURL("image/jpeg", 1.0);
                    var pdf = new jsPDF('p', 'pt', [PDF_Width, PDF_Height]);
                    pdf.addImage(imgData, 'JPG', top_left_margin, top_left_margin, canvas_image_width, canvas_image_height);


                    for (var i = 1; i <= totalPDFPages; i++) {
                        pdf.addPage(PDF_Width, PDF_Height);
                        pdf.addImage(imgData, 'JPG', top_left_margin, -(PDF_Height * i) + (top_left_margin * 4), canvas_image_width, canvas_image_height);
                    }

                    pdf.save("HTML-Document.pdf");
                });
            }
            ;


            function printDiv()
            {

                var divToPrint = document.getElementById('DivIdToPrint');

                var newWin = window.open('', 'Print-Window');

                newWin.document.open();

                newWin.document.write('<html><body onload="window.print()">' + divToPrint.innerHTML + '</body></html>');

                newWin.document.close();

                setTimeout(function () {
                    newWin.close();
                }, 10);

            }

        </script>
    </body>
</html>
