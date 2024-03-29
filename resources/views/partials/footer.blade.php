<footer class="site-footer">
    <div class="container">


        <div class="row">
            <div class="col-md-4">
                <h3 class="footer-heading mb-4 text-white">MIBY.</h3>
                <p>MIBY est le premier RIS (Recruiting Intelligent Software) qui regroupe l'ensemble des outils
                    nécessaires pour gérer vos recrutements de A à Z.</p>
                <p><a href="#" class="btn btn-info pill text-white px-4">Read More</a></p>
            </div>
        </div>

        <div class="row pt-1 mt-1 text-center">
            <div class="col-md-12">
                <p>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Réalisé Par : | ETTAFSSAOUI YOUSSEF | SAFIAEDDINE HAJAR | AGUENCHICH ABDELAZIZ |
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </p>

                <p>© Copyright 2021 MIBY. All rights reserved.</p>
            </div>

        </div>
    </div>
</footer>
</div>

<script src="{{ asset('external/js/jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset('external/js/jquery-migrate-3.0.1.min.js') }}"></script>
<script src="{{ asset('external/js/jquery-ui.js') }}"></script>
<script src="{{ asset('external/js/popper.min.js') }}"></script>
<script src="{{ asset('external/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('external/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('external/js/jquery.stellar.min.js') }}"></script>
<script src="{{ asset('external/js/jquery.countdown.min.js') }}"></script>
<script src="{{ asset('external/js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('external/js/bootstrap-datepicker.min.js') }}"></script>
<script src="{{ asset('external/js/aos.js') }}"></script>


<script src="{{ asset('external/js/mediaelement-and-player.min.js') }}"></script>

<script src="{{ asset('external/js/main.js') }}"></script>



<script>
    $(function() {
        $("#datepicker").datepicker();
    });
</script>


<script>
    document.addEventListener('DOMContentLoaded', function() {
        var mediaElements = document.querySelectorAll('video, audio'),
            total = mediaElements.length;

        for (var i = 0; i < total; i++) {
            new MediaElementPlayer(mediaElements[i], {
                pluginPath: 'https://cdn.jsdelivr.net/npm/mediaelement@4.2.7/build/',
                shimScriptAccess: 'always',
                success: function() {
                    var target = document.body.querySelectorAll('.player'),
                        targetTotal = target.length;
                    for (var j = 0; j < targetTotal; j++) {
                        target[j].style.visibility = 'visible';
                    }
                }
            });
        }
    });
</script>


<script>
    // This example displays an address form, using the autocomplete feature
    // of the Google Places API to help users fill in the information.

    // This example requires the Places library. Include the libraries=places
    // parameter when you first load the API. For example:
    // <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">

    var placeSearch, autocomplete;
    var componentForm = {
        street_number: 'short_name',
        route: 'long_name',
        locality: 'long_name',
        administrative_area_level_1: 'short_name',
        country: 'long_name',
        postal_code: 'short_name'
    };

    function initAutocomplete() {
        // Create the autocomplete object, restricting the search to geographical
        // location types.
        autocomplete = new google.maps.places.Autocomplete(
            /** @type {!HTMLInputElement} */
            (document.getElementById('autocomplete')), {
                types: ['geocode']
            });

        // When the user selects an address from the dropdown, populate the address
        // fields in the form.
        autocomplete.addListener('place_changed', fillInAddress);
    }

    function fillInAddress() {
        // Get the place details from the autocomplete object.
        var place = autocomplete.getPlace();

        for (var component in componentForm) {
            document.getElementById(component).value = '';
            document.getElementById(component).disabled = false;
        }

        // Get each component of the address from the place details
        // and fill the corresponding field on the form.
        for (var i = 0; i < place.address_components.length; i++) {
            var addressType = place.address_components[i].types[0];
            if (componentForm[addressType]) {
                var val = place.address_components[i][componentForm[addressType]];
                document.getElementById(addressType).value = val;
            }
        }
    }

    // Bias the autocomplete object to the user's geographical location,
    // as supplied by the browser's 'navigator.geolocation' object.
    function geolocate() {
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(function(position) {
                var geolocation = {
                    lat: position.coords.latitude,
                    lng: position.coords.longitude
                };
                var circle = new google.maps.Circle({
                    center: geolocation,
                    radius: position.coords.accuracy
                });
                autocomplete.setBounds(circle.getBounds());
            });
        }
    }
</script>

<script
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&libraries=places&callback=initAutocomplete"
    async defer></script>

<script type="text/javascript"
    src="https://cdnjs.cloudflare.com/ajax/libs/fontawesome-iconpicker/3.2.0/js/fontawesome-iconpicker.min.js"></script>

<link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
