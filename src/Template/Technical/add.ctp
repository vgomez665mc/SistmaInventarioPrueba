  <label class="">Fecha de Egreso</label>
        <input type="text" name="ingreso" id="ingreso" value=<?php echo $ingresoEquipo->fecha_ing;?>  class="form-control datepicker">
        <script>
        $(document).ready(function(){
        $('.datepicker').datetimepicker({
                    useCurrent: false,
                       widgetPositioning:{
                                        horizontal: 'auto',
                                        vertical: 'bottom'
                                    },
                                    format: 'DD/MM/YYYY',
                    icons: {
                            date: "fa fa-calendar",
                            up: "fa fa-arrow-up",
                            down: "fa fa-arrow-down"
                        },
                }).on('dp.show', function() {
                if($(this).data("DateTimePicker").date() === null)
                    $(this).data("DateTimePicker").date(moment());
            });
        });
        </script>