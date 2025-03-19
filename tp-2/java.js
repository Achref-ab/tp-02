$(document).ready(function(){
    $('#bmiForm').submit(function(e){
        e.preventDefault(); 

        var name = $('#name').val().trim();
        var weight = parseFloat($('#weight').val());
        var height = parseFloat($('#height').val());

        if (name === "" || isNaN(weight) || isNaN(height) || weight <= 0 || height <= 0) {
            $('#result').html('<div class="alert alert-warning">Please enter valid values in all fields.</div>');
            return;
        }

        $.ajax({
            url: 'calculate.php',
            type: 'POST',
            data: { name: name, weight: weight, height: height },
            dataType: 'json',
            success: function(response) {
                var alertClass = response.bmi < 18.5 ? 'alert-warning' : 
                                response.bmi < 25 ? 'alert-success' : 
                                response.bmi < 30 ? 'alert-info' : 'alert-danger';

                $('#result').html('<div class="alert ' + alertClass + '">' + response.message + '</div>');
            },
            error: function() {
                $('#result').html('<div class="alert alert-danger">Server error occurred.</div>');
            }
        });
    });
});