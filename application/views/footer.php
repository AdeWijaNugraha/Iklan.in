        <footer>
            <div class="row">
                <div class="box">
                    <div class="col-lg-12">
                        <hr>
                        <h2 class="intro-text text-center">Project Akhir
                            <strong>Pemrograman Web</strong>
                        </h2>
                        <div class="col-sm-12" style="color: black; margin-top: 10px; margin-bottom: 10px;">
                        <table align="center" width="350" style="font-size: 16px;text-alignment: center;">
                            <tr>
                                <th width="150">NIM</th>
                                <th width="200"> Nama</th>
                            </tr>
                            <tr>
                                <td>155150200111016 </td>
                                <td> Vicky Virdus</td>
                            </tr>
                            <tr>
                                <td>155150201111020 </td>
                                <td>Ade Wija Nugraha</td>
                            </tr>
                            <tr>
                                <td>155150201111023 </td>
                                <td> Lailatul Rizqi Ramadhani</td>
                            </tr>
                        </table>
                        <a id="back-to-top" href="#" class="btn btn-primary btn-lg back-to-top" role="button" title="Click to return on the top page" data-toggle="tooltip" data-placement="left"><span class="glyphicon glyphicon-chevron-up"></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </body>
</html> 


<script>
    $(document).ready(function(){
        $(window).scroll(function () {
            if ($(this).scrollTop() > 50) {
                $('#back-to-top').fadeIn();
            } else {
                $('#back-to-top').fadeOut();
            }
        });
        // scroll body to 0px on click
        $('#back-to-top').click(function () {
            $('#back-to-top').tooltip('hide');
            $('body,html').animate({
            scrollTop: 0
            }, 800);
            return false;
        });
        $('#back-to-top').tooltip('show');
    });
</script>