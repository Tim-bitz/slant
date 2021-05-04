</main>

<footer id="footer">
    
    <div class="footerOne">
        <div>
        <?php //hämtar widget "footerleft" till footer
            dynamic_sidebar('footerleft');
        ?>
        </div>

        <br>
        
        <div>
        <?php //hämtar widget "footercenter"
            dynamic_sidebar('footercenter');
        ?>
        </div>
        
        <br>
        
        <div>
        <?php //hämtar widget "footerright"
            dynamic_sidebar('footerright');
        ?>

    </div>

</footer>

</div> <!-- .flex-wrapper -->

<?php wp_footer(); ?>

</body>

</html>