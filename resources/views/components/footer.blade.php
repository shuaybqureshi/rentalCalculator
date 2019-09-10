<div class="wrapper-calc-terms">
    <div class="container calc-terms">
    <p class="calc-terms-text">
    The calculators found on BiggerPockets are designed to be used for informational and educational purposes only, and when used alone, do not constitute investment advice. BiggerPockets recommends that you seek the advice of a real estate professional before making any type of investment. The results presented may not reflect the actual return of your own investments. BiggerPockets is not responsible for the consequences of any decisions or actions taken in reliance upon or as a result of the information provided by these tools. Furthermore, BiggerPockets is not responsible for any human or mechanical errors or omissions.
    </p>
  </div>
</div>
  <footer id="sticky-footer" class="py-4 bg-dark text-white-50">
    <div class="container text-center">
      <small>Copyright &copy;Pineapple Tools</small>
    </div>
  </footer>
  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/clean-blog.min.js"></script>

    <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <script>
        //pie
        var ctxP = document.getElementById("pieChart").getContext('2d');
        var myPieChart = new Chart(ctxP, {
            type: 'pie',
            data: {
                labels: ["Red", "Green", "Yellow", "Grey", "Dark Grey"],
                datasets: [{
                    data: [300, 50, 100, 40, 120],
                    backgroundColor: ["#F7464A", "#46BFBD", "#FDB45C", "#949FB1", "#4D5360"],
                    hoverBackgroundColor: ["#FF5A5E", "#5AD3D1", "#FFC870", "#A8B3C5", "#616774"]
                }]
            },
            options: {
                responsive: true
            }
        });
        $(document).ready(function(){
  $("#given-data").click(function(){
    $(".given-data-wrapper").hide();
  });
  $("#show").click(function(){
    $("p").show();
  });
});
    </script>
</body>