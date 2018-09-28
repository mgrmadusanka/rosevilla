<?php
/**
* The header footer file 
*
* @package rosevilla
*/
?>

<footer class="pageFooter">
    <div class="footerWidgetArea">
        <?php dynamic_sidebar('rosevilla-footer'); ?>
    </div>

    <div class="footerCredit">
        <p>&copy;&nbsp;<?php bloginfo('name'); ?>&nbsp;<?php echo date('Y'); ?> | Roshan Madusanka</p>
    </div>
</footer>

<a href="<?php bloginfo('url'); ?>/#top" id="scrollTopBtn">
    <i class="fas fa-chevron-up"></i>
</a>

<?php wp_footer(); ?>

<?php if(is_front_page()): ?>
    <script>
    // Initialize and add the map
    function initMap() {
    // The location of Dikwella
    var rosevilla = {lat: 5.964164, lng: 80.689502};
    // The map, centered at rosevilla
    var map = new google.maps.Map(
        document.getElementById('googleMaps'), {zoom: 8, center: rosevilla});
    // The marker, positioned at Dikwella
    var marker = new google.maps.Marker({position: rosevilla, map: map});
    }
    </script>
    <!--Load the API from the specified URL
    * The async attribute allows the browser to render the page while the API loads
    * The key parameter will contain your own API key (which is not needed for this tutorial)
    * The callback parameter executes the initMap() function
    -->
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAZl7jLvSByVM5c_NVSWM9PF-rZo5WZoUg&callback=initMap">
    </script>
<?php endif; ?>

</body>
</html>