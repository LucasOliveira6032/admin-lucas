<!-- LOAD FILES AT PAGE END FOR FASTER LOADING -->

<input type="hidden" class="aviso-lucas" data-mensagem="<?php if (isset($_SESSION['aviso_lucas']) && $_SESSION['aviso_lucas'] != '') {
                                                            echo $_SESSION['aviso_lucas'];
                                                            unset($_SESSION['aviso_lucas']);
                                                        } else {
                                                            echo '';
                                                        }  ?>" 
data-tipo="<?php if (isset($_SESSION['tipo_aviso_lucas']) && $_SESSION['tipo_aviso_lucas'] != '') {
                                                            echo $_SESSION['tipo_aviso_lucas'];
                                                            unset($_SESSION['tipo_aviso_lucas']);
                                                        } else {
                                                            echo '';
                                                        }  ?>"
                                                        />



<!-- CORE JS FRAMEWORK - START -->
<script src="<?php echo PATH ?>assets/js/jquery-3.4.1.min.js" type="text/javascript"></script>
<script src="<?php echo PATH ?>assets/js/popper.min.js" type="text/javascript"></script>
<!-- <script src="<?php echo PATH ?>assets/js/jquery.easing.min.js" type="text/javascript"></script>  -->
<script src="<?php echo PATH ?>assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?php echo PATH ?>assets/plugins/pace/pace.min.js" type="text/javascript"></script>

<script src="<?php echo PATH ?>assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js" type="text/javascript"></script>
<script src="<?php echo PATH ?>assets/plugins/viewport/viewportchecker.js" type="text/javascript"></script>
<!-- CORE JS FRAMEWORK - END -->


<!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - START -->
<script src="<?php echo PATH ?>assets/plugins/icheck/icheck.min.js" type="text/javascript"></script>
<script src="<?php echo PATH ?>assets/plugins/jquery-ui/smoothness/jquery-ui.min.js" type="text/javascript"></script>
<script src="<?php echo PATH ?>assets/plugins/sparkline-chart/jquery.sparkline.min.js" type="text/javascript"></script>
<script src="<?php echo PATH ?>assets/plugins/easypiechart/jquery.easypiechart.min.js" type="text/javascript"></script>
<script src="<?php echo PATH ?>assets/plugins/morris-chart/js/raphael-min.js" type="text/javascript"></script>
<script src="<?php echo PATH ?>assets/plugins/morris-chart/js/morris.min.js" type="text/javascript"></script>
<script src="<?php echo PATH ?>assets/plugins/jvectormap/jquery-jvectormap-2.0.1.min.js" type="text/javascript"></script>
<script src="<?php echo PATH ?>assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js" type="text/javascript"></script>
<script src="<?php echo PATH ?>assets/plugins/gauge/gauge.min.js" type="text/javascript"></script>
<script src="<?php echo PATH ?>assets/plugins/icheck/icheck.min.js" type="text/javascript"></script>
<script src="<?php echo PATH ?>assets/js/dashboard.js" type="text/javascript"></script>
<script src="<?php echo PATH ?>assets/plugins/datatables/js/dataTables.min.js" type="text/javascript"></script>
<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/1.5.1/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" language="javascript" src="//cdn.datatables.net/buttons/1.5.1/js/buttons.flash.min.js"></script>
<script type="text/javascript" language="javascript" src="//cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script type="text/javascript" language="javascript" src="//cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js"></script>
<script type="text/javascript" language="javascript" src="//cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script>
<script type="text/javascript" language="javascript" src="//cdn.datatables.net/buttons/1.5.1/js/buttons.html5.min.js"></script>
<script type="text/javascript" language="javascript" src="//cdn.datatables.net/buttons/1.5.1/js/buttons.print.min.js"></script>
<script src="<?php echo PATH ?>assets/plugins/autosize/autosize.min.js" type="text/javascript"></script>
<script src="<?php echo PATH ?>assets/plugins/icheck/icheck.min.js" type="text/javascript"></script>
<script src="<?php echo PATH ?>assets/plugins/messenger/js/messenger.min.js" type="text/javascript"></script>
<script src="<?php echo PATH ?>assets/plugins/messenger/js/messenger-theme-future.js" type="text/javascript"></script>
<script src="<?php echo PATH ?>assets/plugins/messenger/js/messenger-theme-flat.js" type="text/javascript"></script>
<script src="<?php echo PATH ?>assets/js/messenger.js" type="text/javascript"></script>
<script src="<?php echo PATH ?>assets/js/sweetalert2.js" type="text/javascript"></script>
<!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END -->


<!-- CORE TEMPLATE JS - START -->
<script src="<?php echo PATH ?>assets/js/scripts.js" type="text/javascript"></script>
<!-- END CORE TEMPLATE JS - END -->

<!-- Sidebar Graph - START -->
<script src="<?php echo PATH ?>assets/plugins/sparkline-chart/jquery.sparkline.min.js" type="text/javascript"></script>
<script src="<?php echo PATH ?>assets/js/chart-sparkline.js" type="text/javascript"></script>
<script src="<?php echo PATH ?>assets/js/iniciar-datatables.js" type="text/javascript"></script>
<script src="<?php echo PATH ?>assets/js/lucascustom.js" type="text/javascript"></script>
<!-- Sidebar Graph - END -->













<!-- General section box modal start -->
<div class="modal" id="section-settings" tabindex="-1" role="dialog" aria-labelledby="ultraModal-Label" aria-hidden="true">
    <div class="modal-dialog animated bounceInDown">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Section Settings</h4>
            </div>
            <div class="modal-body">

                Body goes here...

            </div>
            <div class="modal-footer">
                <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
                <button class="btn btn-success" type="button">Save changes</button>
            </div>
        </div>
    </div>
</div>
<!-- modal end -->
</body>

</html>