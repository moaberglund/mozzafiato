<?php ?>
<footer>
      <div class="top-footer">
        <div class="wrapper grid-3">
          <div>
            <h2>Contact</h2>
            <p>Phone: <a href="tel:+39123456789">+39 123 456 789</a></p>
            <p>
              Email:
              <a href="mailto:info@mozzafiato.com">info@mozzafiato.com</a>
            </p>
            <p>Via Tre Terre 15, 123 45, Como Italy</p>
          </div>
          <div>
            <img src="<?= get_template_directory_uri();?>/media/icons/transparent_logotype.png" alt="logotype" />
          </div>
          <div>
            <h2>Check-in hours</h2>
            <p>Monday - Friday: 15:00 - 22:00</p>
            <p>Saturday - Sunday: 15:00 - 23:00</p>
            <p class="small">
              *Please talk with us in advance if you will arrive outside of
              these times.
            </p>
          </div>
        </div>
      </div>

      <div class="bottom-footer">
        <p>&copy; Moa Berglund, 2025</p>
      </div>
    </footer>
    <!-- js -->
    <script src="<?= get_template_directory_uri();?>/js/navigation.js"></script>
<?php wp_footer(); ?>

</body>

</html>