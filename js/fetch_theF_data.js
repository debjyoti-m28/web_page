$(document).ready(function () {
    $(function () {
        function payment_stat_modal(text) {
            $(".ptmModal").html(text)
            $('.ptmModal').addClass('ptmModal_dis');
            setTimeout(function () {
                $('.ptmModal').removeClass('ptmModal_dis');
            }, 2000);
        }

        $('form').on('submit', function (e) {
            e.preventDefault();
            var form_name = $(this).attr("form_name");

            if (form_name == undefined) {
                $.ajax({
                    type: 'post',
                    url: './mailCollector.php',
                    data: $('form').serialize()
                }).done(function (response) {
                    console.log(response);
                    $('form').trigger('reset');
                });
            } else {
                // var status = "";

                // if (form_name == "script_form") {
                //     var price = 699;
                // } else if (form_name == "edit_form") {
                //     var price = 999;
                // } else {
                //     var price = 4999;
                // }

                if (form_name == "script_form") {
                    var red = "https://vishalt53.stores.instamojo.com/product/2686811/write-me-a-script/";
                } else if (form_name == "edit_form") {
                    var red = "https://vishalt53.stores.instamojo.com/product/2686840/edit-my-video/";
                } else {
                    var red = "https://vishalt53.stores.instamojo.com/product/2686852/lets-shoot/";
                }

                function closeForm() {
                    $("html, body").removeClass("noscroll");
                    $(".Form_container").css("display", "none");
                    $(".main_form").css("display", "none");
                }

                // function call_AjaxPhp() {
                $.ajax({
                    type: 'post',
                    url: './' + form_name + '.php',
                    data: $('[form_name=' + form_name + ']').serialize()
                    // data: $('[form_name=' + form_name + ']').serialize() + '&' + $.param({
                    //     "payment_status": status
                    // }, true),
                }).done(function (response) {
                    // var res = jQuery.parseJSON(response);
                    console.log(response);
                    // if (res.payment_status == "Successful") {
                    //     payment_stat_modal("<div>Payment Successful</div><i class='fal fa-check-circle' style='color:#00ff6e'></i>");
                    // } else {
                    //     payment_stat_modal("<div>Payment Failed</div><i class='fal fa-exclamation-triangle' style='color:#ff0000'></i>");
                    // }
                    // console.log(res.mail);
                    // console.log(res.payment_status);
                    $('[form_name=' + form_name + ']').trigger('reset');
                    window.location = red;
                    closeForm();
                });
                // }

                // // Order ID generator (!important id isn't active in razorpay)
                // var generate_order_id = () => {
                //     var result_ch = []
                //     var result_num = [];
                //     var characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
                //     var num_ch = '0123456789';
                //     for (var i = 0; i < 10; i++) {
                //         result_ch.push(characters.charAt(Math.floor(Math.random() * characters.length)));
                //     }
                //     for (var i = 0; i < 4; i++) {
                //         result_num.push(num_ch.charAt(Math.floor(Math.random() * num_ch.length)));
                //     }
                //     var ch_string = result_ch.join('');
                //     var ch_num = result_num.join("");

                //     return (ch_string + '_' + ch_num);
                // };

                // var order_key = generate_order_id();

                // var options = {
                //     "key": 'rzp_test_hN7ye7IXUgfj7x', // Enter the Key ID generated from the Dashboard
                //     "amount": (price * 100), // Amount is in currency subunits. Default currency is INR. Hence, 50000 refers to 50000 paise (500 rs => 50000 paisa)
                //     "currency": "INR",
                //     "name": "Open Studios",
                //     // "description": "Test Transaction",
                //     // "image": "https://lh3.googleusercontent.com/Tqie0m7beVkfM_fYper6JLqrwvYumd6Xz_dFU--IaD68uNduY7HVeoS9uAP0NB2M9n7_rHsYGIoeeA2trH03WQFIqTgky9tSXPaQlehpB3HpbuOURVXyCOZRZ2khkJM60IlHqh-3jBYoLi3gMxIOKm00o4D4wDTjrF1wkjCihIR235BAO4kCgFH5nxcCcB2U_xIjgKOH2TisLoYVsMdXzyER7jU4u87rn2CVFeR0OfFNcWA7g-kGUd5UIJmLGy5d-hWh64nxBjF9EqRZ1y9SG67xDL6TnrTcCBWAZGHFOK0gcqOxg_jiXfiZSGugZIvpy6t8H-rPDBrnCedimaRRlilOJqbd0G5XX01fji1nxzjW2u9ZLrfTTDv9_UgJ7IlKp5foaosGsANrMBvoZHiFyJzt6Njr5LNuQOMdS5JmirQsmQbs-0qj6-BVWLU-NUDXkhXJIW-ES5qTiSscFySLDipmGaRF2B6OXWyy-_Sf5CpbZiFolPXhU3MkQNXNmRkwdfig5Fnbyiq1RgR0HThqbNBY-ZE9jBcloNacG92QENcfYV-ndQ6mICq_zQZb5lxqadIg1tnYb0NVMW4_snvynDbG4OECvdIMgX_qBQf-cTOmVvxIc4X7-Q2-14Wi2Ol-W1f8CBnrk5K7zvO8NRNiCg7q7ttFSrRUox4FtI0JJnhRvoTMRcMtk0ZZQkCj7CZE1pkQyeiaML6plLSOPQxaNLsh=w1260-h663-no?authuser=0",
                //     // "order_id": order_key, //This is a sample Order ID. Pass the `id` obtained in the response of Step 1
                //     // "callback_url": "http://192.168.0.109/all_projects/mini_site_addons/confirmation_page.php",
                //     // "prefill": {
                //     //     "name": (first_name + " " + last_name),
                //     //     "email": (email),
                //     //     "contact": (91 + phone_n)
                //     // },
                //     // "notes": {
                //     //     "address": (address)
                //     // },
                //     "theme": {
                //         "color": "#0178FF",
                //         "backdrop_color": "#00182beb"
                //     },
                //     handler: function (response) {
                //         if (typeof response.razorpay_payment_id == 'undefined' || response.razorpay_payment_id < 1) {
                //             status = "Failed";
                //             call_AjaxPhp();
                //         } else {
                //             status = "Successful";
                //             call_AjaxPhp();
                //         }
                //     },
                //     "modal": {
                //         "ondismiss": function () {
                //             status = "failure";
                //             call_AjaxPhp();
                //         }
                //     }
                // };
                // var rzp1 = new Razorpay(options);
                // rzp1.open();
                // e.preventDefault();

            }
        });

    });
});