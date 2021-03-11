<!DOCTYPE html>
<!-- saved from url=(0053)https://getbootstrap.com/docs/4.3/examples/jumbotron/ -->
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <title>American College of Emergency Physicians Insurance Benefits</title>

  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">

  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }
  </style>
  <!-- Custom styles for this template -->
  <link href="css/jumbotron.css" rel="stylesheet">


  <!-- Custom styles for ACEP -->
  <link href="css/styles.css" rel="stylesheet">


  <!-- Google Tag Manager -->
  <script>
    (function (w, d, s, l, i) {
      w[l] = w[l] || [];
      w[l].push({
        'gtm.start': new Date().getTime(),
        event: 'gtm.js'
      });
      var f = d.getElementsByTagName(s)[0],
        j = d.createElement(s),
        dl = l != 'dataLayer' ? '&l=' + l : '';
      j.async = true;
      j.src =
        'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
      f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-NQPGNBX');
  </script>
  <!-- End Google Tag Manager -->

</head>

<body>
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NQPGNBX" height="0" width="0"
      style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->

  <div w3-include-html="includes/nav.htm"></div>

  <main role="main">

    <div w3-include-html="includes/jumbotron.htm"></div>

    <a id="coverages"></a>

    <div class="container-fluid banner text-center mb-3">
      <h2>Insurance Coverage for ACEP Members</h2>
    </div>

    <div class="container coverages">
      <div class="text-center">
        <p>Choose a coverage below to view costs, features, eligibility, renewability, limitations and exclusions.</p>
      </div>
      <div class="row">
        <div class="col-lg">
          <div class="h2">
            <div>Group Disability Income Insurance</div>
          </div>
          <p>Add to your disability coverage with up to $10,000 in monthly benefits, paid straight to you and typically
            tax-free,<sup>*</sup> if a covered disability prevents you from working full time in your chosen profession.</p>
          <a class="btn btn-outline-light" href="https://coveragedetails.net/acep/di" role="button" target="_blank">View
            details</a>
        </div>
        <div class="col-lg">
          <div class="h2">
            <div>Group Term Life Insurance</div>
          </div>
          <p>Financial protection for your loved ones that lets you choose the monthly premium you want to
            pay.</p>
          <a class="btn btn-outline-light" href="https://www.coveragedetails.net/acep/life" role="button" target="_blank">View
            details</a>
        </div>
        <div class="col-lg">
          <div class="h2">
            <div>Additional Insurance</div>
          </div>
          <p>Information about Professional Liability Insurance, Dental and Vision Insurance, Long-Term Care Insurance
            and Group Home and Auto Insurance for
            ACEP members.</p>
          <a class="btn btn-outline-light" href="additional.htm" role="button">View details</a>
        </div>
        <div class="col-lg">
          <div class="h2">
            <div>Pet Insurance</div>
          </div>
          <p>Save up to 10% on ASPCA Pet Health Insurance! Complete Coverage<sup>SM</sup> can help you give your pet the best care possible with less worry about the cost.</p>
          <a class="btn btn-outline-light" href="https://www.aspcapetinsurance.com/ACEP" role="button">View details</a>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <p class="footnote">
            <sup>*</sup> Insurance coverage purchased with your own funds is generally not taxable under current tax regulations. You may wish to consult a personal Tax Advisor for further information
          </p>
        </div>
      </div>
    </div> <!-- /container -->

  </main>

  <div w3-include-html="includes/footer.htm"></div>

  <!-- <script src="scripts/jquery-3.3.1.slim.min.js"></script> -->
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
  <script src="scripts/bootstrap.bundle.min.js"></script>
  <script src="scripts/includeHTML.js"></script>
  <script>
    includeHTML();
  </script>
  <script>
    setTimeout(function () {

      $(document).ready(function () {
        // Add smooth scrolling to all links
        $("a").on('click', function (event) {
          console.log('click');
          // Make sure this.hash has a value before overriding default behavior
          if (this.hash !== "") {
            // Prevent default anchor click behavior
            event.preventDefault();

            // Store hash
            var hash = this.hash;

            // Using jQuery's animate() method to add smooth page scroll
            // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
            $('html, body').animate({
              scrollTop: $(hash).offset().top
            }, 800, function () {

              // Add hash (#) to URL when done scrolling (default click behavior)
              window.location.hash = hash;
            });
          } // End if
        });
      });


    }, 1000);
  </script>
</body>

</html>
