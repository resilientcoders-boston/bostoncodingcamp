<?php include_once("includes/head.php") ?>
<?php /* include_once("includes/nav.php") */ ?>

  <!-- Hero Section -->
  <div id="hero_container">
    <h1>Boston Coding Camp 2015</h1>
    <div id="partnerlogos">
      <a href="http://typp.org" target="_blank" title="The Young People's Project">
        <img src="/img/ypp.png" alt="The Young People's Project"/>
      </a>
      <a href="http://resilientcoders.org" target="_blank" title="Resilient Coders">
        <img src="/img/resilient_white.png" alt="Resilient Coders" />
      </a>
    </div>
  </div>

  <div id="intro_container">
    <div id="intro_img" class="img"></div>
    <div id="intro_copy">
      <h2>#BOSCodingCamp</h2>

      <p>
        <?php
        date_default_timezone_set('UTC');
        echo date('m\/d\/Y');
        ?>
        This Spring Break, 25 young people from underserved communities will learn to code,
        at the Microsoft NERD Center. Introducing Boston Coding Camp, a joint initiative of
        <a href="http://typp.org" target="_blank" title="The Young People's Project">The Young People's Project</a>
        and <a href="http://resilientcoders.org" target="_blank" title="Resilient Coders">Resilient Coders.</a>
      </p>
    </div>

  </div>
  <div class="clear"></div>

  <!-- Content Section -->
  <div id="content_container">
    <h2> How It works </h2>

      <div id="img_container">
        <div id="lightbulb">
          <h3>The Sprint</h3>
          <p>
            Students will be taught by tech professionals, and coached along by their peers,
            as they spend a week building their own websites. During that time, they’ll learn
            HTML/CSS, pick up Agile/Lean practices. And they’ll meet local tech
            entrepreneurs and authors.<br /><br />
            Interested in mentoring? Read <a href="https://delmarsenties.s3.amazonaws.com/resilient/codingcamp/bcc_mentor.pdf" title="Boston Coding Camp Mentorship" target="_blank">this short PDF</a>
            and reach out to David at <a href="mailto:david@resilientcoders.org" target="_blank">david@resilientcoders.org</a> to get involved.
          </p>
        </div>

        <div id="to">
          <img src="/img/to.png" />
        </div>

        <div id="microphone">
          <h3>Demo Day</h3>
          <p>
            Join us on Friday, April 24th, at 1pm, at the Microsoft NERD Center, to meet
            the students and see them present their work. Each presentation will end
            with "Next Steps," during which the student will talk about what they want to
            do next with their websites.
          </p>
        </div>

      </div>
      <div class="clear"></div>

    </div>


    <div id="footerphoto"></div>
    <div id="footerphotocredits">
      <h2>Brand and website proudly designed and built by <a href="http://resilientcoders.org/lab" title="Resilient Lab" target="_blank">Resilient Lab</a></h2>
    </div>

    <div id="sponsors">
      <p>Boston Coding Camp is made possible by our sponsors:</p>
      <a href="http://microsoft.com" title="Microsoft" target="_blank">
        <img src="/img/microsoftLogo.jpeg" style="padding-top:12px;" />
      </a>
    </div>

    <?php include_once("includes/footer.php") ?>
