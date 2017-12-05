/**
 * Created by coolk_000 on 12/2/2017.
 */
$(function() {
    $('.makeComplited').click(

        function () {

            var orderId = $(this).data('id');
            var dataForJSON = {"action":"isCompleted", "orderId": orderId};
            $.ajax({
            type: "POST",
            url: "/apanel/ajax/orderActions.ajax.php",
            data: {data:dataForJSON},

            success: function (data) {
                console.log('Server response: ');
                console.log(data);
            },
            error: function(xhr, status, error){
                console.log('Smh wrong');
                console.log(error);
                console.log(status);
            }
        });
        }
    );

})