    <footer id="#footer">
      <div class="container">
        <div id="ribbonRow">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/contactRibbon.png" id="contactRibbon"/>
        </div>
        <div id="contactBlurb">
          <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam faucibus lectus id mi porta finibus. Ut rutrum commodo eros malesuada interdum. Nullam ut imperdiet.</span>
        </div>
        <div id="contactForm">
          <form>
            <div class="form-group">
              <label for="name">Your Name</label>
              <input type="name" class="form-control" id="name" placeholder="Name" />
            </div>
            <div class="form-group">
              <label for="email">Email Address</label>
              <input type="email" class="form-control" id="email" placeholder="Email" />
            </div>
            <div class="form-group">
              <label for="message">Your Message</label>
              <textarea class="form-control" id="message" rows="5" placeholder="Message"></textarea>
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
          </form>
        </div>

      </div>
      <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/woodBot.png" id="woodBot"/>
    </footer>
    <?php wp_footer(); ?>
  </body>
</html>
