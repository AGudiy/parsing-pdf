<script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function() {
        'use strict';

        window.addEventListener('load', function() {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName('needs-validation');

            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script>
    $('input[type="checkbox"').click(function () {
        event.stopPropagation();
        var colors = $('input[type="checkbox"]:checked').length;
        if(colors > 2) return false;
    })
</script>
<script>
    $('input.single-checkbox').parent('span').click(function () {
        var $chb = $(this).children('input.single-checkbox');
        if($chb.is(':checked')){
            $chb.prop('checked', false);
        }else{
            var colors = $('input[type="checkbox"]:checked').length;
            if(colors >= 2) {
                return false;
            }else{
                $chb.prop('checked', true);
            }
        }
    })
</script>
</body>
</html>