<?php
/**The template for displaying the footer */
?>
</div>
</div>
</div>
<?php wp_footer(); ?>
<script type="text/javascript">
$(document).ready(function() {
    $(".btn-menu").click(function() {
        $(".hidden-menu").show();
        $(".menu-mob").show();
    });
});

$(".menu-mob").click(function() {
    $("ul.hidden-menu").hide();
    $(".menu-mob").hide();
});
</script>
</body>

</html>